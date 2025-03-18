$(document).ready(function(){
    // Initialize Slick Slider
    $('.section-our-work-description-box').slick({
        infinite: false,
        slidesToShow: 4,
        slidesToScroll: 1,
        dots: false,
        draggable: false,
        swipeToSlide: false,
        touchMove: false,
        speed: 0,
        responsive: [
            {
                breakpoint: 431,
                settings: "unslick"
            }
        ]
    });

    // Set total slides number
    var totalSlides = $('.section-our-work-description-image').length;
    $('.total-slides').text(totalSlides);

    // Update slide counter and image size on slide change
    $('.section-our-work-description-box').on('afterChange', function(event, slick, currentSlide){
        $('.current-slide').text(currentSlide + 1);

        // Remove 'active' class from all images
        $('.section-our-work-description-image').removeClass('active');

        // Add 'active' class to the new active slide
        $('.section-our-work-description-image').eq(currentSlide).addClass('active');
    });

    // Initialize the first large image
    $('.section-our-work-description-image').first().addClass('active');



});



$(document).ready(function(){
    // Initialize Slick Slider
    $('.section-our-work-description-box-second').slick({
        infinite: false,
        slidesToShow: 4,
        slidesToScroll: 1,
        dots: false,
        draggable: false,
        swipeToSlide: false,
        touchMove: false,
        speed: 0, 
        responsive: [
            {
                breakpoint: 431,
                settings: "unslick"
            }
        ]
    });

    // Set total slides number
    var totalSlides = $('.section-our-work-description-image-second').length;
    $('.total-slides').text(totalSlides);

    // Update slide counter and image size on slide change
    $('.section-our-work-description-box-second').on('afterChange', function(event, slick, currentSlide){
        $('.current-slide').text(currentSlide + 1);

        // Remove 'active' class from all images
        $('.section-our-work-description-image-second').removeClass('active');

        // Add 'active' class to the new active slide
        $('.section-our-work-description-image-second').eq(currentSlide).addClass('active');
    });

    // Initialize the first large image
    $('.section-our-work-description-image-second').first().addClass('active');
});



$(document).ready(function() {
    $('.section-review-description-wrapper').slick({
        draggable: false,
        swipeToSlide: false,
        touchMove: false,
        infinite: false,
        slidesToShow: 4,
        slidesToScroll: 1,
        dots: false,
        responsive: [
            {
                breakpoint: 431,
                settings: "unslick"
            }
        ]
    });

    $('.section-article-description-wrapper').slick({
        draggable: false,
        swipeToSlide: false,
        touchMove: false,
        infinite: true,
        slidesToShow: 4,
        slidesToScroll: 1,
        dots: true,
        responsive: [
            {
                breakpoint: 431,
                settings: "unslick"
            }
        ]
    });

    $('.section-each-stamp-third-wrapper-slide').slick({
        draggable: false,
        swipeToSlide: false,
        touchMove: false,
        infinite: true,
        slidesToShow: 6,
        slidesToScroll: 1,
        dots: false,
        responsive: [
            {
                breakpoint: 431,
                settings: "unslick"
            }
        ]
    });

    $('.section-each-stamp-fifth-wrapper-slide').slick({
        draggable: false,
        swipeToSlide: false,
        touchMove: false,
        infinite: true,
        slidesToShow: 6,
        slidesToScroll: 1,
        dots: false,
        responsive: [
            {
                breakpoint: 431,
                settings: "unslick"
            }
        ]
    });
});

