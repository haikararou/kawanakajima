<?php
	$args = array(
		'posts_per_page' => 3, // 表示する投稿数
		'post_type' => array('events'), // 取得する投稿タイプのスラッグ
	);
	$my_posts = get_posts($args);
?>
<section class="c-thumb__events">
	<div class="l-wrapper">
		<h2 class="c-heading__l">イベント情報</h2>
		<ul class="c-thumb03">
<?php foreach ($my_posts as $post) : setup_postdata($post); ?>
			<li><a href="<?php the_permalink(); ?>"><figure><?php if (has_post_thumbnail()) : ?><?php the_post_thumbnail(); ?><?php else: ?><img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/noimage.png" alt="該当画像はありません"><?php endif; ?>
				<figcaption>
					<h3><date><?php the_field('event_date'); ?></date><span><?php the_title(); ?></span></h3>
					<?php if(get_field('event_lead')): ?><p><?php the_field('event_lead'); ?></p><?php endif; ?>
				</figcaption>
			</figure></a></li>
<?php endforeach; ?>
		</ul>
		<aside><a class="c-anchor__btn" href="<?php echo home_url('/events'); ?>"><span>もっと見る</span></a></aside>
	</div>
</section>
<?php wp_reset_postdata(); ?>
