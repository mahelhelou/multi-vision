$(document).ready(function()
{
  $("#myModal2").modal();
    var swiper = new Swiper('.swiper-container1', {
      slidesPerView: 1,
      loop: true,
      loopFillGroupWithBlank: true,
      pagination: {
        el: '.swiper-pagination',
        clickable: true,
      },
    });
  var swiper = new Swiper('.swiper-container2', {
      slidesPerView: 1,
      loop: true,
      loopFillGroupWithBlank: true,
      pagination: {
        el: '.swiper-pagination',
        clickable: true,
      },
      navigation: {
        nextEl: '.next-work',
        prevEl: '.prev-work',
      },
    });
  var swiper3 = new Swiper('.swiper-container3', {
      slidesPerView: 3,
      spaceBetween: 30,
      cssWidthAndHeight: true,
      loop: true,
      visibilityFullFit: true,
      pagination: {
        el: '.swiper-pagination',
        clickable: true,
      },
      breakpoints: {
        768: {
          slidesPerView: 1,
          spaceBetween: 0,
        },
        425: {
          slidesPerView: 1,
          spaceBetween: 0,
        }
      },
    });
   $(".ServiseHI").slice(0, 0).show();
    $(".loadMore").on('click', function (e) {
        e.preventDefault();
        setTimeout(function() {
          $('.loader').show();
            $('.loader').delay(1000).fadeOut(50);
          });
        $(".ServiseHI:hidden").slice(0, 1).delay(1000).fadeIn(1000);
         if ($(".ServiseHI:hidden").length == 1) {
          $("#load").delay(1000).fadeOut(50);
              $("#MoreB").delay(1000).fadeOut(50).hide();  //ADD THIS
            }
    });
});
$(window).scroll(function () {
    if ($(this).scrollTop() > 50) {
        $('.totop a').fadeIn();
    } else {
        $('.totop a').fadeOut();
    }
});
window.onscroll=function(){myFunction()};
 var navbar=document.getElementById("topNav");
 var sticky=navbar.offsetTop;
 function myFunction()
 {
    if(window.pageYOffset>=sticky)
    {
        navbar.classList.add("sticky")
    }else
    {
        navbar.classList.remove("sticky");
    }
};

var swiper = new Swiper('.swiper-container', {
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },
});

// from index.html
document.querySelector(".card-flip").classList.toggle("flip");

  /*
   * Holder.js for demo image
   * Just for demo purpose
   */
  Holder.addTheme('gray', {
    bg: '#777',
    fg: 'rgba(255,255,255,.75)',
    font: 'Helvetica',
    fontweight: 'normal'
  });

  var swiper = new Swiper('.swiper-container', {
    navigation: {
      nextEl: '.swiper-button-next',
      prevEl: '.swiper-button-prev',
    },
  });

  jQuery(document).ready(function($) {
    // delegate calls to data-toggle="lightbox"
    jQuery(document).on('click',
      '[data-toggle="lightbox"]:not([data-gallery="navigateTo"]):not([data-gallery="example-gallery-11"])',
      function(event) {
        event.preventDefault();
        return jQuery(this).ekkoLightbox({
          onShown: function() {
            if (window.console) {
              return console.log('Checking our the events huh?');
            }
          },
          onNavigate: function(direction, itemIndex) {
            if (window.console) {
              return console.log('Navigating ' + direction + '. Current item: ' + itemIndex);
            }
          }
        });
      });

    // disable wrapping
    jQuery(document).on('click', '[data-toggle="lightbox"][data-gallery="example-gallery-11"]', function(event) {
      event.preventDefault();
      return jQuery(this).ekkoLightbox({
        wrapping: false
      });
    });

    //Programmatically call
    jQuery('#open-image').click(function(e) {
      e.preventDefault();
      jQuery(this).ekkoLightbox();
    });
    jQuery('#open-youtube').click(function(e) {
      e.preventDefault();
      jQuery(this).ekkoLightbox();
    });

    // navigateTo
    jQuery(document).on('click', '[data-toggle="lightbox"][data-gallery="navigateTo"]', function(event) {
      event.preventDefault();

      return $(this).ekkoLightbox({
        onShown: function() {

          this.modal().on('click', '.modal-footer a', function(e) {

            e.preventDefault();
            this.navigateTo(2);

          }.bind(this));

        }
      });
    });


    /**
     * Documentation specific - ignore this
     */
    anchors.options.placement = 'left';
    anchors.add('h3');
    jQuery('code[data-code]').each(function() {

      var $code = jQuery(this),
        $pair = jQuery('div[data-code="' + $code.data('code') + '"]');

      $code.hide();
      var text = $code.text($pair.html()).html().trim().split("\n");
      var indentLength = text[text.length - 1].match(/^\s+/)
      indentLength = indentLength ? indentLength[0].length : 24;
      var indent = '';
      for (var i = 0; i < indentLength; i++)
        indent += ' ';
      if ($code.data('trim') == 'all') {
        for (var i = 0; i < text.length; i++)
          text[i] = text[i].trim();
      } else {
        for (var i = 0; i < text.length; i++)
          text[i] = text[i].replace(indent, '    ').replace('    ', '');
      }
      text = text.join("\n");
      $code.html(text).show();

    });
  });