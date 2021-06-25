<?php get_header('header');?>
        <main class="main">
            <div class="news-galary">
                <h3 class="news-galary__title">
                    NEWS & BLOG
                </h3>
                <h4 class="news-galary__subtitle">お知らせ</h4>
                <div class="news-galary-container">
                <?php
$paged = (get_query_var('paged')) ? get_query_var('paged') : 1;
$news_query = new WP_Query(
  array(
    'post_status' => 'publish',
    'posts_per_page' => 6,
    'paged' => $paged,
  )
);
?>
<?php if ($news_query->have_posts()) : while ($news_query->have_posts()) : $news_query->the_post(); ?>
<a class="news-galary-box" href="<?php the_permalink(); ?>">
<?php if(has_post_thumbnail()): ?>
    <?php the_post_thumbnail(null, array('class' => 'news-galary-box__img')); ?>
    <?php else :?>
<img src="<?php echo get_template_directory_uri(); ?>/img/no-img.png" alt="" class="news-galary-box__img" />
<?php endif; ?>
                        <p class="news-galary-box__title"><?php the_title()?></p>
                        <div class="news-galary-info">
                            <p class="news-galary-info__date"><?php the_time('Y/m/d'); ?></p>
                            <?php
                                      $category = get_the_category();
                                      $cat_name = $category[0]->cat_name;
                                      $link = get_category_link($category[0]->cat_ID);
                                    ?>
                            <object data="" type=""><a href="<?php echo $link;?>" class="news-galary-info__cat"><?php echo $cat_name; ?></a></object>
                        </div>
                    </a>
                    <?php endwhile;
                          endif;?>
                          </div>
                          <!-- /* ページャーの表示 */ -->
<?if ( function_exists( 'pagination' ) ) :
  pagination( $news_query->max_num_pages, $paged );  //$wp_query ではなく $the_query ないことに注意！
endif;
                    ?>
<?php
// サブクエリをリセット
wp_reset_postdata();
?>
            </div>
        </main>
<?php get_footer();?>