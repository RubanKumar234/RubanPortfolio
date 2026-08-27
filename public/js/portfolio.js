document.addEventListener('DOMContentLoaded', () => {
  const prefersReduced = window.matchMedia('(prefers-reduced-motion: reduce)').matches;

  // Some browsers restore the previous scroll position on refresh even
  // though the splash covers the screen (the inline <head> script already
  // does this as early as possible; repeat it here as a safety net in case
  // something else nudges the scroll before this runs).
  if ('scrollRestoration' in history) history.scrollRestoration = 'manual';
  window.scrollTo(0, 0);

  // --- Intro splash: full-screen greeting shown on first load. The splash
  // itself stays completely static; the home page slides up from below and
  // covers it (parallax-style: static background, sliding foreground). ---
  const splash = document.getElementById('intro-splash');
  if (splash) {
    let dismissed = false;
    const dismissSplash = () => {
      if (dismissed) return;
      dismissed = true;
      // Make sure the reveal always starts from the very top of the page.
      window.scrollTo(0, 0);
      document.documentElement.classList.remove('splash-active');
      document.body.classList.remove('splash-active');
      document.body.classList.add('site-revealed');
      if (prefersReduced) {
        // No slide to wait for — reveal immediately.
        document.body.classList.add('header-revealed');
        splash.remove();
      } else {
        // Let the header fade in once the sliding page has mostly settled,
        // rather than popping in immediately over the still-visible splash.
        window.setTimeout(() => document.body.classList.add('header-revealed'), 550);
        // The splash is fully covered by then; remove it once safely hidden.
        window.setTimeout(() => splash.remove(), 900);
      }
    };
    splash.addEventListener('click', dismissSplash);
    splash.addEventListener('keydown', (e) => {
      if (e.key === 'Enter' || e.key === ' ' || e.key === 'Spacebar') {
        e.preventDefault();
        dismissSplash();
      }
    });
    // Auto-dismiss the splash after 3s so visitors aren't stuck waiting on a click.
    window.setTimeout(dismissSplash, 3000);
  }

  // --- Hero portrait hover-reveal: on touch devices there's no real hover,
  // so tapping (and keyboard Enter/Space) toggles the same revealed state. ---
  const portraitFrame = document.querySelector('.portrait-frame');
  if (portraitFrame) {
    const togglePortrait = () => portraitFrame.classList.toggle('is-active');
    portraitFrame.addEventListener('click', (e) => {
      if (window.matchMedia('(hover: none)').matches) {
        e.preventDefault();
        togglePortrait();
      }
    });
    portraitFrame.addEventListener('keydown', (e) => {
      if (e.key === 'Enter' || e.key === ' ' || e.key === 'Spacebar') {
        e.preventDefault();
        togglePortrait();
      }
    });
  }

  // --- Projects stack: clicking a title flips the detail card to that project ---
  const stackItems = Array.from(document.querySelectorAll('.stack-item'));
  const detailCard = document.querySelector('.project-detail-card');
  const detailPanels = detailCard ? Array.from(detailCard.querySelectorAll('.project-detail-panel')) : [];
  if (stackItems.length && detailCard && detailPanels.length) {
    let activeProject = (stackItems.find(b => b.classList.contains('is-active')) || stackItems[0]).dataset.project;
    stackItems.forEach(btn => {
      btn.addEventListener('click', () => {
        const id = btn.dataset.project;
        if (id === activeProject) return;
        activeProject = id;
        stackItems.forEach(b => {
          const active = b === btn;
          b.classList.toggle('is-active', active);
          b.setAttribute('aria-pressed', active ? 'true' : 'false');
        });
        detailPanels.forEach(p => p.classList.toggle('is-active', p.dataset.project === id));
        if (!prefersReduced) {
          detailCard.classList.remove('is-flipping');
          void detailCard.offsetWidth; // restart the flip animation on repeated clicks
          detailCard.classList.add('is-flipping');
        }
      });
    });
  }

  const header = document.querySelector('.site-header');
  const navLinks = Array.from(document.querySelectorAll('.icon-nav .nav-pill'));

  // --- Active nav-pill: highlights the current section, click or scroll ---
  let activeLink = null;
  const setActiveNavLink = (link) => {
    if (!link || link === activeLink) return;
    if (activeLink) activeLink.classList.remove('active');
    link.classList.add('active');
    activeLink = link;
  };

  // While a click is smooth-scrolling the page to its target section, ignore
  // scrollspy updates — otherwise sections passed en route briefly "steal"
  // the active state before it reaches the target.
  let suppressSpyUntil = 0;
  navLinks.forEach(link => link.addEventListener('click', () => {
    suppressSpyUntil = Date.now() + 900;
    setActiveNavLink(link);
  }));

  // --- Scrollspy: highlight the nav pill for the section currently in view ---
  const sectionLinkMap = navLinks
    .map(link => {
      const id = link.getAttribute('href');
      const section = id && id.startsWith('#') ? document.querySelector(id) : null;
      return section ? { section, link } : null;
    })
    .filter(Boolean);

  if (sectionLinkMap.length && 'IntersectionObserver' in window) {
    const spy = new IntersectionObserver((entries) => {
      if (Date.now() < suppressSpyUntil) return;
      entries.forEach(entry => {
        if (entry.isIntersecting) {
          const match = sectionLinkMap.find(m => m.section === entry.target);
          if (match) setActiveNavLink(match.link);
        }
      });
    }, { rootMargin: '-40% 0px -55% 0px', threshold: 0 });
    sectionLinkMap.forEach(({ section }) => spy.observe(section));
  }

  const parallaxEls = Array.from(document.querySelectorAll('[data-parallax]'));
  const progressBar = document.getElementById('scroll-progress');
  const backToTop = document.getElementById('back-to-top');

  // --- Scroll-reveal (fade/slide sections in as they enter view) ---
  const revealEls = document.querySelectorAll('.reveal');
  if (revealEls.length) {
    if (prefersReduced || !('IntersectionObserver' in window)) {
      revealEls.forEach(el => el.classList.add('visible'));
    } else {
      const io = new IntersectionObserver((entries) => {
        entries.forEach(entry => {
          if (entry.isIntersecting) {
            entry.target.classList.add('visible');
            io.unobserve(entry.target);
          }
        });
      }, { threshold: 0.15, rootMargin: '0px 0px -40px 0px' });
      revealEls.forEach(el => io.observe(el));
    }
  }

  // --- One consolidated, rAF-throttled scroll handler ---
  if (parallaxEls.length || progressBar || backToTop || header) {
    let ticking = false;
    const updateOnScroll = () => {
      const y = window.scrollY || window.pageYOffset;

      if (!prefersReduced) {
        parallaxEls.forEach(el => {
          const speed = parseFloat(el.getAttribute('data-parallax')) || 0;
          el.style.transform = `translate3d(0, ${(y * speed).toFixed(2)}px, 0)`;
        });
      }

      if (header) header.classList.toggle('scrolled', y > 40);

      if (progressBar) {
        const docHeight = document.documentElement.scrollHeight - window.innerHeight;
        const pct = docHeight > 0 ? Math.min(100, (y / docHeight) * 100) : 0;
        progressBar.style.width = pct + '%';
      }

      if (backToTop) backToTop.classList.toggle('visible', y > window.innerHeight * 0.6);

      ticking = false;
    };
    window.addEventListener('scroll', () => {
      if (!ticking) { requestAnimationFrame(updateOnScroll); ticking = true; }
    }, { passive: true });
    updateOnScroll();
  }

  if (backToTop) {
    backToTop.addEventListener('click', () => {
      window.scrollTo({ top: 0, behavior: prefersReduced ? 'auto' : 'smooth' });
    });
  }

  // --- Button ripple ---
  if (!prefersReduced) {
    document.querySelectorAll('.button').forEach(btn => {
      btn.addEventListener('click', function (e) {
        const rect = this.getBoundingClientRect();
        const size = Math.max(rect.width, rect.height);
        const ripple = document.createElement('span');
        ripple.className = 'ripple';
        ripple.style.width = ripple.style.height = size + 'px';
        ripple.style.left = (e.clientX - rect.left - size / 2) + 'px';
        ripple.style.top = (e.clientY - rect.top - size / 2) + 'px';
        this.appendChild(ripple);
        ripple.addEventListener('animationend', () => ripple.remove());
      });
    });
  }
});
