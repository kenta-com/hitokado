<?php get_header();?>
        <main class="main">
            <div class="news-galary">
                <h3 class="news-galary__title">
                    NEWS & BLOG
                </h3>
                <h4 class="news-galary__subtitle">お知らせ</h4>
                <div class="news-galary-container">
                <?php query_posts( 'posts_per_page=1' );
if (have_posts()) : while (have_posts()) : the_post(); ?>
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
                                    ?>
                            <p class="news-galary-info__cat"><?php echo $cat_name; ?></p>
                        </div>
                    </a>
                    <?php endwhile;

else : ?>
<?php endif; ?>
<?php if( function_exists("the_pagination") ) the_pagination(); ?>
                </div>
            </div>
        </main>
<?php get_footer();?>