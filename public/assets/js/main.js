let url_path = location.pathname

if (url_path === "/") {
    const swiper = new Swiper(".slider-container", {
        direction: "horizontal",
        loop: true,
        autoplay: true,
        effect: "fade",
        dynamicBullets: true,
        navigation: {
            nextEl: '.slider-navigator-next',
            prevEl: '.slider-navigator-prev',
        },
        pagination: {
            el: '.swiper-pagination',
            type: 'bullets',
        },
    });
}

$(window).on("load", () => {
    if (url_path === "/") {
        $(".menu-item").removeClass("menu-active")
        $(".menu-item").first().addClass("menu-active")
    }

    if (url_path.includes("/blog")) {
        $(".menu-item").removeClass("menu-active")
        $(".menu-item[tag='blog']").addClass("menu-active")
    }
})