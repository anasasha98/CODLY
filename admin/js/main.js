  (function($) {
          "use strict";


          $("#reviewed").click(function() {
              if ($(this).is(":checked")) {

                  $(".show").css("backgroundColor", "#A9A9A9");
                  $(".show").css("color", "white");

              }
          });
          $("#underreview").click(function() {
              if ($(this).is(":checked")) {
                  $(".show").css("backgroundColor", "white");
                  $(".show").css("color", "black");

              }
          });
      })(jQuery);