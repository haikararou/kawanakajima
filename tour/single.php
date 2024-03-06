<?php
/**
 * 記事ページのテンプレート
 */
get_header(); ?>

<div class="c-herohead">
	<h1 class="c-herohead__heading"><?php the_title(); ?></h1>
</div>

<section class="c-section">
	<ul class="c-anchor__list">
<?php $terms = get_the_terms($post->ID,'tour_cat'); foreach( $terms as $term ):
		echo '<li><a href="'.get_term_link($term->slug, 'tour_cat').'">'.$term->name.'</a></li>';
endforeach; ?>
	</ul>

	<article class="c-article c-single p-tour__post">
		<div class="c-single__body">
			<div class="c-single__block -visual"><figure>
				<?php if (has_post_thumbnail()) : ?>
					<?php the_post_thumbnail('full'); ?>
				<?php else: ?><img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/noimage.png" alt="該当画像はありません">
				<?php endif; ?>
				<?php $value = get_post_meta($post->ID, 'tour_caption', true);?>
				<?php if(empty($value)):?>
				<?php else:?>
					<figcaption>
						<p><?php echo post_custom('tour_caption');?></p>
					</figcaption>
				<?php endif;?>

			</figure></div>
			<div class="c-single__block">
				<?php the_content(''); ?>
			</div>

			<div class="c-single__detail">
				<dl>
<?php if( have_rows('tour_info') ): ?>
<?php while( have_rows('tour_info') ): the_row(); ?>
					<div>
						<dt><?php the_sub_field('tour_info_head'); ?></dt>
						<dd><?php the_sub_field('tour_info_text'); ?></dd>
					</div>
<?php endwhile; ?>
<?php endif; ?>
					<div class="-block">
						<dt>アクセス</dt>
						<dd><?php if(get_field('tour_info_access')): ?><?php the_field('tour_info_access'); ?><?php endif; ?>
							<?php if(get_field('tour_info_map')): ?><div class="c-map"><iframe src="<?php the_field('tour_info_map'); ?>" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></div><?php endif; ?>
						</dd>
					</div>
				</dl>
			</div>
		</div>
	</article>

	<?php
	function get_tour_name_kana_row_number($post_id) {
		$tour_name_kana = get_post_meta($post_id, 'tour_name_kana', true);
		if ($tour_name_kana) {
			$first_character = mb_substr($tour_name_kana, 0, 1, 'UTF-8');
			switch ($first_character) {
				case 'あ': case 'い': case 'う': case 'え': case 'お':
					return 1;
				case 'か': case 'き': case 'く': case 'け': case 'こ':
					return 2;
				case 'さ': case 'し': case 'す': case 'せ': case 'そ':
					return 3;
				case 'た': case 'ち': case 'つ': case 'て': case 'と':
					return 4;
				case 'な': case 'に': case 'ぬ': case 'ね': case 'の':
					return 5;
				case 'は': case 'ひ': case 'ふ': case 'へ': case 'ほ':
					return 6;
				case 'ま': case 'み': case 'む': case 'め': case 'も':
					return 7;
				case 'や': case 'ゆ': case 'よ':
					return 8;
				case 'ら': case 'り': case 'る': case 'れ': case 'ろ':
					return 9;
				case 'わ': case 'を':
					return 10;
				default:
					return 0;
			}
		}
		return 0;
	}
	?>
	<?php
	// 投稿ループの開始
	while (have_posts()) {
		the_post();
		$post_id = get_the_ID();
		// カスタムフィールド「tour_name_kana」の値に基づいて数字を取得
		$row_number = get_tour_name_kana_row_number($post_id);
	}
	// 投稿ループの終了
	?>
	<div class="c-single__back"><a class="c-anchor__back" href="<?php echo home_url('/tour'); ?>?active=<?php echo $row_number; ?>"><span>史跡をめぐるへ戻る</span></a></div>
</section>

<?php // 現在表示されている投稿と同じタームに分類された投稿を取得
	$taxonomy_slug = 'tour_cat'; // タクソノミーのスラッグを指定
	$post_type_slug = 'tour'; // 投稿タイプのスラッグを指定
	$post_terms = wp_get_object_terms($post->ID, $taxonomy_slug); // タクソノミーの指定
	$args = array(
		'post_type' => $post_type_slug, // 投稿タイプを指定
		'posts_per_page' => 5, // 表示件数を指定
		'orderby' =>  'rand', // ランダムに投稿を取得
		'post__not_in' => array($post->ID), // 現在の投稿を除外
		'tax_query' => array( // タクソノミーパラメーターを使用
			array(
				'taxonomy' => $taxonomy_slug, // タームを取得タクソノミーを指定
				'field' => 'slug', // スラッグに一致するタームを返す
				'terms' => $post_terms[0] // タームの配列を指定
			)
		)
	);
	$the_query = new WP_Query($args); if($the_query->have_posts()):
?>

<section class="l-mx992 c-related">
	<div class="c-related__head">
		<h3>関係する史跡を見る</h3>
		<a class="c-anchor__btn" href="<?php echo home_url('/tour'); ?>"><span>史跡一覧</span></a>
	</div>
	<div class="c-related__slide">
<?php while ($the_query->have_posts()): $the_query->the_post(); ?>
		<div class="image"><figure><a href="<?php the_permalink(); ?>"><?php if (has_post_thumbnail()) : ?><?php the_post_thumbnail(); ?><?php else: ?><img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/noimage.png" alt="該当画像はありません"><?php endif; ?></a>
			<figcaption>
				<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>

<?php if (!empty($terms)) : ?>
				<ul class="c-related__tag">
<?php $terms = wp_get_object_terms($post->ID, 'tour_cat'); foreach ( $terms as $term ) : ?>
					<li><a class="c-anchor__tag" href="<?php echo esc_url( get_term_link( $term ) ); ?>"><?php echo $term->name; ?></a></li>
<?php endforeach; ?>
				</ul>
<?php endif; ?>
			</figcaption>
		</figure></div>
<?php endwhile; ?>
	</div>
</section>
<?php wp_reset_postdata(); ?>
<?php endif; ?>

<?php get_footer(); ?>

