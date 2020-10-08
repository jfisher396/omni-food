console.log("script.js is working");

$(document).ready(function () {
  // sticky navbar animation
  $(".js--section-features").waypoint(
    function (direction) {
      if (direction == "down") {
        $("nav").addClass("sticky");
      } else {
        $("nav").removeClass("sticky");
      }
    },
    {
      offset: "60px;",
    }
  );

//   scroll to plans section animation
  $(".js--scroll-to-plans").click(function () {
    $("html, body").animate(
      { scrollTop: $(".js--section-plans").offset().top },
      1000
    );
  });

//   scroll to features section animation
  $(".js--scroll-to-features").click(function () {
    $("html, body").animate(
      { scrollTop: $(".js--section-features").offset().top },
      500
    );
  });

  


});
