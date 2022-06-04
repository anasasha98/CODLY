(function ($) {
  "use strict";

  // Enable Bootstrap tooltips via data-attributes globally
  $("#reviewed").click(function () {
    if ($(this).is(":checked")) {
        $("td").css("backgroundColor", "#A9A9A9");
        $("td").css("color", "white");
        // $("#AddPassport").hide();backgroundColor: "black"
    } 
});
$("#underreview").click(function () {
  if ($(this).is(":checked")) {
      $("td").css("backgroundColor", "white");
      $("td").css("color", "black");
      // $("#AddPassport").hide();backgroundColor: "black"
  } 
});
})(jQuery);