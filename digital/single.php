<?php
/**
 * 記事ページのテンプレート
 */
get_header(); ?>

<div class="c-herohead">
	<h1 class="c-herohead__heading"><?php echo esc_html(get_post_type_object(get_post_type())->label); ?></h1>
</div>

<section class="c-section">
	<article class="c-article p-digital__post">
		<div class="p-digital__post__text">
			<h2 class="c-heading__l"><?php the_title(); ?></h2>
			<div class="p-digital__post__cat"><span>分類：</span>
<?php $terms = get_the_terms($post->ID,'digital_cat'); foreach( $terms as $term ):
				echo '<a href="'.get_term_link($term->slug, 'digital_cat').'">'.$term->name.'</a>';
endforeach; ?>
			</div>
			<div class="p-digital__post__body">
				<?php the_content(''); ?>
			</div>
			<div class="p-digital__post__note">
				<?php the_field('digital_note'); ?>
			</div>

			<div class="p-digital__post__link l-pc">
				<p>収蔵品に関するお問い合わせは各施設へお願いいたします。</p>
				<br>
				<ul class="c-anchor__txt">
					<li><a target="_blank" rel="nofllow" href="https://jmapps.ne.jp/nagamuse/">長野市立博物館　収蔵品データベース</a></li>
					<li><a target="_blank" rel="nofllow" href="https://www.sanadahoumotsukan.com/">真田宝物館</a></li>
				</ul>
			</div>

		</div>
		<div class="p-digital__post__img">
			<div class="slider" id="js-slick">
				<figure><span><?php if (has_post_thumbnail()) : ?><?php the_post_thumbnail('full'); ?><?php else: ?><img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/noimage.png" alt="該当画像はありません"><?php endif; ?></span></figure>
<?php if( have_rows( 'digital_slide' ) ): ?>
	<?php while( have_rows( 'digital_slide' ) ): the_row(); $image = get_sub_field('digital_slide_img'); ?>
				<figure><span><?php echo wp_get_attachment_image( $image, 'full' ); ?></span></figure>
	<?php endwhile; ?>
<?php endif; ?>
			</div>
		</div>

		<div class="p-digital__post__link l-sp">
			<p>収蔵品に関するお問い合わせは各施設へお願いいたします。</p>
			<br>
			<ul class="c-anchor__txt">
				<li><a target="_blank" rel="nofllow" href="https://jmapps.ne.jp/nagamuse/">長野市立博物館　収蔵品データベース</a></li>
				<li><a target="_blank" rel="nofllow" href="https://www.sanadahoumotsukan.com/">真田宝物館</a></li>
			</ul>
		</div>

	</article>


	<div class="wp-pagenavi" role="navigation">
		<?php previous_post_link('%link', '前へ'); ?>
		<a class="backtolist" rel="list" area-label="一覧へ戻る"href="<?php echo esc_url( home_url( '/digital' ) ); ?>">一覧へ戻る</a>
		<?php next_post_link('%link', '次へ'); ?>
	</div>
</section>

<?php get_footer(); ?>

