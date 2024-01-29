<?php
/**
 * 記事ページのテンプレート
 */
get_header(); ?>

<div class="c-herohead">
	<h1 class="c-herohead__heading"><?php echo esc_html(get_post_type_object(get_post_type())->label); ?></h1>
</div>

<nav class="c-nav__local">
	<ul>
<?php $terms = get_terms('character_cat');
		foreach ( $terms as $term ) {
		echo '<li class="c-nav__local__<?php $term_id = get_queried_object_id(); echo $term_id; ?>"><a href="'.get_term_link($term).'">'.$term->name.'</a></li>';
} ?>
	</ul>
</nav>

<section id="<?php global $post; $slug = $post->post_name; ?>" class="c-section p-character__box">
	<div class="c-section__column2">
		<div class="c-section__column2__w28">
			<?php if (has_post_thumbnail()) : ?><?php the_post_thumbnail('full'); ?><?php else: ?><img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/noimage.png" alt="該当画像はありません"><?php endif; ?>
		</div>
		<div class="c-section__column2__w65 p-character__box">
			<h3 class="c-heading__l"><?php the_title(); ?><span><?php if(get_field('character_kana')): ?>（<?php the_field('character_kana'); ?>）<?php endif; ?></span></h3>
			<?php if(get_field('character_lived')): ?><div class="p-character__box__lifetime">［<?php the_field('character_lived'); ?>］</div><?php endif; ?>
			<div class="p-character__box__txt"><?php if(get_field('character_txt')): ?><?php the_field('character_txt'); ?><?php endif; ?></div>
			<div class="p-character__box__body">
				<dl class="c-accordion">
					<?php the_content(''); ?>
				</dl>
			</div>
		</div>
	</div>

	<div class="wp-pagenavi" role="navigation">
		<?php previous_post_link('%link', '前へ'); ?>
		<a class="backtolist" rel="list" area-label="一覧へ戻る"href="<?php echo esc_url( home_url( '/character' ) ); ?>">一覧へ戻る</a>
		<?php next_post_link('%link', '次へ'); ?>
	</div>
</section>

<?php get_footer(); ?>

