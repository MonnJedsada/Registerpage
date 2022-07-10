$(document).ready(function () {
    $('.owl-carousel').owlCarousel({
        loop: true,
        margin: 10,
        nav : false,
        dots: false,
        responsive: {
            0: {
                items: 1
            },
            600: {
                items: 2
            },
            1000: {
                items: 3
            },
        }
    })
});


$('.to-top').on('click', function (){
    $('html, body').animate({scrollTop: '0px'}, 800);
})

