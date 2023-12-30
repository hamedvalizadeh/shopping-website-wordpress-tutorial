<html lang="en" dir="ltr">

<head>
  <?php get_header('head'); ?>
  <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/css/style.css" />
  <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/css/menu.css" />
  <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/css/header.css" />
  <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/css/footer.css" />
  <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/css/bread-crumb.css" />
  <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/css/page-aside.css" />
  <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/css/product-content.css" />
</head>

<body>
  <?php get_header('menu'); ?>

  <div class="recotik-container">
    <div class="bread-crumb">
      <?php if (function_exists('rank_math_the_breadcrumbs'))
        rank_math_the_breadcrumbs(); ?>
    </div>
    <div class="product-content">
      <h1 class="product-title">
        <?php single_cat_title(); ?>
      </h1>
      <?php
      $args = array('post_type' => '', 'posts_per_page' => 3);
      $qry = new WP_Query();
      if (have_posts()) {
        while (have_posts()) {
          the_post();
          ?>
          <div class="prodect-item">
            <a href="<?php the_permalink(); ?>">
              <?php the_post_thumbnail(); ?>
            </a>
            <p>
              <?php the_title(); ?>
            </p>
            <a href="<?php the_permalink(); ?>"><span>ادامه مطلب</span></a>
          </div>
          <?php
        }
        ?>
        <div class="clear"></div>
        <div class="navigation" ><?php recotik_numeric_post_nav();?></div>
        <?php
      }
      ?>
    </div>
    <?php get_sidebar('pgeaside'); ?>
  </div>

  <?php get_footer('foot'); ?>

</body>

</html>