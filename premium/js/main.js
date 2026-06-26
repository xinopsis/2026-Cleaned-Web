/* Cleaned Premium — scripts de la landing */

(function () {
  'use strict';

  /* HERO SLIDER */
  const slides = document.querySelectorAll('.hero-slide');
  let current = 0;
  let autoTimer;

  function goTo(index) {
    slides[current].classList.remove('is-active');
    current = (index + slides.length) % slides.length;
    slides[current].classList.add('is-active');
  }

  function startAuto() {
    clearInterval(autoTimer);
    autoTimer = setInterval(function () { goTo(current + 1); }, 5000);
  }

  document.getElementById('js-prev').addEventListener('click', function () {
    goTo(current - 1);
    startAuto();
  });

  document.getElementById('js-next').addEventListener('click', function () {
    goTo(current + 1);
    startAuto();
  });

  startAuto();

  document.getElementById('js-scroll-down').addEventListener('click', function () {
    document.getElementById('nosotros').scrollIntoView({ behavior: 'smooth' });
  });

  /* STICKY NAV (solo desktop) */
  const header = document.getElementById('js-header');
  const heroH = function () { return window.innerHeight * 0.8; };
  const desktopMQ = window.matchMedia('(min-width: 992px)');

  function updateHeader() {
    if (desktopMQ.matches) {
      header.classList.toggle('is-visible', window.scrollY > heroH());
    } else {
      header.classList.add('is-visible');
    }
  }

  window.addEventListener('scroll', function () {
    updateHeader();
  }, { passive: true });

  desktopMQ.addEventListener('change', updateHeader);
  updateHeader();

  /* MOBILE NAV */
  const navToggle = document.getElementById('js-nav-toggle');
  const mainNav = document.getElementById('js-main-nav');

  function closeNav() {
    navToggle.classList.remove('is-active');
    mainNav.classList.remove('is-open');
    navToggle.setAttribute('aria-expanded', 'false');
    document.body.classList.remove('nav-open');
  }

  function openNav() {
    navToggle.classList.add('is-active');
    mainNav.classList.add('is-open');
    navToggle.setAttribute('aria-expanded', 'true');
    document.body.classList.add('nav-open');
  }

  navToggle.addEventListener('click', function () {
    if (mainNav.classList.contains('is-open')) {
      closeNav();
    } else {
      openNav();
    }
  });

  mainNav.querySelectorAll('a').forEach(function (link) {
    link.addEventListener('click', closeNav);
  });

  document.addEventListener('keydown', function (e) {
    if (e.key === 'Escape' && mainNav.classList.contains('is-open')) {
      closeNav();
    }
  });

  /* FADE-UP */
  const io = new IntersectionObserver(function (entries) {
    entries.forEach(function (e) {
      if (e.isIntersecting) {
        e.target.classList.add('is-visible');
        io.unobserve(e.target);
      }
    });
  }, { threshold: 0.12 });

  document.querySelectorAll('.fade-up, .fade-up-stagger').forEach(function (el) {
    io.observe(el);
  });
})();
