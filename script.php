</body>
<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>
<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
<!-- Open/Close Menu -->
<script>
$(document).ready(function(){
  $(".Open").click(function(){
    $(".Content-Full-Menu").fadeIn(350);
  });
  $(".Close").click(function(){
    $(".Content-Full-Menu").fadeOut(350);
  });
});
</script>
<!-- Open/Close Menu -->

<!-- Hide Body When Menu Open -->
<script>
$(document).ready(function(){
  $(".Open").click(function(){
    $(".AllSite").hide();
  });
  $(".Close").click(function(){
    $(".AllSite").show();
  });
});
</script>

<script>
$(document).ready(function(){
  $(".CTA-Offers").click(function(){
    $(".Nav").hide();
  });
  $(".Close").click(function(){
    $(".Nav").show();
  });
});
</script>

<script>
$(document).ready(function(){
  $(".Button").click(function(){
    $(".Nav").hide();
  });
  $(".Close").click(function(){
    $(".Nav").show();
  });
});
</script>
<!-- Hide Body When Menu Open -->


<!-- AOS -->
<script> AOS.init();

// You can also pass an optional settings object
// below listed default settings
AOS.init({
  // Global settings:
  disable: '', // accepts following values: 'phone', 'tablet', 'mobile', boolean, expression or function
  startEvent: 'DOMContentLoaded', // name of the event dispatched on the document, that AOS should initialize on
  initClassName: 'aos-init', // class applied after initialization
  animatedClassName: 'aos-animate', // class applied on animation
  useClassNames: false, // if true, will add content of `data-aos` as classes on scroll
  disableMutationObserver: false, // disables automatic mutations' detections (advanced)
  debounceDelay: 50, // the delay on debounce used while resizing window (advanced)
  throttleDelay: 99, // the delay on throttle used while scrolling the page (advanced)

  // Settings that can be overridden on per-element basis, by `data-aos-*` attributes:
  offset: 70, // offset (in px) from the original trigger point
  delay: 0, // values from 0 to 3000, with step 50ms
  duration: 400, // values from 0 to 3000, with step 50ms
  easing: 'ease', // default easing for AOS animations
  once: true, // whether animation should happen only once - while scrolling down
  mirror: false, // whether elements should animate out while scrolling past them
  anchorPlacement: 'top-bottom', // defines which position of the element regarding to window should trigger the animation

});
</script>
<!-- AOS -->

<!-- Swiper -->
<script>
    var swiper = new Swiper('.swiper-container', {
slidesPerView: 2,
centeredSlides: false,
spaceBetween: 20,
grabCursor: true,
});
</script>
<!-- Swiper -->

<!-- Cursor Pointer -->
<script>
    var mouseX=window.innerWidth/2,
    mouseY=window.innerHeight/2;

    var circle = {
        el:$('#ContactPointer'),
        x:window.innerWidth/2,
        y:window.innerHeight/2,
        w:80,
        h:80,
        update:function(){
            l = this.x-this.w/2;
            t = this.y-this.h/2;
            this.el.css({
                'transform':
                'translate3d('+l+'px,'+t+'px, 0)' });
        }
    }

    $(window).mousemove (function(e){
        mouseX = e.clientX;
        mouseY = e.clientY;
    })

    setInterval (move,1000/60)
    function move(){
        circle.x = lerp (circle.x, mouseX, 0.1);
        circle.y = lerp (circle.y, mouseY, 0.1);
        circle.update()
    }

    function lerp (start, end, amt){
        return (1-amt)*start+amt*end
    }
</script>
<!-- Cursor Pointer -->

<!-- Cursor Pointer Hide-->
<script>
    $(document).ready(function() {
        $('.Links').hover(function(){
            $('.Pointer').addClass('PointerNone');
        },
        function(){
            $('.Pointer').removeClass('PointerNone');
        });
    });
</script>

<script>
    $(document).ready(function() {
        $('.Content-Full-Menu ').hover(function(){
            $('.Pointer').addClass('PointerNone');
        },
        function(){
            $('.Pointer').removeClass('PointerNone');
        });
    });
</script>
<!-- Cursor Pointer Hide-->

<!-- Cursor Pointer Anchor-->
<script>
    $(document).ready(function() {
        $('.Anchor').hover(function(){
            $('.Pointer').addClass('PointerAnchor');
        },
        function(){
            $('.Pointer').removeClass('PointerAnchor');
        });
    });
</script>
<!-- Cursor Pointer Anchor-->

<!-- Cursor Pointer Article-->
<script>
  $(document).ready(function() {
      $('article, .Article-XL').hover(function(){
          $('.Pointer').addClass('PointerArticle');
      },
      function(){
          $('.Pointer').removeClass('PointerArticle');
      });
  });
</script>
<!-- Cursor Pointer Article-->

<!-- Pop Up Validation Contact -->
<script>
$(document).ready(function(){
  $(".Button").click(function(){
    $(".Validation-Box").fadeIn(350);
  });
  $(".Close").click(function(){
    $(".Validation-Box").fadeOut(350);
  });
});
</script>
<!-- Pop Up Validation Contact -->

<!-- Pop Up Formulaire Recrutement -->
<script>
$(document).ready(function(){
  $(".CTA-Offers").click(function(){
    $(".Offers-Form-Box").fadeIn(350);
  });
  $(".Offers-Box-Close").click(function(){
    $(".Offers-Form-Box").fadeOut(350);
  });
});
</script>
<!-- Pop Up Formulaire Recrutement -->

<!-- Pop Up Validaion Recrutement -->
<script>
$(document).ready(function(){
  $(".CTA-Offers-Form").click(function(){
    $('.Offers-Form-Box').addClass('Hide');
  });
  $(".Close").click(function(){
    $(".Validation-Box").fadeOut(350);
  });
});
</script>
<!-- Pop Up Validation Recrutement -->

<!-- Hide AllSite PopUp -->
<script>
$(document).ready(function(){
  $(".CTA-Offers,.Button").click(function(){
    $('.AllSite').addClass('Hide');
  });
  $(".Close").click(function(){
    $('.AllSite').removeClass('Hide');
  });
});
</script>
<!-- Hide AllSite PopUp -->