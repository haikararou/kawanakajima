<?php
	$args = array(
		'posts_per_page' => 4, // 表示する投稿数
		'post_type' => array('tour'), // 取得する投稿タイプのスラッグ
	);
	$my_posts = get_posts($args);
?>

<section class="l-mx992 c-related">
	<div class="c-related__head">
		<h3>関係する史跡を見る</h3>
		<a class="c-anchor__btn" href="<?php echo home_url('/tour'); ?>"><span>史跡一覧</span></a>
	</div>
	<div class="c-related__slide">
<?php foreach ($my_posts as $post) : setup_postdata($post); ?>
<?php $terms = get_the_terms($post->ID, 'tour_cat'); ?>
		<div class="image"><figure><a href="<?php the_permalink(); ?>"><?php if (has_post_thumbnail()) : ?><?php the_post_thumbnail(); ?><?php else: ?><img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/noimage.png" alt="該当画像はありません"><?php endif; ?></a>
			<figcaption>
				<h3><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
<?php if (!empty($terms)) : ?>
				<ul class="c-related__tag">
<?php foreach ( $terms as $term ) : ?>
					<li><a class="c-anchor__tag" href="<?php echo esc_url( get_term_link( $term ) ); ?>"><?php echo $term->name; ?></a></li>
<?php endforeach; ?>
				</ul>
<?php endif; ?>
			</figcaption>
		</figure></div>
<?php endforeach; ?>
	</div>
</section>
<?php wp_reset_postdata(); ?>
