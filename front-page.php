<?php get_header();?>
<main class="main">
    <section class="mv">
        <img
            src="<?php echo get_template_directory_uri(); ?>/img/IMG_entrance.jpg"
            alt="メイン画像"
            class="mv__back-img"/>
        <img
            src="<?php echo get_template_directory_uri(); ?>/img/IMG_inter.jpg"
            alt="メイン画像"
            class="mv__back-img"/>
        <img
            src="<?php echo get_template_directory_uri(); ?>/img/IMG_one.jpg"
            alt="メイン画像"
            class="mv__back-img"/>
        <div class="mv-title">
            <img
                src="<?php echo get_template_directory_uri(); ?>/img/logo-black.png"
                alt="ロゴ"
                class="mv-title__logo-img"/>
            <h2 class="mv-title__caption">COWORKING SPACE IN SHIGA</h2>
        </div>
    </section>
    <section class="about">
        <h3 class="about__title">
            ABOUT HITOKADO
        </h3>
        <h4 class="about__subtitle">HITOKADOについて</h4>
        <div class="about-box">
                <img
                    src="<?php echo get_template_directory_uri(); ?>/img/IMG_about.jpg"
                    alt="HITOKADOについて"
                    class="about-box__img">
            <div class="about-box__content">
                <p class="about-box__txt">【2021年6月オープン】滋賀県の石山にある瀬田川。その瀬田川を一望できるところにある、“わざわざ通いたくなる”完全会員制コワーキングスペース。それがhitokadoです。</p>
                <button class="about-box__btn"><a href="<?php echo get_permalink( get_page_by_path( 'about' )->ID );?>">ABOUT US</a></button>
            </div>
        </div>
    </section>
    <section class="news">
        <h3 class="news__title">NEWS & BLOG</h3>
        <h4 class="news__subtitle">お知らせ</h4>
        <!-- Swiper -->
        <div class="swiper-container">
            <div class="swiper-wrapper">
            <?php
		    $cat = get_the_category();
            $slug = $cat[0]->slug;
            $name = $cat[0]->name;
            $link = get_category_link($cat[0]->cat_ID);
			?>
                <?php
                if(have_posts()) :
                while(have_posts()) :
                the_post();
                ?>
                <!-- ループしたいHTMLをここに置く -->
                <div class="swiper-slide">
                    <a class="news-box" href="<?php the_permalink(); ?>">
                    <?php if(has_post_thumbnail()): ?>
                    <?php the_post_thumbnail(null, array('class' => 'news-box__img')); ?>
                    <?php else :?>
<img src="<?php echo get_template_directory_uri(); ?>/img/no-img.png" alt="NO-IMAGE" class="news-box__img" />
<?php endif; ?>
                        <p class="news-box__title"><?php the_title()?></p>
                        <div class="news-info">
                            <p class="news-info__date"><?php the_time('Y/m/d'); ?></p>
                            <object data="" type=""><a href="<?php echo $link; ?>" class="news-info__cat"><?php echo $name; ?></a></object>
                        </div>
                    </a>
                </div>
            <?php endwhile;
                else:
                                ?>
                <?php endif; ?>
            </div>
        </div>
        <button class="news__btn"><a href="<?php echo get_permalink( get_page_by_path( 'news' )->ID );?>">
            VIEW MORE
        </a></button>
    </section>
</section>
<section class="service">
        <h3 class="service__title">SERVICE</h3>
        <h4 class="service__subtitle">サービス一覧</h4>
        <div class="service-box">
            <a href="<?php echo get_permalink( get_page_by_path( 'coworking' )->ID );?>" class="service-box__link">
                <img
                    src="<?php echo get_template_directory_uri(); ?>/img/IMG_service.jpg"
                    alt="サービス"
                    class="service-box__img">
            </a>
                <div class="service-box__content service-box__content--upper">
                    <h5 class="service-box__title">COWORKING SPACE</h5>
                <h6 class="service-box__subtitle">コワーキングスペース</h6>
                <p class="service-box__txt">瀬田川を一望しながら静かに仕事が出来る“集中スペース”
                    、お客様との打ち合わせや雑談に花を咲かせる“交流スペース”、そしてビデオ会議ブースに、フリー個室など、シーンに応じたお部屋をご準備しました</p>
                    <button class="service-box__btn"><a href="<?php echo get_permalink( get_page_by_path( 'coworking' )->ID );?>">VIEW MORE</a></button>
            </div>
        </div>
        <div class="service-box service-box--reverce">
            <a href="<?php echo get_permalink( get_page_by_path( 'ceminer' )->ID );?>" class="service-box__link">
                <img
                src="<?php echo get_template_directory_uri(); ?>/img/IMG_ceminer.jpg"
                alt="セミナー"
                class="service-box__img">
            </a>
            <div class="service-box__content">
                <h5 class="service-box__title">WORKSHOP</h5>
                <h6 class="service-box__subtitle">セミナー</h6>
                <p class="service-box__txt">経営哲学から実務的なスキルアップまで、ここでしか学べないセミナーや一風変わったイベントを開催。ときには会員だけでなく、一般の方も参加可能な企画もお届けいたします。</p>
                <button class="service-box__btn">
                    <a href="<?php echo get_permalink( get_page_by_path( 'ceminer' )->ID );?>">
                        VIEW MORE
                    </a>
                </button>
            </div>
        </div>
    </section>
    <section class="amenity">
        <h3 class="amenity__title">LIST of AMENITIES</h3>
        <h4 class="amenity__subtitle">設備・アメニティ一覧</h4>
        <div class="amenity-box">
        <div class="amenity-frame">
            <p class="amenity-frame__text">無料WiFi完備。全席電源付き。
ホッと一息つきたいときのドリンクやお菓子もご準備しております。
また、当施設の住所を利用しての法人登記やお客様専用の郵便ポストを利用できるサービスもございます。
</p>
            <p class="amenity-frame__text">アメニティは会員の皆さまのご要望や働き方に合わせ、検討・増設していきます。
よりよい施設にするために、ぜひご意見やご要望をお聞かせください。</p>
        </div>
        <div class="amenity-content">
                <p class="amenity-content__title">無料</p>
                <div class="amenity-content__box">
                    <div class="amenity-content__icon">
                        <i class="fas fa-wifi amenity-content__fav"></i>
                        <p class="amenity-content__des">wifi</p>
                    </div>
                    <div class="amenity-content__icon">
                        <i class="fas fa-plug"></i>
                        <p class="amenity-content__des">電源</p>
                    </div>
                    <div class="amenity-content__icon">
                        <i class="fas fa-mug-hot"></i>
                        <p class="amenity-content__des">フリードリンク</p>
                    </div>
                    <div class="amenity-content__icon">
                        <i class="fas fa-print"></i>
                        <p class="amenity-content__des">プリンター</p>
                    </div>
                    <div class="amenity-content__icon">
                        <i class="fas fa-parking"></i>
                        <p class="amenity-content__des">駐車場</p>
                    </div>
                </div>
            </div>
            <div class=" amenity-content">
                <p class="amenity-content__title">有料</p>
                <div class="amenity-content__box">
                    <div class="amenity-content__icon">
                        <i class="fas fa-mail-bulk"></i>
                        <p class="amenity-content__des">郵便BOX</p>
                    </div>
                    <div class="amenity-content__icon">
                        <i class="fas fa-file-alt"></i>
                        <p class="amenity-content__des">登記登録</p>
                    </div>
                    <div class="amenity-content__icon">
                        <i class="fas fa-print"></i>
                        <p class="amenity-content__des">プリンター</p>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <section class="price" id="price">
        <h3 class="price__title">PRICE</h3>
        <h4 class="price__subtitle">料金表</h4>
        <div class="price-box">
            <h5 class="price-box__title">MONTHLY SUBSCRIPTION</h5>
            <h6 class="price-box__subtitle">月額会員制</h6>
            <p class="price-content">コワーキングスペースhitokadoは、完全会員制です。ドロップイン（一時利用）は現時点では受け付けておりません。会員の方はスマートロックでの入退室となり、いつでも自由にご活用いただけます。また、業務効率やSNS活用のコンサルタントなどの専門家チームへの相談も特典のひとつです。</p>
        </div>

        <div class="price-box2">
            <div class="price-box2__price">20,000 <span>yen (税込)</span></div>
            <button class="price-box2__btn"><a href="https://forms.gle/hHh4jTxUx13XRDWa6">CONTACT</a></button>
        </div>
    </section>
    <section class="faq">
        <h3 class="faq__title">FAQ</h3>
        <h4 class="faq__subtitle">よくある質問</h4>
        <div class="faq__back">
            <div class="faq-box">
                <div class="faq-content">
                    <p class="faq-content__question">Q.営業時間を教えてください。</p>
                    <p class="faq-content__answer">
                    A.会員の方は朝8時〜夜8時まで、自由に使っていただけます。受付スタッフはおらず、会員登録の際に各自のスマートフォンで扉が開く設定（スマートキー）をいたします。
                    </p>
                </div>
                <div class="faq-content">
                    <p class="faq-content__question">Q.ドロップイン（一時利用）はありますか。</p>
                    <p class="faq-content__answer">
                        A.2021年6月現在、ドロップインの受け入れはありません。会員登録にご興味のある方は、お問い合わせの上、ご来訪いただくようにお願いいたします。
                    </p>
                </div>
                <div class="faq-content">
                    <p class="faq-content__question">Q.会員契約の期間はどれぐらいですか。</p>
                    <p class="faq-content__answer">
                        A.最短で2ヶ月間です。例えば6月に契約をスタートさせたならば、7月末までが最短契約期間です。2ヶ月が過ぎたのちは、1ヶ月単位での更新となります。（ただし、退会1ヶ月前までの申告必須）
                    </p>
                </div>
                <div class="faq-content">
                    <p class="faq-content__question">Q.会員同士が繋がるような仕組みはありますか？</p>
                    <p class="faq-content__answer">
                        A.このコワーキングスペースのメリットのひとつでもありますので、様々な形で会員同士が繋がるような仕掛けを作っていく予定です。
                    </p>
                </div>
            </div>
            <!-- <button class="faq__btn"><a href="">VIEW MORE</a></button> -->
        </div>
    </section>
    <section class="access" id="access">
        <h3 class="access__title">ACCESS</h3>
        <h4 class="access__subtitle">アクセスマップ</h4>
        <iframe
        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3270.4249257113365!2d135.90773831523882!3d34.94595698037218!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x60016d2938ae8771%3A0xeec1adcbd6a1b8cd!2z5Lit5bGx44K544Od44O844OE!5e0!3m2!1sja!2sjp!4v1619566277266!5m2!1sja!2sjp"
        width="600"
        height="600"
            style="border:0;"
            allowfullscreen=""
            loading="lazy"></iframe>
            <table class="access-table">
                <tr class="access-table__row">
                    <th class="access-table__head">〒1520-0863</th>
                <td class="access-table__data">滋賀県大津市千町一丁目25-25 なかやまビル 3F</td>
            </tr>
            <tr class="access-table__row">
                <th class="access-table__head">TEL | 077-572-8850（担当：中山）</th>
                <td class="access-table__data">営業時間 | 08:00-20:00</td>
                <td class="access-table__data">定休日 | 無休</td>
            </tr>
            <tr class="access-table__row">
                <th class="access-table__head access-table__head--bold">車でお越しの方</th>
                <td class="access-table__data">
                無料駐車場 20台有り（共有）</td>
                </tr>
                <tr class="access-table__row">
                    <th class="access-table__head access-table__head--bold">電車でお越しの方</th>
                    <td class="access-table__data">
                    JR石山駅下車後<br>
                    京阪バス（4番）大石小学校行<br>
                    赤川で下車<br>
                    徒歩1分
                    </td>
                    </tr>
                </table>
            </section>
            <section class="reservation">
            <h3 class="reservation__title">schedule</h3>
                    <h4 class="reservation__subtitle">スケジュール</h4>
                        <!-- <a href="https://reserva.be/hitokado/reserve" target="_blank"><img class="reservation__img" src="https://reserva.be/reserva/images/btn_reserve_3.png" alt="RESERVA予約システムから予約する" width="120"></a> -->
                        <div id="calendar"></div>
                        </section>
        </main>
        <?php get_footer();?>