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
    register_post_type('slider', array(
        'labels' => array(
            'name' => __('اسلایدرها'),
            'singular_name' => __('اسلایدر'),
            'add_new' => __('افزودن اسلایدر'),
            'add_new_item' => __('افزودن اسلایدر جدید')
        ),
        'public' => true,
        'has_archive' => false,
        'supports' => array('title', 'editor', 'thumbnail', 'link')
    ));
}
add_filter('init', 'recotik_slider_post_type');

//this function for brand post type
function recotik_brand_post_type()
{
    register_post_type('brands', array(
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
    ));
}
add_filter('init', 'recotik_brand_post_type');