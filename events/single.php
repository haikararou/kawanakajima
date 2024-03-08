<?php
/**
 * 記事ページのテンプレート
 */
get_header(); ?>

<div class="c-herohead">
	<h1 class="c-herohead__heading"><span><?php echo esc_html(get_post_type_object(get_post_type())->label); ?></span><?php the_title(); ?></h1>
	<date><span>実施期間：</span><?php the_field('event-date'); ?></date>
</div>


<section class="c-section">
	<article class="c-article c-single p-tour__post">

		<div class="c-single__body">
			<div class="c-single__block">
				<?php if (has_post_thumbnail()) : ?><?php the_post_thumbnail('full'); ?><?php else: ?><img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/noimage.png" alt="該当画像はありません"><?php endif; ?>
				<?php the_content(''); ?>
			</div>

			<div class="c-single__detail">
				<dl>
<?php if( have_rows('event_info') ): ?>
<?php while( have_rows('event_info') ): the_row(); ?>
					<div>
						<dt><?php the_sub_field('event_info_head'); ?></dt>
						<dd><?php the_sub_field('event_info_text'); ?></dd>
					</div>
<?php endwhile; ?>
<?php endif; ?>
					<div>
						<dt>アクセス</dt>
						<dd><?php if(get_field('event_info_access')): ?><?php the_field('event_info_access'); ?><?php endif; ?>
							<?php if(get_field('event_info_map')): ?><div class="c-map"><iframe src="<?php the_field('event_info_map'); ?>" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe></div><?php endif; ?></dd>
					</div>
				</dl>
			</div>
		</div>
	</article>
	<div class="c-single__back"><a class="c-anchor__back" href="<?php echo home_url('/events'); ?>"><span>イベント情報へ戻る</span></a></div>
</section>

<?php get_footer(); ?>

