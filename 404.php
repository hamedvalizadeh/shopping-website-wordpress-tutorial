<html lang="en" dir="ltr">

<head>
  <?php get_header('head'); ?>
  <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/css/style.css" />
  <?php get_header('head-style'); ?>  
  <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/css/footer.css" />
  <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/css/bread-crumb.css" />
  <link rel="stylesheet" href="<?php bloginfo('template_url'); ?>/assets/css/not-found.css" />
</head>

<body>
  <?php get_header('menu'); ?>
  <div class="not-found-content">
    <h1 class="not-found-title">عه مثل اینکه این صفحه وجود نداره</h1>
    <img src="<?php bloginfo('template_url'); ?>/assets/img/not-found-404.png" alt="" />
    <p>
      اشکال نداره. حالا که این صفحه وجود نداره می تونی از صفحه پایین وارد صفحه
      اصلی بشی
    </p>
    <a class="not-found-btn" href="<?php bloginfo('url'); ?>">بریم صفحه اصلی</a>
  </div>

  <?php get_footer('foot'); ?>
</body>

</html>