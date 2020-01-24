window.onload = ev => {
  $(".hamburger-menu").on("click", function() {
    $(this).toggleClass("open");
    $(".site-navigation").toggleClass("show");
  });

  var countdown_date = $("#date").data("date") || "2020/02/14";

  var now = Date.now();

  if (new Date(countdown_date) - now > 0) {
    $(".countdown").countdown(countdown_date, function(event) {
      $(".dday").html(event.strftime("%D"));
      $(".dhour").html(event.strftime("%H"));
      $(".dmin").html(event.strftime("%M"));
      $(".dsec").html(event.strftime("%S"));

      setTimeout(function() {
        $("#fixed-countdown").addClass("show");
      });
    });
  } else {
    $(".countdown").hide();
    $(".register-link").hide();
    $("#fixed-countdown").hide();
  }

  $("#accordion a").on("click", e => {
    if (!e.target.children[0].classList.contains("rotate-180")) {
      $("i.fas.fa-chevron-down").removeClass("rotate-180");
      $(e.target)
        .find("i")
        .addClass("rotate-180");
    } else {
      $(e.target)
        .find("i")
        .removeClass("rotate-180");
    }
  });
};
