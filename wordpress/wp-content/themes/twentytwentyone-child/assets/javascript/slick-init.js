/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

jQuery(document).ready(function($){
    $(".slick-slider").slick({
        infinite: true,
        slidesToShow: 2,
        slidesToScroll: 1,
        initialSlide: 1,
        arrows: true,
        dots: true,
        centerMode: true,
        centerPadding: "12%",
        autoplay: true,
        autoplayspeed: 4500,
        speed: 1500,
        responsive: [
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 1,
                    centerMode: false,
                }
            },
        ]
    });
    
    $(".slick-prev").html("");
    $(".slick-next").html("");
    
    $(window).on("resize", function(){
        $(".slick-prev").html("");
        $(".slick-next").html("");
    });
    
});
