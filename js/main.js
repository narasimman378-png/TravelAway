// =========================================================
// TIDEWAY TRAVEL — shared site behavior
// =========================================================
(function () {
  "use strict";

  document.addEventListener("DOMContentLoaded", function () {
    initNavbar();
    initRevealOnScroll();
    initCounters();
    initBackToTop();
    initFilters();
    initGallery();
    initFormValidation();
    initYear();
    initTestimonialAutoplayPause();
  });

  /* ---------------- Navbar scroll state ---------------- */
  function initNavbar() {
    var nav = document.querySelector(".tw-nav");
    if (!nav) return;
    function onScroll() {
      if (window.scrollY > 24) {
        nav.classList.add("is-scrolled");
      } else {
        nav.classList.remove("is-scrolled");
      }
    }
    onScroll();
    window.addEventListener("scroll", onScroll, { passive: true });
  }

  /* ---------------- Reveal-on-scroll ---------------- */
  function initRevealOnScroll() {
    var items = document.querySelectorAll("[data-reveal]");
    if (!items.length) return;

    if (!("IntersectionObserver" in window)) {
      items.forEach(function (el) { el.classList.add("is-visible"); });
      return;
    }

    var observer = new IntersectionObserver(
      function (entries) {
        entries.forEach(function (entry, i) {
          if (entry.isIntersecting) {
            var delay = entry.target.getAttribute("data-reveal-delay") || 0;
            setTimeout(function () {
              entry.target.classList.add("is-visible");
            }, Number(delay));
            observer.unobserve(entry.target);
          }
        });
      },
      { threshold: 0.15, rootMargin: "0px 0px -60px 0px" }
    );

    items.forEach(function (el) { observer.observe(el); });
  }

  /* ---------------- Animated stat counters ---------------- */
  function initCounters() {
    var counters = document.querySelectorAll("[data-count-to]");
    if (!counters.length) return;

    var run = function (el) {
      var target = parseFloat(el.getAttribute("data-count-to"));
      var suffix = el.getAttribute("data-suffix") || "";
      var decimals = el.getAttribute("data-decimals") ? Number(el.getAttribute("data-decimals")) : 0;
      var duration = 1400;
      var start = null;

      function step(ts) {
        if (!start) start = ts;
        var progress = Math.min((ts - start) / duration, 1);
        var eased = 1 - Math.pow(1 - progress, 3);
        var value = eased * target;
        el.textContent = value.toFixed(decimals) + suffix;
        if (progress < 1) requestAnimationFrame(step);
      }
      requestAnimationFrame(step);
    };

    if (!("IntersectionObserver" in window)) {
      counters.forEach(run);
      return;
    }

    var obs = new IntersectionObserver(
      function (entries) {
        entries.forEach(function (entry) {
          if (entry.isIntersecting) {
            run(entry.target);
            obs.unobserve(entry.target);
          }
        });
      },
      { threshold: 0.4 }
    );
    counters.forEach(function (c) { obs.observe(c); });
  }

  /* ---------------- Back to top ---------------- */
  function initBackToTop() {
    var btn = document.querySelector(".back-to-top");
    if (!btn) return;
    window.addEventListener(
      "scroll",
      function () {
        if (window.scrollY > 500) btn.classList.add("show");
        else btn.classList.remove("show");
      },
      { passive: true }
    );
    btn.addEventListener("click", function () {
      window.scrollTo({ top: 0, behavior: "smooth" });
    });
  }

  /* ---------------- Filter pills (Packages / Places) ---------------- */
  function initFilters() {
    var bar = document.querySelector("[data-filter-bar]");
    if (!bar) return;
    var pills = bar.querySelectorAll(".filter-pill");
    var cards = document.querySelectorAll("[data-filter-item]");

    pills.forEach(function (pill) {
      pill.addEventListener("click", function () {
        pills.forEach(function (p) { p.classList.remove("active"); });
        pill.classList.add("active");
        var filter = pill.getAttribute("data-filter");

        cards.forEach(function (card) {
          var tags = (card.getAttribute("data-filter-item") || "").split(" ");
          var show = filter === "all" || tags.indexOf(filter) !== -1;
          card.closest(".filter-col").style.display = show ? "" : "none";
          if (show) {
            card.classList.remove("is-visible");
            requestAnimationFrame(function () {
              void card.offsetWidth;
              card.classList.add("is-visible");
            });
          }
        });
      });
    });
  }

  /* ---------------- Package details gallery ---------------- */
  function initGallery() {
    var main = document.querySelector("[data-gallery-main]");
    var thumbs = document.querySelectorAll("[data-gallery-thumb]");
    if (!main || !thumbs.length) return;

    thumbs.forEach(function (thumb) {
      thumb.addEventListener("click", function () {
        thumbs.forEach(function (t) { t.classList.remove("active"); });
        thumb.classList.add("active");
        main.innerHTML = thumb.querySelector("img").outerHTML;
      });
    });
  }

  /* ---------------- Bootstrap form validation ---------------- */
  function initFormValidation() {
    var forms = document.querySelectorAll(".needs-validation");
    Array.prototype.slice.call(forms).forEach(function (form) {
      form.addEventListener(
        "submit",
        function (event) {
          event.preventDefault();
          event.stopPropagation();

          if (!form.checkValidity()) {
            form.classList.add("was-validated");
            return;
          }

          form.classList.add("was-validated");
          var successEl = form.parentElement.querySelector("[data-form-success]");
          if (successEl) {
            form.classList.add("d-none");
            successEl.classList.remove("d-none");
          }
        },
        false
      );
    });
  }

  /* ---------------- Footer year ---------------- */
  function initYear() {
    var el = document.getElementById("year");
    if (el) el.textContent = new Date().getFullYear();
  }

  /* ---------------- Pause testimonial carousel on hover ---------------- */
  function initTestimonialAutoplayPause() {
    var carousel = document.getElementById("testimonialCarousel");
    if (!carousel || !window.bootstrap) return;
    var instance = bootstrap.Carousel.getOrCreateInstance(carousel, { interval: 5500 });
    carousel.addEventListener("mouseenter", function () { instance.pause(); });
    carousel.addEventListener("mouseleave", function () { instance.cycle(); });
  }
})();
