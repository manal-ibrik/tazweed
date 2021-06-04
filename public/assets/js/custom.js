// JavaScript Document
$(window).scroll(function() {    
    var scroll = $(window).scrollTop();

    if (scroll >= 50) {
        $("#header").addClass("darkHeader");
    } else {
        $("#header").removeClass("darkHeader");
    }
  
});



 $('.products-sldier').slick({
  slidesToShow: 1,
  slidesToScroll: 1,
  arrows: false,
  //fade: true,
  asNavFor: '.products-sldier-nav'
});
$('.products-sldier-nav').slick({
  slidesToShow: 5,
  slidesToScroll: 1,
  asNavFor: '.products-sldier',
  dots: false,
  centerMode: false,
  focusOnSelect: true,
 responsive: [
    {
      breakpoint: 767,
      settings: {
        slidesToShow: 3,
        slidesToScroll:1,
        infinite: true,
        variableWidth: false,
        arrows:false,
        dots: false
      }
    }
      ]

});





$('.home_slider').slick({
dots: true,
arrows:false,
  autoplay: true,
  autoplaySpeed: 2000,
});

$('.page_banner_slider').slick({
dots: false,
arrows:false,
  autoplay: true,
  autoplaySpeed: 2000,
  fade: true,
    speed: 500,
    infinite: true,
    cssEase: 'ease-in-out',
    touchThreshold: 100
});





$(document).ready(function(){
    $(".nav_icon").click(function(){
        $(".slide_nav").toggleClass("active");
        $(".nav_icon").toggleClass("highlight");
        $("body").toggleClass("highlight");
    });
});



$("html").click(function(e) {
  if ($(e.target).closest('.nav_icon').length == 0)
    $(".slide_nav").removeClass('active');
 
 
});

$("html").click(function(e) {
  if ($(e.target).closest('.nav_icon').length == 0)
   
  $(".nav_icon").removeClass('highlight');
 
});

$("html").click(function(e) {
  if ($(e.target).closest('.nav_icon').length == 0)
   
  $("body").removeClass('highlight');
});






(function($) {
$.fn.menumaker = function(options) {  
 var cssmenu = $(this), settings = $.extend({
   format: "dropdown",
   sticky: false
 }, options);
 return this.each(function() {
   $(this).find(".button").on('click', function(){
     $(this).toggleClass('menu-opened');
     var mainmenu = $(this).next('ul');
     if (mainmenu.hasClass('open')) { 
       mainmenu.slideToggle().removeClass('open');
     }
     else {
       mainmenu.slideToggle().addClass('open');
       if (settings.format === "dropdown") {
         mainmenu.find('ul').show();
       }
     }
   });
   cssmenu.find('li ul').parent().addClass('has-sub');
multiTg = function() {
     cssmenu.find(".has-sub").prepend('<span class="submenu-button"></span>');
     cssmenu.find('.submenu-button').on('click', function() {
       $(this).toggleClass('submenu-opened');
       if ($(this).siblings('ul').hasClass('open')) {
         $(this).siblings('ul').removeClass('open').slideToggle();
       }
       else {
         $(this).siblings('ul').addClass('open').slideToggle();
       }
     });
   };
   if (settings.format === 'multitoggle') multiTg();
   else cssmenu.addClass('dropdown');
   if (settings.sticky === true) cssmenu.css('position', 'fixed');
resizeFix = function() {
  var mediasize = 767;
     if ($( window ).width() > mediasize) {
       cssmenu.find('ul').show();
     }
     if ($(window).width() <= mediasize) {
       cssmenu.find('ul').hide().removeClass('open');
     }
   };
   resizeFix();
   return $(window).on('resize', resizeFix);
 });
  };
})(jQuery);

(function($){
$(document).ready(function(){
$("#cssmenu").menumaker({
   format: "multitoggle"
});
});
})(jQuery);








$(document).ready(function () {
    $(document).on("scroll", onScroll);
    
    //smoothscroll
    $('a[href^="#"]').on('click', function (e) {
        e.preventDefault();
        $(document).off("scroll");
        
        $('a').each(function () {
            $(this).removeClass('active');
        })
        $(this).addClass('active');
      
        var target = this.hash,
            menu = target;
        $target = $(target);
        $('html, body').stop().animate({
            'scrollTop': $target.offset().top+2
        }, 500, 'swing', function () {
            window.location.hash = target;
            $(document).on("scroll", onScroll);
        });
    });
});

function onScroll(event){
    var scrollPos = $(document).scrollTop();
    $('#menu-center a').each(function () {
        var currLink = $(this);
        var refElement = $(currLink.attr("href"));
        if (refElement.position().top <= scrollPos && refElement.position().top + refElement.height() > scrollPos) {
            $('#menu-center ul li a').removeClass("active");
            currLink.addClass("active");
        }
        else{
            currLink.removeClass("active");
        }
    });
}