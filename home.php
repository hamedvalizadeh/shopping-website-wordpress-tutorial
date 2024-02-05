<html lang="en" dir="ltr">

<head>
    <?php get_header('head'); ?>
    <link rel="stylesheet" href="<?php bloginfo("template_url") ?>/assets/css/style.css" />
    <?php get_header('head-style'); ?>
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
        <?php
        $args = array(
            'post_type' => 'product',
            'posts_per_page' => 1,
            'product_cat_id' => 31,
            'orderby' => 'rand'
        );
        $qry = new WP_Query($args);
        if ($qry->have_posts()) {
            while ($qry->have_posts()) {
                $qry->the_post();
                global $product;
                $regular_price = (float) $product->get_regular_price();
                ?>
                <div class="suggest-box">
                    <h3 class="suggest-title">پیشنهاد رکوتیک</h3>
                    <a href="<?php the_permalink(); ?>">
                        <?php the_post_thumbnail(); ?>
                    </a>
                    <h3 class="suggest-product-title">
                        <?php the_title(); ?>
                    </h3>
                    <h3 class="suggest-product-price">
                        <?php echo wc_price(wc_get_price_to_display($product, array('price' => $product->get_regular_price()))); ?>
                    </h3>
                    <a href="<?php echo wc_get_cart_url(); ?>?add-to-cart=<?php echo $product->get_id(); ?>">
                        <span class="suggest-product-detail">افزودن به سبد خرید</span>
                    </a>
                </div>
                <?php
            }
        } else {
            ?>
            <div class="suggest-box">
                <h3 class="suggest-title">پیشنهادی نداریم</h3>
                <a href="">
                    <img src="<?php bloginfo("template_url") ?>/assets/img/suggest-product.png" alt="" />
                </a>
                <h3 class="suggest-product-title"></h3>
                <h3 class="suggest-product-price"></h3>
                <a href="#">
                    <span class="suggest-product-detail">مشاهده محصولات</span>
                </a>
            </div>
            <?php
        }
        wp_reset_postdata();
        ?>
        <!-- <div class="suggest-box">
            <h3 class="suggest-title">پیشنهاد رکوتیک</h3>
            <a href="">
                <img src="<?php bloginfo("template_url") ?>/assets/img/suggest-product.png" alt="" />
            </a>
            <h3 class="suggest-product-title">مانیتور وضعیت محلی</h3>
            <h3 class="suggest-product-price">3,000,000 تومان</h3>
            <a href="">
                <span class="suggest-product-detail">افزودن به سبد خرید</span>
            </a>
        </div> -->
        <div class="discount-box swiper discount-swiper">
            <div class="swiper-wrapper swipper-countdown-slider">
                <?php
                $args1 = array(
                    'post_type' => 'product',
                    'posts_per_page' => -1,
                    'post_status' => 'publish'
                );
                $args = array(
                    'post_type' => 'product',
                    'posts_per_page' => -1,
                    'meta_query' => array(
                        'relation' => 'OR',
                        array( // Simple products type
                            'key' => '_sale_price',
                            'value' => 0,
                            'compare' => '>',
                            'type' => 'numeric'
                        ),
                        array( // Variable products type
                            'key' => '_min_variation_sale_price',
                            'value' => 0,
                            'compare' => '>',
                            'type' => 'numeric'
                        )
                    )
                );
                $qry = new WP_Query($args);
                if ($qry->have_posts()) {
                    while ($qry->have_posts()) {
                        $qry->the_post();
                        global $product;
                        $regular_price = (float) $product->get_regular_price(); // Regular price
                        $sale_price = (float) $product->get_sale_price(); // Active price
                        $precision = 1; // Max number of decimals
                        $saving_percentage = round(100 - ($sale_price / $regular_price * 100), $precision) . '%';

                        $sale_date = get_post_meta($product->get_id(), '_sale_price_dates_to', true);
                        ?>
                        <div class="swiper-slide discount-item">
                            <div class="discount-column product-image">
                                <span class="discount-percent">
                                    <?php echo $saving_percentage; ?>
                                </span>
                                <a target="_blank" href="<?php the_permalink(); ?>">
                                    <?php the_post_thumbnail(); ?>
                                </a>
                            </div>
                            <div class="discount-column content">
                                <div class="product-prices">
                                    <span class="regular-price">
                                        <?php echo wc_price(wc_get_price_to_display($product, array('price' => $product->get_regular_price()))); ?>
                                    </span>
                                    <span class="discount-price">
                                        <?php echo wc_price(wc_get_price_to_display($product, array('price' => $product->get_sale_price()))); ?>
                                    </span>
                                </div>
                                <h2 class="product-title">
                                    <a target="_blank" href="<?php the_permalink(); ?>">
                                        <?php the_title(); ?>
                                    </a>
                                </h2>
                                <div class="product-short-description">
                                    <?php echo $product->short_description; ?>
                                </div>
                            </div>
                            <div class="discount-column suggest-time">
                                <div class="text-suggest-time">
                                    <span class="wonderfull-suggest">پیشنهاد شگفت انگیز</span>
                                    <?php
                                    if (strlen($sale_date) > 0) {
                                        ?>
                                        <span class="until-time">فرصت باقی مانده</span>
                                        <?php
                                    } else {
                                        ?>
                                        <span class="until-time">زمان نامحدود</span>
                                        <?php
                                    }
                                    ?>
                                </div>
                                <?php
                                if (strlen($sale_date) > 0) {
                                    ?>
                                    <div class="suggest-count-down-time sales-timer-display"
                                        date-to="<?php echo ((strlen($sale_date) > 0) ? (date('Y-m-d', $sale_date)) : '000-00-00'); ?>">
                                        <div class="day">
                                            <span class="no remain-days"></span>
                                            <span class="txt">روز</span>
                                        </div>
                                        <div class="hour">
                                            <span class="no remain-hours"></span>
                                            <span class="txt">ساعت</span>
                                        </div>
                                        <div class="minute">
                                            <span class="no remain-minutes"></span>
                                            <span class="txt">دقیقه</span>
                                        </div>
                                        <div class="second">
                                            <span class="no remain-seconds"></span>
                                            <span class="txt">ثانیه</span>
                                        </div>
                                    </div>
                                    <?php
                                }
                                ?>
                            </div>
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
                $arg = array(
                    'post_type' => 'brands',
                    'posts_per_page' => 6
                );
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