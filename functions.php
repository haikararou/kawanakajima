<?php
/* ---------------------------------------------------------------------
テーマでアイキャッチ機能を有効化
-------------------------------------------------------------------------*/
add_theme_support( 'post-thumbnails' );


/* ---------------------------------------------------------------------
ビジュアルエディタ内のテキストにCSSを適用

適用するときは、以下のコメントアウトを外してください。
この例は、テーマフォルダ内の/css/editor-style.cssに
ビジュアルエディタ用のCSSを記述し、読み込んでいます。
-------------------------------------------------------------------------*/
//add_editor_style(get_template_directory_uri().'/css/editor-style.css' );

/* ---------------------------------------------------------------------
正しいURLを入力しないとログイン画面を表示しないようにする
-------------------------------------------------------------------------*/
remove_action( 'template_redirect', 'wp_redirect_admin_locations', 1000 );


/* ---------------------------------------------------------------------
CSS・JSを登録する
-------------------------------------------------------------------------*/
function register_files() {
	wp_register_style( 'reset', get_template_directory_uri().'/assets/css/reset.css');
	// wp_register_style( 'fontawesome', 'https://use.fontawesome.com/releases/v6.4.2/css/all.css');
	// wp_register_style( 'theme-font', 'https://fonts.googleapis.com/css2?family=Poppins:wght@300:600&display=swap');
	// wp_register_style( 'swiper', get_template_directory_uri().'/assets/css/swiper.min.css');
	wp_register_style( 'slick', get_template_directory_uri().'/assets/slick/slick.css');
	wp_register_style( 'slick-theme', get_template_directory_uri().'/assets/slick/slick-theme.css');
	wp_register_style( 'modaal', get_template_directory_uri().'/assets/modaal/modaal.min.css');
	wp_register_style( 'modaal-theme', get_template_directory_uri().'/assets/modaal/modaal-theme.css');
	wp_register_style( 'wpadminbar', get_template_directory_uri().'/assets/css/wpadminbar.css', array(), filemtime( get_template_directory().'/assets/css/wpadminbar.css') );
	wp_register_style( 'theme-common', get_template_directory_uri().'/assets/css/style.css', array(), filemtime( get_template_directory().'/assets/css/style.css') );

	wp_deregister_script('jquery');
	wp_enqueue_script( 'jquery', '//ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js');
	// wp_register_script( 'swiper', get_template_directory_uri() . '/assets/js/swiper.min.js');
	wp_enqueue_script( 'modaal', '//cdnjs.cloudflare.com/ajax/libs/Modaal/0.4.4/js/modaal.min.js');
	wp_register_script( 'slick', get_template_directory_uri() . '/assets/slick/slick.min.js');
	wp_register_script( 'slick-slide', get_template_directory_uri() . '/assets/slick/slide.js');
	wp_register_script( 'function', get_template_directory_uri() . '/assets/js/common.js', array(), filemtime( get_template_directory().'/assets/js/common.js') );
}
function my_enqueue_files() {
	register_files();
	wp_enqueue_style( 'reset' );
	// wp_enqueue_style( 'fontawesome' );
	// wp_enqueue_style( 'theme-font' );
	// wp_enqueue_style( 'swiper' );
	wp_enqueue_style( 'slick' );
	wp_enqueue_style( 'slick-theme' );
	wp_enqueue_style( 'modaal' );
	wp_enqueue_style( 'modaal-theme' );
	wp_enqueue_style( 'wpadminbar' );
	wp_enqueue_style( 'theme-common' );
	// wp_enqueue_script( 'swiper' );
	wp_enqueue_script( 'slick' );
	wp_enqueue_script( 'slick-slide' );
	wp_enqueue_script( 'function' );
}
add_action( 'wp_enqueue_scripts', 'my_enqueue_files' );


/*--------------------------------------
適用テンプレートのパスを変更
--------------------------------------*/
function get_custom_template( $page_template ) {
	global $wp_query;

	//single
	if(is_singular('digital')) {
	$page_template = dirname( __FILE__ ) . "/digital/single.php";
	}
	else if(is_singular('character')) {
	$page_template = dirname( __FILE__ ) . "/character/single.php";
	}
	else if(is_singular('tour')) {
	$page_template = dirname( __FILE__ ) . "/tour/single.php";
	}
	else if(is_singular('shop')) {
	$page_template = dirname( __FILE__ ) . "/shop/single.php";
	}
	else if(is_singular('walk')) {
	$page_template = dirname( __FILE__ ) . "/walk/single.php";
	}
	else if(is_singular('events')) {
	$page_template = dirname( __FILE__ ) . "/events/single.php";
	}

	//archive
	else if(is_post_type_archive('digital')){
	$page_template = dirname( __FILE__ ) . "/digital/archive.php";
	}
	else if(is_post_type_archive('character')){
	$page_template = dirname( __FILE__ ) . "/character/archive.php";
	}
	else if(is_post_type_archive('tour')){
	$page_template = dirname( __FILE__ ) . "/tour/archive.php";
	}
	else if(is_post_type_archive('walk')){
	$page_template = dirname( __FILE__ ) . "/walk/archive.php";
	}
	else if(is_post_type_archive('events')){
	$page_template = dirname( __FILE__ ) . "/events/archive.php";
	}

	//taxonomy
	else if(is_tax('digital_cat')){
	$page_template = dirname( __FILE__ ) . "/digital/taxonomy.php";
	}
	else if(is_tax('character_cat')){
	$page_template = dirname( __FILE__ ) . "/character/taxonomy.php";
	}
	else if(is_tax('tour_cat')){
	$page_template = dirname( __FILE__ ) . "/tour/taxonomy.php";
	}

	return $page_template;
	}
	add_filter('single_template', 'get_custom_template');
	add_filter('archive_template', 'get_custom_template');


/* ---------------------------------------------------------------------
その他の機能
-------------------------------------------------------------------------*/

/*初期設定*/
include_once( get_template_directory().'/functions/initial-setting.php' );

/*メタタグ類の設定*/
//include_once( get_template_directory().'/functions/meta-setting.php' );

/*カスタム投稿タイプを追加*/
include_once( get_template_directory().'/functions/custompost.php' );

/*便利な関数*/
//include_once( get_template_directory().'/functions/utility.php' );

/*ダッシュボードのカスタマイズ*/
//include_once( get_template_directory().'/functions/dashboard.php' );



/*カスタム投稿ページのみベーシック認証をかける*/
function basic_auth($auth_list,$realm="Restricted Area",$failed_text="認証に失敗しました"){
	if (isset($_SERVER['PHP_AUTH_USER']) and isset($auth_list[$_SERVER['PHP_AUTH_USER']])){
		if ($auth_list[$_SERVER['PHP_AUTH_USER']] == $_SERVER['PHP_AUTH_PW']){
			return $_SERVER['PHP_AUTH_USER'];
		}
	}
	header('WWW-Authenticate: Basic realm="'.$realm.'"');
	header('HTTP/1.0 401 Unauthorized');
	header('Content-type: text/html; charset='.mb_internal_encoding());
	die($failed_text);
}


/* ---------------------------------------------------------------------
スラッグの日本語禁止
-------------------------------------------------------------------------*/
function auto_post_slug( $slug, $post_ID, $post_status, $post_type ) {
if ( preg_match( '/(%[0-9a-f]{2})+/', $slug ) ) {
$slug = utf8_uri_encode( $post_type ) . '-' . $post_ID;
}
return $slug;
}
add_filter( 'wp_unique_post_slug', 'auto_post_slug', 10, 4 );

/* ---------------------------------------------------------------------
Lazy Blocksで勝手に出力されるdivをまとめて消す
-------------------------------------------------------------------------*/
add_filter( 'lzb/block_render/allow_wrapper', '__return_false' );

