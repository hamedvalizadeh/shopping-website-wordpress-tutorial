<?php

//this function for header menu
function recotik_hedear_menu()
{
    register_nav_menu('header-menu', __('هدر بالایی'));
}
add_action('init', 'recotik_hedear_menu');

add_theme_support('post-thumbnails');

//this function for slider post type
function recotik_slider_post_type()
{
    register_post_type(
        'slider',
        array(
            'labels' => array(
                'name' => __('اسلایدرها'),
                'singular_name' => __('اسلایدر'),
                'add_new' => __('افزودن اسلایدر'),
                'add_new_item' => __('افزودن اسلایدر جدید')
            ),
            'public' => true,
            'has_archive' => false,
            'supports' => array('title', 'editor', 'thumbnail', 'link')
        )
    );
}
add_filter('init', 'recotik_slider_post_type');

//this function for brand post type
function recotik_brand_post_type()
{
    register_post_type(
        'brands',
        array(
            'labels' => array(
                'name' => __('برندها'),
                'singular_name' => __('برند'),
                'add_new' => __('افزودن برند'),
                'add_new_item' => __('افزودن برند جدید')
            ),
            'public' => true,
            'has_archive' => false,
            'supports' => array('title', 'editor', 'thumbnail', 'link'),
            'menu_icon' => 'dashicons-admin-multisite'
        )
    );
}
add_filter('init', 'recotik_brand_post_type');

//this function for add widget for footer
function recotick_register_widget()
{
    register_sidebar(
        array(
            'name' => __('فوتر رکوتیک شماره یک', 'recotick'),
            'id' => 'footer-1',
            'description' => __('در این بحش شما میتوانید ابزارکهای خودتون رو در ستون اول فوتر اضافه کنید.', 'recotick'),
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget' => '</div>'
        )
    );
    register_sidebar(
        array(
            'name' => __('فوتر رکوتیک شماره دو', 'recotick'),
            'id' => 'footer-2',
            'description' => __('در این بحش شما میتوانید ابزارکهای خودتون رو در ستون دوم فوتر اضافه کنید.', 'recotick'),
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget' => '</div>'
        )
    );
    register_sidebar(
        array(
            'name' => __('فوتر رکوتیک شماره سه', 'recotick'),
            'id' => 'footer-3',
            'description' => __('در این بحش شما میتوانید ابزارکهای خودتون رو در ستون سوم فوتر اضافه کنید.', 'recotick'),
            'before_widget' => '<div id="%1$s" class="widget %2$s">',
            'after_widget' => '</div>'
        )
    );

    register_sidebar(
        array(
            'name' => __('سایدبار رکوتیک', 'recotick'),
            'id' => 'sidebar-widget-1',
            'description' => __('این ویجت برای سایدبار صفحه می باشد', 'recotick'),
            'before_widget' => '',
            'after_widget' => ''
        )
    );
}
add_action('widgets_init', 'recotick_register_widget');

//Register Recent Posts Widgets
class Recotick_Recent_Posts_Widget extends WP_Widget
{
    function __construct()
    {
        parent::__construct(false, __('ابزارک نمایش آخرین پستها', 'recotick'));
    }

    function widget($args, $instance)
    {
        $title = $instance['recentposttitle'];
        $number = $instance['recentpostnumber'];
        ?>
        <div class="aside-related-post">
            <span class="aside-related-post-title">
                <?php echo $title; ?>
            </span>
            <?php
            $args = array(
                'post_type' => 'post',
                'posts_per_page' => $number
            );
            $qry = new WP_Query($args);
            if ($qry->have_posts()) {
                while ($qry->have_posts()) {
                    $qry->the_post();
                    ?>
                    <div>
                        <a href="<?php the_permalink(); ?>">
                            <?php the_post_thumbnail('recent-post-image-size'); ?>
                            <h3>
                                <?php the_title(); ?>
                            </h3>
                        </a>
                    </div>
                    <?php
                }
            }
            ?>
        </div>
        <?php
    }

    function update($new_instance, $old_instance)
    {
        return $new_instance;
    }

    function form($instance)
    {
        $title = $instance['recentposttitle'];
        $number = $instance['recentpostnumber'];
        ?>
        <label>عنوان پست</label>
        <input type="text" name="<?php echo $this->get_field_name('recentposttitle'); ?>"
            id="<?php echo $this->get_field_id('recentposttitle'); ?>" value="<?php echo $title; ?>">

        <label for="">تعداد پست</label>
        <input type="number" name="<?php echo $this->get_field_name('recentpostnumber'); ?>"
            id="<?php echo $this->get_field_id('recentpostnumber'); ?>" value="<?php echo $number; ?>">
        <?php
    }
}

add_action('widgets_init', 'recotick_recent_posts_register_widgets');

function recotick_recent_posts_register_widgets()
{
    register_widget('Recotick_Recent_Posts_Widget');
}

//add image size for recent post widget
add_image_size('recent-post-image-size', 60, 60, true);
add_image_size('post-detail-image-size', 400, 250, true);

//dynamic browser tap title
function recotick_browser_tap_title()
{
    add_theme_support('title-tag');
}
add_action('after_setup_theme', 'recotick_browser_tap_title');

//pagination
function recotik_numeric_post_nav()
{
    if (is_singular())
        return;
    global $wp_query;
    /* Stop the code if there is only a single page page */
    if ($wp_query->max_num_pages <= 1)
        return;
    $paged = get_query_var('paged') ? absint(get_query_var('paged')) : 1;
    $max = intval($wp_query->max_num_pages);
    /*Add current page into the array */
    if ($paged >= 1)
        $links[] = $paged;
    /*Add the pages around the current page to the array */
    if ($paged >= 3) {
        $links[] = $paged - 1;
        $links[] = $paged - 2;
    }
    if (($paged + 2) <= $max) {
        $links[] = $paged + 2;
        $links[] = $paged + 1;
    }
    echo '<ul id="news-pagination">' . "\n";


    /*Display Link to first page*/
    if (!in_array(1, $links)) {
        $class = 1 == $paged ? ' class="active"' : '';
        printf('<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url(get_pagenum_link(1)), '1');
        if (!in_array(2, $links))
            echo '<li>…</li>';
    }
    /* Link to current page */
    sort($links);
    foreach ((array) $links as $link) {
        $class = $paged == $link ? ' class="active"' : '';
        printf('<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url(get_pagenum_link($link)), $link);
    }
    /* Link to last page, plus ellipses if necessary */
    if (!in_array($max, $links)) {
        if (!in_array($max - 1, $links))
            echo '<li>…</li>' . "\n";
        $class = $paged == $max ? ' class="active"' : '';
        printf('<li%s><a href="%s">%s</a></li>' . "\n", $class, esc_url(get_pagenum_link($max)), $max);
    }
    echo '</ul>' . "\n";
}

//support theme with woocommerce
function recotik_woocommerce_support()
{
    add_theme_support('woocommerce');
    add_theme_support('wc-product-gallery-zoom');
    add_theme_support('wc-product-gallery-lightbox');
    add_theme_support('wc-product-gallery-slider');
}
add_action('after_setup_theme', 'recotik_woocommerce_support');

function recotik_chnage_price_location_for_simple_prodect()
{
    global $product;
    if ($product->is_type('simple')) {
        remove_action('woocommerce_single_product_summary', 'woocommerce_template_single_price', 10);
        add_action('woocommerce_single_product_summary', 'woocommerce_template_single_price', 25);
    }
}

add_action('woocommerce_before_single_product', 'recotik_chnage_price_location_for_simple_prodect');

//my-account navigation menu
function edit_my_account_menu($menu_name)
{
    $menu_name['orders'] = "سفارشات";
    $menu_name['downloads'] = "دانلودهای من";
    return $menu_name;
}

add_filter('woocommerce_account_menu_items', 'edit_my_account_menu');

function add_menu_item_my_account($menu_item)
{
    $menu_item = array_slice($menu_item, 0, 5, true)
        + array('recotik_doreha' => 'دوره های خریداری شده')
        + array_slice($menu_item, 5, null, true);

    return $menu_item;
}

add_filter('woocommerce_account_menu_items', 'add_menu_item_my_account');

function menu_add_endpoint()
{
    add_rewrite_endpoint('recotik_doreha', EP_PAGES);
}

add_action('init', 'menu_add_endpoint');

function content_my_account()
{
    echo 'هنوز خریداری نشده';
}

add_action('woocommerce_account_recotik_doreha_endpoint', 'content_my_account');

//HINT: enqueue styles
function enqueue_all_style()
{
    wp_enqueue_style('style_css', get_template_directory_uri() . '/assets/css/style.css');
    wp_enqueue_style('menu_css', get_template_directory_uri() . '/assets/css/menu.css');
    wp_enqueue_style('header_css', get_template_directory_uri() . '/assets/css/header.css');
    wp_enqueue_style('fontawsomeall_css', get_template_directory_uri() . '/assets/css/font-awsome-all.css');
    wp_enqueue_style('footer_css', get_template_directory_uri() . '/assets/css/footer.css');

    wp_enqueue_style('breadcrumb_css', get_template_directory_uri() . '/assets/css/bread-crumb.css');
    wp_enqueue_style('pageaside_css', get_template_directory_uri() . '/assets/css/page-aside.css');

    wp_enqueue_style('pagecontent_css', get_template_directory_uri() . '/assets/css/page-content.css');
}
function dequeue_all_except_home_404_style()
{
    wp_dequeue_style('breadcrumb_css');
    wp_dequeue_style('pageaside_css');
}
function dequeue_all_except_404_home_archive_woocommerce_style()
{
    wp_dequeue_style('pagecontent_css');
}
function enqueue_archive_style()
{
    wp_enqueue_style('productcontent_css', get_template_directory_uri() . '/assets/css/product-content.css');
}
function enqueue_404_style()
{
    wp_enqueue_style('notfound_css', get_template_directory_uri() . '/assets/css/not-found.css');
}
function enqueue_home_style()
{
    wp_enqueue_style('slider_css', get_template_directory_uri() . '/assets/css/slider.css');
    wp_enqueue_style('swiperbundlemin_css', get_template_directory_uri() . '/assets/css/swiper-bundle.min.css');
    wp_enqueue_style('discountbox_css', get_template_directory_uri() . '/assets/css/discount-box.css');
    wp_enqueue_style('suggestbox_css', get_template_directory_uri() . '/assets/css/suggest-box.css');
    wp_enqueue_style('iconbox_css', get_template_directory_uri() . '/assets/css/icon-box.css');
    wp_enqueue_style('bestselling_css', get_template_directory_uri() . '/assets/css/best-selling.css');
    wp_enqueue_style('middlebanner_css', get_template_directory_uri() . '/assets/css/middle-banner.css');
    wp_enqueue_style('lastarticle_css', get_template_directory_uri() . '/assets/css/last-article.css');
    wp_enqueue_style('authenticbrand_css', get_template_directory_uri() . '/assets/css/authentic-brand.css');
}
function enqueue_cart_style()
{
    wp_enqueue_style('pagecart_css', get_template_directory_uri() . '/assets/css/page-cart.css');
}
function enqueue_checkout_style()
{
    wp_enqueue_style('pagecheckout_css', get_template_directory_uri() . '/assets/css/page-checkout.css');
}
function enqueue_account_style()
{
    wp_enqueue_style('pagemyaccount_css', get_template_directory_uri() . '/assets/css/page-my-account.css');
}
function enqueue_single_style()
{
    wp_enqueue_style('post_css', get_template_directory_uri() . '/assets/css/post.css');
    wp_enqueue_style('comments_css', get_template_directory_uri() . '/assets/css/comments.css');
}
function enqueue_woocommerce_style()
{
    wp_enqueue_style('catcontent_css', get_template_directory_uri() . '/assets/css/cat-content.css');
    wp_enqueue_style('woocommerce_css', get_template_directory_uri() . '/assets/css/woocommerce.css');
}

add_action('wp_enqueue_scripts', 'recotik_theme_name_scripts');
function recotik_theme_name_scripts()
{
    // wp_enqueue_script('script-name', get_template_directory_uri() . '/js/example.js', array(), '1.0.0', true);

    enqueue_all_style();

    if (is_woocommerce()) {
        dequeue_all_except_404_home_archive_woocommerce_style();
        enqueue_woocommerce_style();
    } elseif (is_cart()) {
        enqueue_cart_style();
    } elseif (is_checkout()) {
        enqueue_checkout_style();
    } elseif (is_account_page()) {
        enqueue_account_style();
    } elseif (is_home()) {
        dequeue_all_except_home_404_style();
        dequeue_all_except_404_home_archive_woocommerce_style();
        enqueue_home_style();
    } elseif (is_single()) {
        enqueue_single_style();
    } elseif (is_archive()) {
        dequeue_all_except_404_home_archive_woocommerce_style();
        enqueue_archive_style();
    } elseif (is_404()) {
        dequeue_all_except_home_404_style();
        dequeue_all_except_404_home_archive_woocommerce_style();
        enqueue_404_style();
    }
}