<html lang="en" dir="ltr">
  <head>
    <meta charset="<?php bloginfo("charset"); ?>" />
    <title><?php bloginfo("name"); ?></title>
    <link rel="stylesheet" href="<?php bloginfo("template_url") ?>/assets/css/style.css" />
    <link rel="stylesheet" href="<?php bloginfo("template_url") ?>/assets/css/menu.css" />
    <link rel="stylesheet" href="<?php bloginfo("template_url") ?>/assets/css/header.css" />
    <link rel="stylesheet" href="<?php bloginfo("template_url") ?>/assets/css/slider.css" />
    <link rel="stylesheet" href="<?php bloginfo("template_url") ?>/assets/css/swiper-bundle.min.css" />
    <link rel="stylesheet" href="<?php bloginfo("template_url") ?>/assets/css/discount-box.css" />
    <link rel="stylesheet" href="<?php bloginfo("template_url") ?>/assets/css/suggest-box.css" />
    <link rel="stylesheet" href="<?php bloginfo("template_url") ?>/assets/css/icon-box.css" />
    <link rel="stylesheet" href="<?php bloginfo("template_url") ?>/assets/css/best-selling.css" />
    <link rel="stylesheet" href="<?php bloginfo("template_url") ?>/assets/css/middle-banner.css" />
    <link rel="stylesheet" href="<?php bloginfo("template_url") ?>/assets/css/last-article.css" />
    <link rel="stylesheet" href="<?php bloginfo("template_url") ?>/assets/css/authentic-brand.css" />
    <link rel="stylesheet" href="<?php bloginfo("template_url") ?>/assets/css/footer.css" />
    <?php wp_head(); ?>
  </head>
  <body>
    <header>
      <a class="btn-search" href="#"></a>
      <a class="btn-basket" href="#"></a>
      <a class="btn-register" href="#">ورود/ثبت نام</a>
      <a class="logo" href="#"><img src="<?php bloginfo("template_url") ?>/assets/img/Logo.png" alt="" /></a>
      <nav class="main-menu">
        <ul>
          <li><a href="#">صفحه اصلی</a></li>
          <li>
            <a href="#">فروشگاه</a>
            <ul>
              <li><a href="#">محصولات الکترونیکی</a></li>
              <li>
                <a href="#">محصولات دیجیتالی</a>
                <ul>
                  <li><a href="#">محصولات دیجیتالی 1</a></li>
                  <li><a href="#">محصولات دیجیتالی 2</a></li>
                  <li>
                    <a href="#">محصولات دیجیتالی 3</a>
                    <ul>
                      <li><a href="#">محصولات دیجیتالی 3-1</a></li>
                      <li><a href="#">محصولات دیجیتالی 3-2</a></li>
                      <li><a href="#">محصولات دیجیتالی 3-3</a></li>
                      <li><a href="#">محصولات دیجیتالی 3-4</a></li>
                    </ul>
                  </li>
                  <li><a href="#">محصولات دیجیتالی 4</a></li>
                </ul>
              </li>
              <li><a href="#">انواع مبایل های جدید</a></li>
              <li><a href="#">پر بازدیدترین محصولات</a></li>
            </ul>
          </li>
          <li><a href="#">تخفیف ها</a></li>
          <li><a href="#">آموزش ها</a></li>
          <li><a href="#">درباره ما</a></li>
        </ul>
      </nav>
    </header>

    <div class="recotik-container">
      <div class="left-banner">
        <a href="#">
          <img src="<?php bloginfo("template_url") ?>/assets/img/Left-Banner.png" alt="banner" />
        </a>
      </div>
      <div class="home-slider swiper first-swiper">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <img src="<?php bloginfo("template_url") ?>/assets/img/home-slider-1.png" alt="" />
          </div>
          <div class="swiper-slide">
            <img src="<?php bloginfo("template_url") ?>/assets/img/home-slider-1.png" alt="" />
          </div>
          <div class="swiper-slide">
            <img src="<?php bloginfo("template_url") ?>/assets/img/home-slider-1.png" alt="" />
          </div>
          <div class="swiper-slide">
            <img src="<?php bloginfo("template_url") ?>/assets/img/home-slider-1.png" alt="" />
          </div>
        </div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-pagination"></div>
      </div>
      <div class="clear"></div>
      <div class="banner-container">
        <div class="banner-item">
          <a href="#"><img src="<?php bloginfo("template_url") ?>/assets/img/banner-1.png" alt="banner" /></a>
        </div>
        <div class="banner-item">
          <a href="#"><img src="<?php bloginfo("template_url") ?>/assets/img/banner-2.png" alt="banner" /></a>
        </div>
        <div class="banner-item">
          <a href="#"><img src="<?php bloginfo("template_url") ?>/assets/img/banner-3.png" alt="banner" /></a>
        </div>
        <div class="banner-item">
          <a href="#"><img src="<?php bloginfo("template_url") ?>/assets/img/banner-4.png" alt="banner" /></a>
        </div>
      </div>
      <div class="suggest-box">
        <h3 class="suggest-title">پیشنهاد رکوتیک</h3>
        <a href="">
          <img src="<?php bloginfo("template_url") ?>/assets/img/suggest-product.png" alt="" />
        </a>
        <h3 class="suggest-product-title">مانیتور وضعیت محلی</h3>
        <h3 class="suggest-product-price">3,000,000 تومان</h3>
        <a href="">
          <span class="suggest-product-detail">افزودن به سبد خرید</span>
        </a>
      </div>
      <div class="discount-box swiper discount-swiper">
        <div class="swiper-wrapper">
          <div class="swiper-slide">
            <div class="discount-column product-image">
              <span class="discount-percent">10%</span>
              <img src="<?php bloginfo("template_url") ?>/assets/img/discount-product.png" alt="" />
            </div>
            <div class="discount-column content">
              <div class="product-prices">
                <span class="regular-price">2,000,000 تومان</span>
                <span class="discount-price">1,800,000 تومان</span>
              </div>
              <h2 class="product-title">سنسور دما و رطوبت سری (( ای 50 ))</h2>
              <p class="product-short-description">
                اندازه گیری دما <br />
                اندازه گیری رطوبت <br />
                ارسال اطلاعات به صورت زنده <br />
                امکان باز آوری داده ها در زمان نبود اتصال شبکه
              </p>
            </div>
            <div class="discount-column suggest-time">
              <div class="text-suggest-time">
                <span class="wonderfull-suggest">پیشنهاد شگفت انگیز</span>
                <span class="until-time">فرصت باقی مانده</span>
              </div>
              <div class="suggest-count-down-time">
                <div class="day">
                  <span class="no">02</span>
                  <span class="txt">روز</span>
                </div>
                <div class="hour">
                  <span class="no">14</span>
                  <span class="txt">ساعت</span>
                </div>
                <div class="minute">
                  <span class="no">14</span>
                  <span class="txt">دقیقه</span>
                </div>
                <div class="second">
                  <span class="no">43</span>
                  <span class="txt">ثانیه</span>
                </div>
              </div>
            </div>
          </div>
          <div class="swiper-slide">
            <div class="discount-column product-image">
              <span class="discount-percent">20%</span>
              <img src="<?php bloginfo("template_url") ?>/assets/img/discount-product.png" alt="" />
            </div>
            <div class="discount-column content">
              <div class="product-prices">
                <span class="regular-price">2,000,000 تومان</span>
                <span class="discount-price">1,800,000 تومان</span>
              </div>
              <h2 class="product-title">سنسور دما و رطوبت سری (( ای 50 ))</h2>
              <p class="product-short-description">
                اندازه گیری دما <br />
                اندازه گیری رطوبت <br />
                ارسال اطلاعات به صورت زنده <br />
                امکان باز آوری داده ها در زمان نبود اتصال شبکه
              </p>
            </div>
            <div class="discount-column suggest-time">
              <div class="text-suggest-time">
                <span class="wonderfull-suggest">پیشنهاد شگفت انگیز</span>
                <span class="until-time">فرصت باقی مانده</span>
              </div>
              <div class="suggest-count-down-time">
                <div class="day">
                  <span class="no">02</span>
                  <span class="txt">روز</span>
                </div>
                <div class="hour">
                  <span class="no">14</span>
                  <span class="txt">ساعت</span>
                </div>
                <div class="minute">
                  <span class="no">14</span>
                  <span class="txt">دقیقه</span>
                </div>
                <div class="second">
                  <span class="no">43</span>
                  <span class="txt">ثانیه</span>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="swiper-pagination"></div>
      </div>
      <div class="icon-box">
        <span><img src="<?php bloginfo("template_url") ?>/assets/img/Icon1.png" alt="" />ضمانت کالا</span>
        <span><img src="<?php bloginfo("template_url") ?>/assets/img/Icon2.png" alt="" />تخفیف</span>
        <span><img src="<?php bloginfo("template_url") ?>/assets/img/Icon3.png" alt="" />پرداخت در محل</span>
        <span><img src="<?php bloginfo("template_url") ?>/assets/img/Icon4.png" alt="" />بهترین قیمت روز</span>
        <span><img src="<?php bloginfo("template_url") ?>/assets/img/Icon5.png" alt="" />مکان یابی</span>
      </div>
      <div class="best-selling">
        <div class="best-selling-head-container">
          <h2 class="best-selling-head-title">پر فروش ترین سنسورها</h2>
        </div>
        <div class="best-selling-item-container">
          <span>
            <a href="">
              <img src="<?php bloginfo("template_url") ?>/assets/img/bs1.png" alt="" />
              <h4>رطوبت خاک</h4>
              <h4>1,100,000 تومان</h4>
            </a>
          </span>
          <span>
            <a href="">
              <img src="<?php bloginfo("template_url") ?>/assets/img/bs2.png" alt="" />
              <h4>دمای محیط</h4>
              <h4>1,200,000 تومان</h4>
            </a>
          </span>
          <span>
            <a href="">
              <img src="<?php bloginfo("template_url") ?>/assets/img/bs3.png" alt="" />
              <h4>اسیدیته خاک</h4>
              <h4>1,500,000 تومان</h4>
            </a>
          </span>
          <span>
            <a href="">
              <img src="<?php bloginfo("template_url") ?>/assets/img/bs4.png" alt="" />
              <h4>شدت نور</h4>
              <h4>2,500,000 تومان</h4>
            </a>
          </span>
          <span>
            <a href="">
              <img src="<?php bloginfo("template_url") ?>/assets/img/bs5.png" alt="" />
              <h4>دمای خاک</h4>
              <h4>890,000 تومان</h4>
            </a>
          </span>
        </div>
      </div>
      <div class="middle-banner">
        <div class="middle-banner-right">
          <a href=""><img src="<?php bloginfo("template_url") ?>/assets/img/mb-right.png" alt="" /></a>
        </div>
        <div class="middle-banner-left">
          <a href=""><img src="<?php bloginfo("template_url") ?>/assets/img/mb-left.png" alt="" /></a>
        </div>
      </div>
      <div class="last-article">
        <div class="last-article-head-container">
          <h2>آخرین مقالات</h2>
        </div>
        <div class="last-article-item-container">
          <a href="">
            <div>
              <img src="<?php bloginfo("template_url") ?>/assets/img/article-cover.png" alt="" />
              <h3>تاثیر هوش مصنوعی بر گلخانه</h3>
              <span class="last-article-item-writer">نام نویسنده</span>
              <span class="last-article-item-date">
                <img src="<?php bloginfo("template_url") ?>/assets/img/article-time-icon.png" alt="" />
                8 آبان 1402
              </span>
            </div>
          </a>
          <a href="">
            <div>
              <img src="<?php bloginfo("template_url") ?>/assets/img/article-cover.png" alt="" />
              <h3>تاثیر هوش مصنوعی بر گلخانه</h3>
              <span class="last-article-item-writer">نام نویسنده</span>
              <span class="last-article-item-date">
                <img src="<?php bloginfo("template_url") ?>/assets/img/article-time-icon.png" alt="" />
                8 آبان 1402
              </span>
            </div>
          </a>
          <a href="">
            <div>
              <img src="<?php bloginfo("template_url") ?>/assets/img/article-cover.png" alt="" />
              <h3>تاثیر هوش مصنوعی بر گلخانه</h3>
              <span class="last-article-item-writer">نام نویسنده</span>
              <span class="last-article-item-date">
                <img src="<?php bloginfo("template_url") ?>/assets/img/article-time-icon.png" alt="" />
                8 آبان 1402
              </span>
            </div>
          </a>
          <a href="">
            <div>
              <img src="<?php bloginfo("template_url") ?>/assets/img/article-cover.png" alt="" />
              <h3>تاثیر هوش مصنوعی بر گلخانه</h3>
              <span class="last-article-item-writer">نام نویسنده</span>
              <span class="last-article-item-date">
                <img src="<?php bloginfo("template_url") ?>/assets/img/article-time-icon.png" alt="" />
                8 آبان 1402
              </span>
            </div>
          </a>
          <a href="">
            <div>
              <img src="<?php bloginfo("template_url") ?>/assets/img/article-cover.png" alt="" />
              <h3>تاثیر هوش مصنوعی بر گلخانه</h3>
              <span class="last-article-item-writer">نام نویسنده</span>
              <span class="last-article-item-date">
                <img src="<?php bloginfo("template_url") ?>/assets/img/article-time-icon.png" alt="" />
                8 آبان 1402
              </span>
            </div>
          </a>
        </div>
      </div>
      <div class="authentic-brand">
        <div class="authentic-brand-head-container">
          <h2 class="authentic-brand-head-title">برندهای معتبر</h2>
        </div>
        <div class="authentic-brand-item-container">
          <a href="">
            <div>
              <img src="<?php bloginfo("template_url") ?>/assets/img/authentic-brand-item1.png" alt="" />
            </div>
          </a>
          <a href="">
            <div>
              <img src="<?php bloginfo("template_url") ?>/assets/img/authentic-brand-item2.png" alt="" />
            </div>
          </a>
          <a href="">
            <div>
              <img src="<?php bloginfo("template_url") ?>/assets/img/authentic-brand-item3.png" alt="" />
            </div>
          </a>
          <a href="">
            <div>
              <img src="<?php bloginfo("template_url") ?>/assets/img/authentic-brand-item4.png" alt="" />
            </div>
          </a>
          <a href="">
            <div>
              <img src="<?php bloginfo("template_url") ?>/assets/img/authentic-brand-item5.png" alt="" />
            </div>
          </a>
          <a href="">
            <div>
              <img src="<?php bloginfo("template_url") ?>/assets/img/authentic-brand-item6.png" alt="" />
            </div>
          </a>
        </div>
      </div>
    </div>

    <footer>
      <div class="recotik-container">
        <div class="footer-icon"></div>
        <div class="footer-detail">
          <h4 class="footer-detail-title">راه های ارتباطی</h4>
          <p>
            شماره تماس : 02144488855
            <br />
            ایمیل: kw@info.com
            <br />
            آدرس : آدرس مورد نظر
            <br />
            زمان پاسخگویی : از هشت صبح تا هشت بعد از ظهر
          </p>
        </div>
        <div class="footer-detail">
          <h4 class="footer-detail-title">دسترسی سریع</h4>
          <ul>
            <li><a href="">درباره ما</a></li>
            <li><a href="">پیگیری سفارش</a></li>
            <li><a href="">روش های پرداخت</a></li>
            <li><a href="">سوالات متداول</a></li>
          </ul>
        </div>
        <div class="footer-detail">
          <h4 class="footer-detail-title">مجوزها</h4>
          <a href=""><img src="<?php bloginfo("template_url") ?>/assets/img/footer-credits.png" alt="" /></a>
        </div>
        <div class="footer-copy-right">
          <p>
            استفاده از منابع سایت برای اهداف غیر تجاری با ذکر منبع بدون مانع می
            باشد
          </p>
        </div>
      </div>
    </footer>
    <?php wp_footer(); ?>
    <script src="<?php bloginfo("template_url") ?>/assets/js/swiper-bundle.min.js"></script>
    <script>
      var swiper = new Swiper(".first-swiper", {
        loop: true,
        autoplay: {
          delay: 2000,
        },
        navigation: {
          nextEl: ".swiper-button-next",
          prevEl: ".swiper-button-prev",
        },
        pagination: {
          el: ".swiper-pagination",
          type: "bullets",
          clickable: true,
        },
      });
    </script>
    <script>
      var menu = ["10%", "20%"];
      var swiper2 = new Swiper(".discount-swiper", {
        loop: true,
        direction: "vertical",
        pagination: {
          el: ".swiper-pagination",
          clickable: true,
          renderBullet: function (index, className) {
            return '<span class="' + className + '">' + menu[index] + "</span>";
          },
        },
      });
    </script>
  </body>
</html>
