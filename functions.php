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
}
add_action('after_setup_theme', 'recotik_woocommerce_support');