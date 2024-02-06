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