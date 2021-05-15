<?php
remove_filter('the_excerpt', 'wpautop');

add_theme_support('title-tag');

add_theme_support('post-thumbnails');

add_theme_support('menus');
function load_script() {
  if ( !is_admin() ) {
    // ここでファイルの読み込みを行う
/* style.css */
wp_enqueue_style(
  'main',
  get_template_directory_uri() . '/css/style.css'
);
/* swiper.css */
wp_enqueue_style(
  'swiper',
  'https://unpkg.com/swiper/swiper-bundle.min.css'
);
/* font-awesome */
wp_enqueue_style(
  'font-awesome',
  'https://use.fontawesome.com/releases/v5.6.1/css/all.css'
);
//wordpressのjQueryを読み込まないようにする
wp_deregister_script('jquery');
// jquery
wp_enqueue_script(
  'jquery',
  'https://code.jquery.com/jquery-3.5.1.min.js',
  array(),
  false,
  true
);
/* swiper.js */
wp_enqueue_script(
  'swiper-script',
  'https://unpkg.com/swiper/swiper-bundle.min.js',
  array(),
  false,
  true
);
/* main.js */
wp_enqueue_script(
  'main-script',
  get_template_directory_uri() . '/js/script.js',
  array('jquery'),
  false,
  true
);

  }
}
add_action('init', 'load_script');

// カスタム投稿タイプ(呼び出し)
add_action('init', 'create_post_type');

function create_post_type() {
  register_post_type('member', [
    'labels' => [
      // 管理画面上で表示する投稿タイプ名
      'name' => 'メンバー',
      // 管理画面などで表示する名前（単数形）
      'singular_name' => 'メンバー',
      'all_items' => 'メンバー一覧',
    ],
    // パブリック設定（基本的にtrueにしておく）
    'public' => true,
    // アーカイブを有効にする
    'has_archive' => true,
    //ブロックエディタに変更
    'show_in_rest' => true,
			// 'supports'に'thumbnail'を追記
			'supports' => array('title','editor','thumbnail','excerpt'),
    'show_ui' => true,
  ]);
}

// カスタム投稿にカテゴリーを追加//////////////////////////////////////////////////////
function category_init() {
  register_taxonomy(
    'member-category',//タクソノミー名
    'member',//投稿タイプを指定
    array(
      "label" => "カテゴリー",
      "labels" => $labels,
      "publicly_queryable" => true,
      "hierarchical" => true,
      "show_in_menu" => true,
      "query_var" => true,
      "rewrite" => [ 'slug' => 'dep', 'with_front' => true, ], //カテゴリーのスラッグ
      "show_admin_column" => false,
      "show_in_rest" => true,
      "rest_base" => "dep",
      "show_in_quick_edit" => true,
    )
  );
}
add_action( 'init', 'category_init' );
?>