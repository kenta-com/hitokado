<?php get_header();?>
<main class="main">
            <section class="single-news">
                <p class="single-news__title">記事・ブログタイトル</p>
                <?php
$category = get_the_category();
$cat_name = $category[0]->cat_name;?>
                <p class="single-news__cat"><?php echo $cat_name; ?></p>
                                    <?php if(has_post_thumbnail()): ?>
  <?php the_post_thumbnail(null, array('class' => 'single-news__img')); ?>
<?php else :?>
<img src="<?php echo get_template_directory_uri(); ?>/img/no-img.png" alt="" class="single-news__img" />
<?php endif; ?>
                <p class="single-news__content"><?php the_title_attribute(); ?></p>
            </section>

        </main>
<?php get_footer();?>