<header>
    <a class="btn-search" href="#"></a>
    <a class="btn-basket" href="#"></a>
    <?php
    $my_account_page_link = get_permalink(get_option('woocommerce_myaccount_page_id'));
    global $current_user;
    ?>
    <div class="user-box-container">
        <a class="btn-register" href="<?php echo $my_account_page_link; ?>">
            <?php if (is_user_logged_in()) {
                ?>
                <div class="register-avatar-container">
                    <?php echo get_avatar($current_user->ID, 25); ?>
                    <p>
                        <?php echo $current_user->display_name; ?>
                    </p>
                </div>
                <?php
            } else {
                echo "ورود/ثبت نام";
            } ?>
        </a>
        <?php
        if (is_user_logged_in()) {
            ?>
            <div class="user-drop">
                <ul>
                    <li>
                        <a href="<?php echo $my_account_page_link; ?>">داشبورد کاربری</a>
                        <a href="<?php echo wc_get_page_permalink('myaccount'); ?>orders/">سفارش ها</a>
                        <a href="<?php echo wc_get_page_permalink('myaccount'); ?>edit-account/">ویرایش حساب</a>
                        <a href="<?php echo wc_logout_url(); ?>">خروج</a>
                    </li>
                </ul>
            </div>
            <?php
        }
        ?>
    </div>

    <a class="logo" href="#"><img src="<?php bloginfo("template_url") ?>/assets/img/Logo.png" alt="" /></a>
    <nav class="main-menu">
        <?php wp_nav_menu(
            array(
                'theme_location' => 'header-menu',
                'container' => ''
            )
        ); ?>
    </nav>
</header>