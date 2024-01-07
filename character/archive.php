<?php get_header(); ?>

<div class="c-herohead">
	<h1 class="c-herohead__heading"><?php echo esc_html(get_post_type_object(get_post_type())->label); ?></h1>
</div>

<?php
$tax_name = 'character_cat';
$terms = get_terms( $tax_name, array('parent' => 0));
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

<nav class="c-nav__anchor">
	<ul>
<?php if(have_posts()): while (have_posts()) : the_post(); ?>
		<li><a href="#<?php $page = get_page(get_the_ID()); $slug = $page->post_name; echo $slug; ?>"><?php the_title(); ?></a></li>
<?php endwhile; endif; ?>
	</ul>
</nav>

<?php if(have_posts()): while (have_posts()) : the_post(); ?>
<section id="<?php $slug = $post->post_name; echo $slug; ?>" class="c-section p-character__box">
	<div class="c-section__column2">
		<div class="c-section__column2__w28">
			<?php if (has_post_thumbnail()) : ?><?php the_post_thumbnail('full'); ?><?php else: ?><img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/noimage.png" alt="該当画像はありません"><?php endif; ?>
		</div>
		<div class="c-section__column2__w65 p-character__box">
			<h3 class="c-heading__l"><?php the_title(); ?><span><?php if(get_field('character_kana')): ?>（<?php the_field('character_kana'); ?>）<?php endif; ?></span></h3>
			<div class="p-character__box__lifetime"><?php if(get_field('character_lived')): ?>［<?php the_field('character_lived'); ?>］<?php endif; ?></div>
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