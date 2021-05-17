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
    'member',//タクソノミー名
    'member',//投稿タイプを指定
    array(
      "label" => "カテゴリー",
      "labels" => $labels,
      "publicly_queryable" => true,
      "hierarchical" => true,
      "show_in_menu" => true,
      "query_var" => true,
      // "rewrite" => [ 'slug' => 'dep', 'with_front' => true, ], //カテゴリーのスラッグ
      "show_admin_column" => false,
      "show_in_rest" => true,
      "rest_base" => "dep",
      "show_in_quick_edit" => true,
    )
  );
}
add_action( 'init', 'category_init' );

/**
* ページネーション出力関数
* $paged : 現在のページ
* $pages : 全ページ数
* $range : 左右に何ページ表示するか
* $show_only : 1ページしかない時に表示するかどうか
*/
function pagination( $pages, $paged, $range = 2, $show_only = false ) {

  $pages = ( int ) $pages;    //float型で渡ってくるので明示的に int型 へ
  $paged = $paged ?: 1;       //get_query_var('paged')をそのまま投げても大丈夫なように

  //表示テキスト
  $text_first   = "«";
  //前へ
  $text_before  = "<";
  //次へ
  $text_next    = ">";
  $text_last    = "»";

  if ( $show_only && $pages === 1 ) {
      // １ページのみで表示設定が true の時
      echo '<div class="pagination"><span class="current pager">1</span></div>';
      return;
  }

  if ( $pages === 1 ) return;    // １ページのみで表示設定もない場合

  if ( 1 !== $pages ) {
      //２ページ以上の時
      echo '<div class="pagination"><span class="page_num">Page ', $paged ,' of ', $pages ,'</span>';
      if ( $paged > $range + 1 ) {
          // 「最初へ」 の表示
          echo '<a href="', get_pagenum_link(1) ,'" class="first">', $text_first ,'</a>';
      }
      if ( $paged > 1 ) {
          // 「前へ」 の表示
          echo '<a href="', get_pagenum_link( $paged - 1 ) ,'" class="prev">', $text_before ,'</a>';
      }
      for ( $i = 1; $i <= $pages; $i++ ) {

          if ( $i <= $paged + $range && $i >= $paged - $range ) {
              // $paged +- $range 以内であればページ番号を出力
              if ( $paged === $i ) {
                  echo '<span class="current pager">', $i ,'</span>';
              } else {
                  echo '<a href="', get_pagenum_link( $i ) ,'" class="pager">', $i ,'</a>';
              }
          }

      }
      if ( $paged < $pages ) {
          // 「次へ」 の表示
          echo '<a href="', get_pagenum_link( $paged + 1 ) ,'" class="next">', $text_next ,'</a>';
      }
      if ( $paged + $range < $pages ) {
          // 「最後へ」 の表示
          echo '<a href="', get_pagenum_link( $pages ) ,'" class="last">', $text_last ,'</a>';
      }
      echo '</div>';
  }
}
?>