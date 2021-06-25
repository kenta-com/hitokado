<?php get_header('header');?>
<main class="main">
    <section class="about-mv">
        <h4 class="about-mv__title">ABOUT hitokado</h4>
        <h5 class="about-mv__subtitle">hitokadoについて</h5>
        <img
            src="<?php echo get_template_directory_uri();?>/img/IMG_enter.jpg"
            alt="HITOKADOについて"
            class="about-mv__img">
        <div class="about-mv-content">
            <div class="about-mv-content__box">
                <p class="about-mv-content__title">hitokadoとは？</p>
                <p class="about-mv-content__subtitle">What is hitokado?</p>
            </div>
            <p class="about-mv-content__text">2021年6月にオープンしたコワーキングスペース。駅から遠い。けっして広くない。ドロップイン（一時利用）お断り。コワーキングスペースの常識から外れた
                “ 完全会員制・隠れ家的仕事場”
            </p>
        </div>
    </section>
    <section class="about-concept">
        <p class="about-concept__title">CONCEPT</p>
        <p class="about-concept__subtitle">コンセプト</p>.
        <p class="about-concept__caption">「一隅（いちぐう）を照らす、これすなわち国宝なり」</p>
        <p class="about-concept__subcaption">Bloom where you're planted. You are the national treasure.</p>
        <div class="about-concept-box">
            <div class="about-concept-box__text">
                平安時代に天台宗を開いた最澄の言葉があります。 一隅とは今、自分が置かれている場所。
                お金や財宝が国の宝ではなく、自分自身が今、置かれている立場や役割の中で精一杯光り輝くこと。 これすなわち『国の宝』という意味です。
                私たちが作りたい「hitokado」は、この一隅（いちぐう）という言葉からインスピレーションを受けました。
                <span></span>
                人それぞれ、自分の一隅があります。 他の人があまり気づかない、スポットライトの当たらない、ほんの片隅(一隅)であってもベストを尽くして輝く。
                「hitokado」は、そんな人たちが集える場所です。
                <span></span>
                ここに集う人たちがそれぞれの一隅において光り輝き、お互いが繋がる。 それは、やがて大きなシナジーを生み、一人では到底成し遂げられなかったことをも成し遂げられる。
                「hitokado」は、共同の仕事場ですが、集合場所でもあり、腕を磨く場所でもあり、安心できるホームなのです。

            </div>
            <img
                src="<?php echo get_template_directory_uri(); ?>/img/services_img.png"
                alt="コンセプト"
                class="about-concept-box__img">
        </div>
    </section>
    <section class="about-member">
        <p class="about-member__title">MEMBER</p>
        <p class="about-member__subtitle">運営メンバー</p>
        <div class="about-member__box">
            <img
                src="<?php echo get_template_directory_uri(); ?>/img/kuroda.jpg"
                alt="運営メンバー"
                class="about-member__img">
            <div class="about-member__content">
                <p class="about-member__name">黒田 史子</p>
                <p class="about-member__subname">KURODA AYAKO</p>
                <p class="about-member__text">平成3年生まれの「滋賀のなんでもコンサル屋さん」
                    滋賀大学経済学部卒業。Google正規代理店の取締役や東京のベンチャー会社の広報責任者を経て、現在は「業務効率化からSNSの使いこなしまで、なんでも分かりやすく伝える！」をモットーに、個人事業主の方や中小企業へのコンサル業務を行う。
                </p>
                <div class="fav-box">
                <a href="https://twitter.com/ayakokuroda">
                        <i class="fab fa-twitter"></i >
                    </a>
                    <a href="https://www.instagram.com/96chan_shiga/">
                        <i class="fab fa-instagram"></i >
                    </a>
                    <a href="https://www.facebook.com/ayako.kuroda.030813">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                </div>
            </div>
        </div>
        <div class="about-member__box">
            <img
                src="<?php echo get_template_directory_uri(); ?>/img/nakayama.jpg"
                alt="運営メンバー"
                class="about-member__img">
            <div class="about-member__content">
                <p class="about-member__name">中山博識</p>
                <p class="about-member__subname">NAKAYAMA HIRONORI</p>
                <p class="about-member__text">創業50年のスポーツ店、株式会社中山スポーツの2代目社長です！
地域総合スポーツ店では収まらず!(^^)!、ウォーキング専門店・100kmウォーキング・高地トレーニングジム・抗菌サービス事業・SUP・・そしてこの度　コワーキングスペースの運営を開始！新しいことが大好きで今後もコワーキングスペースに集まった人々と様々なことにチャレンジしていきたいと思います！
</p>
                <div class="fav-box">
                    <!-- <a href="">
                        <i class="fab fa-twitter"></i >
                    </a> -->
                    <!-- <a href="">
                        <i class="fab fa-instagram"></i >
                    </a> -->
                    <a href="https://www.facebook.com/nakaspo">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                </div>
            </div>
        </div>

    </section>
</main>
<?php get_footer();?>