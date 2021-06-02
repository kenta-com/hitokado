<?php get_header();?>
        <main class="main">
            <section class="member">
                <p class="member__title">MEMBERS</p>
                <p class="member__subtitle">メンバー紹介</p>
                <div class="member-box">
                <?php
$member_query = new WP_Query(
  array(
    'post_type'      => 'member',
    'numberposts' => 15,
  )
);
?>
<?php if ( $member_query->have_posts() ) : ?>
  <?php while ( $member_query->have_posts() ) : ?>
    <?php $member_query->the_post(); ?>
    <a class="member-about" href="<?php the_permalink(); ?>">
    <?php if(has_post_thumbnail()): ?>
   <?php the_post_thumbnail(null, array('class' => 'member-about__img')); ?>
 <?php else :?>
<img src="<?php echo get_template_directory_uri(); ?>/img/no-img.png" alt="" class="member-about__img" />
<?php endif; ?>
                        <p class="member-about__name"><?php the_title();?></p>
                        <p class="member-about__caption"><?php echo mb_substr(get_the_excerpt(), 0, 60); ?></p>
                    </a>
                    <div class="btn">
  <?php endwhile; ?>
<?php endif; ?>
<?php wp_reset_postdata(); ?>
                </div>
            </section>
        </main>
<?php get_footer();?>