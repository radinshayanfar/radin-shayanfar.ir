$(window).on("load",function(){
    "use strict";
    /*=========================================================================
        Preloader
    =========================================================================*/
    $("#preloader").delay(350).fadeOut('slow');

    /*=========================================================================
        Custom Scrollbar
    =========================================================================*/
    $(".header-inner").mCustomScrollbar();

    /*=========================================================================
     Isotope
     =========================================================================*/
    $('.portfolio-filter').on( 'click', 'li', function() {
        var filterValue = $(this).attr('data-filter');
        $container.isotope({ filter: filterValue });
    });

    // change is-checked class on buttons
    $('.portfolio-filter').each( function( i, buttonGroup ) {
        var $buttonGroup = $( buttonGroup );
        $buttonGroup.on( 'click', 'li', function() {
            $buttonGroup.find('.current').removeClass('current');
            $( this ).addClass('current');
        });
    });

    var $container = $('.portfolio-wrapper');
    $container.imagesLoaded( function() {
      $('.portfolio-wrapper').isotope({
          // options
          itemSelector: '[class*="col-"]',
          percentPosition: true,
          masonry: {
              // use element for option
              columnWidth: '[class*="col-"]'
          }
      });
    });

    /*=========================================================================
     Load More Portfolio Items
     =========================================================================*/
    var moreItemsLoaded = false;
    
    $( '.load-more .btn' ).on('click', function(e) {
        e.preventDefault();
        
        if (moreItemsLoaded) {
            return false;
        }
        
        var $loadMoreBtn = $(this);
        var $icon = $loadMoreBtn.find('i');
        
        // Show loading state
        $icon.removeClass('fas fa-circle-notch').addClass('fas fa-spinner fa-spin');
        $loadMoreBtn.prop('disabled', true);
        
        // Load additional portfolio items from works-2.html
        $.get('works-2.html', function(data) {
            var $newItems = $(data).find('.grid-item');
            
            if ($newItems.length > 0) {
                // Add new items to the portfolio
                $newItems.css('opacity', 0);
                $container.append($newItems);
                
                // Wait for images to load
                $newItems.imagesLoaded(function() {
                    // Animate new items in
                    $newItems.animate({ opacity: 1 }, 500);
                    
                    // Reinitialize isotope with new items
                    $container.isotope('appended', $newItems);
                    
                    // Hide load more button since all items are loaded
                    $('.load-more').fadeOut(500);
                    moreItemsLoaded = true;
                });
            } else {
                // No more items found
                $('.load-more').html('<span class="text-muted">No more projects to load</span>');
            }
        }).fail(function() {
            // Error loading more items
            $loadMoreBtn.html('<span class="text-danger">Error loading more projects</span>');
        }).always(function() {
            // Reset loading state
            $icon.removeClass('fas fa-spinner fa-spin').addClass('fas fa-circle-notch');
            $loadMoreBtn.prop('disabled', false);
        });
        
        return false;
    });

    /* ======= Mobile Filter ======= */

    // bind filter on select change
    $('.portfolio-filter-mobile').on( 'change', function() {
      // get filter value from option value
      var filterValue = this.value;
      // use filterFn if matches value
      filterValue = filterFns[ filterValue ] || filterValue;
      $container.isotope({ filter: filterValue });
    });

    var filterFns = {
      // show if number is greater than 50
      numberGreaterThan50: function() {
        var number = $(this).find('.number').text();
        return parseInt( number, 10 ) > 50;
      },
      // show if name ends with -ium
      ium: function() {
        var name = $(this).find('.name').text();
        return name.match( /ium$/ );
      }
    };
});

/*=========================================================================
            Carousels
=========================================================================*/
$(document).on('ready', function() {
    "use strict";

    $('.testimonials-wrapper').slick({
      dots: true,
      arrows: false,
      slidesToShow: 2,
      slidesToScroll: 2,
      responsive: [
        {
          breakpoint: 768,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1,
            dots: true,
            arrows: false,
          }
        }
      ]
    });

    $('.clients-wrapper').slick({
      dots: false,
      arrows: false,
      slidesToShow: 4,
      slidesToScroll: 4,
      responsive: [
        {
          breakpoint: 768,
          settings: {
            slidesToShow: 3,
            slidesToScroll: 3,
            dots: false,
            arrows: false,
          }
        },
        {
          breakpoint: 425,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1,
            dots: false,
            arrows: false,
          }
        }
      ]
    });

});

$(function(){
    "use strict";

    $('.menu-icon').on( 'click', function() {
        $('header.left').toggleClass('open');
        $('.mobile-header, main.content').toggleClass('push');
    });

    $('main.content, header.left button.close').on( 'click', function() {
        $('header.left').removeClass('open');
        $('.mobile-header, main.content').removeClass('push');
    });

    /*=========================================================================
     Counterup JS for facts
     =========================================================================*/
    $('.count').counterUp({
      delay: 10,
      time: 2000
    });

    /*=========================================================================
     Progress bar animation with Waypoint JS
     =========================================================================*/
    if ($('.skill-item').length > 0) { 
      var waypoint = new Waypoint({
        element: document.getElementsByClassName('skill-item'),
        handler: function(direction) {
          
          $('.progress-bar').each(function() {
            var bar_value = $(this).attr('aria-valuenow') + '%';                
            $(this).animate({ width: bar_value }, { easing: 'linear' });
          });

          this.destroy()
        },
        offset: '50%'
      });
    }

    /*=========================================================================
     One Page Scroll with jQuery
     =========================================================================*/
    $('.vertical-menu li a[href^="#"]:not([href="#"]), .hero-ln').on('click', function(event) {
      var $anchor = $(this);
      $('html, body').stop().animate({
        scrollTop: $($anchor.attr('href')).offset().top-50
      }, 800, 'easeInOutQuad');
      event.preventDefault();
    });

    /*=========================================================================
     Add (nav-link) class to main menu.
     =========================================================================*/
    $('.vertical-menu li a').addClass('nav-link');

    /*=========================================================================
     Bootstrap Scrollspy
     =========================================================================*/
    $("body").scrollspy({ target: ".scrollspy", offset: 50});

    /*=========================================================================
     Background Image with Data Attribute
     =========================================================================*/
    var bg_img = document.getElementsByClassName('background');

    for (var i = 0; i < bg_img.length; i++) {
      var src = bg_img[i].getAttribute('data-image-src');
      bg_img[i].style.backgroundImage="url('" + src + "')";
    }

    /*=========================================================================
     Spacer with Data Attribute
     =========================================================================*/
    var list = document.getElementsByClassName('spacer');

    for (var i = 0; i < list.length; i++) {
      var size = list[i].getAttribute('data-height');
      list[i].style.height = "" + size + "px";
    }

    /*=========================================================================
            Scroll to Top
    =========================================================================*/
    $(window).scroll(function() {
        if ($(this).scrollTop() >= 250) {        // If page is scrolled more than 50px
            $('#return-to-top').fadeIn(200);    // Fade in the arrow
        } else {
            $('#return-to-top').fadeOut(200);   // Else fade out the arrow
        }
    });
    $('#return-to-top').on('click', function() {      // When arrow is clicked
        $('body,html').animate({
            scrollTop : 0                       // Scroll to top of body
        }, 400);
    });

});