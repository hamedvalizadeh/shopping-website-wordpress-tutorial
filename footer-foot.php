<div class="clear"></div>
<footer>
    <div class="recotik-container">
        <div class="footer-icon"></div>
        <div class="footer-detail">
            <?php
            if (is_active_sidebar('footer-1')) {
                dynamic_sidebar('footer-1');
            }
            ?>
        </div>
        <div class="footer-detail">
            <?php
            if (is_active_sidebar('footer-2')) {
                dynamic_sidebar('footer-2');
            }
            ?>
        </div>
        <div class="footer-detail">
            <?php
            if (is_active_sidebar('footer-3')) {
                dynamic_sidebar('footer-3');
            }
            ?>
        </div>
        <div class="footer-copy-right">
            <p>
                استفاده از منابع سایت برای اهداف غیر تجاری با ذکر منبع بدون مانع می
                باشد
            </p>
        </div>
    </div>
</footer>
<?php wp_footer(); ?>