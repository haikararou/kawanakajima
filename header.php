<!-- ?php
if(!is_home()):
		if(is_post_type_archive('opening') || is_singular('opening') || is_tax('opening_cat')):
				$userArray = array("elle" => "qwerasdf"
			);
			basic_auth($userArray);
		endif;
endif;
? -->
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
	<?php wp_head(); ?>

<?php if ( is_page('three-d') ) : ?>
<?php endif; ?>

</head>

<body <?php body_class('l-body'); ?> id="js-body">

<?php if (is_front_page() || is_home()) : ?>
<!-- ローディング画面 -->
<div class="loader-bg">
	<div class="loader"></div>
</div>
<?php endif; ?>

<header class="l-header">
	<div class="l-header__logo"><a href="<?php echo home_url(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/logo.svg" alt="<?php bloginfo('name'); ?>"></a></div>

	<a class="l-hamburger">
		<span class="l-hamburger__line l-hamburger__line__top"></span>
		<span class="l-hamburger__line l-hamburger__line__cnt"></span>
		<span class="l-hamburger__line l-hamburger__line__btm"></span>
		<!--p class="l-hamburger__title">MENU</p-->
	</a>
	<nav class="l-nav">
		<div class="l-nav__wrap">
			<ul>
				<li><a href="<?php echo home_url(); ?>">ホーム</a></li>
				<li class="has-child"><a href="#">戦いを知る</a><dl>
					<a href="<?php echo home_url('/three-d'); ?>"><dt><img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/nav01.jpg" alt=""></dt><dd>川中島の戦い 3D絵巻</dd></a>
					<a href="<?php echo home_url('/timeline'); ?>"><dt><img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/nav02.jpg" alt=""></dt><dd>年表で見る川中島の戦い</dd></a>
					<a href="<?php echo home_url('/illusts'); ?>"><dt><img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/nav03.jpg" alt=""></dt><dd>第1次〜第5次川中島の戦いの図</dd></a>
					<a href="<?php echo home_url('/character'); ?>"><dt><img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/nav04.jpg" alt=""></dt><dd>川中島の戦い・主要人物</dd></a>
					<a href="<?php echo home_url('/story'); ?>"><dt><img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/nav05.jpg" alt=""></dt><dd>戦記「甲信越戦録」</dd></a>
				</dl></li>
				<li><a href="<?php echo home_url('/tour'); ?>">史跡をめぐる</a></li>
				<li><a href="<?php echo home_url('/digital'); ?>">デジタル博物館</a></li>
				<li><a href="<?php echo home_url('/events'); ?>">イベント情報</a></li>
				<!--li><a href="<?php echo home_url('/tourism'); ?>">周辺観光情報</a></li-->
			</ul>
		</div>
	</nav>
	<div class="l-header__nagano"><a href="https://www.city.nagano.nagano.jp/" target="_blank" rel="nofllow"><img src="<?php echo get_template_directory_uri(); ?>/assets/img/common/naganocity.svg"><span>長野市</span></a></div>
</header>

<?php if (!is_front_page() || !is_home()) : ?>
<nav class="l-breadcrumb">
	<ul>
<?php if ( is_singular('walk') ): ?>
		<li><a href="<?php echo home_url(); ?>">川中島の戦いトップ</a></li>
		<li><a href="<?php echo home_url('/tour'); ?>">史跡をめぐる</a></li>
		<li><?php the_title(); ?></li>
<?php else: ?>
<?php if(function_exists('bcn_display')){ bcn_display(); }?>
<?php endif; ?>
	</ul>
</nav>
<?php endif; ?>

<main class="l-main"><?php if (!is_front_page() || !is_home()) : ?><div class="l-wrapper"><?php endif; ?>
