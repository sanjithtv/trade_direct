$(document).ready(function() {
 // executes when HTML-Document is loaded and DOM is ready

// breakpoint and up  
$(window).resize(function(){
	if ($(window).width() >= 980){	

      // when you hover a toggle show its dropdown menu
      $(".navbar .dropdown-toggle").hover(function () {
         $(this).parent().toggleClass("show");
         $(this).parent().find(".dropdown-menu").toggleClass("show"); 
       });

        // hide the menu when the mouse leaves the dropdown
      $( ".navbar .dropdown-menu" ).mouseleave(function() {
        $(this).removeClass("show");  
      });
  
		// do something here
	}	
});  
  
  

// document ready  
});

jQuery(document).ready(function($) {
      $('.slider').slick({
        dots: false,
        infinite: true,
        speed: 500,
        slidesToShow: 4,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 2000,
        arrows: true,
        pauseOnHover:true,
        prevArrow: '<button class="slide-arrow prev-arrow"></button>',
    nextArrow: '<button class="slide-arrow next-arrow"></button>',
        responsive: [
        {
          breakpoint: 1007,
          settings: {
            slidesToShow: 3,
            slidesToScroll: 1
          }
        },
                {
          breakpoint: 700,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 1
          }
        },
        {
           breakpoint: 589,
           settings: {
              arrows: false,
              dots: true,
              slidesToShow: 1,
              slidesToScroll: 1
           }
        }]
    });
});

jQuery(document).ready(function($) {
      $('.slider-in').slick({
        dots: false,
        infinite: true,
        speed: 500,
        slidesToShow: 1,
        slidesToScroll: 1,
        autoplay: true,
        autoplaySpeed: 2000,
        arrows: true,
        pauseOnHover:true,
        prevArrow: '<button class="slide-arrow prev-arrow"></button>',
    nextArrow: '<button class="slide-arrow next-arrow"></button>',
     responsive: [
      
        {
           breakpoint: 600,
           settings: {
              arrows: false,
              dots:true,
              slidesToShow: 1,
              slidesToScroll: 1
           }
        }]
  
    });
});
$(function () {
  'use strict';

  var $swipeTabsContainer = $('.swipe-tabs'),
    $swipeTabs = $('.swipe-tab'),
    $swipeTabsContentContainer = $('.swipe-tabs-container'),
    currentIndex = 0,
    activeTabClassName = 'active-tab';

  $swipeTabsContainer.on('init', function(event, slick) {
    $swipeTabsContentContainer.removeClass('invisible');
    $swipeTabsContainer.removeClass('invisible');

    currentIndex = slick.getCurrent();
    $swipeTabs.removeClass(activeTabClassName);
        $('.swipe-tab[data-slick-index=' + currentIndex + ']').addClass(activeTabClassName);
  });

  $swipeTabsContainer.slick({
    //slidesToShow: 3.25,
    slidesToShow: 5,
    slidesToScroll: 1,
    arrows: true,
    infinite: false,
    swipeToSlide: true,
    touchThreshold: 10,
     responsive: [
        {
          breakpoint: 1200,
          settings: {
            slidesToShow: 4,
            slidesToScroll: 1
          }
        },
                {
          breakpoint: 991,
          settings: {
            arrows: false,
              dots: true,
            slidesToShow: 3,
            slidesToScroll: 1
          }
        },
        {
           breakpoint: 560,
           settings: {
              arrows: false,
              dots: true,
              slidesToShow: 1,
              slidesToScroll: 1
           }
        }]
  });

  $swipeTabsContentContainer.slick({
    asNavFor: $swipeTabsContainer,
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: false,
    infinite: false,
    swipeToSlide: true,
    draggable: false,
    touchThreshold: 10
  });


  $swipeTabs.on('click', function(event) {
        // gets index of clicked tab
        currentIndex = $(this).data('slick-index');
        $swipeTabs.removeClass(activeTabClassName);
        $('.swipe-tab[data-slick-index=' + currentIndex +']').addClass(activeTabClassName);
        $swipeTabsContainer.slick('slickGoTo', currentIndex);
        $swipeTabsContentContainer.slick('slickGoTo', currentIndex);
    });

    //initializes slick navigation tabs swipe handler
    $swipeTabsContentContainer.on('swipe', function(event, slick, direction) {
      currentIndex = $(this).slick('slickCurrentSlide');
    $swipeTabs.removeClass(activeTabClassName);
    $('.swipe-tab[data-slick-index=' + currentIndex + ']').addClass(activeTabClassName);
  });
});
  $(document).ready(function(){
  $('.your-class').slick({
    dots: true
  });
});

$('.modal').on('shown.bs.modal', function (e) {
  $('.your-class').slick('setPosition');
  $('.wrap-modal-slider').addClass('open');
})
