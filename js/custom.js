jQuery(document).ready(function() {
    "use strict";
    
    
    //copy
      function CopyToClipboard(id) {
    var r = document.createRange();
    r.selectNode(document.getElementById(id));
    window.getSelection().removeAllRanges();
    window.getSelection().addRange(r);
    document.execCommand('copy');
    window.getSelection().removeAllRanges();
    };
    
 
 // mobile_short
 jQuery(".mobile_short a").click(function() {
  jQuery('.big').toggle("fast");
});
jQuery(document).on('click', function(e) {
  if (!jQuery(e.target).closest(".mobile_short").length) {
    jQuery('.big').hide();
  }
  e.stopPropagation();
});

 
    // mobile_menu_btn  
    jQuery(".mobile_menu_btn").on('click', function(){
        jQuery(this).next(".header_nav").toggle("fast")
    }); 
 
     if (jQuery(window).width()  < 879) {
        jQuery(document).on('click', function(e) { 
          if (!jQuery(e.target).closest(".mobile_menu_btn").length) {
            jQuery('.header_nav').hide();
          } 
          e.stopPropagation();
        })
        } ; 
    
    jQuery(".mobile_menu_btn").on('click', function(){
         jQuery(this).toggleClass('open');
    }); 
    
    jQuery(document).on('click', function(e) { 
      if (!jQuery(e.target).closest(".open").length) {
        jQuery('.open').toggleClass('open');
      } 
      e.stopPropagation();
    });


    // search btn
    jQuery(".click_open").click(function(){
        jQuery(".search_xs").toggleClass("active");
     
    });
    
    jQuery(document).on('click', function(e) { 
      if (!jQuery(e.target).closest(".active").length) {
        jQuery('.active').toggleClass('active');
      } 
      e.stopPropagation();
    });
    

 
    // text_hide
     var token = 1;
    jQuery(".di-read-more input").on("click", function() {
        var jQuerylink = jQuery(this);
        var jQuerycontent = jQuerylink.parent().prev("div.text_hide");
        jQuerycontent.toggleClass("full-text");
        if(token == 1)
        {jQuery(this).val("Скрыть");token = 0; }
        else
        {jQuery(this).val("Читать подробнее");token = 1;}
        return false;
    }); 
    
    // See All teg
    jQuery(".seeall").on('click', function(){
        jQuery(this).next(".seeall_vn").toggle("fast")
    });
    jQuery(".seeall_close").on('click', function(){
        jQuery(this).parents(".seeall_vn:first").hide("fast")
    });   

    jQuery("#slider").slider({
      min: 0,
      max: 1000,
      values: [0,1000],
      range: true,
      stop: function(event, ui) {
        jQuery("input#minCost").val(jQuery("#slider").slider("values",0));
        jQuery("input#maxCost").val(jQuery("#slider").slider("values",1));
        },
        slide: function(event, ui){
        jQuery("input#minCost").val(jQuery("#slider").slider("values",0));
        jQuery("input#maxCost").val(jQuery("#slider").slider("values",1));
        }
    });

 

   // Load More jQuery   
    jQuery(".more .col_4_di").slice(0, 8).css("display", "block");
    jQuery(".more2 .cat_item").slice(0, 4).css("display", "block");
    
    jQuery("#loadMore").on('click', function (e) {
        e.preventDefault(); 
        jQuery(".more .col_4_di:hidden").slice(0, 8).slideDown();
        
        jQuery(".more2 .cat_item:hidden").slice(0, 4).slideDown();
        
        if (jQuery(".more2 .cat_item").length == 0) {
            jQuery("#load").fadeOut('slow');
        }  
        
        if (jQuery(".cat_item:hidden").length == 0) {
            jQuery("#load").fadeOut('slow');
        }  
    }); 

 
    
    // Убавляем кол-во по клику
        jQuery('.quantity_inner .bt_minus').click(function() {
        let jQueryinput = jQuery(this).parent().find('.quantity');
        let count = parseInt(jQueryinput.val()) - 1;
        count = count < 1 ? 1 : count;
        jQueryinput.val(count);
    });
    // Прибавляем кол-во по клику
    jQuery('.quantity_inner .bt_plus').click(function() {
        let jQueryinput = jQuery(this).parent().find('.quantity');
        let count = parseInt(jQueryinput.val()) + 1;
        count = count > parseInt(jQueryinput.data('max-count')) ? parseInt(jQueryinput.data('max-count')) : count;
        jQueryinput.val(parseInt(count));
    }); 
    // Убираем все лишнее и невозможное при изменении поля
    jQuery('.quantity_inner .quantity').bind("change keyup input click", function() {
        if (this.value.match(/[^0-9]/g)) {
            this.value = this.value.replace(/[^0-9]/g, '');
        }
        if (this.value == "") {
            this.value = 1;
        }
        if (this.value > parseInt(jQuery(this).data('max-count'))) {
            this.value = parseInt(jQuery(this).data('max-count'));
        }    
    });    
        
        
    // Accordeon FAQ - что бы скрыть, добавить вконце после .stop() - .hide();
    jQuery(document).ready(function($){
       jQuery('#accordion-js').find('.heading').click(function($){
           jQuery(this).toggleClass('accord_active').next().stop().slideToggle(); 
       }).next().stop();
    });
   
 
    // Sticky Header 
    function stickyHeader(headerSelector){

        //hide right header menu when sticky header is inited
        var mainHeader = jQuery(headerSelector),
            headerHeight = mainHeader.height();

        //set scrolling variables
        var scrolling = false,
            previousTop = 0,
            currentTop = 0,
            scrollDelta = 10,
            scrollOffset = 60;

        mainHeader.addClass('autohide');

        jQuery(window).on('scroll', function(){
            if( !scrolling ) {
                scrolling = true;
                (!window.requestAnimationFrame)
                    ? setTimeout(autoHideHeader, 250)
                    : requestAnimationFrame(autoHideHeader);
            }
        });

        jQuery(window).on('resize', function(){
            headerHeight = mainHeader.height();
        });

        function autoHideHeader() {
            var currentTop = jQuery(window).scrollTop();

            checkSimpleNavigation(currentTop);
            previousTop = currentTop;
            scrolling = false;

            // add class when pass offset
            if (jQuery(window).scrollTop() > scrollOffset) {
                mainHeader.addClass('fixed');
            } else {
                mainHeader.removeClass('fixed');
            }
        }

        function checkSimpleNavigation(currentTop) {
            //there's no secondary nav or secondary nav is below primary nav
            if (previousTop - currentTop > scrollDelta) {
                //if scrolling up...
                mainHeader.removeClass('is-hidden');
            } else if( currentTop - previousTop > scrollDelta && currentTop > scrollOffset) {
                //if scrolling down...
                mainHeader.addClass('is-hidden');
            }
        }
    }
    if (jQuery(window).width() > 991) {stickyHeader('#site-header.sticky');} 


    //  Back to top
    if (jQuery('#back-to-top').length) {
        var scrollTrigger = 100, // px
            backToTop = function () {
                var scrollTop = jQuery(window).scrollTop();
                if (scrollTop > scrollTrigger) {
                    jQuery('#back-to-top').addClass('show');
                } else {
                    jQuery('#back-to-top').removeClass('show');
                }
            };
        backToTop();
        jQuery(window).on('scroll', function () {
            backToTop(); 
        });
        jQuery('#back-to-top').on('click', function (e) {
            e.preventDefault();
            jQuery('html,body').animate({
                scrollTop: 0
            }, 700);
        });
    }
     

    // sidebar
    jQuery(".sidebar_btn").on('click', function(){
        jQuery(this).toggleClass("close_minus")
    }); 
    
    jQuery(".sidebar_btn").on('click', function(){
        jQuery(this).next(".sidebar").toggle("fast")
    });
    
    jQuery(".header_menu2_close").on('click', function(){
        jQuery(this).parents(".sidebar:first").hide("fast")
    });

    // rating_schol_list
    jQuery('.rating_schol_list').owlCarousel({
        loop:false, 
        autoWidth:false,
        margin:20,
        dots:false,
        itemElement: 'LI',
        stageElement: 'UL',
        navText:["<div class='arrow arrow_left'></div>","<div class='arrow arrow_right'></div>"], 
        navContainer: '.rating_schol .owl_navigation', 
        nav:true, 
        responsive:{
        0:{items:1,stagePadding: 20},
        600:{items:1,stagePadding: 20},
        1024:{items:2,stagePadding: 20},
        1300:{items:2}
        }
    });

    // top list
    jQuery('.owl_top_list').owlCarousel({
        loop:true, 
        autoWidth:false,
        margin:20,
        dots:false,
        navText:["<div class='arrow arrow_left'></div>","<div class='arrow arrow_right'></div>"], 
        nav:true,
        startPosition:1,
        responsiveRefreshRate:1000,
        responsive:{
        0:{items:1,stagePadding: 30, margin:10},
        600:{items:1,stagePadding: 30, margin:10}, 
        800:{items:2,stagePadding: 30, margin:10},
        1024:{items:3,stagePadding: 40},
        1300:{items:4,stagePadding: 40},
        1310:{items:4}
        }
    }); 
    
    // main_reviews
    jQuery('.main_reviews_list').owlCarousel({
        loop:true, 
        autoWidth:false,
        margin:20,
        dots:false,
        navText:["<div class='arrow arrow_left'></div>","<div class='arrow arrow_right'></div>"], 
        nav:true,
        startPosition:1,
        responsive:{
        0:{items:1,stagePadding: 30, margin:10}, 
        800:{items:1,stagePadding: 30, margin:10},
        1024:{items:2,stagePadding: 40},
        1300:{items:3,stagePadding: 40},
        1310:{items:3}
        }
    });

    // home_potborka
    jQuery('.owl_home_potborka').owlCarousel({
        loop:true, 
        autoWidth:false,
        margin:20,
        dots:false,
        lazyLoad:true, 
        navText:["<div class='arrow arrow_left'></div>","<div class='arrow arrow_right'></div>"], 
        nav:true,
        startPosition:1,
        responsive:{
        0:{items:1,stagePadding: 30, margin:10}, 
        500:{items:1,stagePadding: 30, margin:10}, 
        700:{items:2,stagePadding: 30, margin:10},
        1024:{items:2,stagePadding: 40},
        1300:{items:3,stagePadding: 40},
        1310:{items:4}
        }
    }); 
 
    // home_potborka
    jQuery('.di_review_list').owlCarousel({
        loop:true, 
        autoWidth:false,
        margin:20,
        dots:false,
        lazyLoad:true, 
        navText:["<div class='arrow arrow_left'></div>","<div class='arrow arrow_right'></div>"], 
        navContainer: '.di_review .owl_navigation',
        nav:true,
        startPosition:1,
        responsive:{
        0:{items:1,stagePadding: 20},
        600:{items:2,stagePadding: 20},
        1024:{items:2,stagePadding: 20},
        1300:{items:2}
        }
    }); 
 
 
});