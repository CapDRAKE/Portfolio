(function($) {
  "use strict";

  $("body")
    .on("input propertychange", ".floating-label-form-group", function(e) {
      $(this).toggleClass("floating-label-form-group-with-value", !!$(e.target).val());
    })
    .on("focus", ".floating-label-form-group", function() {
      $(this).addClass("floating-label-form-group-with-focus");
    })
    .on("blur", ".floating-label-form-group", function() {
      $(this).removeClass("floating-label-form-group-with-focus");
    });

  var desktopBreakpoint = 992;

  if ($(window).width() > desktopBreakpoint) {
    var headerHeight = $("#mainNav").height();
    $(window).on("scroll", { previousTop: 0 }, function() {
      var currentTop = $(window).scrollTop();
      if (currentTop < this.previousTop) {
        if (currentTop > 0 && $("#mainNav").hasClass("is-fixed")) {
          $("#mainNav").addClass("is-visible");
        } else {
          $("#mainNav").removeClass("is-visible is-fixed");
        }
      } else if (currentTop > this.previousTop) {
        $("#mainNav").removeClass("is-visible");
        if (currentTop > headerHeight && !$("#mainNav").hasClass("is-fixed")) {
          $("#mainNav").addClass("is-fixed");
        }
      }
      this.previousTop = currentTop;
    });
  }
})(jQuery);

(function() {
  var loaderId = "site-loader";
  var disclaimerId = "site-disclaimer";
  var hasHiddenLoader = false;
  var hasShownDisclaimer = false;

  function mountLoader() {
    if (document.getElementById(loaderId)) {
      return;
    }

    var loader = document.createElement("div");
    loader.id = loaderId;
    loader.innerHTML = [
      '<div class="site-loader-card">',
      '  <div class="site-loader-eyebrow"><i class="fas fa-bolt"></i></div>',
      '  <div class="site-loader-title">Chargement du portfolio</div>',
      '  <p class="site-loader-text">Initialisation de l\'interface et des contenus.</p>',
      '  <div class="site-loader-progress"></div>',
      '  <div class="site-loader-foot">',
      '    <span class="site-loader-spinner"></span>',
      '    <span>Veuillez patienter quelques instants</span>',
      '  </div>',
      '</div>'
    ].join("");

    document.body.appendChild(loader);
    document.body.classList.add("site-loading");

    window.requestAnimationFrame(function() {
      loader.classList.add("is-visible");
    });
  }

  function mountDisclaimer() {
    if (document.getElementById(disclaimerId)) {
      return;
    }

    var disclaimer = document.createElement("div");
    disclaimer.id = disclaimerId;
    disclaimer.innerHTML = [
      '<div class="site-disclaimer-card">',
      '  <div class="site-disclaimer-icon"><i class="fas fa-tools"></i></div>',
      '  <div class="site-disclaimer-text">',
      '    <strong>Site en cours de developpement</strong>',
      '    <span>Certaines pages, animations ou contenus peuvent encore evoluer pendant les prochaines mises a jour.</span>',
      '  </div>',
      '  <button type="button" class="site-disclaimer-close" aria-label="Fermer le message"><i class="fas fa-times"></i></button>',
      '</div>'
    ].join("");

    document.body.appendChild(disclaimer);
    disclaimer.querySelector(".site-disclaimer-close").addEventListener("click", function() {
      hideDisclaimer(true);
    });
  }

  function showDisclaimer() {
    if (hasShownDisclaimer) {
      return;
    }

    hasShownDisclaimer = true;
    mountDisclaimer();

    var disclaimer = document.getElementById(disclaimerId);
    if (!disclaimer) {
      return;
    }

    window.requestAnimationFrame(function() {
      disclaimer.classList.add("is-visible");
    });

    window.setTimeout(function() {
      hideDisclaimer(false);
    }, 7000);
  }

  function hideDisclaimer(storeSeen) {
    var disclaimer = document.getElementById(disclaimerId);
    if (!disclaimer) {
      return;
    }

    if (storeSeen && window.sessionStorage) {
      window.sessionStorage.setItem("portfolio-dev-disclaimer-seen", "1");
    }

    disclaimer.classList.remove("is-visible");
  }

  function hideLoader() {
    if (hasHiddenLoader) {
      return;
    }

    hasHiddenLoader = true;

    var loader = document.getElementById(loaderId);
    document.body.classList.remove("site-loading");

    if (!loader) {
      return;
    }

    loader.classList.add("is-hiding");
    window.setTimeout(function() {
      if (loader.parentNode) {
        loader.parentNode.removeChild(loader);
      }
      if (!(window.sessionStorage && window.sessionStorage.getItem("portfolio-dev-disclaimer-seen") === "1")) {
        window.setTimeout(showDisclaimer, 180);
      }
    }, 420);
  }

  function initReveal() {
    var elements = document.querySelectorAll(".reveal");
    if (!elements.length) {
      return;
    }

    if (!("IntersectionObserver" in window)) {
      Array.prototype.forEach.call(elements, function(element) {
        element.classList.add("is-visible");
      });
      return;
    }

    var observer = new IntersectionObserver(function(entries) {
      entries.forEach(function(entry) {
        if (entry.isIntersecting) {
          entry.target.classList.add("is-visible");
          observer.unobserve(entry.target);
        }
      });
    }, { threshold: 0.12 });

    Array.prototype.forEach.call(elements, function(element) {
      observer.observe(element);
    });
  }

  function onReady() {
    mountLoader();
    initReveal();
  }

  if (document.readyState === "loading") {
    document.addEventListener("DOMContentLoaded", onReady);
  } else {
    onReady();
  }

  if (document.readyState === "complete") {
    window.setTimeout(hideLoader, 650);
  } else {
    window.addEventListener("load", function() {
      window.setTimeout(hideLoader, 650);
    });
    window.setTimeout(hideLoader, 2200);
  }
})();
