<?php
/*Template Name: ページ */
?>
<?php get_header(); ?>

<div class="c-herohead">
	<h1 class="c-herohead__heading"><?php the_title(); ?></h1>
</div>

<main class="page-main">
<div class="contents-wrap">
    <?php get_template_part('inc/breadcrumb'); ?>
    <?php while (have_posts() ) : the_post(); ?>
        <?php the_content(); ?>
    <?php endwhile;?>
</div>
</main>

<?php get_footer(); ?>