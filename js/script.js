//////////////////  Back To Top

let scrollToTopBtn = document.getElementById("scroll-to-top");

function scrollFunction() {
    if (document.body.scrollTop > 800 || document.documentElement.scrollTop > 800) {
        scrollToTopBtn.style.display = "flex";
    } else {
        scrollToTopBtn.style.display = "none";
    }
}

function topFunction() {
    document.body.scrollTop = 0;
    document.documentElement.scrollTop = 0;
}

window.onscroll = function () {
    scrollFunction();
};

$(document).on("click", "#scroll-to-top", function () {
    scrollFunction();
    topFunction();
});




// Header --> Toggle mobile icon to show menu
$(document).on("click", ".mobile-menu .icon-menu-icon-2 , #closeMobileMenu , .qr-code-body .menu-links-container a", function () {

    $(".mobile-left-menu").toggleClass("show");

    let video = $(".swiper-slide-active .mobile-view .video video").get(0);


    if ($("body").css("overflow") === 'auto') {

        $("body").css("overflow", "hidden");

    } else {

        $("body").css("overflow", "auto");

    }

    if (!video.paused) {
        $(".swiper-slide-active .mobile-view  .overlay-container").click();
    }

});




////////////////// 

