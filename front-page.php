<?php
/**
 * トップページのテンプレート
 */
get_header(); ?>


	<section class="p-home__kv p-home__section">
		<div class="p-home__kv__kawanakajima"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/home/kawanakajima.svg" alt="Battle of Kawanakajima"></div>
		<div class="p-home__kv__uesugibak"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/home/uesugi_back.png" alt=""></div>
		<div class="p-home__kv__takedabak"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/home/takeda_back.png" alt=""></div>
		<div class="p-home__kv__takeda"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/takeda.png" alt=""></div>
		<div class="p-home__kv__uesugi"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/uesugi.png" alt=""></div>
		<div class="p-home__kv__logo"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/home/logo.png" alt="<?php bloginfo('name'); ?>"></div>
		<div class="p-home__kv__movie"><a href="https://www.youtube.com/embed/Kq95zgCrxeY" class="video-open"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/home/movie.jpg" alt=""></a></div>
	</section>

	<section class="p-home__battles p-home__section">
		<div class="l-wrapper">
			<h2>戦いを知る</h2>
			<ul>
				<li><a href="<?php echo home_url('/three-d'); ?>"><img class="l-sp" src="<?php echo get_template_directory_uri(); ?>/assets/img/common/nav01.jpg" alt=""><span>川中島の戦い</span><img class="l-pc" src="<?php echo get_template_directory_uri(); ?>/assets/img/common/nav01.jpg" alt=""><span>3D絵巻</dd></a>
				<li><a href="<?php echo home_url('/timeline'); ?>"><img class="l-sp" src="<?php echo get_template_directory_uri(); ?>/assets/img/common/nav02.jpg" alt=""><span>年表で見る川中島の戦い</span><img class="l-pc" src="<?php echo get_template_directory_uri(); ?>/assets/img/common/nav02.jpg" alt=""></a></li>
				<li><a href="<?php echo home_url('/illusts'); ?>"><img class="l-sp" src="<?php echo get_template_directory_uri(); ?>/assets/img/common/nav03.jpg" alt=""><span class="l-sp">【図解】<br>第1次〜第5次川中島の戦いの図</span><span class="l-pc">【図解】</span><img class="l-pc" src="<?php echo get_template_directory_uri(); ?>/assets/img/common/nav03.jpg" alt=""><span class="l-pc">第1次〜第5次川中島の戦いの図</span></a></li>
				<li><a href=".<?php echo home_url('/character'); ?>"><img class="l-sp" src="<?php echo get_template_directory_uri(); ?>/assets/img/common/nav04.jpg" alt=""><img class="l-pc" src="<?php echo get_template_directory_uri(); ?>/assets/img/common/nav04_01.jpg" alt=""><span>川中島の戦い・主要人物</span><img class="l-pc" src="<?php echo get_template_directory_uri(); ?>/assets/img/common/nav04_02.jpg" alt=""></a></li>
				<li><a href="<?php echo home_url('/story'); ?>"><img class="l-sp" src="<?php echo get_template_directory_uri(); ?>/assets/img/common/nav05.jpg" alt=""><span>戦記</span><img class="l-pc" src="<?php echo get_template_directory_uri(); ?>/assets/img/common/nav05.jpg" alt=""><span>「甲信越戦録」</span></a></li>
			</ul>
		</div>
	</section>

	<section class="p-home__tour p-home__section">
		<div class="l-wrapper">
			<div class="p-home__tour__txt">
				<h2>史跡をめぐる</h2>
				<p>川中島の戦いにゆかりのある史跡を紹介。<br>当時のことを想像しながら各所をめぐってみましょう！</p>
				<div class="p-home__tour__nav">
					<ul>
						<li><a class="c-anchor__btn" href="#"><span>史跡紹介</span></a></li>
						<li><a class="c-anchor__btn" href="#"><span>地図で見る</span></a></li>
						<li><a class="c-anchor__btn" href="#"><span>歩いてめぐる</span></a></li>
					</ul>
				</div>
				<div class="p-home__tour__categories">
					<h3>史跡をカテゴリ別で探す</h3>
					<ul>
						<li><a href="#">武田軍関連（81）</a></li>
						<li><a href="#">上杉軍関連（38）</a></li>
						<li><a href="#">城・館（53）</a></li>
						<li><a href="#">戦場跡（3）</a></li>
						<li><a href="#">神社・寺（33）</a></li>
						<li><a href="#">供養塔・墓（20）</a></li>
						<li><a href="#">碑・像（11）</a></li>
					</ul>
				</div>
			</div>
			<div class="p-home__tour__img"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/home/tour.jpg"></div>
		</div>
	</section>

	<section class="p-home__special p-home__section">
		<div class="l-wrapper">
			<h2>Special Contents</h2>
			<div class="p-home__special__slide">
				<div class="image"><a href="<?php echo home_url('/digital'); ?>"><figure><img src="<?php echo get_template_directory_uri(); ?>/assets/img/home/sp01.jpg">
					<figcaption>
						<h3>デジタル博物館</h3>
						<p>川中島の戦いにまつわる文化財を紹介。ここでしか見られない貴重なモノも！？</p>
					</figcaption>
				</figure></a></div>
				<div class="image"><a href="<?php echo home_url('/digital'); ?>"><figure><img src="<?php echo get_template_directory_uri(); ?>/assets/img/home/sp02.jpg">
					<figcaption>
						<h3>川中島古戦場専用サイト</h3>
						<p>川中島古戦場史跡公園のデジタルマップを見たり、ドローン映像や360度画像を楽しむことができるスマホ専用サイトです。</p>
					</figcaption>
				</figure></a></div>
				<div class="image"><a href="<?php echo home_url('/vr'); ?>"><figure><img src="<?php echo get_template_directory_uri(); ?>/assets/img/home/sp03.jpg">
					<figcaption>
						<h3>VRコンテンツ</h3>
						<p>長野市立博物館で体験できる「川中島の戦いVR」のご紹介</p>
					</figcaption>
				</figure></a></div>
				<div class="image"><a href="<?php echo home_url('/ar'); ?>"><figure><img src="<?php echo get_template_directory_uri(); ?>/assets/img/home/sp04.jpg">
					<figcaption>
						<h3>ARコンテンツ</h3>
						<p>川中島古戦場やその周辺でしか体験することができない、楽しいARコンテンツをご紹介</p>
					</figcaption>
				</figure></a></div>
			</div>
		</div>
	</section>

	<section class="c-thumb__events p-home__section">
		<div class="l-wrapper">
			<h2 class="c-heading__l">イベント情報</h2>
			<ul class="c-thumb03">
				<li><a href="#"><figure><img src="<?php echo get_template_directory_uri(); ?>/assets/img/events/dummy01.jpg">
					<figcaption>
						<h3><date time="">2024.3.1-5.31</date><span>川中島古戦場QRスタンプラリー</span></h3>
						<p>毎年恒例となっている川中島古戦場～松代周辺を舞台としたデジタルスタンプラリーが今年も開催！</p>
					</figcaption>
				</figure></a></li>
				<li><a href="#"><figure><img src="<?php echo get_template_directory_uri(); ?>/assets/img/events/dummy02.jpg">
					<figcaption>
						<h3><date time="">2024.4.1-4.16</date><span>三太刀まつり</span></h3>
						<p>期間中は夜桜のライトアップ 、土日には軽トラ市・剣道大会・キャンピングカー展示といったイベントも開催予定！</p>
					</figcaption>
				</figure></a></li>
				<li><a href="#"><figure><img src="<?php echo get_template_directory_uri(); ?>/assets/img/events/dummy03.jpg">
					<figcaption>
						<h3><date time="">2024.10.19</date><span>川中島古戦場まつり</span></h3>
						<p>会場イベントの他、夜は大スターマインやミュージックスターマインなど、約3000発の花火が打ち上げられます！</p>
					</figcaption>
				</figure></a></li>
			</ul>
			<aside><a class="c-anchor__btn" href="<?php echo home_url('/events'); ?>"><span>もっと見る</span></a></aside>
		</div>
	</section>

	<section class="p-home__links p-home__section">
		<div class="l-wrapper">
			<h2 class="c-heading__m">関連リンク</h2>
			<ul class="c-thumb04">
				<li><a rel="nofllow" target="_blank" href="https://www.nagano-cvb.or.jp/">ながの観光net</a></li>
				<li><a rel="nofllow" target="_blank" href="https://www.sanadahoumotsukan.com/">真田宝物館</a></li>
				<li><a rel="nofllow" target="_blank" href="https://www.city.nagano.nagano.jp/museum/">長野市立博物館</a></li>
				<li><a rel="nofllow" target="_blank" href="https://www.matsushiro-kankou.com/">信州松代観光協会</a></li>
			</ul>
		</div>
	</section>

<?php get_footer(); ?>
