<?php get_header(); ?>

<div class="c-herohead">
	<h1 class="c-herohead__heading"><?php echo esc_html(get_post_type_object(get_post_type())->label); ?></h1>
</div>

<?php
$tax_name = 'character_cat';
$terms = get_terms( $tax_name, array('parent' => 0));
$post_count = -1;
?>
<nav class="c-nav__local">
	<ul>
<?php foreach($terms as $term): ?>
<?php if($term->parent == 0): ?>
		<li class="c-nav__local__<?php echo $term->slug ?>"><a href="<?php echo get_term_link($term->slug, $tax_name) ?>"><?php echo $term->name ?></a></li>
<?php endif; ?>
<?php endforeach; ?>
	</ul>
</nav>

<?php
$terms = get_terms('character_cat', 'hide_empty=0&parent=' . get_queried_object_id()); // タクソノミー・現在のタームIDを指定
foreach ($terms as $term) : //登録されてる子タームを全て出力
?>
<nav class="c-nav__anchor -child">
	<h2 class="c-heading__s"><?php echo  $term->name; ?></h2>
	<p><?php echo $term->description; ?></p><br>
<?php
	$args = array(
		'post_type' => 'character', //投稿タイプを指定
		'posts_per_page' => '-1', //表示件数
		'post_status' => 'publish',
		'tax_query' => array(
			'relation' => 'OR',
			array(
				'taxonomy' => 'character_cat', //タクソノミー名を指定
				'field' => 'slug',
				'terms' => $term->slug,
			),
		),
	);
	$the_query = new WP_Query($args); ?>
<?php if ($the_query->have_posts()) : ?>
	<ul>
	<?php while ($the_query->have_posts()) : $the_query->the_post(); ?>
		<li><a href="#<?php $page = get_page(get_the_ID()); $slug = $page->post_name; echo $slug; ?>"><?php the_title(); ?></a></li>
	<?php endwhile; ?>
	</ul>
<?php endif; ?>
</nav>
<?php endforeach; ?>


<nav class="c-nav__anchor">
	<ul>
<?php
$current_term = get_queried_object();

// 親タームの場合は親タームのIDを、子タームの場合はその親タームのIDを取得
$parent_term_id = ($current_term->parent != 0) ? $current_term->parent : $current_term->term_id;

// クエリを準備
$args = array(
    'post_type' => 'character', // 取得する投稿タイプ
    'tax_query' => array(
        array(
            'taxonomy' => $current_term->taxonomy, // 現在のタームが属するタクソノミー
            'field' => 'term_id',
            'terms' => $parent_term_id, // 親タームのID
            'include_children' => false // 子タームを除外
        )
    )
);

// クエリを実行
$posts_query = new WP_Query($args);
; ?>

<?php $posts = query_posts( $query_string . '&order=asc&posts_per_page=-1' ); ?>
<?php if(have_posts()): while (have_posts()) : the_post(); ?>
		<li><a href="#<?php $page = get_page(get_the_ID()); $slug = $page->post_name; echo $slug; ?>"><?php the_title(); ?></a></li>
<?php endwhile; endif; ?>
	</ul>
</nav>

<?php $posts = query_posts( $query_string . '&order=asc' ); ?>
<?php if(have_posts()): while (have_posts()) : the_post(); ?>
<section id="<?php $slug = $post->post_name; echo $slug; ?>" class="c-section p-character__box">
	<div class="c-section__column2">
		<div class="c-section__column2__w28">
			<?php if (has_post_thumbnail()) : ?><?php the_post_thumbnail('full'); ?><?php else: ?><img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/noimage.png" alt="該当画像はありません"><?php endif; ?>
		</div>
		<div class="c-section__column2__w65 p-character__box">
			<h3 class="c-heading__l"><?php the_title(); ?><span><?php if(get_field('character_kana')): ?>（<?php the_field('character_kana'); ?>）<?php endif; ?></span></h3>
			<?php if(get_field('character_lived')): ?><div class="p-character__box__lifetime">［<?php the_field('character_lived'); ?>］</div><?php endif; ?>
			<?php if(get_field('character_txt')): ?><div class="p-character__box__txt"><?php the_field('character_txt'); ?></div><?php endif; ?>
			<div class="p-character__box__body">
				<dl class="c-accordion">
					<?php the_content(''); ?>
				</dl>
			</div>
		</div>
	</div>
</section>
<?php endwhile; endif; ?>

<?php get_footer(); ?>