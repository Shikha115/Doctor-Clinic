<footer class="footer animFade">
      <div class="container">
      	<div class="row">
      		<div class="col-12 col-md-4">
      			<div class="foot-img">
              <img src="images/logo.png" class="img-fluid" alt="foot-logo">
            </div>
            <div class="foot-text">
              <p>Contrary to popular belief, Lorem simply random text. It has roots in a piece of classical Latin literature.</p>
              <ul class="list-unstyled social">
                <li>
                  <a href="#">
                    <i class="icon-facebook"></i>
                  </a>
                </li>
                <li>
                  <a href="#">
                    <i class="icon-twitter"></i>
                  </a>
                </li>
                <li>
                  <a href="#">
                    <i class="icon-youtube"></i>
                  </a>
                </li>
                <li>
                  <a href="#">
                    <i class="icon-linkedin2"></i>
                  </a>
                </li>
              </ul>
            </div>
      		</div>

          <div class="col-12 col-md-3">
            <div class="foot-text">
              <!-- <div class="row">
                <div class="col-12 col-md-6"> -->
                  <h5>Quick Links</h5>
                  <ul class="list-unstyled quick-links">
                    <li>
                      <a href="./">Home</a>
                    </li>
                    <li>
                      <a href="about.php">About Us</a>
                    </li>
                    <li>
                      <a href="services.php">Services</a>
                    </li>
                    <!-- <li>
                      <a href="#">Blogs</a>
                    </li> -->
                    <li>
                      <a href="faq.php">FAQs</a>
                    </li>
                    <li>
                      <a href="contact-us.php">Contact Us</a>
                    </li>
                  </ul>
                <!-- </div> -->

               <!--  <div class="col-12 col-md-6">
                  <h5>Services</h5>
                  <ul class="list-unstyled quick-links">
                    <li>
                      <a href="#">Corporate Finance</a>
                    </li>
                    <li>
                      <a href="#">Tax Advice</a>
                    </li>
                    <li>
                      <a href="#">Legal Consulting</a>
                    </li>
                    <li>
                      <a href="#">Audit</a>
                    </li>
                    <li>
                      <a href="#">Tax Services</a>
                    </li>
                    <li>
                      <a href="#">Accounting Services</a>
                    </li>
                  </ul>
                </div> -->
              <!-- </div>-->
              
            </div>
          </div>

          <div class="col-12 col-md-5">
            <div class="foot-text">
              <h5>Get In Touch</h5>
              <ul class="list-unstyled contact-links">
                <li>
                  <i class="icon-location"></i>
                  <span>2130 Fulton Street, San Diego, CA 94117-1080 USA</span>
                </li>
                <li>
                  <i class="icon-phone"></i>
                  <a href="#">0800-123456</a>
                </li>
                <li>
                  <i class="icon-envelope-o"></i>
                  <a href="#">info@example.com</a>
                </li>
              </ul>
            </div>
          </div>
      	</div>

      	
      </div>

      <div class="copyright">
        <div class="container">
          <div class="row">
            <div class="col-12 text-center">
              <p>&copy; <?php echo date("Y") ;?> Gravita. All rights reserved. Designed & Developed By <a href="https://ebslon.com/" target="blank">Ebslon Infotech</a></p>
            </div>
          </div>
        </div>
      </div>
  
</footer>

</main>
</div>
<script type="text/javascript" src="./js/app.js?v=<?php echo $appVersion ?>"></script>
<script src="js/ScrollMagic.min.js"></script>
<script src="js/swiper-plugin.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="https://kit.fontawesome.com/8aa71aba32.js" crossorigin="anonymous"></script>

<script type="text/javascript">
  $(".slide").owlCarousel({
         animateOut: 'fadeOutLeft',
         animateIn: 'fadeIn',
         items: 1,
         nav: true,
         dots: false,
         autoplayTimeout: 7000,
         autoplaySpeed: 2000,
         autoplay: true,
         loop: true,
         navText: ["<i class='icon-angle-left'><i>", "<i class='icon-angle-right'><i>"],
         mouseDrag: true,
         touchDrag: true,
      });
      $(".slide").on("translate.owl.carousel", function () {
         $(".main-slide h2, .main-slide p").removeClass("animated fadeInUp").css("opacity", "0");
         $(".main-slide .btn-primary").removeClass("animated fadeInDown").css("opacity", "0");
      });
      $(".slide").on("translated.owl.carousel", function () {
         $(".main-slide h2, .main-slide p").addClass("animated fadeInUp").css("opacity", "1");
         $(".main-slide .btn-primary").addClass("animated fadeInDown").css("opacity", "1");
      });

      $(".slide").on("translate.owl.carousel", function () {
         $(".main-slide h3").removeClass("animated fadeOutRight").css("opacity", "0");
      });
      $(".slide").on("translated.owl.carousel", function () {
         $(".main-slide h3").addClass("animated fadeInLeft").css("opacity", "1");
      });
</script>

<script type="text/javascript">
  $(".service-slider").owlCarousel({
         autoplay: true,
         loop: true,
         margin: 0,
         touchDrag: true,
         mouseDrag: true,
         nav: true,
         dots: false,
         autoplayTimeout: 6000,
         autoplaySpeed: 1200,
         navText: ["<i class='icon-angle-left'></i>", "<i class='icon-angle-right'></i>"],
         responsive: {
            0: {
               items: 1
            },
            480: {
               items: 1
            },
            600: {
               items: 2
            },
            1000: {
               items: 3
            },
            1200: {
               items: 3
            }
         }
      });
</script>

<script type="text/javascript">
  $(".testimonial-sldier").owlCarousel({
         autoplay: true,
         loop: true,
         margin: 0,
         items: 1,
         touchDrag: true,
         mouseDrag: true,
         nav: true,
         dots: false,
         autoplayTimeout: 6000,
         autoplaySpeed: 1200,
         navText: ["<i class='icon-angle-left'></i>", "<i class='icon-angle-right'></i>"],
      });
</script>

<script type="text/javascript">
  $(".client-slider").owlCarousel({
         autoplay: true,
         loop: true,
         margin: 20,
         touchDrag: true,
         mouseDrag: true,
         nav: true,
         dots: false,
         autoplayTimeout: 6000,
         autoplaySpeed: 1200,
         navText: ["<i class='icon-angle-left'></i>", "<i class='icon-angle-right'></i>"],
         responsive: {
            0: {
               items: 1
            },
            480: {
               items: 1
            },
            600: {
               items: 2
            },
            1000: {
               items: 6
            },
            1200: {
               items: 6
            }
         }
      });
</script>

    <script type="text/javascript">
  var activeHeader = function() {
  var winPos = $(window).scrollTop();
  if (winPos > 0) {
    $(".header-main").addClass("header-active");



  } else {
    $(".header-main").removeClass("header-active");

     
  }
};
activeHeader();
$(window).scroll(function() {
  activeHeader();
});
</script>


<script type="text/javascript">
  function parallaxIt() {
    // create variables
    var $fwindow = $(window);
    var scrollTop = window.pageYOffset || document.documentElement.scrollTop;

    var $contents = [];
    var $backgrounds = [];

    // for each of content parallax element
    $('[data-type="content"]').each(function(index, e) {
      var $contentObj = $(this);

      $contentObj.__speed = ($contentObj.data('speed') || 1);
      $contentObj.__fgOffset = (0);
      $contents.push($contentObj);
    });

    // for each of background parallax element
    $('[data-type="background"]').each(function() {
      var $backgroundObj = $(this);

      $backgroundObj.__speed = ($backgroundObj.data('speed') || 1);
      $backgroundObj.__fgOffset = ($backgroundObj.data('offset') || $backgroundObj.offset().top);
      $backgrounds.push($backgroundObj);
    });


    // update positions
    $fwindow.on('scroll resize', function(e) {
      scrollTop = window.pageYOffset || document.documentElement.scrollTop;

      $contents.forEach(function($contentObj) {
        var yPos = $contentObj.__fgOffset - scrollTop / $contentObj.__speed;

        $contentObj.css('transform', "translate(-50%,"+  -yPos + "px)");
        //console.log("translateY("+ yPos+"px)");
      });

      $backgrounds.forEach(function($backgroundObj) {
        var yPos = -((scrollTop - $backgroundObj.__fgOffset) / $backgroundObj.__speed);

        $backgroundObj.css({
          backgroundPosition: '50% ' + yPos + 'px'
        });
      });


    });


    // triggers winodw scroll for refresh
    $fwindow.trigger('scroll');

  };
  parallaxIt();

  var mediaSlide = new Swiper(".testi-slider", {
   
  watchOverflow: true,
  spaceBetween: 30,
  slidesPerView: 1,
  /*autoplay: {
    delay: 5000,
     disableOnInteraction: false,
   },*/
   navigation: {
        nextEl: '.swiper-button-next',
        prevEl: '.swiper-button-prev',
      },
  speed: 1000,
  breakpoints: {
    991: {
      spaceBetween: 15,
      slidesPerView: 1,
    }
  }
});

  ScrollReveal().reveal('.anim-scale', {
  scale: 0.85,
  reset: false,
  duration: 1500,
  viewFactor: 0.3,
  delay: 500,
  interval: 200
});

  ScrollReveal().reveal('.anim-bounce-top', {
  distance: '100px',
  origin: 'top',
  opacity: 0,
  duration: 1200,
  viewFactor: 0.3,
  delay: 200,
  interval: 200
});
ScrollReveal().reveal('.anim-bounce-bottom', {
  distance: '100px',
  origin: 'bottom',
  opacity: 0,
  duration: 1200,
  viewFactor: 0.3,
  delay: 500,
  interval: 200
});
ScrollReveal().reveal('.blog-sec .col-md-4', {
  opacity: 0,
  duration: 1500,
  viewFactor: 0.3,
  delay: 200,
  interval: 200
});
</script>
<script type="text/javascript">
  //counter
 var a = 0;
$(window).scroll(function() {

  var oTop = window.innerHeight - $('#counter').offset().top;
  if (a == 0 && $(window).scrollTop() < oTop) {
    $('.counter-value').each(function() {
      var $this = $(this),
        countTo = $this.attr('data-count');
      $({
        countNum: $this.text()
      }).animate({
          countNum: countTo
        },

        {

          duration: 4000,
          easing: 'swing',
          step: function() {
            $this.text(commaSeparateNumber(Math.floor(this.countNum)));
          },
          complete: function() {
            $this.text(commaSeparateNumber(this.countNum));
            //alert('finished');
          }

        });
    });
    a = 1;
  }

});

function commaSeparateNumber(val) {
  while (/(\d+)(\d{3})/.test(val.toString())) {
    val = val.toString().replace(/(\d+)(\d{3})/, '$1' + ',' + '$2');
  }
  return val;
}
</script>

 <script type="text/javascript">
    /*  ======================================
    Testimonial carousel
    ====================================== */
    
    var testimonial = $('.testimonial-caro');
    testimonial.owlCarousel({
        items: 1,
        loop: true,
        touchDrag: false,
        mouseDrag: false
    });
    
    var testimonialIn = $('.testimonial-caro-bg');
    testimonialIn.owlCarousel({
        items: 4,
        loop: true,
        dots: false,
        autoplay: true,
        autoplayTimeout: 5000, // auto play time
        responsive : {
            // breakpoint from 0 up
            0 : {
                items: 1
            },
            // breakpoint from 768 up
            768 : {
                items: 2
            },
            // breakpoint from 768 up
            992 : {
                items: 4
            }
        }

    });


// Get the element with id="defaultOpen" and click on it
// document.getElementById("defaultOpen").click();

</script> 
<script type="text/javascript">
          $(()=>{
            $("#date").datepicker();
          });  

          $(".item-icon").on('click', function () {
		        var width = $(window).width();
		        if (width < 1199){
              $(this).hide();
              $(this).next().fadeToggle("slow");
            }  
	        });

          $(".item-text").on('click', function () {
		        var width = $(window).width();
		        if (width < 1199){
              $(this).hide();
              $(this).prev().fadeToggle("slow");
            }  
	        });
  
</script>
<script src="js/jquery.min.js"></script>
<script src="js/bootstrap.bundle.min.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/jquery-ui.min.js"></script>



</body>
</html>