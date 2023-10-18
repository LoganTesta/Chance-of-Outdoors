/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

jQuery(document).ready(function($){
    let play = true;
    
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
        autoplaySpeed: 3000,
        speed: 1500,
        responsive: [
            {
                breakpoint: 768,
                settings: {
                    slidesToShow: 1,
                    centerMode: false,
                }
            },
            {             
                breakpoint: 1200,
                settings: {                 
                    slidesToShow: 1,
                    slidesToScroll: 1,
                    centerMode: true,
                    centerPadding: "22%",          
                }
            }
        ]
    });
    
    $(".slick-prev").html("");
    $(".slick-next").html("");
    
    $(window).on("resize", function(){
        $(".slick-prev").html("");
        $(".slick-next").html("");
    });
    
    $(".dropdown-icon.open").on("click", function(){
        $(".slick-slider").slick('slickPause');
    });
    
    $(".dropdown-icon.close").on("click", function(){
        $(".slick-slider").slick('slickPlay');
        $(".slick-slider").slick('refresh');
    });
    
    $(".slick-dots").append("<div class='pause-play-button'>&#10073;&#10073;<div>");
    $(".pause-play-button").on("click", function(){
        play = !play;
        if (play){
            $(".slick-slider").slick("slickPlay");
            $(".pause-play-button").html("<div class='pause-play-button'>&#10073;&#10073;<div>");
        } else {
            $(".slick-slider").slick("slickPause");
            $(".pause-play-button").html("<div class='pause-play-button'>&#10148;<div>");
        }
    });
    
});
