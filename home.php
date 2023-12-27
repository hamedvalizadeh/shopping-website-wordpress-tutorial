<html lang="en" dir="ltr">

<head>
    <?php get_header('head'); ?>
</head>

<body>
    <?php get_header('menu'); ?>

    <div class="recotik-container">
        <div class="left-banner">
            <a href="#">
                <img src="<?php bloginfo("template_url") ?>/assets/img/Left-Banner.png" alt="banner" />
            </a>
        </div>
        <div class="home-slider swiper first-swiper">
            <div class="swiper-wrapper">
                <?php
                $args = array(
                    'post_type' => 'slider',
                    'posts_per_page' => 3
                );
                $qry = new WP_Query($args);
                if ($qry->have_posts()) {
                    while ($qry->have_posts()) {
                        $qry->the_post();
                        ?>
                        <div class="swiper-slide">
                            <a target="_blank" href="<?php bloginfo('url'); ?>">
                                <?php the_post_thumbnail(); ?>
                            </a>
                        </div>
                        <?php
                    }
                } else {
                    ?>
                    <div class="swiper-slide">
                        <img src="<?php bloginfo("template_url") ?>/assets/img/home-slider-1.png" alt="" />
                    </div>
                    <?php
                }
                wp_reset_postdata();
                ?>
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
                <?php
                $args = array(
                    'post_type' => 'post',
                    'posts_per_page' => 5
                );
                $qry = new WP_Query($args);
                if ($qry->have_posts()) {
                    while ($qry->have_posts()) {
                        $qry->the_post();
                        ?>
                        <a href="<?php the_permalink(); ?>">
                            <div>
                                <?php the_post_thumbnail(); ?>
                                <h3>
                                    <?php the_title(); ?>
                                </h3>
                                <span class="last-article-item-writer">
                                    <?php echo get_the_author(); ?>
                                </span>
                                <span class="last-article-item-date">
                                    <img src="<?php bloginfo("template_url") ?>/assets/img/article-time-icon.png" alt="" />
                                    <?php the_date(); ?>
                                </span>
                            </div>
                        </a>
                        <?php
                    }
                } else {
                    ?>
                    <div class="swiper-slide">
                        <img src="<?php bloginfo("template_url") ?>/assets/img/home-slider-1.png" alt="" />
                    </div>
                    <?php
                }
                wp_reset_postdata();
                ?>
            </div>
        </div>
        <div class="authentic-brand">
            <div class="authentic-brand-head-container">
                <h2 class="authentic-brand-head-title">برندهای معتبر</h2>
            </div>
            <div class="authentic-brand-item-container">
                <?php
                $arg = array('post_type' => 'brands',
                    'posts_per_page' => 6);
                $qry = new WP_Query($arg);
                if ($qry->have_posts()) {
                    while ($qry->have_posts()) {
                        $qry->the_post();
                        ?>
                        <a href="<?php the_permalink(); ?>">
                            <div>
                                <?php the_post_thumbnail(); ?>
                            </div>
                        </a>
                        <?php
                    }
                } else {
                    echo 'Not Yet';
                }
                wp_reset_postdata();
                ?>
            </div>
        </div>
    </div>

    <?php get_footer('foot'); ?>
    <?php get_footer('script-slider'); ?>

</body>

</html>