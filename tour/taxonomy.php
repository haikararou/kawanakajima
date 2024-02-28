<?php get_header(); ?>

<div class="c-herohead">
	<h1 class="c-herohead__heading"><?php echo esc_html(get_post_type_object(get_post_type())->label); ?></h1>
</div>

<section class="c-section">
	<h2 class="c-heading__m"><?php single_term_title(); ?> 一覧</h2>
	<ul class="c-thumb04 -sp2">
<?php if(have_posts()): while (have_posts()) : the_post(); ?>
		<li><a href="<?php the_permalink(); ?>"><figure><span><?php if (has_post_thumbnail()) : ?><?php the_post_thumbnail(); ?><?php else: ?><img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/noimage.png" alt="該当画像はありません"><?php endif; ?></span>
			<figcaption>
				<h4 class="c-heading__ss"><?php the_title(); ?></h4>
				<?php if(get_field('tour_lead')): ?><p><?php the_field('tour_lead'); ?></p><?php endif; ?>
			</figcaption>
		</figure></a></li>
<?php endwhile; endif; ?>
	</ul>
	<div class="wp-pagenavi" role="navigation">
		<?php wp_pagenavi(); ?>
	</div>
</section>

<?php get_footer(); ?>