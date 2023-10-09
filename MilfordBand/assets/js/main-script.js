(function ($) {
  "use strict";

  // sticky header
  var stickyMenuContent = $("#top-navigation .justify-content-end").html();
  stickyMenuContent = stickyMenuContent.replace('"search-icon"', '"sticky-search-icon"');
  stickyMenuContent = stickyMenuContent.replace('"search"', '"sticky-search"');
  stickyMenuContent = stickyMenuContent.replace('"searchForm"', '"sticky-searchForm"');
  $(".sticky-header .container").append(stickyMenuContent);
  $(window).scroll(function() {
    if ($(this).scrollTop() >= 200){
      $(".sticky-header").addClass("visible");
    }
    else{
      $(".sticky-header").removeClass("visible");
    }
  });

  // mobile menu
  var mobileMenuContent = stickyMenuContent.replace('"sticky-search-icon"', '"mobile-search-icon"');
  mobileMenuContent = mobileMenuContent.replace('"sticky-search"', '"mobile-search"');
  mobileMenuContent = mobileMenuContent.replace('"sticky-searchForm"', '"mobile-searchForm"');
  $(".mobile-menu .navigation").append(mobileMenuContent);

  // initially hide search input
  $("#searchForm > .input-group").hide();
  $("#sticky-searchForm > .input-group").hide();

  // show search box if click search button
  $("#search-icon").on("click", function () {
    $("#search").val("");
    $("#search-icon").hide();
    $("#searchForm > .input-group").toggle("slide");
    $("#search").trigger("focus");
  });
  $("#sticky-search-icon").on("click", function () {
    $("#sticky-search").val("");
    $("#sticky-search-icon").hide();
    $("#sticky-searchForm > .input-group").toggle("slide");
    $("#sticky-search").trigger("focus");
  });
  
  // hide search box if click out of it
  $("#search").on("focusout", function() {
    $("#searchForm > .input-group").toggle("slide");
    $("#search-icon").show();
  });
  $("#sticky-search").on("focusout", function() {
    $("#sticky-searchForm > .input-group").toggle("slide");
    $("#sticky-search-icon").show();
  });

  // mobile menu
  $(".mobile-menu .close-btn").on("click", function () {
    $("body").removeClass("mobile-menu-visible");
  });

  $(".mobile-nav-toggler").on("click", function () {
    $("#mobile-search").val("");
    $("body").addClass("mobile-menu-visible");
  });

  $(".mobile-menu .menu-backdrop, .mobile-menu .close-btn").on("click", function () {
    $("body").removeClass("mobile-menu-visible");
  });

})(jQuery);