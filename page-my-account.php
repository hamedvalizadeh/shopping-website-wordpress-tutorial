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
    <link rel="stylesheet" href="<?php bloginfo("template_url") ?>/assets/css/page-my-account.css">
    </link>
</head>

<body>
    <?php get_header('menu'); ?>

    <div class="recotik-container">
        <div class="bread-crumb">
            <?php if (function_exists('rank_math_the_breadcrumbs'))
                rank_math_the_breadcrumbs(); ?>
        </div>
        <section class="page-content woocommerce page-content-full">
            <h1 class="page-title">
                <?php the_title(); ?>
            </h1>
            <p class="page-description">
                <?php the_content(); ?>
            </p>
        </section>
    </div>

    <?php get_footer('foot'); ?>
    <?php get_footer('script-slider'); ?>
</body>

</html>