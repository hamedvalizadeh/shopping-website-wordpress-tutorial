<!-- <link rel="stylesheet" href="assets/css/style.css" />
    <link rel="stylesheet" href="assets/css/menu.css" />
    <link rel="stylesheet" href="assets/css/header.css" />
    <link rel="stylesheet" href="assets/css/footer.css" /> -->

<html lang="en" dir="ltr">

<head>
  <?php get_header('head'); ?>
  <link rel="stylesheet" href="<?php bloginfo("template_url") ?>/assets/css/style.css" />
  <link rel="stylesheet" href="<?php bloginfo("template_url") ?>/assets/css/menu.css" />
  <link rel="stylesheet" href="<?php bloginfo("template_url") ?>/assets/css/header.css" />
  <link rel="stylesheet" href="<?php bloginfo("template_url") ?>/assets/css/footer.css" />ّ
  <link rel="stylesheet" href="<?php bloginfo("template_url") ?>/assets/css/bread-crumb.css" />
  <link rel="stylesheet" href="<?php bloginfo("template_url") ?>/assets/css/page-content.css" />
  <link rel="stylesheet" href="<?php bloginfo("template_url") ?>/assets/css/page-aside.css" />
</head>

<body>
  <?php get_header('menu'); ?>

  <div class="recotik-container">
    <div class="bread-crumb">صفحه اصلی > مقالات > محبوب ترین سنسورها</div>
    <section class="page-content">
      <h1 class="page-title"><?php the_title(); ?></h1>
      <p class="page-description">
        <?php the_content(); ?>
      </p>
    </section>
    <aside>
      <a href=""><img src="<?php bloginfo("template_url") ?>/assets/img/aside-ad1.png" alt="" /></a>
      <div class="aside-related-post">
        <span class="aside-related-post-title">آخرین نوشته ها</span>
        <div>
          <a href="">
            <img src="<?php bloginfo("template_url") ?>/assets/img/last-write1.png" alt="" />
            <h3>سنسور اچ اس تی 11</h3>
          </a>
        </div>
        <div>
          <a href="">
            <img src="<?php bloginfo("template_url") ?>/assets/img/last-write2.png" alt="" />
            <h3>سنسور ال ام 35 برای بهبود عملکرد دستگاه</h3>
          </a>
        </div>
        <div>
          <a href="">
            <img src="<?php bloginfo("template_url") ?>/assets/img/last-write1.png" alt="" />
            <h3>سنسور اچ اس تی 11</h3>
          </a>
        </div>
        <div>
          <a href="">
            <img src="<?php bloginfo("template_url") ?>/assets/img/last-write2.png" alt="" />
            <h3>سنسور ال ام 35</h3>
          </a>
        </div>
      </div>

      <a href=""><img src="<?php bloginfo("template_url") ?>/assets/img/aside-ad2.png" alt="" /></a>
    </aside>
  </div>

  <div class="clear"></div>

  <?php get_footer('foot'); ?>
  <?php get_footer('script-slider'); ?>
</body>

</html>