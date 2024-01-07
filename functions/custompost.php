<?php



/*-----------------------------------------------------------------------------------
カスタム投稿タイプの追加
-----------------------------------------------------------------------------------*/
add_action('init', 'create_post_type' );
function create_post_type() {

	//カスタム投稿タイプを追加
	register_post_type( 'digital', // 投稿タイプ名(スラッグ)
		array(
			'labels' => array(
			'name' => __( 'デジタル博物館' ), // 投稿タイプ名(表示名)
			'singular_name' => __( 'デジタル博物館' )// 投稿タイプ名(表示名)
			),
			'menu_icon' => 'dashicons-images-alt2',
			'public' => true,
			'menu_position' =>5,
			'supports' => array('title', 'editor', 'thumbnail'), // この投稿タイプでサポートする機能。
			'has_archive' => true,
			'show_in_rest' => true,
			'rewrite' => array(
				'slug' => 'digital',//投稿タイプ名(スラッグ) アーカイブページのURLになります
				'with_front' => false
			)
		)
	);
	register_taxonomy(
		'digital_cat', //タクソノミー名
		'digital', //カスタム投稿タイプ
		array(
			'hierarchical' => true,
			'update_count_callback' => '_update_post_term_count',
			'label' => '分類',// タクソノミー名（表示名）
			'singular_label' => '分類',// タクソノミー名（表示名）
			'public' => true,
			'show_ui' => true,
			'show_in_rest' => true,
			'rewrite' => array(
				'slug' => 'digital/category', //書き換え後のスラッグ
				//'with_front' => false //通常投稿のパーマリンク構造を引き継ぐかどうか (true/false)
				'hierarchical' => true //階層化したURLを使用可能にする
			)
		)
	);

	//カスタム投稿タイプを追加
	register_post_type( 'character', // 投稿タイプ名(スラッグ)
		array(
			'labels' => array(
			'name' => __( '川中島の戦い・主要人物' ), // 投稿タイプ名(表示名)
			'singular_name' => __( '川中島の戦い・主要人物' )// 投稿タイプ名(表示名)
			),
			'menu_icon' => 'dashicons-groups',
			'public' => true,
			'menu_position' =>5,
			'supports' => array('title', 'editor', 'thumbnail'), // この投稿タイプでサポートする機能。
			'has_archive' => true,
			'show_in_rest' => true,
			'rewrite' => array(
				'slug' => 'character',//投稿タイプ名(スラッグ) アーカイブページのURLになります
				'with_front' => false
			)
		)
	);
	register_taxonomy(
		'character_cat', //タクソノミー名
		'character', //カスタム投稿タイプ
		array(
			'hierarchical' => true,
			'update_count_callback' => '_update_post_term_count',
			'label' => '関連',// タクソノミー名（表示名）
			'singular_label' => '関連',// タクソノミー名（表示名）
			'public' => true,
			'show_ui' => true,
			'show_in_rest' => true,
			'rewrite' => array(
				'slug' => 'character/category', //書き換え後のスラッグ
				//'with_front' => false //通常投稿のパーマリンク構造を引き継ぐかどうか (true/false)
				'hierarchical' => true //階層化したURLを使用可能にする
			)
		)
	);

	//カスタム投稿タイプを追加
	register_post_type( 'tour', // 投稿タイプ名(スラッグ)
		array(
			'labels' => array(
			'name' => __( '史跡をめぐる' ), // 投稿タイプ名(表示名)
			'singular_name' => __( '史跡をめぐる' )// 投稿タイプ名(表示名)
			),
			'menu_icon' => 'dashicons-location',
			'public' => true,
			'menu_position' =>5,
			'supports' => array('title', 'editor', 'thumbnail'), // この投稿タイプでサポートする機能。
			'has_archive' => true,
			'show_in_rest' => true,
			'rewrite' => array(
				'slug' => 'tour',//投稿タイプ名(スラッグ) アーカイブページのURLになります
				'with_front' => false
			)
		)
	);
	register_taxonomy(
		'tour_cat', //タクソノミー名
		'tour', //カスタム投稿タイプ
		array(
			'hierarchical' => true,
			'update_count_callback' => '_update_post_term_count',
			'label' => 'カテゴリー',// タクソノミー名（表示名）
			'singular_label' => 'カテゴリー',// タクソノミー名（表示名）
			'public' => true,
			'show_ui' => true,
			'show_in_rest' => true,
			'rewrite' => array(
				'slug' => 'tour/category', //書き換え後のスラッグ
				//'with_front' => false //通常投稿のパーマリンク構造を引き継ぐかどうか (true/false)
				'hierarchical' => true //階層化したURLを使用可能にする
			)
		)
	);

	//カスタム投稿タイプを追加
	register_post_type( 'walk', // 投稿タイプ名(スラッグ)
		array(
			'labels' => array(
			'name' => __( '歩いてめぐる' ), // 投稿タイプ名(表示名)
			'singular_name' => __( '歩いてめぐる' )// 投稿タイプ名(表示名)
			),
			'menu_icon' => 'dashicons-location-alt',
			'public' => true,
			'menu_position' =>5,
			'supports' => array('title', 'editor', 'thumbnail'), // この投稿タイプでサポートする機能。
			'has_archive' => true,
			'show_in_rest' => true,
			'rewrite' => array(
				'slug' => 'walk',//投稿タイプ名(スラッグ) アーカイブページのURLになります
				'with_front' => false
			)
		)
	);

	//カスタム投稿タイプを追加
	register_post_type( 'events', // 投稿タイプ名(スラッグ)
		array(
			'labels' => array(
			'name' => __( 'イベント情報' ), // 投稿タイプ名(表示名)
			'singular_name' => __( 'イベント情報' )// 投稿タイプ名(表示名)
			),
			'menu_icon' => 'dashicons-calendar-alt',
			'public' => true,
			'menu_position' =>5,
			'supports' => array('title', 'editor', 'thumbnail'), // この投稿タイプでサポートする機能。
			'has_archive' => true,
			'show_in_rest' => true,
			'rewrite' => array(
				'slug' => 'events',//投稿タイプ名(スラッグ) アーカイブページのURLになります
				'with_front' => false
			)
		)
	);



}

//URLに「/archives/」が含まれていたら、取り除いてリダイレクト
$now_addr = (empty($_SERVER["HTTPS"]) ? "http://" : "https://").$_SERVER["HTTP_HOST"].$_SERVER["REQUEST_URI"];
if(preg_match("/\/archives\//s",$now_addr)){
	$new_addr = preg_replace('/\/archives\//s', '/', $now_addr);
	// リダイレクト(移動)
	header( "Location: $new_addr" ) ;
	exit;
}



/*-----------------------------------------------------------------------------------
カスタム投稿タイプのURLを数字ベースにする
-----------------------------------------------------------------------------------*/
// add_filter( 'post_type_link', 'my_post_type_link', 1, 2 );
// function my_post_type_link( $link, $post ){
// 	if (('digital' === $post->post_type ) || ('character' === $post->post_type ) || ('tour' === $post->post_type ) || ('walk' === $post->post_type ) || ('events' === $post->post_type ) ) { //カスタム投稿タイプをここで指定
// 		return home_url( '/'.$post->post_type.'/'. $post->ID );
// 	}
// 	else {
// 		return $link;
// 	}
// }

add_filter( 'rewrite_rules_array', 'my_rewrite_rules_array' );
function my_rewrite_rules_array( $rules ) {
	$args = array('public'   => true, '_builtin' => false);
	$output = 'names';
	$operator = 'and';
	$post_types = get_post_types( $args, $output, $operator );
	$new_rules = array(
		'digital/([0-9]+)/?$' => 'index.php?post_type=digital&p=$matches[1]' ,
		'character/([0-9]+)/?$' => 'index.php?post_type=character&p=$matches[1]',
		'tour/([0-9]+)/?$' => 'index.php?post_type=tour&p=$matches[1]',
		'walk/([0-9]+)/?$' => 'index.php?post_type=walk&p=$matches[1]',
		'events/([0-9]+)/?$' => 'index.php?post_type=events&p=$matches[1]'
	);
	return $new_rules + $rules;
}



/*-----------------------------------------------------------------------------------
カスタム投稿タイプのパーマリンク設定
-----------------------------------------------------------------------------------*/
add_rewrite_rule('digital/category/([^/]+)/?$', 'index.php?digital_cat=$matches[1]', 'top');
add_rewrite_rule('digital/category/([^/]+)/page/([0-9]+)/?$', 'index.php?digital_cat=$matches[1]&paged=$matches[2]', 'top');

add_rewrite_rule('character/category/([^/]+)/?$', 'index.php?character_cat=$matches[1]', 'top');
add_rewrite_rule('character/category/([^/]+)/page/([0-9]+)/?$', 'index.php?character_cat=$matches[1]&paged=$matches[2]', 'top');

add_rewrite_rule('tour/category/([^/]+)/?$', 'index.php?tour_cat=$matches[1]', 'top');
add_rewrite_rule('tour/category/([^/]+)/page/([0-9]+)/?$', 'index.php?tour_cat=$matches[1]&paged=$matches[2]', 'top');

// add_rewrite_rule('walk/category/([^/]+)/?$', 'index.php?walk_cat=$matches[1]', 'top');
// add_rewrite_rule('walk/category/([^/]+)/page/([0-9]+)/?$', 'index.php?walk_cat=$matches[1]&paged=$matches[2]', 'top');

// add_rewrite_rule('events/category/([^/]+)/?$', 'index.php?events_cat=$matches[1]', 'top');
// add_rewrite_rule('events/category/([^/]+)/page/([0-9]+)/?$', 'index.php?events_cat=$matches[1]&paged=$matches[2]', 'top');

/*-----------------------------------------------------------------------------------
	カスタム投稿のアーカイブページの記事数を設定する。
-----------------------------------------------------------------------------------*/
add_action('pre_get_posts', 'my_pre_get_posts');
function my_pre_get_posts($query) {
	if(!is_admin() && $query->is_main_query()) {
		// if (is_tax('digital_cat') || is_post_type_archive('digital')) {
		// 	$query->set('posts_per_page', '12');
		// }
	}
}


/*-----------------------------------------------------------------------------------
SearchFilter：検索対象にカスタム投稿を追加
-----------------------------------------------------------------------------------*/
//add_action( 'pre_get_posts','SearchFilter' );
function SearchFilter($query) {
	if ( !is_admin() && $query->is_main_query() && $query->is_search() ) {
	$query->set('post_type', array('post', 'page')); // arrayの中にカスタム投稿タイプ名を追加する。
	}
}
