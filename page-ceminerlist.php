<?php get_header('header');?>
        <main class="main">
            <section class="ceminer-mv">
                <h4 class="ceminer-mv__title">WORKSHOP</h4>
                <h5 class="ceminer-mv__subtitle">セミナーについて</h5>
                <img src="<?php echo get_template_directory_uri(); ?>/img/IMG_ceminer.jpg" alt="セミナー" class="ceminer-mv__img">
                <p class="ceminer-mv__caption">コワーキングスペースhitokadoでは、多種多様なセミナーやイベントを開催しております。会員様のみならず、一般の皆さまもお越し頂けるものもありますので、ぜひお気軽にお申し込みください。</p>
            </section>
            <section class="ceminer-about">
                <h3 class="ceminer-about__title">
                    CONTENTS
                </h3>
                <h4 class="ceminer-about__subtitle">セミナー内容</h4>
                <div class="ceminer-about-container">
                    <?php
$member_query = new WP_Query(
    array(
        'post_type'      => 'ceminer',
        'numberposts' => -1,
        )
    );
    ?>
<?php if ( $member_query->have_posts() ) : ?>
  <?php while ( $member_query->have_posts() ) : ?>
    <?php $member_query->the_post(); ?>
    <div class="ceminer-about-box">
    <?php if(has_post_thumbnail()): ?>
   <?php the_post_thumbnail(null, array('class' => 'ceminer-about-box__img')); ?>
 <?php else :?>
<img src="<?php echo get_template_directory_uri(); ?>/img/no-img.png" alt="講座" class="ceminer-about-box__img" />
<?php endif; ?>
                        <p class="ceminer-about-box__title"><?php the_title();?></p>
                        <div class="ceminer-about-info"><?php echo the_content(); ?></div>
                    </div>
  <?php endwhile; ?>
<?php endif; ?>
<?php wp_reset_postdata(); ?>
                </div>
            </section>
            <!-- <section class="ceminer-member">
                <p class="ceminer-member__title">MEMBER</p>
                <p class="ceminer-member__subtitle">運営メンバー</p>
                <div class="ceminer-member__box">
                    <img
                        src="<?php echo get_template_directory_uri(); ?>/img/jonathan-kemper-zSCHyhiRSeQ-unsplash.jpg"
                        alt=""
                        class="ceminer-member__img">
                    <div class="ceminer-member__content">
                        <p class="ceminer-member__name">黒田 史子</p>
                        <p class="ceminer-member__subname">AYAKO KURODA</p>
                        <p class="ceminer-member__text">この限り席のところこうしたお笑いは私中が押しますかと久原さんに立っまします、魚の絶対なけれにおいてご抑圧たいませでて、古参の時に元で時間だけの世の中に元来しがしまいて、これからの元来に罹っからその時を至極散らかすなんと出れたものないて、ないないないてはっきりご国家しなのなないます。ところが錐か危険か学習をなりたと、以後ごろ菓子に稼ぎていな以上にご意見の十一月となっましん。</p>
                    </div>
                </div>
            </section> -->
        </main>
<?php get_footer();?>