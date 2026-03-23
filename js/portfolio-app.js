(function() {
  "use strict";

  var routeMap = {
    home: "home.php",
    about: "propos.php",
    projects: "projet.php",
    experience: "experiences.php",
    contact: "contact.php"
  };

  var pathToRoute = {
    "index.php": "home",
    "home.php": "home",
    "propos.php": "about",
    "projet.php": "projects",
    "experiences.php": "experience",
    "contact.php": "contact",
    "stage.php": "experience",
    "veille.php": "home",
    "veilletechno.php": "home"
  };

  var cache = new Map();
  var metaDescription = document.querySelector('meta[name="description"]');
  var headerRoot = document.getElementById("app-view-header");
  var mainRoot = document.getElementById("app-view-main");
  var shell = document.getElementById("app-view-shell");
  var defaultTitle = "Bastien Leuwers | Développeur Full Stack";
  var defaultDescription = "Portfolio de Bastien Leuwers.";

  function normalizeRoute(route) {
    return routeMap[route] ? route : "home";
  }

  function getView() {
    var params = new URLSearchParams(window.location.search);
    return normalizeRoute(params.get("view") || "home");
  }

  function routeHref(route) {
    return route === "home" ? "index.php" : "index.php?view=" + route;
  }

  function setActiveNav(route) {
    var links = document.querySelectorAll("[data-route]");
    Array.prototype.forEach.call(links, function(link) {
      var active = link.getAttribute("data-route") === route;
      link.classList.toggle("active", active);
      if (active) {
        link.setAttribute("aria-current", "page");
      } else {
        link.removeAttribute("aria-current");
      }
    });
  }

  function parsePage(html) {
    var parser = new DOMParser();
    var doc = parser.parseFromString(html, "text/html");
    return {
      title: doc.title || defaultTitle,
      description: (doc.querySelector('meta[name="description"]') || {}).content || defaultDescription,
      headerHTML: (doc.querySelector("header.masthead") || {}).outerHTML || "",
      mainHTML: (doc.querySelector("main") || {}).outerHTML || ""
    };
  }

  function fetchPage(url) {
    if (cache.has(url)) {
      return Promise.resolve(cache.get(url));
    }

    return fetch(url, { headers: { "X-Requested-With": "portfolio-app" } })
      .then(function(response) {
        if (!response.ok) {
          throw new Error("Impossible de charger " + url);
        }
        return response.text();
      })
      .then(function(html) {
        var page = parsePage(html);
        cache.set(url, page);
        return page;
      });
  }

  function getRouteFromHref(href) {
    if (!href || href.indexOf("mailto:") === 0 || href.indexOf("tel:") === 0 || href.indexOf("#") === 0) {
      return null;
    }

    try {
      var url = new URL(href, window.location.href);
      if (url.origin !== window.location.origin) {
        return null;
      }

      var pathname = url.pathname.split("/").pop() || "index.php";
      if (pathname === "index.php") {
        var queryView = url.searchParams.get("view");
        return normalizeRoute(queryView || "home");
      }

      return pathToRoute[pathname] || null;
    } catch (error) {
      return null;
    }
  }

  function decorateLinks(scope) {
    if (!scope) {
      return;
    }

    var links = scope.querySelectorAll("a[href]");
    Array.prototype.forEach.call(links, function(link) {
      var route = getRouteFromHref(link.getAttribute("href"));
      if (!route) {
        return;
      }

      link.setAttribute("href", routeHref(route));
      link.setAttribute("data-route", route);
    });
  }

  function initReveal(scope) {
    if (!scope) {
      return;
    }

    var elements = scope.querySelectorAll(".reveal");
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

  function initContactForm() {
    var form = document.getElementById("contactForm");
    if (!form || form.dataset.appBound === "true") {
      return;
    }

    var success = document.getElementById("success");
    var button = document.getElementById("sendMessageButton");
    form.dataset.appBound = "true";

    form.addEventListener("submit", function(event) {
      event.preventDefault();

      var name = form.querySelector("#name").value.trim();
      var email = form.querySelector("#email").value.trim();
      var message = form.querySelector("#message").value.trim();

      if (!name || !email || !message) {
        success.innerHTML = '<div class="alert alert-danger">Merci de remplir le nom, l\'email et le message.</div>';
        return;
      }

      button.disabled = true;
      success.innerHTML = "";

      fetch("mail/contact_me.php", {
        method: "POST",
        headers: {
          "Content-Type": "application/x-www-form-urlencoded; charset=UTF-8"
        },
        body: new URLSearchParams({
          name: name,
          email: email,
          message: message
        })
      })
        .then(function(response) {
          return response.text();
        })
        .then(function(text) {
          if (/No arguments/i.test(text) || /erreur/i.test(text)) {
            throw new Error(text);
          }

          success.innerHTML = '<div class="alert alert-success">Votre message a bien été envoyé.</div>';
          form.reset();
        })
        .catch(function() {
          success.innerHTML = '<div class="alert alert-danger">Le message n\'a pas pu être envoyé pour le moment. Réessaie un peu plus tard.</div>';
        })
        .finally(function() {
          button.disabled = false;
        });
    });
  }

  function renderError() {
    headerRoot.innerHTML = "";
    mainRoot.innerHTML = '<main class="container page-frame app-main-shell"><section class="site-section"><div class="section-shell"><div class="section-tag">Erreur</div><h2>Le contenu n\'a pas pu être chargé.</h2><p class="section-lead">Réessaie dans quelques instants.</p></div></section></main>';
  }

  function prefetchRoutes(activeRoute) {
    Object.keys(routeMap).forEach(function(route) {
      if (route === activeRoute) {
        return;
      }

      fetchPage(routeMap[route]).catch(function() {
        return null;
      });
    });
  }

  function schedulePrefetch(activeRoute) {
    if ("requestIdleCallback" in window) {
      window.requestIdleCallback(function() {
        prefetchRoutes(activeRoute);
      }, { timeout: 1500 });
      return;
    }

    window.setTimeout(function() {
      prefetchRoutes(activeRoute);
    }, 800);
  }

  function renderPage(route, replaceState) {
    var normalizedRoute = normalizeRoute(route);
    var url = routeMap[normalizedRoute];

    shell.classList.add("is-switching");

    return fetchPage(url)
      .then(function(page) {
        headerRoot.innerHTML = page.headerHTML;
        mainRoot.innerHTML = page.mainHTML;

        decorateLinks(headerRoot);
        decorateLinks(mainRoot);

        document.title = page.title || defaultTitle;
        if (metaDescription) {
          metaDescription.setAttribute("content", page.description || defaultDescription);
        }

        setActiveNav(normalizedRoute);
        initReveal(document);
        initContactForm();
        schedulePrefetch(normalizedRoute);

        if (replaceState) {
          window.history.replaceState({ view: normalizedRoute }, "", routeHref(normalizedRoute));
        }

        window.scrollTo({ top: 0, behavior: "auto" });
      })
      .catch(function() {
        renderError();
      })
      .finally(function() {
        shell.classList.remove("is-switching");
      });
  }

  document.addEventListener("click", function(event) {
    var link = event.target.closest("[data-route]");
    if (!link) {
      return;
    }

    event.preventDefault();

    var route = normalizeRoute(link.getAttribute("data-route"));
    window.history.pushState({ view: route }, "", routeHref(route));
    renderPage(route, false);

    var navbar = document.getElementById("navbarResponsive");
    if (navbar && navbar.classList.contains("show") && window.jQuery) {
      window.jQuery(navbar).collapse("hide");
    }
  });

  window.addEventListener("popstate", function() {
    renderPage(getView(), true);
  });

  decorateLinks(document);
  renderPage(getView(), true);
})();
