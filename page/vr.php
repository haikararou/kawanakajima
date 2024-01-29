<?php
/*Template Name: VR（仮想現実）でみる */
?>
<?php get_header(); ?>

<div class="c-herohead">
	<h1 class="c-herohead__heading"><?php the_title(); ?></h1>
</div>

<section class="c-section p-vr__lead">
	<p class="c-heading__s">北信濃を戦場にして12年、5度にわたる長い戦いとなった「川中島の戦い」を、錦絵とCGを使った仮想空間で表現。VRゴーグルを装着し、「第4次川中島の戦い」を中心に合戦の空気感や臨場感を体験できる特別なコンテンツ。</p>
	<img src="<?php echo get_template_directory_uri(); ?>/assets/img/vr/icon.png">
</section>

<section class="c-section p-vr__movie">
	<article class="p-vr__article">
		<h2 class="c-heading__m">プロモーション用動画</h2>
		<img src="<?php echo get_template_directory_uri(); ?>/assets/img/vr/movie.jpg">
	</article>
</section>

<section class="c-section p-vr__emaki">
	<article class="p-vr__article">
		<h2 class="c-heading__m">川中島の戦いVR絵巻</h2>
		<img src="<?php echo get_template_directory_uri(); ?>/assets/img/vr/emaki.jpg">
		<p>様々な諸説がある「川中島の戦い」を、絵巻などの錦絵を分解しながら再構築して編集。現代版の「川中島の戦い絵巻」をVR（Virtual Reality 仮想現実）として制作。</p>
		<div class="p-vr__article__nishikie">
			<img src="<?php echo get_template_directory_uri(); ?>/assets/img/vr/nishikie.png">
			<div>
				<h3 class="c-heading__m">錦絵</h3>
				<p>長野市が所有する様々な錦絵を中心に使用。作者ごとに異なるタッチの錦絵が登場することにより、唯一無二の世界に没入できる、新し い「川中島の戦い」を表現。</p>
			</div>
		</div>
	</article>
</section>

<section class="c-section p-vr__trip">
	<article class="p-vr__article">
		<h2 class="c-heading__m">1561年-2024年時空の旅</h2>
		<img src="<?php echo get_template_directory_uri(); ?>/assets/img/vr/trip.jpg">
		<p>川中島の戦いを最新の技術を使って制作。その場所にいながらストーリーが流れるように展開。 1561年と2024年を同時に体験</p>
	</article>
</section>

<section class="c-section p-vr__image">
	<p>※掲載の画像は全てイメージです。VRコンテンツは予告なく変更となる可能性があります。</p>
</section>



<section class="c-section p-vr__location">
	<h2 class="c-heading__m">設置場所</h2>
	<article class="p-vr__place">
		<div class="p-vr__place__img">
			<a target="_blank" href="https://www.google.com/maps/d/u/0/viewer?mid=1ZIq2T1vFiUZzMcmxRHpj_A26y021NIw&ll=36.59074660128258%2C138.18718851595594&z=19"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/vr/naganocity-museum.jpg"></a>
		</div>
		<div class="p-vr__place__txt">
			<h3 class="c-heading__s"><a target="_blank" href="https://www.google.com/maps/d/u/0/viewer?mid=1ZIq2T1vFiUZzMcmxRHpj_A26y021NIw&ll=36.59074660128258%2C138.18718851595594&z=19"><span>長野市立博物館</span></a></h3>
			<address>〒381-2212<br>長野市小島田町1414　川中島古戦場史跡公園内<br>【Tel <a href="tel:0262849011">026-284-9011</a> / Fax026-284-9012】<br>※長野ICから車で5分</address>
		</div>
	</article>
	<article class="p-vr__place">
		<div class="p-vr__place__img">
			<img src="<?php echo get_template_directory_uri(); ?>/assets/img/vr/booth.png">
		</div>
		<div class="p-vr__place__txt">
			<h3 class="c-heading__s">「川中島の戦いVR絵巻」専用ブースでVRゴーグルを装着し、ゆっくりとコンテンツを堪能</h3>
			<p>※本コンテンツの体験は無料です（長野市立博物館入館料は別途必要となります）</p>
		</div>
	</article>
</section>

<?php get_footer(); ?>