$(".hamburger, .overlay").click(function (event) {
  $(".hamburger").toggleClass("h-active");
    $("body").toggleClass("menu-active");
});

ScrollReveal().reveal(".animFade", {
    easing: "ease-in",
    distance: "15px",
    duration: 1000
});

window.sr = new ScrollReveal();

ScrollReveal().reveal('.anim-ease', {
    easing: 'ease-in',
    duration: 1200,
    viewFactor: 0.3,
    delay: 100,
    interval: 200
});

ScrollReveal().reveal('.anim-right', {
    distance: '50px',
    origin: 'right',
    opacity: 0,
    duration: 1500,
    viewFactor: 0.3,
    delay: 200,
    interval: 200
});
ScrollReveal().reveal('.anim-left', {
    distance: '100px',
    origin: 'left',
    opacity: 0,
    duration: 1200,
    viewFactor: 0.3,
    delay: 500,
    interval: 200
});

ScrollReveal().reveal('.col-anim', {

    opacity: 0,
    duration: 1500,
    viewFactor: 0.3,
    delay: 200,
    interval: 200
});

var url = window.location.pathname;
  var urlsplit = url.split("/").slice(-1)[0];
$('.main-nav>.nav>li a[href="./"]').parent().addClass("active-nav").siblings().removeClass("active-nav");
$('.main-nav>.nav>li a[href*="' + urlsplit + '"]').parent().addClass("active-nav").siblings().removeClass("active-nav");
$('.main-nav>.nav>li [href="'+urlsplit+'"]').parents(".submenu").parent().addClass("active-nav").siblings().removeClass("active-nav");
/*$(".inner-blog .col-md-4").each(function(){
  var sburl = $(this).find("a").attr("href");
  console.log(sburl);
  if(urlsplit === sburl){
     $('.main-nav>.nav>li a[href="blogs.php"]').parent().addClass("active-nav").siblings().removeClass("active-nav");
  }
})*/
/*$(function(){
    $('.service-menu a').click(function(){
      $(this).parent().addClass('active').siblings().removeClass('active')  
    })
  })*/