<?php
/*Template Name: 第1次〜第5次川中島の戦いの図 一覧 */
?>
<?php get_header(); ?>

<div class="c-herohead">
	<h1 class="c-herohead__heading"><?php the_title(); ?></h1>
</div>

<section class="c-section">
	<ul class="p-illusts__lst">
		<li><a href="<?php echo home_url('/illusts/1st'); ?>"><figure><img src="<?php echo get_template_directory_uri(); ?>/assets/img/battles/thumb_illust01.png">
			<figcaption>
				<h2 class="c-heading__ss">第1次川中島の戦い</h2>
				<h3 class="c-heading__m">信玄と謙信の初めての戦いは、 互いの力のさぐり合い</h3>
			</figcaption>
		</figure><span class="c-anchor__detail">詳しく見る</span></a></li>
		<li><a href="<?php echo home_url('/illusts/2nd'); ?>"><figure><img src="<?php echo get_template_directory_uri(); ?>/assets/img/battles/thumb_illust02.png">
			<figcaption>
				<h2 class="c-heading__ss">第2次川中島の戦い</h2>
				<h3 class="c-heading__m">犀川をはさみ200日におよんだ対陣</h3>
			</figcaption>
		</figure><span class="c-anchor__detail">詳しく見る</span></a></li>
		<li><a href="<?php echo home_url('/illusts/3rd'); ?>"><figure><img src="<?php echo get_template_directory_uri(); ?>/assets/img/battles/thumb_illust03.png">
			<figcaption>
				<h2 class="c-heading__ss">第3次川中島の戦い</h2>
				<h3 class="c-heading__m">攻める謙信、守りの信玄。 正面衝突を避けながら武田軍は勢力をじわじわと浸透させる</h3>
			</figcaption>
		</figure><span class="c-anchor__detail">詳しく見る</span></a></li>
		<li><a href="<?php echo home_url('/illusts/4th'); ?>"><figure><img src="<?php echo get_template_directory_uri(); ?>/assets/img/battles/thumb_illust04.png">
			<figcaption>
				<h2 class="c-heading__ss">第4次川中島の戦い</h2>
				<h3 class="c-heading__m">龍虎相打つ！激戦をきわめた両軍の総力戦</h3>
			</figcaption>
		</figure><span class="c-anchor__detail">詳しく見る</span></a></li>
		<li><a href="<?php echo home_url('/illusts/5th'); ?>"><figure><img src="<?php echo get_template_directory_uri(); ?>/assets/img/battles/thumb_illust05.png">
			<figcaption>
				<h2 class="c-heading__ss">第5次川中島の戦い</h2>
				<h3 class="c-heading__m">上杉謙信、川中島へ最後の出兵も勝敗は決せず</h3>
			</figcaption>
		</figure><span class="c-anchor__detail">詳しく見る</span></a></li>
	</ul>
</section>

<?php get_footer(); ?>