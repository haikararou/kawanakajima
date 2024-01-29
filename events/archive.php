<?php get_header(); ?>

<div class="c-herohead">
	<h1 class="c-herohead__heading"><?php echo esc_html(get_post_type_object(get_post_type())->label); ?></h1>
</div>

<section class="c-section c-thumb__events">
	<ul class="c-thumb03">
<?php if(have_posts()): while (have_posts()) : the_post(); ?>
		<li><a href="<?php the_permalink(); ?>"><figure><?php if (has_post_thumbnail()) : ?><?php the_post_thumbnail('full'); ?><?php else: ?><img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/noimage.png" alt="該当画像はありません"><?php endif; ?>
			<figcaption>
				<h3><date><?php the_field('event_date'); ?></date><span><?php the_title(); ?></span></h3>
				<?php if(get_field('event_lead')): ?><p><?php the_field('event_lead'); ?></p><?php endif; ?>
			</figcaption>
		</figure></a></li>
<?php endwhile; endif; ?>
	</ul>
</section>
<section class="c-section">
	<div class="wp-pagenavi" role="navigation">
		<?php wp_pagenavi(); ?>
	</div>
</section>

<?php get_footer(); ?>