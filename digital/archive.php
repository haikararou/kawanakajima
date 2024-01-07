<?php get_header(); ?>

<div class="c-herohead">
	<h1 class="c-herohead__heading"><?php echo esc_html(get_post_type_object(get_post_type())->label); ?></h1>
</div>

<section class="c-section">
	<p class="c-heading__s">長野市立博物館の収蔵品データベースの川中島の戦いに関する文化財と真田宝物館の文化財を元に作成しております。</p>
</section>

<section class="c-section">
	<dl class="c-anchor__list">
		<dt>カテゴリ：</dt>
			<?php $terms = get_terms('digital_cat');
				foreach ( $terms as $term ) {
				echo '<dd><a href="'.get_term_link($term).'">'.$term->name.'</a></dd>';
			} ?>
	</dl>
	<ul class="c-thumb04">
<?php if(have_posts()): while (have_posts()) : the_post(); ?>
		<li><?php if(get_field('digital_link')): ?><a href="<?php the_field('digital_link'); ?>" target="_blank" rel="nofllow"><?php else: ?><a href="<?php the_permalink(); ?>"><?php endif; ?>
			<figure><span><?php if (has_post_thumbnail()) : ?><?php the_post_thumbnail('full'); ?><?php else: ?><img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/noimage.png" alt="該当画像はありません"><?php endif; ?></span>
			<figcaption>
				<h2 class="c-heading__ss"><?php the_title(); ?></h2>
				<?php $terms = get_the_terms($post->ID, 'digital_cat'); if ( $terms ) {
					foreach ( $terms as $term ) {
						echo '<span>'.$term->name.'</span>';
					}
				} ?>
			</figcaption>
		</figure></a></li>
<?php endwhile; endif; ?>
	</ul>
	<div class="wp-pagenavi" role="navigation">
		<?php wp_pagenavi(); ?>
	</div>
</section>


<?php get_footer(); ?>