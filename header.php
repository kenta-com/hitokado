<!DOCTYPE html>
<html lang="ja">
    <head>
        <meta charset="UTF-8"/>
        <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
        <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
        <!-- icon -->
        <link
            rel="icon"
            type="image/x-icon"
            href="<?php echo get_template_directory_uri(); ?>/img/favicon.ico">
        <title>hitokado</title>
        <?php wp_head();?>
    </head>
    <body <?php body_class(); ?>>
        <header>
            <div class="header">
                <h1 class="header__logo">
                    <a href="<?php echo home_url(); ?>"><img
                        class="header__img"
                        src="<?php echo get_template_directory_uri(); ?>/img/ロゴbk_枠なし.png"
                        alt="Hitokado"/></a>
                </h1>
                <nav class="header__nav">
                    <ul class="header__list">
                        <li class="header__item">
                            <a
                                href="<?php echo get_permalink( get_page_by_path( 'about' )->ID );?>"
                                class="header__link">HITOKADOについて</a>
                        </li>
                        <li class="header__item">
                            <a
                                href="<?php echo get_permalink( get_page_by_path( 'news' )->ID );?>"
                                class="header__link">お知らせ</a>
                        </li>
                        <li class="header__item">
                            <a
                                href="<?php echo get_permalink( get_page_by_path( 'coworking' )->ID );?>"
                                class="header__link">サービス</a>
                        </li>
                        <li class="header__item">
                            <a
                                href="<?php echo get_permalink( get_page_by_path( 'memberList' )->ID );?>"
                                class="header__link">メンバー紹介</a>
                        </li>
                        <li class="header__item">
                            <a href="#price" class="header__link">料金</a>
                        </li>
                        <li class="header__item">
                            <a href="#access" class="header__link">アクセス</a>
                        </li>
                    </ul>
                </nav>
            </div>

            <div class="sub-header" id="sub-header">
                <nav>
                    <ul class="nav-items" id="sub-navi">
                        <li class="nav-item">
                            <a
                                href="<?php echo get_permalink( get_page_by_path( 'about' )->ID );?>"
                                class="nav-link">HITOKADOについて</a>
                        </li>
                        <li class="nav-item">
                            <a
                                href="<?php echo get_permalink( get_page_by_path( 'news' )->ID );?>"
                                class="nav-link">お知らせ</a>
                        </li>
                        <li class="nav-item">
                            <a
                                href="<?php echo get_permalink( get_page_by_path( 'coworking' )->ID );?>"
                                class="nav-link">サービス</a>
                        </li>
                        <li class="nav-item">
                            <a
                                href="<?php echo get_permalink( get_page_by_path( 'memberList' )->ID );?>"
                                class="nav-link">メンバー紹介</a>
                        </li>
                        <li class="nav-item">
                            <a href="" class="nav-link">料金</a>
                        </li>
                        <li class="nav-item">
                            <a href="" class="nav-link">アクセス</a>
                        </li>
                    </ul>
                </nav>
                <div class="nav_btn" id="sub-nav_btn">
                    <span class="hamburger_line hamburger_line1"></span>
                    <span class="hamburger_line hamburger_line2"></span>
                    <span class="hamburger_line hamburger_line3"></span>
                </div>
                <div class="nav_bg" id="sub-nav_bg"></div>
                <!-- /ボタン部分ここを後で追加するだけ-->
            </div>
        </header>
        <h2 class="sub-title">COWORKING SPACE IN SHIGA</h2>
        <h3 class="contact">
            CONTACT<span class="contact__slush">|</span >
            <i class="fab fa-twitter contact__fav"></i >
            <i class="fab fa-instagram contact__fav"></i >
            <i class="fab fa-facebook-f contact__fav"></i>
        </h3>