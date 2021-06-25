<?php get_header('header');?>
<main class="main">
            <section class="single-news">
                <p class="single-news__title">記事・ブログタイトル</p>
                <?php
    if(have_posts()) :
        while(have_posts()) :
            the_post();
            ?>
    <!-- ループしたいHTMLをここに置く -->
            <?php
    $cat = get_the_category();
    $slug = $cat[0]->slug;
    $name = $cat[0]->name;
    $link = get_category_link($cat[0]->cat_ID);
    ?>
            <a href="<?php echo $link;?>" class="single-news__cat"><?php echo $name; ?></a>
                                <?php if(has_post_thumbnail()): ?>
    <?php the_post_thumbnail(null, array('class' => 'single-news__img')); ?>
    <?php else :?>
    <img src="<?php echo get_template_directory_uri(); ?>/img/no-img.png" alt="" class="single-news__img" />
    <?php endif; ?>
    <p class="single-news__subtitle"><?php the_title_attribute(); ?></p>
    <div class="single-news__content"><?php the_content(); ?></div>
</section>
</main>
    <div class="page-btn">
<div class="page-btn__link"> <?php previous_post_link('%link','<i class="fas fa-angle-left"></i>PREV');?></div>
<a href="<?php echo $link;?>" class="page-btn__link"><?php echo $name; ?></a>
            <div class="page-btn__link"> <?php next_post_link('%link','NEXT<i class="fas fa-angle-right"></i>');?></div>
    </div>
    <?php
    endwhile;
    else:
    ?>
    <p>お探しの記事はありませんでした。</p>
<?php endif; ?>
<?php get_footer();?>