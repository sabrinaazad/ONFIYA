/************************************************************************/
/**************************** GLOBAL SCRIPTS ****************************/
/************************************************************************/

// VARIABLES
var body = $("body");
var win = $(window);
var mobileMenuIcon = $("#hamburgerButton");
var mobileMenu = $(".main-nav__drawer");
var stickyWrap = $(".sticky-wrapper");
var mainNav = $("#mainNav");
var mainNavOffset = $("#mainNav")[0].offsetTop;
var question = $(".question");

$(function () {
  mobileMenuIcon.click(function () {
    mobileMenuToggle();
  });

  win.on("resize", function () {
    if (win.width() >= 768) {
      mobileMenuReset();
    }
  });

  $(document).scroll(function () {
    if (win.innerWidth < 767) {
      stickyWrap.addClass("sticky");
      mainNav.addClass("sticky-margin");
    }
    var topval = $(document).scrollTop();
    if (topval >= mainNavOffset) {
      stickyWrap.addClass("sticky");
      mainNav.addClass("sticky-margin");
    } else {
      stickyWrap.removeClass("sticky");
      mainNav.removeClass("sticky-margin");
    }
  });

  question.click(function () {
    $(this).parent().siblings().removeClass("expanded");
    $(this).parent().siblings().find(".arrow-down").removeClass("expanded");
    $(this).parent().siblings().find(".answer").slideUp();
    $(this).toggleClass("expanded");
    $(this).parent().find(".arrow-down").toggleClass("expanded");
    $(this).parent().find(".answer").slideToggle();
  });

  $('.featured-slider').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 3000,
    infinite: true,
    arrows: false,
    dots: true
});
$('.testimonials-slider').slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 4000,
    infinite: true,
    arrows: false,
    dots: true
});
$('.logos-slider').slick({
    arrows: false,
    dots: true,
    slidesToShow: 1,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 3000,
    mobileFirst: true,
    responsive: [
       {
          breakpoint: 767,
          settings: "unslick"
       }
    ]
  });
  $(".team_slider").slick({
    slidesToShow: 1,
    slidesToScroll: 1,
    arrows: false,
    dots: false,
    fade: true,
    asNavFor: ".team_slider_2",
  });
  $(".team_slider_2").slick({
    slidesToShow: 5,
    slidesToScroll: 1,
    asNavFor: ".team_slider",
    arrows: false,
    dots: false,
    centerMode: true,
    focusOnSelect: true,
    mobileFirst: true,
  });
  $('.package-slider').slick({
    arrows: false,
    dots: true,
    slidesToShow: 1,
    slidesToScroll: 1,
    autoplay: true,
    autoplaySpeed: 3000,
    mobileFirst: true,
    responsive: [
       {
          breakpoint: 767,
          settings: "unslick"
       }
    ]
  });
});

function mobileMenuToggle() {
  mobileMenuIcon.toggleClass("is-open");
  mobileMenu.toggleClass("is-open");
}

function mobileMenuReset() {
  mobileMenuIcon.removeClass("is-open");
  mobileMenu.removeClass("is-open");
}

var options = {
  useEasing: true, 
  useGrouping: true, 
  separator: ',', 
  decimal: '.', 
};

var counterParent = document.getElementById('counter');
var children = counterParent.children;

function countStart(){
  $('#counter').addClass('active');
  for (var i = 0; i < children.length; i++) {
     var item = document.getElementById(children[i].id).querySelector('.number');
     var countValue = item.getAttribute('data-value');

    var countUP = new CountUp(item, 0, countValue, 0, 2, options);
    if (!countUP.error) {
      countUP.start();
    }
  }
}

ScrollReveal().reveal('.section--statistics', { 
  beforeReveal: countStart
});	
