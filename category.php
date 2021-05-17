<?php get_header();?>
        <main class="main">
            <div class="news-galary">
                <h3 class="news-galary__title">
                  <?php               // 投稿データのカテゴリーを取得
              $cat = get_the_category();
              $slug = $cat[0]->slug;
              $cat_name = $cat[0]->name;
              $link = get_category_link($cat[0]->cat_ID);
              ?>
                  NEW & BLOG
                </h3>
                <h4 class="news-galary__subtitle"><?php echo $slug; ?></h4>
                <div class="news-galary-container">
<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
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
                            <p  class="news-galary-info__cat"><?php echo $cat_name; ?></p>
                        </div>
                    </a>
                    <?php endwhile;?>
                  </div>
                      <!-- /* 以下、ページャーの表示 */ -->
  <?  if ( function_exists( 'pagination' ) ) :
      pagination( $wp_query->max_num_pages, get_query_var( 'paged' ) );
  endif;
                          endif;?>

        </main>
<?php get_footer();?>