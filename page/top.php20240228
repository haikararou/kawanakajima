<?php
/**
 * トップページのテンプレート
 */
/*Template Name: トップページのテンプレート */
get_header(); ?>

<section class="p-home__kv p-home__section">
	<div class="p-home__kv__kawanakajima">
		<ul>
			<li><img src="<?php echo get_template_directory_uri(); ?>/assets/img/home/kawanakajima.svg" alt="Battle of Kawanakajima"></li>
			<li><img src="<?php echo get_template_directory_uri(); ?>/assets/img/home/kawanakajima.svg" alt="Battle of Kawanakajima"></li>
		</ul>
		<ul>
			<li><img src="<?php echo get_template_directory_uri(); ?>/assets/img/home/kawanakajima.svg" alt="Battle of Kawanakajima"></li>
			<li><img src="<?php echo get_template_directory_uri(); ?>/assets/img/home/kawanakajima.svg" alt="Battle of Kawanakajima"></li>
		</ul>
		<ul>
			<li><img src="<?php echo get_template_directory_uri(); ?>/assets/img/home/kawanakajima.svg" alt="Battle of Kawanakajima"></li>
			<li><img src="<?php echo get_template_directory_uri(); ?>/assets/img/home/kawanakajima.svg" alt="Battle of Kawanakajima"></li>
		</ul>
		<ul>
			<li><img src="<?php echo get_template_directory_uri(); ?>/assets/img/home/kawanakajima.svg" alt="Battle of Kawanakajima"></li>
			<li><img src="<?php echo get_template_directory_uri(); ?>/assets/img/home/kawanakajima.svg" alt="Battle of Kawanakajima"></li>
		</ul>
		<ul>
			<li><img src="<?php echo get_template_directory_uri(); ?>/assets/img/home/kawanakajima.svg" alt="Battle of Kawanakajima"></li>
			<li><img src="<?php echo get_template_directory_uri(); ?>/assets/img/home/kawanakajima.svg" alt="Battle of Kawanakajima"></li>
		</ul>
	</div>
	<div class="p-home__kv__uesugibak"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/home/uesugi_back.png" alt=""></div>
	<div class="p-home__kv__takedabak"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/home/takeda_back.png" alt=""></div>
	<div class="p-home__kv__takeda"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/takeda.png" alt=""></div>
	<div class="p-home__kv__uesugi"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/uesugi.png" alt=""></div>
	<div class="p-home__kv__logo"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/home/logo.png" alt="<?php bloginfo('name'); ?>"></div>
	<div class="p-home__kv__movie"><!--a href="https://youtu.be/Y_3vLOVbQkk" class="video-open"--><img src="<?php echo get_template_directory_uri(); ?>/assets/img/home/movie.jpg" alt=""><!--/a--></div>
</section>

<section id="battles" class="p-home__battles p-home__section">
	<div class="l-wrapper">
		<h2>戦いを知る</h2>
		<ul>
			<li><a href="<?php echo home_url('/three-d'); ?>"><img class="l-sp" src="<?php echo get_template_directory_uri(); ?>/assets/img/common/nav01.jpg" alt=""><span>川中島の戦い</span><img class="l-pc" src="<?php echo get_template_directory_uri(); ?>/assets/img/common/nav01.jpg" alt=""><span>3D絵巻</dd></a>
			<li><a href="<?php echo home_url('/timeline'); ?>"><img class="l-sp" src="<?php echo get_template_directory_uri(); ?>/assets/img/common/nav02.jpg" alt=""><span>年表で見る川中島の戦い</span><img class="l-pc" src="<?php echo get_template_directory_uri(); ?>/assets/img/common/nav02.jpg" alt=""></a></li>
			<li><a href="<?php echo home_url('/illusts'); ?>"><img class="l-sp" src="<?php echo get_template_directory_uri(); ?>/assets/img/common/nav03.jpg" alt=""><span class="l-sp"><!--【図解】<br>-->第1次〜第5次川中島の戦いの図</span><!--span class="l-pc">【図解】</span--><img class="l-pc" src="<?php echo get_template_directory_uri(); ?>/assets/img/common/nav03.jpg" alt=""><span class="l-pc">第1次〜第5次川中島の戦いの図</span></a></li>
			<li><a href="<?php echo home_url('/character/category/main'); ?>"><img class="l-sp" src="<?php echo get_template_directory_uri(); ?>/assets/img/common/nav04.jpg" alt=""><img class="l-pc" src="<?php echo get_template_directory_uri(); ?>/assets/img/common/nav04_01.jpg" alt=""><span>川中島の戦い・主要人物</span><img class="l-pc" src="<?php echo get_template_directory_uri(); ?>/assets/img/common/nav04_02.jpg" alt=""></a></li>
			<li><a href="<?php echo home_url('/story'); ?>"><img class="l-sp" src="<?php echo get_template_directory_uri(); ?>/assets/img/common/nav05.jpg" alt=""><span>戦記</span><img class="l-pc" src="<?php echo get_template_directory_uri(); ?>/assets/img/common/nav05.jpg" alt=""><span>「甲越信戦録」</span></a></li>
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
					<li><a class="c-anchor__btn" href="<?php echo home_url('/tour#order'); ?>"><span>史跡一覧</span></a></li>
					<li><a class="c-anchor__btn" href="<?php echo home_url('/tour#map'); ?>"><span>地図で見る</span></a></li>
					<li><a class="c-anchor__btn" href="<?php echo home_url('/tour#walk'); ?>"><span>モデルコース</span></a></li>
				</ul>
			</div>
			<div class="p-home__tour__categories">
				<h3>史跡をカテゴリ別で探す</h3>
				<ul>
<?php
$terms = get_terms('tour_cat', ['hide_empty'=>false]);
foreach($terms as $term):
?>
					<li><a href="<?php echo get_term_link($term); ?>"><?php echo $term->name; ?>（<?php echo $term->count; ?>）</a></li>
<?php endforeach; ?>
				</ul>
			</div>
		</div>
		<div class="p-home__tour__img"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/home/tour.jpg"></div>
	</div>
</section>

<section class="p-home__special p-home__section">
	<div class="l-wrapper">
		<h2>Special Contents</h2>
		<!--ul class="c-thumb04">
			<li><a href="<?php echo home_url('/digital'); ?>"><figure><img src="<?php echo get_template_directory_uri(); ?>/assets/img/home/sp01.jpg">
				<figcaption>
					<h3>デジタル博物館</h3>
					<p>川中島の戦いにまつわる文化財を紹介。ここでしか見られない貴重なモノも！？</p>
				</figcaption>
			</figure></a></li>
			<li><a target="_blank" rel="nofllow" href="https://www.nagano-cvb.or.jp/kawanakajimakassen/"><figure><img src="<?php echo get_template_directory_uri(); ?>/assets/img/home/sp02.jpg">
				<figcaption>
					<h3><span>川中島古戦場専用サイト</span></h3>
					<p>川中島古戦場史跡公園のデジタルマップを見たり、ドローン映像や360度画像を楽しむことができるスマホ専用サイトです。</p>
				</figcaption>
			</figure></a></li>
			<li><a href="<?php echo home_url('/vr'); ?>"><figure><img src="<?php echo get_template_directory_uri(); ?>/assets/img/home/sp03.jpg">
				<figcaption>
					<h3>VRコンテンツ</h3>
					<p>長野市立博物館で体験できる「川中島の戦いVR」のご紹介</p>
				</figcaption>
			</figure></a></li>
			<li><a href="<?php echo home_url('/ar'); ?>"><figure><img src="<?php echo get_template_directory_uri(); ?>/assets/img/home/sp04.jpg">
				<figcaption>
					<h3>ARコンテンツ</h3>
					<p>川中島古戦場やその周辺でしか体験することができない、楽しいARコンテンツをご紹介</p>
				</figcaption>
			</figure></a></li>
		</ul-->
		<div class="p-home__special__slide">
			<div class="image"><a href="<?php echo home_url('/events/events-1001/'); ?>"><figure><?php if (date('Y-m-d') < '2024-06-23') { ?>
				<img src="<?php echo get_template_directory_uri(); ?>/assets/img/home/sp02-2.jpg">
				<?php } else { ?><img src="<?php echo get_template_directory_uri(); ?>/assets/img/home/sp02.jpg"><?php } ?>
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
					<p>川中島古戦場やその周辺で<!--しか-->体験することができ<!--ない-->る、楽しいARコンテンツをご紹介</p>
				</figcaption>
			</figure></a></div>
			<div class="image"><a href="<?php echo home_url('/digital'); ?>"><figure><img src="<?php echo get_template_directory_uri(); ?>/assets/img/home/sp01.jpg">
				<figcaption>
					<h3>デジタル博物館</h3>
					<p>川中島の戦いにまつわる文化財を紹介。ここでしか見られない貴重なモノも！？</p>
				</figcaption>
			</figure></a></div>
		</div>
	</div>
</section>

<?php get_template_part('inc/events'); ?>

<section class="p-home__links p-home__section">
	<div class="l-wrapper">
		<h2 class="c-heading__m">関連リンク</h2>
		<ul>
			<li><a rel="nofllow" target="_blank" href="https://www.city.nagano.nagano.jp/museum/"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/bnr/naganocitymuseum.jpg" alt="長野市立博物館"></a></li>
			<li><a rel="nofllow" target="_blank" href="https://www.sanadahoumotsukan.com/"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/bnr/sanadahoumotsukan.jpg" alt="真田宝物館"></a></li>
			<li><a rel="nofllow" target="_blank" href="https://www.matsushiro-kankou.com/"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/bnr/matsushiro-kankou.jpg" alt="信州松代観光協会"></a></li>
			<li><a rel="nofllow" target="_blank" href="https://www.nagano-cvb.or.jp/"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/bnr/nagano-cvb.jpg" alt="ながの観光net"></a></li>
			<li><a rel="nofllow" target="_blank" href="https://joetsukankonavi.jp/"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/bnr/joetsukankonavi.jpg" alt="上越観光navi"></a></li>
			<li><a rel="nofllow" target="_blank" href="https://kofu-tourism.com/"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/bnr/kofu-tourism.jpg" alt="ながの観光net"></a></li>
		</ul>
	</div>
</section>

<?php get_footer(); ?>
