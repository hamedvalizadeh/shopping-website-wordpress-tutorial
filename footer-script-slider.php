<script src="<?php bloginfo("template_url") ?>/assets/js/swiper-bundle.min.js"></script>
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
    var menu = ["10%", "20%"];
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