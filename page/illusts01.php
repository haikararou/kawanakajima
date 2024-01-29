<?php
/*Template Name: ー第1次川中島の戦い */
?>
<?php get_header(); ?>

<div class="c-herohead">
	<h1 class="c-herohead__heading"><?php the_title(); ?></h1>
</div>

<section class="c-section">
	<div class="p-illusts__post__kv">
		<img src="<?php echo get_template_directory_uri(); ?>/assets/img/battles/01.jpg" alt="川中島合戦">
	</div>
	<article class="c-article c-single p-illusts__post">
		<div class="c-single__block">
			<?php the_content(''); ?>
		</div>
	</article>
	<div class="c-single__back"><a class="c-anchor__back" href="<?php echo home_url('/illusts'); ?>"><span>川中島の戦い一覧へ戻る</span></a></div>
</section>

<!--?php get_template_part('inc/tour'); ?-->

<div class="c-nav__footnav">
	<!--div class="c-nav__footnav__prev"><a href="<?php echo home_url('/illusts/5th'); ?>"><span><i>第6次川中島の戦い</i></span></a></div-->
	<div class="c-nav__footnav__next"><a href="<?php echo home_url('/illusts/2nd'); ?>"><span><i>第2次川中島の戦い</i></span></a></div>
</div>

<?php get_footer(); ?>
