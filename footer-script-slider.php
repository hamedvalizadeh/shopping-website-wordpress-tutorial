<script src="<?php bloginfo("template_url") ?>/assets/js/swiper-bundle.min.js"></script>
<script src="<?php bloginfo("template_url") ?>/assets/js/jquery.min.js"></script>
<script src="<?php bloginfo("template_url") ?>/assets/js/jquery.plugin.min.js"></script>
<script src="<?php bloginfo("template_url") ?>/assets/js/jquery.countdown.js"></script>
<script src="<?php bloginfo("template_url") ?>/assets/js/recotik.js"></script>

<script>
    var swiper = new Swiper(".first-swiper", {
        loop: true,
        autoplay: {
            delay: 2000,
        },
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
        pagination: {
            el: ".swiper-pagination",
            type: "bullets",
            clickable: true,
        },
    });
</script>
<script>
    var menu = [];
    $.each($(".discount-swiper .discount-item"), (key, item) => {
        item = $(item);
        let discountValue = item.find(".discount-percent");
        if (discountValue != null && discountValue != undefined && discountValue.length > 0) {
            menu.push(discountValue.text());
        }
    });
    var swiper2 = new Swiper(".discount-swiper", {
        loop: true,
        direction: "vertical",
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
            renderBullet: function (index, className) {
                return '<span class="' + className + '">' + menu[index] + "</span>";
            },
        },
    });
</script>