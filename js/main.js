/* ============================================
   CLEANED PERU - MAIN JAVASCRIPT
   ============================================ */

document.addEventListener('DOMContentLoaded', () => {

  // ── HEADER SCROLL EFFECT ─────────────────────
  const header = document.querySelector('.header');
  if (header) {
    const onScroll = () => {
      header.classList.toggle('scrolled', window.scrollY > 60);
    };
    window.addEventListener('scroll', onScroll, { passive: true });
  }

  // ── HAMBURGER / MOBILE NAV ───────────────────
  const hamburger = document.querySelector('.hamburger');
  const nav = document.querySelector('.header__nav');

  // Backdrop para cerrar el menú al tocar fuera
  const backdrop = document.createElement('div');
  backdrop.className = 'nav-backdrop';
  document.body.appendChild(backdrop);

  const openNav = () => {
    hamburger.classList.add('active');
    hamburger.setAttribute('aria-expanded', 'true');
    nav.classList.add('open');
    backdrop.classList.add('visible');
    document.body.style.overflow = 'hidden';
  };
  const closeNav = () => {
    hamburger.classList.remove('active');
    hamburger.setAttribute('aria-expanded', 'false');
    nav.classList.remove('open');
    backdrop.classList.remove('visible');
    document.body.style.overflow = '';
  };

  if (hamburger && nav) {
    hamburger.addEventListener('click', () => {
      nav.classList.contains('open') ? closeNav() : openNav();
    });

    backdrop.addEventListener('click', closeNav);

    // Mobile dropdown toggle
    let lastTouchTs = 0;
    document.querySelectorAll('.nav__link').forEach(link => {
      const parent = link.closest('.nav__item');
      const hasDropdown = parent.querySelector('.nav__dropdown, .nav__megamenu');
      if (hasDropdown) {
        const toggleSubmenu = (e) => {
          if (window.innerWidth <= 768) {
            e.preventDefault();
            e.stopPropagation();

            const isOpen = parent.classList.contains('open');
            // Cierra otros submenús abiertos para evitar saltos raros de layout
            document.querySelectorAll('.nav__item.open').forEach(item => {
              if (item !== parent) item.classList.remove('open');
            });
            parent.classList.toggle('open', !isOpen);
          }
        };

        // En algunos móviles el primer "tap" no dispara click de forma confiable.
        link.addEventListener('touchstart', (e) => {
          lastTouchTs = Date.now();
          toggleSubmenu(e);
        }, { passive: false });

        link.addEventListener('click', (e) => {
          // Evita doble toggle (touchstart + click)
          if (Date.now() - lastTouchTs < 500) return;
          toggleSubmenu(e);
        });
      }
    });

    // Cerrar menú al hacer click en un enlace de hoja (sin submenú)
    document.querySelectorAll('.nav__dropdown-item a, .nav__megamenu-item a').forEach(a => {
      a.addEventListener('click', closeNav);
    });
  }

  // ── HERO SLIDER ──────────────────────────────
  const slides = document.querySelectorAll('.hero__slide');
  const dots = document.querySelectorAll('.hero__dot');
  const prevBtn = document.querySelector('.hero__arrow--prev');
  const nextBtn = document.querySelector('.hero__arrow--next');

  if (slides.length > 0) {
    let current = 0;
    let timer;

    const goTo = (idx) => {
      slides[current].classList.remove('active');
      dots[current]?.classList.remove('active');
      current = (idx + slides.length) % slides.length;
      slides[current].classList.add('active');
      dots[current]?.classList.add('active');
    };

    const startTimer = () => {
      clearInterval(timer);
      timer = setInterval(() => goTo(current + 1), 8000);
    };

    // Init
    goTo(0);
    startTimer();

    prevBtn?.addEventListener('click', () => { goTo(current - 1); startTimer(); });
    nextBtn?.addEventListener('click', () => { goTo(current + 1); startTimer(); });
    dots.forEach((dot, i) => dot.addEventListener('click', () => { goTo(i); startTimer(); }));

    // Swipe support
    let touchStartX = 0;
    const heroEl = document.querySelector('.hero');
    heroEl?.addEventListener('touchstart', e => { touchStartX = e.touches[0].clientX; }, { passive: true });
    heroEl?.addEventListener('touchend', e => {
      const dx = e.changedTouches[0].clientX - touchStartX;
      if (Math.abs(dx) > 50) { goTo(dx < 0 ? current + 1 : current - 1); startTimer(); }
    });
  }

  // ── COUNTER ANIMATION ────────────────────────
  const counters = document.querySelectorAll('[data-count]');

  const animateCounter = (el) => {
    const target = parseFloat(el.dataset.count);
    const duration = 2000;
    const step = 16;
    const increment = target / (duration / step);
    let current = 0;

    const update = () => {
      current = Math.min(current + increment, target);
      const display = Number.isInteger(target) ? Math.round(current) : current.toFixed(2);
      el.textContent = display.toLocaleString('es-PE');
      if (current < target) requestAnimationFrame(update);
    };
    requestAnimationFrame(update);
  };

  // ── INTERSECTION OBSERVER (scroll reveal + counters) ──
  const revealEls = document.querySelectorAll('.reveal');
  const counterEls = document.querySelectorAll('[data-count]');

  const observer = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        entry.target.classList.add('revealed');
        // Trigger counter if inside observed element
        entry.target.querySelectorAll?.('[data-count]').forEach(animateCounter);
        observer.unobserve(entry.target);
      }
    });
  }, { threshold: 0.15 });

  revealEls.forEach(el => {
    if (el.classList.contains('article-content')) return;
    observer.observe(el);
  });

  // Observe counter parents
  const counterObserver = new IntersectionObserver((entries) => {
    entries.forEach(entry => {
      if (entry.isIntersecting) {
        animateCounter(entry.target);
        counterObserver.unobserve(entry.target);
      }
    });
  }, { threshold: 0.5 });

  counterEls.forEach(el => counterObserver.observe(el));

  // ── SMOOTH SCROLL ────────────────────────────
  document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', (e) => {
      const target = document.querySelector(anchor.getAttribute('href'));
      if (target) {
        e.preventDefault();
        const offset = parseInt(getComputedStyle(document.documentElement).getPropertyValue('--header-height')) || 80;
        window.scrollTo({ top: target.offsetTop - offset, behavior: 'smooth' });
      }
    });
  });

  // ── ACTIVE NAV LINK ──────────────────────────
  const currentPath = window.location.pathname;
  document.querySelectorAll('.nav__link').forEach(link => {
    if (link.getAttribute('href') && currentPath.includes(link.getAttribute('href')) && link.getAttribute('href') !== '/') {
      link.closest('.nav__item')?.classList.add('active');
    }
  });

  // ── BACK TO TOP ──────────────────────────────
  const backToTop = document.getElementById('back-to-top');
  if (backToTop) {
    window.addEventListener('scroll', () => {
      backToTop.style.opacity = window.scrollY > 500 ? '1' : '0';
      backToTop.style.pointerEvents = window.scrollY > 500 ? 'auto' : 'none';
    }, { passive: true });
    backToTop.addEventListener('click', () => window.scrollTo({ top: 0, behavior: 'smooth' }));
  }

  // ── TABS (para páginas de servicio) ──────────
  document.querySelectorAll('.tabs__btn').forEach(btn => {
    btn.addEventListener('click', () => {
      const tabGroup = btn.closest('.tabs');
      const target = btn.dataset.tab;
      tabGroup.querySelectorAll('.tabs__btn').forEach(b => b.classList.remove('active'));
      tabGroup.querySelectorAll('.tabs__panel').forEach(p => p.classList.remove('active'));
      btn.classList.add('active');
      tabGroup.querySelector(`[data-panel="${target}"]`)?.classList.add('active');
    });
  });

  // ── FORM VALIDATION ──────────────────────────
  const forms = document.querySelectorAll('.contact-form form');
  forms.forEach(form => {
    form.addEventListener('submit', (e) => {
      e.preventDefault();
      const btn = form.querySelector('[type="submit"]');
      const original = btn.textContent;
      btn.textContent = 'Enviando...';
      btn.disabled = true;
      setTimeout(() => {
        btn.textContent = '¡Mensaje enviado!';
        btn.style.background = '#1a8a3a';
        setTimeout(() => {
          btn.textContent = original;
          btn.disabled = false;
          btn.style.background = '';
          form.reset();
        }, 3000);
      }, 1200);
    });
  });

  // ── PARALLAX EFFECT (hero decorative elements) ──
  const heroSection = document.querySelector('.hero');
  if (heroSection) {
    window.addEventListener('scroll', () => {
      const scrollY = window.scrollY;
      if (scrollY < window.innerHeight) {
        heroSection.style.transform = `translateY(${scrollY * 0.3}px)`;
      }
    }, { passive: true });
  }

  // ── HOVER TILT (service cards) ───────────────
  document.querySelectorAll('.service-card').forEach(card => {
    card.addEventListener('mousemove', (e) => {
      const rect = card.getBoundingClientRect();
      const x = ((e.clientX - rect.left) / rect.width - 0.5) * 8;
      const y = ((e.clientY - rect.top) / rect.height - 0.5) * 8;
      card.style.transform = `translateY(-8px) rotateX(${-y}deg) rotateY(${x}deg)`;
    });
    card.addEventListener('mouseleave', () => {
      card.style.transform = '';
    });
  });

  // ── STATS SECTION ANIMATION ──────────────────
  const statsSection = document.querySelector('.stats');
  if (statsSection) {
    const statsObserver = new IntersectionObserver((entries) => {
      if (entries[0].isIntersecting) {
        statsSection.querySelectorAll('[data-count]').forEach(animateCounter);
        statsObserver.disconnect();
      }
    }, { threshold: 0.3 });
    statsObserver.observe(statsSection);
  }

  // ── FILTRO DE NOTICIAS POR CATEGORÍA ───────
  document.querySelectorAll('[data-article-filters]').forEach((root) => {
    const pills = root.querySelectorAll('[data-filter-category]');
    const cards = root.querySelectorAll('[data-article-category]');
    const empty = root.querySelector('[data-article-empty]');
    const isBlog = root.dataset.articleFilters === 'blog';

    const applyFilter = (slug) => {
      let visible = 0;
      cards.forEach((card) => {
        const match = !slug || card.dataset.articleCategory === slug;
        card.classList.toggle('is-filtered-out', !match);
        card.toggleAttribute('hidden', !match);
        if (match) visible += 1;
      });

      pills.forEach((pill) => {
        pill.classList.toggle('is-active', (pill.dataset.filterCategory || '') === slug);
      });

      if (empty) {
        empty.hidden = visible > 0;
      }
    };

    pills.forEach((pill) => {
      pill.addEventListener('click', () => {
        const slug = pill.dataset.filterCategory || '';
        applyFilter(slug);

        if (isBlog) {
          const url = new URL(window.location.href);
          if (slug) {
            url.searchParams.set('categoria', slug);
          } else {
            url.searchParams.delete('categoria');
          }
          history.replaceState(null, '', url);
        }
      });
    });

    if (isBlog) {
      const initial = new URLSearchParams(window.location.search).get('categoria') || '';
      applyFilter(initial);
    }
  });

  // ── RESIZE HANDLER ───────────────────────────
  window.addEventListener('resize', () => {
    if (window.innerWidth > 768) {
      nav?.classList.remove('open');
      hamburger?.classList.remove('active');
      document.body.style.overflow = '';
    }
  });

});
