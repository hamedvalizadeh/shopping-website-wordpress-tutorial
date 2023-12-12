<header>
    <a class="btn-search" href="#"></a>
    <a class="btn-basket" href="#"></a>
    <a class="btn-register" href="#">ورود/ثبت نام</a>
    <a class="logo" href="#"><img src="<?php bloginfo("template_url") ?>/assets/img/Logo.png" alt="" /></a>
    <nav class="main-menu">
        <?php wp_nav_menu(array(
            'theme_location' => 'header-menu',
            'container' => ''
        )); ?>
    </nav>
</header>