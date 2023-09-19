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

const arrow_function = (url_path) => {
    const menuItems = $(".menu-item");
    if (menuItems.length > 0) {
        menuItems.removeClass("menu-active");
        menuItems.first().addClass("menu-active");
    }

    switch (url_path) {
        case "/":
            menuItems.removeClass("menu-active");
            menuItems.first().addClass("menu-active");
            break;
        case "/blog":
            menuItems.removeClass("menu-active");
            menuItems.filter("[tag='blog']").addClass("menu-active");
            break;
    }
}

$(window).on("load", arrow_function);


function handleDropdowns() {
    const dropdowns = $("[data-dropdown-wrapper]").each(function (
        index,
        wrapper
    ) {
        const dropdown = new Dropdown({
            wrapper,
            // more options here
        }).init();
    });
}

$(function () {
    handleDropdowns();
});