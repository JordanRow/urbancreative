jQuery(document).ready(function($) {
    $(".homepage-hero-section").slick({
        infinite: true,
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 5000,
        arrows: true,
        prevArrow: '<span class="slick-prev pull-left slick-arrow" style=""><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" style="width:35px;"><!--! Font Awesome Pro 6.2.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path fill="#fff" d="M41.4 233.4c-12.5 12.5-12.5 32.8 0 45.3l192 192c12.5 12.5 32.8 12.5 45.3 0s12.5-32.8 0-45.3L109.3 256 278.6 86.6c12.5-12.5 12.5-32.8 0-45.3s-32.8-12.5-45.3 0l-192 192z"></path></svg></span>',
        nextArrow: '<span class="slick-next pull-right"><svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 384 512" style="width:35px;"><!--! Font Awesome Pro 6.2.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license (Commercial License) Copyright 2022 Fonticons, Inc. --><path fill="#fff" d="M342.6 233.4c12.5 12.5 12.5 32.8 0 45.3l-192 192c-12.5 12.5-32.8 12.5-45.3 0s-12.5-32.8 0-45.3L274.7 256 105.4 86.6c-12.5-12.5-12.5-32.8 0-45.3s32.8-12.5 45.3 0l192 192z"/></svg></span>',
    });

    $('.navbar-toggler').click(function(){
        $(this).closest("nav").find("#navigation-mobile").toggleClass("show");
    });

    $('.cross-container .fa-times').click(function(){
        $(this).closest("nav").find("#navigation-mobile").removeClass("show");
    });
});

