(function ($) {
  "use strict";
  // Page loading
  $(window).on("load", function () {
    $("#preloader-active").delay(450).fadeOut("slow");
    $("body").delay(450).css({
      overflow: "visible",
    });
  });
  /*-----------------
        Menu Stick
    -----------------*/
  var header = $(".sticky-bar");
  var win = $(window);
  win.on("scroll", function () {
    var scroll = win.scrollTop();
    if (scroll < 20) {
      header.removeClass("stick");
    } else {
      header.addClass("stick");
    }
  });

  /*Carausel 2 columns*/
  $(".carausel-2-columns").each(function (key, item) {
    var id = $(this).attr("id");
    var sliderID = "#" + id;
    var appendArrowsClassName = "#" + id + "-arrows";

    $(sliderID).slick({
      dots: false,
      infinite: true,
      speed: 1000,
      arrows: true,
      autoplay: true,
      slidesToShow: 9,
      slidesToScroll: 1,
      loop: true,
      adaptiveHeight: true,
      responsive: [
        {
          breakpoint: 1025,
          settings: {
            slidesToShow: 5,
            slidesToScroll: 5,
          },
        },
        {
          breakpoint: 480,
          settings: {
            slidesToShow: 3,
            slidesToScroll: 3,
          },
        },
      ],
      prevArrow:
        '<span class="mr-4 text-blue-500 flex"><svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16l-4-4m0 0l4-4m-4 4h18"></path></svg></span>',
      nextArrow:
        '<span class="text-blue-500  flex"><svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg></span>',
      appendArrows: appendArrowsClassName,
    });
  });
  $(".carausel-3-columns").each(function (key, item) {
    var id = $(this).attr("id");
    var sliderID = "#" + "carausel-2-columns-2";
    var appendArrowsClassName = "#" + id + "-arrows";

    $("#carausel-2-columns-2").slick({
      dots: false,
      infinite: true,
      speed: 1000,
      arrows: true,
      autoplay: true,
      slidesToShow: 2,
      slidesToScroll: 1,
      centerMode: true,
      centerPadding: "5%",
      loop: true,
      adaptiveHeight: true,
      responsive: [
        {
          breakpoint: 1025,
          settings: {
            slidesToShow: 2,
            slidesToScroll: 2,
          },
        },
        {
          breakpoint: 480,
          settings: {
            slidesToShow: 1,
            slidesToScroll: 1,
          },
        },
      ],
      prevArrow:
        '<span class="mr-4 text-[#6A1B9A] flex "><svg width="50" height="50" viewBox="0 0 77 77" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M44.8913 53.9859L47.168 51.7092L33.9585 38.4997L47.168 25.2901L44.8913 23.0134L29.405 38.4997L44.8913 53.9859Z" fill="#6A1B9A"/><circle cx="38.5" cy="38.5" r="37.5375" transform="matrix(-1 0 0 1 77 0)" stroke="#64748B" stroke-width="1.925"/></svg></span>',
      nextArrow:
        '<span class="text-[#6A1B9A]  flex"><svg width="50" height="50" viewBox="0 0 78 77" fill="none" xmlns="http://www.w3.org/2000/svg"><path d="M32.3548 53.9859L30.0781 51.7092L43.2876 38.4997L30.0781 25.2901L32.3548 23.0134L47.8411 38.4997L32.3548 53.9859Z" fill="#6A1B9A"/><circle cx="38.7456" cy="38.5" r="37.5375" stroke="#64748B" stroke-width="1.925"/></svg></span>',
      appendArrows: appendArrowsClassName,
    });
  });

  /*Carausel Fade*/
  $(".carausel-fade").each(function (key, item) {
    var id = $(this).attr("id");
    var sliderID = "#" + id;
    var appendArrowsClassName = "#" + id + "-arrows";

    $(sliderID).slick({
      slidesToShow: 1,
      slidesToScroll: 1,
      fade: true,
      loop: true,
      dots: false,
      arrows: true,
      prevArrow:
        '<span class="mr-4 text-blue-500 flex"><svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M7 16l-4-4m0 0l4-4m-4 4h18"></path></svg></span>',
      nextArrow:
        '<span class="text-blue-500  flex"><svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3"></path></svg></span>',
      appendArrows: appendArrowsClassName,
      autoplay: true,
    });
  });

  /*Carausel Fade has Dots*/
  $(".carausel-fade-2").each(function (key, item) {
    var id = $(this).attr("id");
    var sliderID = "#" + id;
    var appendArrowsClassName = "#" + id + "-arrows";

    $(sliderID).slick({
      slidesToShow: 1,
      slidesToScroll: 1,
      fade: true,
      loop: true,
      dots: true,
      arrows: false,
      autoplay: true,
    });
  });

  /*---------------------
        Mobile menu active
    ------------------------ */
  var $offCanvasNav = $(".mobile-menu"),
    $offCanvasNavSubMenu = $offCanvasNav.find(".dropdown");

  /*Add Toggle Button With Off Canvas Sub Menu*/
  $offCanvasNavSubMenu.parent().prepend('<span class="menu-expand">+</span>');

  /*Close Off Canvas Sub Menu*/
  $offCanvasNavSubMenu.slideUp();

  /*Category Sub Menu Toggle*/
  $offCanvasNav.on("click", "li a, li .menu-expand", function (e) {
    var $this = $(this);
    if (
      $this
        .parent()
        .attr("class")
        .match(/\b(menu-item-has-children|has-children|has-sub-menu)\b/) &&
      ($this.attr("href") === "#" || $this.hasClass("menu-expand"))
    ) {
      e.preventDefault();
      if ($this.siblings("ul:visible").length) {
        $this.parent("li").removeClass("active");
        $this.siblings("ul").slideUp();
      } else {
        $this.parent("li").addClass("active");
        $this
          .closest("li")
          .siblings("li")
          .removeClass("active")
          .find("li")
          .removeClass("active");
        $this.closest("li").siblings("li").find("ul:visible").slideUp();
        $this.siblings("ul").slideDown();
      }
    }
  });

  /*------ ScrollUp -------- */
  $.scrollUp({
    scrollText:
      '<svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 10l7-7m0 0l7 7m-7-7v18"></path></svg>',
    easingType: "linear",
    scrollSpeed: 900,
    animation: "fade",
  });

  /*------ Wow Active ----*/
  new WOW().init();

  /*---- CounterUp ----*/
  $(".count").counterUp({
    delay: 10,
    time: 2000,
  });
})(jQuery);
