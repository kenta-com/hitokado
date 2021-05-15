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

function pagination($pages = '', $range = 1)
{
     $showitems = ($range * 2)+1;  
 
     global $paged;
     if(empty($paged)) $paged = 1;
 
     if($pages == '')
     {
         global $wp_query;
         $pages = $wp_query->max_num_pages;
         if(!$pages)
         {
             $pages = 1;
         }
     }   
 
     if(1 != $pages)
     {
         echo "<div class=\"pagination\"><div class=\"pagination-box\"><span class=\"page-of\">Page ".$paged." of ".$pages."</span>";
         if($paged > 2 && $paged > $range+1 && $showitems < $pages) echo "<a href='".get_pagenum_link(1)."'>&laquo;</a>";
         if($paged > 1 && $showitems < $pages) echo "<a href='".get_pagenum_link($paged - 1)."'>&lsaquo;</a>";
 
         for ($i=1; $i <= $pages; $i++)
         {
             if (1 != $pages &&( !($i >= $paged+$range+1 || $i <= $paged-$range-1) || $pages <= $showitems ))
             {
                 echo ($paged == $i)? "<span class=\"current\">".$i."</span>":"<a href='".get_pagenum_link($i)."' class=\"inactive\">".$i."</a>";
             }
         }
 
         if ($paged < $pages && $showitems < $pages) echo "<a href=\"".get_pagenum_link($paged + 1)."\">&rsaquo;</a>";
         if ($paged < $pages-1 &&  $paged+$range-1 < $pages && $showitems < $pages) echo "<a href='".get_pagenum_link($pages)."'>&raquo;</a>";
         echo "</div></div>\n";
     }
}

function the_pagination() {
  global $wp_query;
  $bignum = 999999999;
  if ( $wp_query->max_num_pages <= 1 )
    return;
  echo '<nav class="pagination">';
  echo paginate_links( array(
    'base'         => str_replace( $bignum, '%#%', esc_url( get_pagenum_link($bignum) ) ),
    'format'       => '',
    'current'      => max( 1, get_query_var('paged') ),
    'total'        => $wp_query->max_num_pages,
    'prev_text'    => '&larr;',
    'next_text'    => '&rarr;',
    'type'         => 'list',
    'end_size'     => 3,
    'mid_size'     => 3
  ) );
  echo '</nav>';
}
?>