<?php
/**
 * ヘッダーテンプレート
 */
?>
<!DOCTYPE html>
<html dir="ltr" lang="ja" prefix="og: https://ogp.me/ns#" class="no-js">
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width">

<?php if(is_tax('character_cat')): ?>
<meta property="og:locale" content="ja_JP" />
<meta property="og:site_name" content="川中島の戦い・主要人物 - 川中島の戦い | Battle of Kawanakajima [総合サイト] -" />
<meta property="og:type" content="article" />
<meta property="og:title" content="川中島の戦い・主要人物 - 川中島の戦い | Battle of Kawanakajima [総合サイト]" />
<meta property="og:url" content="https://kawanakajima.nagano.jp/character/category/main/" />
<meta property="og:image" content="https://kawanakajima.nagano.jp/wp-content/uploads/2024/02/OGP.png" />
<meta property="og:image:secure_url" content="https://kawanakajima.nagano.jp/wp-content/uploads/2024/02/OGP.png" />
<meta property="og:image:width" content="1200" />
<meta property="og:image:height" content="630" />
<meta name="twitter:card" content="summary_large_image" />
<meta name="twitter:title" content="川中島の戦い・主要人物 - 川中島の戦い | Battle of Kawanakajima [総合サイト]" />
<meta name="twitter:image" content="https://kawanakajima.nagano.jp/wp-content/uploads/2024/02/OGP.png" />
<script type="application/ld+json" class="aioseo-schema">
{"@context":"https:\/\/schema.org","@graph":[{"@type":"BreadcrumbList","@id":"https:\/\/kawanakajima.nagano.jp\/#breadcrumblist","itemListElement":[{"@type":"ListItem","@id":"https:\/\/kawanakajima.nagano.jp\/#listItem","position":1,"name":"\u5bb6"}]},{"@type":"Organization","@id":"https:\/\/kawanakajima.nagano.jp\/#organization","name":"\u5ddd\u4e2d\u5cf6\u306e\u6226\u3044\u7dcf\u5408\u30b5\u30a4\u30c8","url":"https:\/\/kawanakajima.nagano.jp\/"},{"@type":"WebPage","@id":"https:\/\/kawanakajima.nagano.jp\/#webpage","url":"https:\/\/kawanakajima.nagano.jp\/","name":"\u5ddd\u4e2d\u5cf6\u306e\u6226\u3044 | Battle of Kawanakajima [\u7dcf\u5408\u30b5\u30a4\u30c8]","inLanguage":"ja","isPartOf":{"@id":"https:\/\/kawanakajima.nagano.jp\/#website"},"breadcrumb":{"@id":"https:\/\/kawanakajima.nagano.jp\/#breadcrumblist"},"datePublished":"2024-02-08T09:15:05+09:00","dateModified":"2024-02-28T09:24:27+09:00"},{"@type":"WebSite","@id":"https:\/\/kawanakajima.nagano.jp\/#website","url":"https:\/\/kawanakajima.nagano.jp\/","name":"\u5ddd\u4e2d\u5cf6\u306e\u6226\u3044\u7dcf\u5408\u30b5\u30a4\u30c8","inLanguage":"ja","publisher":{"@id":"https:\/\/kawanakajima.nagano.jp\/#organization"},"potentialAction":{"@type":"SearchAction","target":{"@type":"EntryPoint","urlTemplate":"https:\/\/kawanakajima.nagano.jp\/?s={search_term_string}"},"query-input":"required name=search_term_string"}}]}
</script>
<?php endif; ?>

	<?php wp_head(); ?>

<?php if ( is_page('three-d') ) : ?>
<?php endif; ?>
<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/assets/img/favicon.ico">
</head>

<body <?php body_class('l-body'); ?> id="js-body">

<?php if (is_front_page() || is_home() || is_page('top')) : ?>
<!-- ローディング画面 -->
<div class="loader-bg">
	<div class="loader"></div>
</div>
<?php endif; ?>

<header class="l-header">
	<div class="l-header__logo"><a href="/"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/logo.svg" alt="<?php bloginfo('name'); ?>"></a></div>

	<a class="l-hamburger">
		<span class="l-hamburger__line l-hamburger__line__top"></span>
		<span class="l-hamburger__line l-hamburger__line__cnt"></span>
		<span class="l-hamburger__line l-hamburger__line__btm"></span>
	</a>
	<nav class="l-nav">
		<div class="l-nav__wrap">
			<ul>
				<li><a href="/">ホーム</a></li>
				<li class="has-child"><a href="#">戦いを知る</a><dl>
					<a href="<?php echo home_url('/three-d'); ?>"><dt><img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/nav01.jpg" alt=""></dt><dd>川中島の戦い 3D絵巻</dd></a>
					<a href="<?php echo home_url('/timeline'); ?>"><dt><img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/nav02.jpg" alt=""></dt><dd>年表で見る川中島の戦い</dd></a>
					<a href="<?php echo home_url('/illusts'); ?>"><dt><img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/nav03.jpg" alt=""></dt><dd>第1次〜第5次川中島の戦いの図</dd></a>
					<a href="<?php echo home_url('/character/category/main'); ?>"><dt><img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/nav04.jpg" alt=""></dt><dd>川中島の戦い・主要人物</dd></a>
					<a href="<?php echo home_url('/story'); ?>"><dt><img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/nav05.jpg" alt=""></dt><dd>戦記「甲越信戦録」</dd></a>
				</dl></li>
				<li><a href="<?php echo home_url('/tour'); ?>">史跡をめぐる</a></li>
				<li><a href="<?php echo home_url('/digital'); ?>">デジタル博物館</a></li>
				<li><a href="<?php echo home_url('/events'); ?>">イベント情報</a></li>
			</ul>
		</div>
	</nav>
	<div class="l-header__nagano"><a href="https://www.city.nagano.nagano.jp/" target="_blank" rel="nofllow"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/naganocity.svg"><span>長野市</span></a></div>
</header>

<?php if (!is_front_page() || !is_home() || !is_page('top')) : ?>
<nav class="l-breadcrumb">
	<ul>
<?php if ( is_singular('walk') ): ?>
		<li><a href="/">川中島の戦いトップ</a></li>
		<li><a href="<?php echo home_url('/tour'); ?>">史跡をめぐる</a></li>
		<li><?php the_title(); ?></li>
<?php else: ?>
<?php if(function_exists('bcn_display')){ bcn_display(); }?>
<?php endif; ?>
	</ul>
</nav>
<?php endif; ?>

<main class="l-main"><?php if (!is_front_page() || !is_home() || !is_page('top')) : ?><div class="l-wrapper"><?php endif; ?>
