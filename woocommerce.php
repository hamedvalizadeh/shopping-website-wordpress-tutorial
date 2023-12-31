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
    <link rel="stylesheet" href="<?php bloginfo("template_url") ?>/assets/css/woocommerce.css">
</head>

<body>
    <?php get_header('menu'); ?>

    <div class="recotik-container">
        <div class="bread-crumb">
            <?php if (function_exists('rank_math_the_breadcrumbs'))
                rank_math_the_breadcrumbs(); ?>
        </div>
        <section class="page-content woocommerce">
            <p class="page-description">
                <?php woocommerce_content(); ?>
            </p>
        </section>
        <?php get_sidebar('pgeaside'); ?>
    </div>

    <?php get_footer('foot'); ?>
    <?php get_footer('script-slider'); ?>
</body>

</html>