/**
 * Created by tjunafish on 04/10/2017.
 */

$(document).ready(function () {
    var mySwiper = new Swiper ('.swiper-container', {

        direction: 'horizontal',
        loop: true,
        pagination: '.swiper-pagination',
        paginationClickable: true,
        nextButton: '.swiper-button-next',
        prevButton: '.swiper-button-prev',
    })
});
