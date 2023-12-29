<aside>
    <!-- <a href=""><img src="<?php bloginfo("template_url") ?>/assets/img/aside-ad1.png" alt="" /></a> -->
    <?php
    if (is_active_sidebar('sidebar-widget-1')) {
        dynamic_sidebar('sidebar-widget-1');
    }
    ?>
    <!-- <a href=""><img src="<?php bloginfo("template_url") ?>/assets/img/aside-ad2.png" alt="" /></a> -->
</aside>