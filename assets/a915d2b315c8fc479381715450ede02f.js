(() => {
  "use strict";

  const reducedMotion = window.matchMedia("(prefers-reduced-motion: reduce)").matches;

  /* Header state --------------------------------------------------------- */
  const headerState = () => {
    document.body.classList.toggle("is-scrolled", window.scrollY > 12);
  };
  headerState();
  window.addEventListener("scroll", headerState, { passive: true });

  /* Mobile menu ---------------------------------------------------------- */
  const dialog = document.getElementById("mobile-menu");
  const openButton = document.querySelector("[data-menu-open]");
  const closeButton = document.querySelector("[data-menu-close]");

  if (dialog && openButton) {
    const openMenu = () => {
      if (typeof dialog.showModal === "function") {
        dialog.showModal();
      } else {
        dialog.setAttribute("open", "");
      }
      document.body.classList.add("menu-open");
      openButton.setAttribute("aria-expanded", "true");
    };

    const closeMenu = () => {
      if (typeof dialog.close === "function") {
        dialog.close();
      } else {
        dialog.removeAttribute("open");
        document.body.classList.remove("menu-open");
        openButton.setAttribute("aria-expanded", "false");
        openButton.focus();
      }
    };

    openButton.addEventListener("click", openMenu);
    closeButton?.addEventListener("click", closeMenu);

    dialog.addEventListener("close", () => {
      document.body.classList.remove("menu-open");
      openButton.setAttribute("aria-expanded", "false");
      openButton.focus();
    });

    dialog.addEventListener("click", (event) => {
      if (event.target === dialog) {
        closeMenu();
      }
    });

    dialog.querySelectorAll("a").forEach((link) => {
      link.addEventListener("click", () => closeMenu());
    });
  }

  /* Reveal on scroll ----------------------------------------------------- */
  const revealItems = document.querySelectorAll("[data-reveal]");

  if (revealItems.length) {
    document.documentElement.classList.add("reveal-ready");

    if (reducedMotion || !("IntersectionObserver" in window)) {
      revealItems.forEach((item) => item.classList.add("is-visible"));
    } else {
      const revealObserver = new IntersectionObserver(
        (entries, observer) => {
          entries.forEach((entry) => {
            if (!entry.isIntersecting) return;
            entry.target.classList.add("is-visible");
            observer.unobserve(entry.target);
          });
        },
        { rootMargin: "0px 0px -8% 0px", threshold: 0.08 }
      );

      revealItems.forEach((item) => revealObserver.observe(item));
    }
  }

  /* Animated numbers ----------------------------------------------------- */
  const counters = document.querySelectorAll("[data-counter]");

  const animateCounter = (element) => {
    const target = Number.parseFloat(element.dataset.value || "0");
    const decimals = Number.parseInt(element.dataset.decimals || "0", 10);
    const duration = 1600;

    if (reducedMotion || Number.isNaN(target)) {
      element.textContent = target.toFixed(decimals);
      return;
    }

    const start = performance.now();
    const step = (now) => {
      const progress = Math.min((now - start) / duration, 1);
      const eased = 1 - Math.pow(1 - progress, 3);
      const value = target * eased;
      element.textContent = value.toFixed(decimals);
      if (progress < 1) {
        requestAnimationFrame(step);
      } else {
        element.textContent = target.toFixed(decimals);
      }
    };

    element.textContent = (0).toFixed(decimals);
    requestAnimationFrame(step);
  };

  if (counters.length) {
    if (reducedMotion || !("IntersectionObserver" in window)) {
      counters.forEach((counter) => {
        counter.textContent = Number.parseFloat(counter.dataset.value || "0").toFixed(
          Number.parseInt(counter.dataset.decimals || "0", 10)
        );
      });
    } else {
      const counterObserver = new IntersectionObserver(
        (entries, observer) => {
          entries.forEach((entry) => {
            if (!entry.isIntersecting) return;
            animateCounter(entry.target);
            observer.unobserve(entry.target);
          });
        },
        { threshold: 0.5 }
      );

      counters.forEach((counter) => counterObserver.observe(counter));
    }
  }

  /* Testimonial slider --------------------------------------------------- */
  document.querySelectorAll("[data-slider]").forEach((slider) => {
    const track = slider.querySelector("[data-track]");
    const slides = Array.from(slider.querySelectorAll("[data-slide]"));
    const previous = slider.querySelector("[data-prev]");
    const next = slider.querySelector("[data-next]");
    const current = slider.querySelector("[data-current]");
    const progress = slider.querySelector("[data-progress]");
    const viewport = slider.querySelector(".slider__viewport");

    if (!track || slides.length < 2) return;

    let index = 0;

    const update = () => {
      track.style.transform = `translateX(-${index * 100}%)`;

      slides.forEach((slide, slideIndex) => {
        slide.setAttribute("aria-hidden", slideIndex === index ? "false" : "true");
      });

      if (current) {
        current.textContent = String(index + 1).padStart(2, "0");
      }

      if (progress) {
        progress.style.transform = `scaleX(${(index + 1) / slides.length})`;
      }
    };

    const goTo = (nextIndex) => {
      index = (nextIndex + slides.length) % slides.length;
      update();
    };

    slider.classList.add("is-ready");
    slider.setAttribute("tabindex", "0");
    update();

    previous?.addEventListener("click", () => goTo(index - 1));
    next?.addEventListener("click", () => goTo(index + 1));

    slider.addEventListener("keydown", (event) => {
      if (event.key === "ArrowLeft") {
        event.preventDefault();
        goTo(index - 1);
      }
      if (event.key === "ArrowRight") {
        event.preventDefault();
        goTo(index + 1);
      }
    });

    if (viewport) {
      let startX = null;
      let startY = null;

      viewport.addEventListener(
        "touchstart",
        (event) => {
          const touch = event.changedTouches[0];
          startX = touch.clientX;
          startY = touch.clientY;
        },
        { passive: true }
      );

      viewport.addEventListener(
        "touchend",
        (event) => {
          if (startX === null) return;
          const touch = event.changedTouches[0];
          const deltaX = touch.clientX - startX;
          const deltaY = touch.clientY - startY;

          if (Math.abs(deltaX) > 45 && Math.abs(deltaX) > Math.abs(deltaY)) {
            goTo(deltaX < 0 ? index + 1 : index - 1);
          }

          startX = null;
          startY = null;
        },
        { passive: true }
      );
    }
  });

  /* Reading progress ----------------------------------------------------- */
  const progressBar = document.querySelector("[data-reading-progress]");
  const article = document.querySelector(".article-body");

  if (progressBar && article) {
    let ticking = false;

    const updateProgress = () => {
      const rect = article.getBoundingClientRect();
      const articleTop = window.scrollY + rect.top;
      const available = article.offsetHeight - window.innerHeight * 0.55;
      const scrolled = window.scrollY - articleTop + window.innerHeight * 0.35;
      const ratio = available > 0 ? Math.min(Math.max(scrolled / available, 0), 1) : 1;
      progressBar.style.transform = `scaleX(${ratio})`;
      ticking = false;
    };

    const requestProgress = () => {
      if (ticking) return;
      ticking = true;
      requestAnimationFrame(updateProgress);
    };

    updateProgress();
    window.addEventListener("scroll", requestProgress, { passive: true });
    window.addEventListener("resize", requestProgress);
  }

  /* Current year --------------------------------------------------------- */
  document.querySelectorAll("[data-year]").forEach((element) => {
    element.textContent = String(new Date().getFullYear());
  });
})();
;
