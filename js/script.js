$(function() {  
  // ハンバーガーめにゅー
  function toggleNav() {
    var body = document.body;
    var hamburger = document.getElementById('sub-nav_btn');
    var blackBg = document.getElementById('sub-nav_bg');
  
    hamburger.addEventListener('click', function() {
      body.classList.toggle('nav_open'); //メニュークリックでnav-openというクラスがbodyに付与
    });
    blackBg.addEventListener('click', function() {
      body.classList.remove('nav_open'); //もう一度クリックで解除
    });
  }
  toggleNav();

//TOPページnewsリスト
  const swiper = new Swiper('.swiper-container', {
    spaceBetween: 20,
    loop: true,
    speed: 800,
    slidesPerView: 2,
    centeredSlides : true,
    autoplay: {
      delay: 2500,
      disableOnInteraction: false,
    },
    breakpoints: {
      767: {//767px~1179pxのコード
        slidesPerView: 2,
        spaceBetween:60,
      },
      1180:{//1180px以上
        slidesPerView: 3,
        spaceBetween:60,
      },
    },
  });
  (function(d) {
    var config = {
      kitId: 'iir4oxh',
      scriptTimeout: 3000,
      async: true
    },
    h=d.documentElement,t=setTimeout(function(){h.className=h.className.replace(/\bwf-loading\b/g,"")+" wf-inactive";},config.scriptTimeout),tk=d.createElement("script"),f=false,s=d.getElementsByTagName("script")[0],a;h.className+=" wf-loading";tk.src='https://use.typekit.net/'+config.kitId+'.js';tk.async=true;tk.onload=tk.onreadystatechange=function(){a=this.readyState;if(f||a&&a!="complete"&&a!="loaded")return;f=true;clearTimeout(t);try{Typekit.load(config)}catch(e){}};s.parentNode.insertBefore(tk,s)
  })(document);
});