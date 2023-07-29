   let lazyloadImage = "https://salehcars.com/web/img/lazyloadImage.svg";

        $('.slider').find('img').each(function () {
            if ($(this).data('bgfit') != 'cover') {
                $(this).attr('data-src', $(this).attr('src'))
                $(this).attr('src', lazyloadImage);
                $(this).addClass('lazyload');
            }
        });

        // Lazyload For Background
        window.addEventListener("scroll", function () { onScrollDiv() });
        window.addEventListener("DOMContentLoaded", function () { onScrollDiv() });

        function onScrollDiv() {
            var backgrounds = document.querySelectorAll('.background-lazyload');
            for (var i = 0, nb = backgrounds.length; i < nb; i++) {

                var background = backgrounds[i]
                var src = background.dataset.src;
                var rect = background.getBoundingClientRect();
                var isVisible = ((rect.top - window.innerHeight) < 500 && (rect.bottom) > -50) ? true : false;
                if (isVisible) {
                    background.style.backgroundImage = 'url("' + src + '")';

                }
            }

        }

$(document).ready(function () {

    $("#closeSearchMobile").click(function (e) {
        e.preventDefault();
        $(".resultsm").slideUp();
    });

    $('.addToFavLink').tooltip();


    //$('.ttt').lightBox();
    // Display form get mobile before call Or whats
    $(".displayPopup").on("click", function (e) {
        e.preventDefault();
        $(this).addClass('hoverd').siblings().removeClass('hoverd');

        if ($(this).data('type') == "phone") {
            $("#form_call").slideDown();
            $('#form_call').find('button i').removeClass('fa-whatsapp').removeClass('fab').addClass('fas').addClass('fa-phone');
            $("#phonenumber_type").val("1");
        }
        else if ($(this).data('type') == "whats") {
            $("#form_call").slideDown();
            //$(this).find('button i').removeClass('fas fa-phone').addClass('fab fa-whatsapp');
            $('#form_call').find('button i').removeClass('fa-phone').removeClass('fas').addClass('fab').addClass('fa-whatsapp');
            $("#phonenumber_type").val("2");
        }
        else if ($(this).data('type') == "share") {
            $("#social_btns_wraper").slideDown();
        }
        else if ($(this).data('type') == "search") {
            $("#searchOnFixed").slideDown();
        }
    });

    // Why Saleh Carusal Used in:
    // Home 
    // Car
    // Cars
    $('.why_saleh.owl-carousel').owlCarousel({
        loop: true,
        margin: 10,
        rtl: true,
        margin: 45,
        // responsiveClass:true,
        autoplay: true,
        navText: ['<i class="fas fa-angle-right"></i>', '<i class="fas fa-angle-left"></i>'],
        autoplayHoverPause: true,
        nav: false,
        // autoWidth:true,
        responsive: {
            0: {
                items: 1,
                center: true,
                margin: 15,
                autoWidth: true,
            },
            600: {
                items: 2
            },
            1000: {
                items: 3
            }
        }
    });


    // Home Page Carusal Cars
    // used in home page only
    $('.owl-carousel').owlCarousel({
        loop: true,
        margin: 10,
        //   rtl:true,
        items: 4,
        margin: 45,
        autoplay: true,
        navText: ['<i class="fas fa-angle-right"></i>', '<i class="fas fa-angle-left"></i>'],
        autoplayHoverPause: true,
        nav: true,
        responsive: {
            0: {
                items: 1,
                //center:true,
                //nav:false,
                // autoWidth:true,

            },
            600: {
                items: 2
            },
            1000: {
                items: 4
            }
        }
    });


    //// General Used In All Pages 


    /* Toggle Mobile Menu */
    $("#topIcon").on("click", function () {
        if ($("#myTopnav").hasClass("responsive")) {
            $("#myTopnav").slideUp();
            $("#myTopnav").removeClass("responsive");
            $("#topIcon").removeClass("responsive");
            //console.log('opend nav');
        } else {
            $("#myTopnav").slideDown().addClass("responsive");
            $("#topIcon").addClass("responsive");
            //console.log('closed nav');
        }
    });

});

/* Fixed Header in top */


// if is mobile Fixed purchace tab on bottom
// else if is Desktop Fixed purchace tab on Top
var isMobile = window.matchMedia("only screen and (max-width: 760px)").matches;

if (isMobile) {
    window.addEventListener('scroll', function () {
        if ($(window).scrollTop() > 300) {
            $('.purchaseFixed').css({
                'opacity': '1'
            });
            $('.testDriveBtn').css({
                'opacity': '1'
            });
            $('#footer').css({
                'margin-bottom': '50px',
            });
        } else {
            $('#footer').css({
                'margin-bottom': '0',
            });
            $('.purchaseFixed').css({
                'opacity': '0'
            });
            $('.testDriveBtn').css({
                'opacity': '0'
            });
        }
    });
    //   function fixDiv() {
    //   var $cache = $('#getFixed');
    if ($(window).scrollTop() > 300) {
        $('.purchaseFixed').css({
            'opacity': '1'
        });

        
        $('#footer').css({
            'margin-bottom': '50px',
        });
        //   $('#callOnFixed').hide();
    } else {

        $('#footer').css({
            'margin-bottom': '0',
        });
        $('.purchaseFixed').css({
            'opacity': '0'
        });
        $('.testDriveBtn').css({
            'opacity': '0'
        });
    }
    //   }
    //   $(window).scroll(fixDiv);
    //   fixDiv();

} else {

    function fixDiv() {
        var $cache = $('#getFixed');
        if ($(window).scrollTop() > 300) {
            $cache.slideDown('fast');
            $cache.css({
                'position': 'fixed',
                'top': '0',
                'display': 'block'
            });
        } else {
            $cache.slideUp();
            $cache.css({
                'position': 'fixed',
                'top': 'auto',
                'display': 'none'
            });
        }
    }
    $(window).scroll(fixDiv);
    fixDiv();
}
