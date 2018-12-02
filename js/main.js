/*--------------------------------------------------
Template Name: Ponno;
Description:  eCommerce Bootstrap 4 Template;
Version: 1.0;

NOTE: main.js, All custom script and plugin activation script in this file. 
-----------------------------------------------------

    JS INDEX
    ================================================
    1. Newsletter Popup
    2. Mobile Menu Activation
    3. Tooltip Activation
    4. Cart Box Dropdown Menu 
    5. Checkout Page Activation
    6. Slider Activation
    7. Thumbnail Product activation
    8. Apple Watch Product activation
    9. Recent Post Activation
    10. Featured Product Activation
    11. Categorie Product Activation
    12. Deal Product Activation
    13. Onsale Product Activation
    14. Countdown Js Activation
    15. ScrollUp Activation
    16. Sticky-Menu Activation
    17. Nice Select Activation
    18. Price Slider Activation
    19. Brand Logo  Activation
    

================================================*/

(function($) {
    "use Strict";

    /*   var productos = [];

       var productosStorage = JSON.parse(localStorage.getItem("productos"));


       if (productosStorage != null) {

           productos = productosStorage;

       }

       $('#card').on('click', function(e) {

           e.preventDefault();

           $('#list_cart').empty();

           $('#footer').empty();


           productosStorage = JSON.parse(localStorage.getItem("productos"));

           if (productosStorage != null) {


               productosStorage.forEach(function(producto) {

                   var index = 0;
                   var content = "";
                   content += '<div class="single-cart-box">'
                   content += '<div class="cart-img">'
                   content += '<a href="productos.php?codigo_prod=' + producto[index].codigo_prod + '">'
                   content += '<img src="img/products/p1.jpg" alt=' + producto[index].descripcion + '>'
                   content += '</a>'
                   content += '<span class="pro-quantity">1X</span>'
                   content += '</div>'
                   content += '<div class="cart-content">'
                   content += '<h6>'
                   content += '<a href="productos.php?codigo_prod=' + producto[index].codigo_prod + '">' + producto[index].descripcion + '</a>'
                   content += '</h6>'
                   content += '<span class="cart-price">$' + producto[index].precio + '</span>'
                   content += '<span>Size: S</span>'
                   content += '<span>Color: Yellow</span>'
                   content += '</div>'
                   content += '<a class="del-icone" href="#">'
                   content += '<span class="ti-close"></span>'
                   content += '</a>'
                   content += '</div>'


                   $('#list_cart').append(content);

                   index += 1;


               });

               var content2 = "";

               content2 += '<ul class="price-content">'
               content2 += '<li>Subtotal'
               content2 += '<span>$57.95</span>'
               content2 += '</li>'
               content2 += '<li>Shipping'
               content2 += '<span>$7.00</span>'
               content2 += '</li>'
               content2 += '<li>Taxes'
               content2 += '<span>$0.00</span>'
               content2 += '</li>'
               content2 += '<li>Total'
               content2 += '<span>$64.95</span>'
               content2 += '</li>'
               content2 += '</ul>'
               content2 += '<div class="cart-actions text-center">'
               content2 += '<a class="cart-checkout" href="checkout.html">Ver Carrito</a>'
               content2 += '<a href="#" id="vaciar" class="cart-checkout-delete"><i class="fa fa-trash-o" aria-hidden="true"></i> Vaciar Carrito</a>'
               content2 += '</div>'

               $('#footer').append(content2);


               $('#vaciar').on('click', function(e) {

                   e.preventDefault();

                   localStorage.clear();

                   $('#list_cart').empty();

                   $('#footer').empty();

                   $('#list_cart').html('<p class="text-dark">No Existen Productos</p>');

                   productos = [];

               });

           } else {

               var nodata = "";

               nodata += '<p class="text-dark">No Existen Productos</p>';


               $('#list_cart').html(nodata);


           }

       });



       $('.pro-add-cart button').on("click", function() {

           let id = $(this).attr('valor-id');

           if (id) {

               $.ajax({
                   type: 'POST',
                   url: 'servicios/index/get_producto.php',
                   data: 'codigo_prod=' + id,
                   dataType: 'json'

               })

               .done(function(data) {

                   productos.push(data);

                   localStorage.setItem("productos", JSON.stringify(productos));
               })


               .fail(function(data) {
                   console.log(data);
               })
           }

       }); */


    /*---------------------------
    1. Newsletter Popup
    ----------------------------*/
    /*  setTimeout(function () {
          $('.popup_wrapper').css({
              "opacity": "1",
              "visibility": "visible"
          });
          $('.popup_off').on('click', function () {
              $(".popup_wrapper").fadeOut(500);
          })
      }, 2500); */

    /*----------------------------
    2. Mobile Menu Activation
    -----------------------------*/
    jQuery('.mobile-menu nav').meanmenu({
        meanScreenWidth: "991",
    });

    /*----------------------------
    3. Tooltip Activation
    ------------------------------ */
    $('.pro-add-cart a,.pro-actions-link a').tooltip({
        animated: 'fade',
        placement: 'top',
        container: 'body'
    });

    /*---------------------------------
	4. Cart Box Dropdown Menu 
    -----------------------------------*/
    $('.drodown-show > a').on('click', function(e) {
        e.preventDefault();
        if ($(this).hasClass('active')) {
            $('.drodown-show > a').removeClass('active').siblings('.dropdown').slideUp()
            $(this).removeClass('active').siblings('.dropdown').slideUp();
        } else {
            $('.drodown-show > a').removeClass('active').siblings('.dropdown').slideUp()
            $(this).addClass('active').siblings('.dropdown').slideDown();
        }
    });

    /*----------------------------
    5. Checkout Page Activation
    -----------------------------*/
    $('#showlogin').on('click', function() {
        $('#checkout-login').slideToggle();
    });
    $('#showcoupon').on('click', function() {
        $('#checkout_coupon').slideToggle();
    });
    $('#cbox').on('click', function() {
        $('#cbox_info').slideToggle();
    });
    $('#ship-box').on('click', function() {
        $('#ship-box-info').slideToggle();
    });

    /*----------------------------
    6. Slider Activation
    -----------------------------*/
    $(".slider-activation").owlCarousel({
        loop: true,
        margin: 0,
        nav: true,
        autoplay: false,
        animateOut: 'fadeOut',
        animateIn: 'fadeIn',
        items: 1,
        autoplayTimeout: 10000,
        navText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
        dots: true,
        autoHeight: true,
        lazyLoad: true,
    });

    /*-------------------------------------
    7. Thumbnail Product activation
    --------------------------------------*/
    $('.thumb-menu').owlCarousel({
        loop: true,
        navText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
        margin: 15,
        smartSpeed: 500,
        nav: true,
        dots: false,
        responsive: {
            0: {
                items: 3,
                autoplay: true,
            },
            768: {
                items: 3
            },
            1200: {
                items: 4
            }
        }
    })
    $('.thumb-menu a').on('click', function() {
        $('.thumb-menu a').removeClass('active');
    })

    /*-------------------------------------
    8. Apple Watch Product activation
    --------------------------------------*/
    $('.large-active').slick({
        slidesToShow: 1,
        slidesToScroll: 1,
        arrows: false,
        fade: true,
        asNavFor: '.thumb_active',
        infinite: true,
    });


    $('.thumb_active').slick({
        slidesToShow: 3,
        slidesToScroll: 1,
        asNavFor: '.large-active',
        dots: false,
        arrows: false,
        centerMode: true,
        centerPadding: 0,
        focusOnSelect: true,
        infinite: true,
        vertical: true,
    }).on('beforeChange', function(event, slick, currentSlide, nextSlide) {
        $(this).find('.slick-slide').removeClass('first-item last-item');
        $(this).find('.slick-slide[data-slick-index="' + nextSlide + '"]').prev().addClass('first-item');
        $(this).find('.slick-slide[data-slick-index="' + nextSlide + '"]').next().addClass('last-item');
    });

    $('.thumb_active').find('.slick-slide.slick-active').first().addClass('first-item');
    $('.thumb_active').find('.slick-slide.slick-active').last().addClass('last-item');


    /*-----------------------------
    9. Recent Post Activation
    -----------------------------*/
    $(".recent-post-active").owlCarousel({
        loop: true,
        margin: 0,
        smartSpeed: 500,
        nav: false,
        autoplay: false,
        items: 1,
        dots: false,
    });

    /*----------------------------------------
    10. Featured Product Activation
    ----------------------------------------*/
    $('.feature-pro-active').owlCarousel({
        loop: true,
        nav: true,
        dots: false,
        smartSpeed: 1500,
        navText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
        margin: 30,
        responsive: {
            0: {
                items: 1,
                autoplay: true,
                smartSpeed: 500
            },
            480: {
                items: 2
            },
            768: {
                items: 2
            },
            992: {
                items: 3
            },
            1200: {
                items: 4
            }
        }
    })

    /*----------------------------------------
    11. Categorie Product Activation
    ----------------------------------------*/
    $('.categorie-pro-active').owlCarousel({
        loop: true,
        nav: true,
        dots: false,
        smartSpeed: 1500,
        navText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
        margin: 30,
        responsive: {
            0: {
                items: 1,
                autoplay: true,
                smartSpeed: 500
            },
            480: {
                items: 2
            },
            768: {
                items: 2
            },
            992: {
                items: 3
            },
            1200: {
                items: 3
            }
        }
    })

    /*----------------------------------------
    12. Deal Product Activation
    ----------------------------------------*/
    $('.deal-active').owlCarousel({
        loop: true,
        nav: false,
        dots: false,
        smartSpeed: 500,
        autoplay: true,
        margin: 30,
        responsive: {
            0: {
                items: 1
            },
            480: {
                items: 2
            },
            768: {
                items: 2
            },
            992: {
                items: 3
            },
            1200: {
                items: 1
            }
        }
    })

    /*----------------------------------------
    13. Onsale Product Activation
    ----------------------------------------*/
    $('.onsale-active').owlCarousel({
        loop: true,
        nav: false,
        dots: false,
        smartSpeed: 500,
        autoplay: true,
        margin: 30,
        responsive: {
            0: {
                items: 1,
            },
            480: {
                items: 1
            },
            768: {
                items: 2
            },
            992: {
                items: 2
            },
            1200: {
                items: 1
            }
        }
    })

    /*----------------------------
    14. Countdown Js Activation
    -----------------------------*/
    $('[data-countdown]').each(function() {
        var $this = $(this),
            finalDate = $(this).data('countdown');
        $this.countdown(finalDate, function(event) {
            $this.html(event.strftime('<div class="count"><p>%D</p><span>Days</span></div><div class="count"><p>%H</p> <span>Hrs</span></div><div class="count"><p>%M</p> <span>Min</span></div><div class="count"> <p>%S</p> <span>Secs</span></div>'));
        });
    });

    /*----------------------------
    15. ScrollUp Activation
    -----------------------------*/
    $.scrollUp({
        scrollName: 'scrollUp', // Element ID
        topDistance: '550', // Distance from top before showing element (px)
        topSpeed: 1000, // Speed back to top (ms)
        animation: 'fade', // Fade, slide, none
        scrollSpeed: 900,
        animationInSpeed: 1000, // Animation in speed (ms)
        animationOutSpeed: 1000, // Animation out speed (ms)
        scrollText: '<i class="fa fa-angle-double-up" aria-hidden="true"></i>', // Text for element
        activeOverlay: false // Set CSS color to display scrollUp active point, e.g '#00FFFF'
    });

    /*----------------------------
    16. Sticky-Menu Activation
    ------------------------------ */
    $(window).on('scroll', function() {
        if ($(this).scrollTop() > 100) {
            $('.header-sticky').addClass("sticky");
        } else {
            $('.header-sticky').removeClass("sticky");
        }
    });

    /*----------------------------
    17. Nice Select Activation
    ------------------------------ */
    $('select').niceSelect();

    /*----------------------------
    18. Price Slider Activation
    -----------------------------*/
    $("#slider-range").slider({
        range: true,
        min: 0,
        max: 100,
        values: [0, 85],
        slide: function(event, ui) {
            $("#amount").val("$" + ui.values[0] + "  $" + ui.values[1]);
        }
    });
    $("#amount").val("$" + $("#slider-range").slider("values", 0) +
        "  $" + $("#slider-range").slider("values", 1));

    /*--------------------------------
    19. Brand Logo  Activation
    ---------------------------------*/
    $('.brand-logo-active').owlCarousel({
        loop: true,
        autoplay: true,
        nav: true,
        dots: false,
        smartSpeed: 500,
        navText: ["<i class='fa fa-angle-left'></i>", "<i class='fa fa-angle-right'></i>"],
        margin: 20,
        responsive: {
            0: {
                items: 1,
                autoplay: true,
                smartSpeed: 300
            },
            340: {
                items: 2
            },
            480: {
                items: 3
            },
            768: {
                items: 4
            },
            992: {
                items: 4
            },
            1200: {
                items: 5
            }
        }
    })



})(jQuery);