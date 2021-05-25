<?php get_header();
the_post();
// 記事を読み込み
;?>
        <main class="main">
            <section class="single-member">
                <p class="single-member__title">MEMBERS</p>
                <p class="single-member__subtitle">メンバー紹介</p>
                <div class="single-member__box">

<!-- ループしたいHTMLをここに置く -->
<?php if(has_post_thumbnail()): ?>
   <?php the_post_thumbnail(null, array('class' => 'single-member__img')); ?>
 <?php else :?>
<img src="<?php echo get_template_directory_uri(); ?>/img/no-img.png" alt="" class="single-member__img" />
<?php endif; ?>
<div class="single-member__content">
    <p class="single-member__name"><?php the_title();?></p>
    <p class="single-member__subname"><?php the_excerpt();?></p>
</div>

                </div>
                <div class="single-member__detail">
                <?php the_content();?>
                </div>
            </section>
        </main>
<?php get_footer();?>