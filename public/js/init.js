jQuery(document).ready(function($) {
    $('#my-slider').sliderPro({
        width: '100%',
        height: 500,
        buttons: false,
        thumbnailWidth: 185,
        autoplay: false,
        arrows: true,
        imageScaleMode: 'none'
    });

    $(".menu-link").click(function(e){
        e.preventDefault();
        $(".menu-overlay").toggleClass("open");
        $(".menu").toggleClass("open");

    })
});