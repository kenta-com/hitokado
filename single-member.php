<?php get_header();
the_post();
// 記事を読み込み
;?>
        <main class="main">
            <section class="single-member">
                <p class="single-member__title">MEMBER</p>
                <p class="single-member__subtitle">運営メンバー</p>
                <div class="single-member__box">

<!-- ループしたいHTMLをここに置く -->
<?php if(has_post_thumbnail()): ?>
   <?php the_post_thumbnail(null, array('class' => 'single-member__img')); ?>
 <?php else :?>
<img src="<?php echo get_template_directory_uri(); ?>/img/no-img.png" alt="" class="single-member__img" />
<?php endif; ?>
<div class="single-member__content">
    <p class="single-member__name"><?php the_title();?></p>
    <p class="single-member__subname"><?php the_excerpt()?></p>
    <p class="single-member__text"><?php the_content()?></p>
</div>

                </div>
                <div class="single-member-detail">
                    この限り席のところこうしたお笑いは私中が押しますかと久原さんに立っまします、魚の絶対なけれにおいてご抑圧たいませでて、古参の時に元で時間だけの世の中に元来しがしまいて、これからの元来に罹っからその時を至極散らかすなんと出れたものないて、ないないないてはっきりご国家しなのなないます。ところが錐か危険か学習をなりたと、以後ごろ菓子に稼ぎていな以上にご意見の十一月となっましん。
                </div>
            </section>
        </main>
<?php get_footer();?>