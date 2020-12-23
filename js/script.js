(function ($) {
  "use strict";

  $(function () {
    document.addEventListener("touchstart", function () {}, false);

    if ("ontouchstart" in document.documentElement) {
      $("body").css("cursor", "pointer");
    }

    if ($(".two-cols").length) {
      $(window).on("resize", function () {
        if ($(window).width() < 992) {
          var setHeightLeft = $(".left-col").outerHeight();

          var setHeightRight = $(".right-col").outerHeight();

          $(".left-bg").height(setHeightLeft);

          $(".right-bg").height(setHeightRight);
        } else if ($(window).width() > 992) {
          $(".left-bg").css("height", "inherit");

          $(".right-bg").css("height", "inherit");
        }
      });
    }

    /* ------------------------------------------------
		Socials popup
		------------------------------------------------ */

    if ($(".social-btn").length) {
      $(".wrapper-container").append(
        '<div id="social-popup"><div class="popup-inner"><span>Share This:</span><button class="close-popup"></button><ul class="social-icons share"><li><a href="#" class="sh-facebook"><i class="icon-facebook"></i>Facebook</a></li><li><a href="#" class="sh-twitter"><i class="icon-twitter"></i>Twitter</a></li><li><a href="#" class="sh-google"><i class="icon-gplus-3"></i>Google Plus</a></li><li><a href="#" class="sh-pinterest"><i class="icon-pinterest"></i>Pinterest</a></li><li><a href="#" class="sh-mail"><i class="icon-email"></i>Mail</a></li></ul></div></div>'
      );

      var popup_item = $("#social-popup");

      popup_item.fadeOut();

      $(document).mouseup(function (e) {
        var container = $("#social-popup");
        if (container.has(e.target).length === 0) {
          container.fadeOut("slow");
        }
      });

      $(".social-btn").on("click", function () {
        popup_item.fadeIn("slow");
        return false;
      });

      $(".close-popup").on("click", function () {
        popup_item.fadeOut("slow");
      });
    }

    /* ---------------------------------------------------- */
    /*	Tribes									    		*/
    /* ---------------------------------------------------- */

    if ($(".tribe-events-filters").length) {
      $("#tribe_events_filters_toggle").on("click", function () {
        $(".tribe-events-filters").addClass("show-filter");
      });

      $("#tribe_events_filters_close_filters").on("click", function () {
        $(".tribe-events-filters").removeClass("show-filter");
      });

      $(".tribe-events-filters-group-heading").on("click", function () {
        $(this).parent(".tribe_events_filter_item").toggleClass("active");
      });
    }

    /* ---------------------------------------------------- */
    /*	Animate a regular anchor navigation					*/
    /* ---------------------------------------------------- */

    if ($("a.animated").length) {
      $("body").localScroll({
        hash: true,
        filter: ".animated",
        onBefore: function () {
          this.offset = -100;
        },
      });
    }

    /* ---------------------------------------------------- */
    /*	Countdown											*/
    /* ---------------------------------------------------- */

    $(".countdown").each(function () {
      var $this = $(this),
        endDate = $this.data(),
        until = new Date(
          endDate.year,
          endDate.month || 0,
          endDate.day || 1,
          endDate.hours || 0,
          endDate.minutes || 0,
          endDate.seconds || 0
        );
      // initialize
      $this.countdown({
        until: until,
        format: "dHMS",
        labels: [
          "Years",
          "Month",
          "Weeks",
          "Days",
          "Hours",
          "Minutes",
          "Seconds",
        ],
      });
    });

    /* ------------------------------------------------
		Popup
		------------------------------------------------ */

    if ($(".popup").length) {
      var popup_item = $(".popup");

      popup_item.not("#popup").fadeOut();

      $(document).mouseup(function (e) {
        var container = popup_item;
        if (container.has(e.target).length === 0) {
          container.fadeOut("slow");
        }
      });

      $(".close-popup").on("click", function () {
        popup_item.fadeOut("slow");
      });

      // Popup sign up

      $(".popup-btn-sign").on("click", function () {
        $("#popup-sign").fadeIn("slow");
        return false;
      });

      $(".popup-btn-login").on("click", function () {
        $("#popup-sign").fadeOut("slow");
        return false;
      });

      // Popup login

      $(".popup-btn-login").on("click", function () {
        $("#popup-login").fadeIn("slow");
        return false;
      });

      $(".popup-btn-sign").on("click", function () {
        $("#popup-login").fadeOut("slow");
        return false;
      });
    }

    /* ---------------------------------------------------- */
    /*	Revolution slider									*/
    /* ---------------------------------------------------- */

    if ($(".rev-slider-wrapper").hasClass("full-scr")) {
      if ($("#rev-slider").length) {
        jQuery("#rev-slider").revolution({
          sliderType: "standard",
          spinner: "spinner3",
          shuffle: "off",
          autoHeight: "off",
          hideThumbsOnMobile: "off",
          hideSliderAtLimit: 0,
          hideCaptionAtLimit: 0,
          hideAllCaptionAtLilmit: 0,
          delay: 6000,
          navigation: {
            arrows: {
              enable: true,
              left: {
                container: "slider",
                h_align: "left",
                v_align: "center",
                h_offset: 30,
                v_offset: 0,
              },
              right: {
                container: "slider",
                h_align: "right",
                v_align: "center",
                h_offset: 30,
                v_offset: 0,
              },
            },
          },
          visibilityLevels: [1460, 1280, 1024],
          responsiveLevels: [1460, 1280, 1024],
          gridwidth: [1460, 1280, 1024],
          gridheight: 980,
        });
      }
    } else {
      if ($("#rev-slider").length) {
        jQuery("#rev-slider").revolution({
          sliderType: "standard",
          spinner: "spinner3",
          shuffle: "off",
          autoHeight: "off",
          hideThumbsOnMobile: "off",
          hideSliderAtLimit: 0,
          hideCaptionAtLimit: 0,
          hideAllCaptionAtLilmit: 0,
          delay: 6000,
          navigation: {
            arrows: {
              enable: true,
              left: {
                container: "slider",
                h_align: "left",
                v_align: "center",
                h_offset: 30,
                v_offset: 0,
              },
              right: {
                container: "slider",
                h_align: "right",
                v_align: "center",
                h_offset: 30,
                v_offset: 0,
              },
            },
          },
          visibilityLevels: [1460, 1280, 1024],
          responsiveLevels: [1460, 1280, 1024],
          gridwidth: [1460, 1280, 1024],
          gridheight: 755,
        });
      }
    }

    /* ---------------------------------------------------- */
    /*	Isotope												*/
    /* ---------------------------------------------------- */

    if ($(".isotope").length) {
      $(window).on("load", function () {
        var $container = $(".isotope");

        // filter buttons
        $("#filters button").on("click", function () {
          var $this = $(this);
          // don't proceed if already selected
          if (!$this.hasClass("is-checked")) {
            $this
              .parents("#options")
              .find(".is-checked")
              .removeClass("is-checked");
            $this.addClass("is-checked");
          }
          var selector = $this.attr("data-filter");
          $container.isotope({
            itemSelector: ".item",
            filter: selector,
            isOriginLeft: !$.mad_core.SUPPORT.ISRTL,
          });
          return false;
        });

        $.mad_core.isotope();
      });
    }

    /* ---------------------------------------------------- */
    /*	Gallery carousel									*/
    /* ---------------------------------------------------- */

    var pageCarousel = $(".owl-carousel");

    if (pageCarousel.length) {
      $(".owl-carousel")
        .not("#thumbnails")
        .each(function () {
          /* Max items counting */
          var max_items = $(this).data("max-items");
          var tablet_items = max_items;
          if (max_items > 4) {
            tablet_items = max_items - 2;
          } else {
            tablet_items = max_items - 1;
          }
          var smart_items = max_items;
          if (max_items > 4) {
            smart_items = max_items - 3;
          } else {
            smart_items = 1;
          }
          if (max_items < 2) {
            smart_items = max_items;
            tablet_items = max_items;
          }
          var mobile_items = 1;

          var autoplay_carousel = $(this).data("autoplay");

          var center_carousel = $(this).data("center");

          var item_margin = $(this).data("item-margin");

          /* Install Owl Carousel */
          $(this).owlCarousel({
            smartSpeed: 450,
            nav: true,
            loop: true,
            autoplay: autoplay_carousel,
            center: center_carousel,
            autoplayTimeout: 3000,
            navText: false,
            margin: item_margin,
            lazyLoad: true,
            rtl: $.mad_core.SUPPORT.ISRTL ? true : false,
            responsiveClass: true,
            responsive: {
              0: {
                items: mobile_items,
              },
              480: {
                items: smart_items,
              },
              768: {
                items: tablet_items,
              },
              992: {
                items: max_items,
              },
            },
          });
        });

      if ($("#thumbnails").length) {
        $("#thumbnails").each(function () {
          /* Max items counting */
          var max_items = $(this).data("max-items");
          var tablet_items = max_items;
          if (max_items > 1) {
            tablet_items = max_items - 1;
          }
          var smart_items = max_items;
          if (max_items > 3) {
            smart_items = max_items - 2;
          } else {
            smart_items = max_items - 1;
          }
          var mobile_items = 1;

          var autoplay_carousel = $(this).data("autoplay");

          var center_carousel = $(this).data("center");

          var item_margin = $(this).data("item-margin");

          $(this).owlCarousel({
            items: max_items,
            URLhashListener: false,
            navSpeed: 800,
            nav: true,
            margin: 10,
            loop: false,
            rtl: $.mad_core.SUPPORT.ISRTL ? true : false,
            navText: false,
            responsive: {
              0: {
                items: tablet_items,
              },
              481: {
                items: max_items,
              },
            },
          });
        });
      }
    }

    /* ---------------------------------------------------- */
    /*	Elevate zoom										*/
    /* ---------------------------------------------------- */

    if ($("[data-zoom-image]").length) {
      var button = $(".qv-preview");

      $("#zoom-image").elevateZoom({
        gallery: "thumbnails",
        galleryActiveClass: "active",
        zoomType: "inner",
        cursor: "crosshair",
        responsive: true,
        zoomWindowFadeIn: 500,
        zoomWindowFadeOut: 500,
        easing: true,
        lensFadeIn: 500,
        lensFadeOut: 500,
      });
    }

    /* ---------------------------------------------------- */
    /*	Custom Select										*/
    /* ---------------------------------------------------- */

    if ($(".mad-custom-select").length) {
      $.MadCustomSelects();
    }

    /* ---------------------------------------------------- */
    /*	Tabs												*/
    /* ---------------------------------------------------- */

    $(window).on("load", function () {
      var tabs = $(".tabs-section");
      if (tabs.length) {
        tabs.tabs({
          beforeActivate: function (event, ui) {
            var hash = ui.newTab.children("li a").attr("href");
          },
          hide: {
            effect: "fadeOut",
            duration: 450,
          },
          show: {
            effect: "fadeIn",
            duration: 450,
          },
          updateHash: false,
        });
      }

      /* ------------------------------------------------
				Tabs - opacity
			------------------------------------------------ */

      var tabs = $(".mad-tabs");

      if (tabs.length) {
        tabs.MadTabs({
          easing: "easeOutQuint",
          speed: 600,
          cssPrefix: "mad-",
        });
      }
    });

    /* ---------------------------------------------------- */
    /*	Newsletter											*/
    /* ---------------------------------------------------- */

    var subscribe = $('[id^="newsletter"]');
    subscribe.append('<div class="message-container-subscribe"></div>');
    var message = $(".message-container-subscribe"),
      text;

    subscribe.on("submit", function (e) {
      var self = $(this);

      if (self.find('input[type="email"]').val() == "") {
        text = "Please enter your e-mail!";
        message
          .html('<div class="alert-warning">' + text + "</div>")
          .slideDown()
          .delay(4000)
          .slideUp(function () {
            $(this).html("");
          });
      } else {
        self.find("span.error").hide();
        $.ajax({
          type: "POST",
          url: "bat/newsletter.php",
          data: self.serialize(),
          success: function (data) {
            if (data == "1") {
              text = "Your email has been sent successfully!";
              message
                .html('<div class="alert-success">' + text + "</div>")
                .slideDown()
                .delay(4000)
                .slideUp(function () {
                  $(this).html("");
                })
                .prevAll('input[type="email"]')
                .val("");
            } else {
              text = "Invalid email address!";
              message
                .html('<div class="alert-error">' + text + "</div>")
                .slideDown()
                .delay(4000)
                .slideUp(function () {
                  $(this).html("");
                });
            }
          },
        });
      }
      e.preventDefault();
    });

    /* ---------------------------------------------------- */
    /*	Loader												*/
    /* ---------------------------------------------------- */

    if ($(".loader").length) {
      $("body").queryLoader2({
        backgroundColor: "#fff",
        barColor: "#630e1d",
        barHeight: 5,
        deepSearch: true,
        minimumTime: 1000,
        onComplete: function () {
          $(".loader").fadeOut("200");
        },
      });
    }

    /* ---------------------------------------------------- */
    /*	Sticky menu											*/
    /* ---------------------------------------------------- */

    $("body").Temp({
      sticky: true,
    });

    /* ---------------------------------------------------- */
    /*	Price Scale										    */
    /* ---------------------------------------------------- */

    var slider;
    if ($("#price").length) {
      slider = $("#price").slider({
        animate: true,
        range: true,
        values: [1, 99],
        min: 0,
        max: 100,
        slide: function (event, ui) {
          $(".range-values")
            .find(".first-limit")
            .val("$" + ui.values[0] + ",000");
          $(".range-values")
            .find(".last-limit")
            .val("$" + ui.values[1] + ",000");
        },
      });
    }

    /* ---------------------------------------------------- */
    /*	Accordion & Toggle									*/
    /* ---------------------------------------------------- */

    var aItem = $(".accordion:not(.toggle) .accordion-item"),
      link = aItem.find(".a-title"),
      $label = aItem.find("label"),
      aToggleItem = $(".accordion.toggle .accordion-item"),
      tLink = aToggleItem.find(".a-title");

    aItem.add(aToggleItem).children(".a-title").not(".active").next().hide();

    function triggerAccordeon($item) {
      $item
        .addClass("active")
        .next()
        .stop()
        .slideDown()
        .parent()
        .siblings()
        .children(".a-title")
        .removeClass("active")
        .next()
        .stop()
        .slideUp();
    }

    if ($label.length) {
      $label.on("click", function () {
        triggerAccordeon($(this).closest(".a-title"));
      });
    } else {
      link.on("click", function () {
        triggerAccordeon($(this));
      });
    }

    tLink.on("click", function () {
      $(this).toggleClass("active").next().stop().slideToggle();
    });

    /* ---------------------------------------------------- */
    /*	Quantity											*/
    /* ---------------------------------------------------- */

    var q = $(".quantity");

    q.each(function () {
      var $this = $(this),
        button = $this.children("button"),
        input = $this.children('input[type="text"]'),
        val = +input.val();

      button.on("click", function () {
        if ($(this).hasClass("qty-minus")) {
          if (val === 1) return false;
          input.val(--val);
        } else {
          input.val(++val);
        }
      });
    });

    /* ---------------------------------------------------- */
    /*	Contact Form										*/
    /* ---------------------------------------------------- */

    if ($('[id*="contact-form"]').length) {
      var cf = $('[id*="contact-form"]');
      cf.append('<div class="message-container"></div>');

      cf.on("submit", function (event) {
        var self = $(this),
          text;

        var request = $.ajax({
          url: "bat/mail.php",
          type: "POST",
          data: self.serialize(),
        });

        request.then(
          function (data) {
            if (data === "1") {
              text = "Your message has been sent successfully!";

              cf.find('input:not([type="submit"]),textarea').val("");

              $(".message-container")
                .html('<div class="alert-success"><p>' + text + "</p></div>")
                .delay(150)
                .slideDown(300)
                .delay(4000)
                .slideUp(300, function () {
                  $(this).html("");
                });
            } else {
              if (cf.find("textarea").val().length < 20) {
                text = "Message must contain at least 20 characters!";
              }
              if (cf.find("input").val() === "") {
                text = "All required fields must be filled!";
              }
              $(".message-container")
                .html('<div class="alert-error"><p>' + text + "</p></div>")
                .delay(150)
                .slideDown(300)
                .delay(4000)
                .slideUp(300, function () {
                  $(this).html("");
                });
            }
          },
          function () {
            $(".message-container")
              .html(
                '<div class="alert-error"><p>Connection to server failed!</p></div>'
              )
              .delay(150)
              .slideDown(300)
              .delay(4000)
              .slideUp(300, function () {
                $(this).html("");
              });
          }
        );

        event.preventDefault();
      });
    }

    /* ---------------------------------------------------- */
    /*	Google Maps											*/
    /* ---------------------------------------------------- */

    if ($("#googleMap").length) {
      $(document).ready(function () {
        var myCenter = new google.maps.LatLng(30.2259488, -97.7145152);

        function loadMap() {
          var mapProp = {
            center: myCenter,
            zoom: 13,
            mapTypeId: google.maps.MapTypeId.ROADMAP,
          };

          var map = document.getElementById("googleMap");

          if (map !== null) {
            var map = new google.maps.Map(
              document.getElementById("googleMap"),
              mapProp
            );
          }

          var marker = new google.maps.Marker({
            position: myCenter,
            map: map,
            icon: "images/map_marker.png",
          });

          marker.setMap(map);

          //Zoom to 7 when clicked on marker
          google.maps.event.addListener(marker, "click", function () {
            map.setZoom(9);
            map.setCenter(marker.getPosition());
          });
        }
        google.maps.event.addDomListener(window, "load", loadMap);
      });
    }
  });
})(jQuery);
