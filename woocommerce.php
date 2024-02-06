<html lang="en" dir="ltr">

<head>
    <?php get_header('head'); ?>
</head>

<body>
    <?php get_header('menu'); ?>

    <div class="recotik-container">
        <div class="bread-crumb">
            <?php if (function_exists('rank_math_the_breadcrumbs'))
                rank_math_the_breadcrumbs(); ?>
        </div>
        <section class="cat-content woocommerce">
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