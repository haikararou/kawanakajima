<?php
/**
 * 記事ページのテンプレート
 */
get_header(); ?>

<div class="c-herohead">
	<h1 class="c-herohead__heading"><!--span>歩いてめぐる</span--><?php the_title(); ?></h1>
	<!--span class="km"><em><?php the_field('walk_km'); ?></em>km</span-->
	<span class="hours"><span>目安時間</span><em><?php the_field('walk_hours'); ?></em>時間</span>
</div>

<section class="c-section">
	<article class="c-article c-single p-tour__post">
		<div class="c-single__body">
			<div class="c-single__block">
				<?php if (has_post_thumbnail()) : ?><?php the_post_thumbnail('full'); ?><?php else: ?><img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/noimage.png" alt="該当画像はありません"><?php endif; ?>
			</div>

<?php if( have_rows('walk_route') ): ?>
			<div class="c-single__root">
				<h2 class="c-heading__m">ルート</h2>
				<ol>
<?php while( have_rows('walk_route') ): the_row(); ?>
					<li><?php the_sub_field('walk_route_li'); ?></li>
<?php endwhile; ?>
				</ol>
			</div>
<?php endif; ?>

<?php if(get_field('walk_map')): ?>
			<div class="c-single__coursemap">
				<h2 class="c-heading__m">コースマップ</h2>
				<div class="c-map"><iframe src="<?php the_field('walk_map'); ?>" width="640" height="480"></iframe></div>
			</div>
<?php endif; ?>


			<div class="c-single__block">
				<h2 class="c-heading__m">みどころ</h2>
				<?php the_content(''); ?>
			</div>

		</div>
	</article>
	<div class="c-single__back"><a class="c-anchor__back" href="<?php echo home_url('/tour#walk'); ?>"><span>史跡をめぐるへ戻る</span></a></div>
</section>

<!--?php get_template_part('inc/tour'); ?-->

<?php get_footer(); ?>

