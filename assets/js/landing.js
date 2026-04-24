/* =========================================================
   NASPRO LANDING — JS consolidado
   Hijo de Astra · Plantilla Naspro Landing
   ========================================================= */

(function () {
  'use strict';

  /* ──────────────────────────────────────────────────────
     Esperar a que el DOM esté listo
     ────────────────────────────────────────────────────── */
  function onReady(fn) {
    if (document.readyState !== 'loading') {
      fn();
    } else {
      document.addEventListener('DOMContentLoaded', fn);
    }
  }

  onReady(function () {
    initMenuFlotante();
    initCapas();
    initAbout();
  });


  /* =========================================================
     1. MENÚ FLOTANTE GLOBAL (burger + drawer)
     ========================================================= */
  function initMenuFlotante() {
    var drawer   = document.querySelector('.naspro-drawer');
    var openBtn  = document.querySelector('.naspro-burger__btn');
    var overlay  = document.querySelector('.naspro-drawer__overlay');
    var closeBtn = document.querySelector('.naspro-drawer__close');
    var links    = document.querySelectorAll('.naspro-drawer__panel a');

    if (!drawer || !openBtn || !overlay || !closeBtn) return;

    function openMenu() {
      drawer.classList.add('is-open');
      drawer.setAttribute('aria-hidden', 'false');
      openBtn.setAttribute('aria-expanded', 'true');
      document.body.classList.add('naspro-menu-open');
      document.documentElement.style.overflow = 'hidden';
    }

    function closeMenu() {
      // Quitar foco del botón de cerrar para evitar warning aria-hidden
      if (document.activeElement && drawer.contains(document.activeElement)) {
        document.activeElement.blur();
      }
      drawer.classList.remove('is-open');
      drawer.setAttribute('aria-hidden', 'true');
      openBtn.setAttribute('aria-expanded', 'false');
      document.body.classList.remove('naspro-menu-open');
      document.documentElement.style.overflow = '';
    }

    openBtn.addEventListener('click', openMenu);
    overlay.addEventListener('click', closeMenu);
    closeBtn.addEventListener('click', closeMenu);
    links.forEach(function (a) {
      a.addEventListener('click', closeMenu);
    });
    document.addEventListener('keydown', function (e) {
      if (e.key === 'Escape') closeMenu();
    });
  }
/* =========================================================
     2. SECCIÓN CAPAS (botón toggle + cascada)
     ========================================================= */
  function initCapas() {
    var scene = document.getElementById('nx-scene');
    var btn   = document.getElementById('nx-btn');
    var lbl   = document.getElementById('nx-lbl');

    if (!scene || !btn || !lbl) return;

    // En móvil el CSS ya gestiona el layout estático, no hacemos nada
    if (window.matchMedia('(max-width: 640px)').matches) {
      return;
    }

    var isOpen = false;

    function toggleScene() {
      isOpen = !isOpen;
      scene.classList.toggle('is-open', isOpen);
      btn.setAttribute('aria-expanded', isOpen ? 'true' : 'false');
      lbl.textContent = isOpen ? 'Cerrar capas' : 'Abrir capas';
    }

    btn.addEventListener('click', toggleScene);

    // Re-evaluar si redimensiona cruzando 640px
    window.addEventListener('resize', function () {
      if (window.matchMedia('(max-width: 640px)').matches && isOpen) {
        isOpen = false;
        scene.classList.remove('is-open');
        lbl.textContent = 'Abrir capas';
      }
    });
  }
})();

(function() {
  const btn = document.getElementById('abSwap');
  const img = document.getElementById('abFloatImg');
  if (!btn || !img) return;

  const front = 'https://naspro.es/wp-content/uploads/2026/04/Packaging-NF-scaled.png';
  const back = 'https://naspro.es/wp-content/uploads/2026/04/Mockup_Back-NF-scaled.png';
  let showing = 'front';
  let transitioning = false;

  function swap() {
    if (transitioning) return;
    transitioning = true;

    img.style.transition = 'opacity 0.4s ease, transform 0.4s ease';
    img.style.opacity = '0';
    img.style.transform = 'scale(0.88)';

    setTimeout(function() {
      showing = showing === 'front' ? 'back' : 'front';
      img.src = showing === 'front' ? front : back;
      img.style.transition = 'none';
      img.style.transform = 'scale(1.08)';
      img.style.opacity = '0';

      requestAnimationFrame(function() {
        requestAnimationFrame(function() {
          img.style.transition = 'opacity 0.4s ease, transform 0.4s ease';
          img.style.opacity = '1';
          img.style.transform = 'scale(1)';
          setTimeout(function() { transitioning = false; }, 400);
        });
      });

      const label = btn.querySelector('span');
      if (label) label.textContent = showing === 'front' ? 'Ver trasera' : 'Ver frontal';
    }, 400);
  }

  ['click', 'touchend'].forEach(function(evt) {
    btn.addEventListener(evt, function(e) {
      e.preventDefault();
      swap();
    });
  });
})();

// Parallax 3D imagen about
(function() {
  const section = document.getElementById('about-naspro');
  const img = document.getElementById('abFloatImg');
  if (!section || !img) return;

  section.addEventListener('mousemove', function(e) {
    const rect = section.getBoundingClientRect();
    const x = (e.clientX - rect.left) / rect.width - 0.5;
    const y = (e.clientY - rect.top) / rect.height - 0.5;
    img.style.transform = `translateY(0px) rotateY(${x * 20}deg) rotateX(${-y * 20}deg)`;
  });

  section.addEventListener('mouseleave', function() {
    img.style.transform = '';
  });
})();

// FAQ — Editorial de alta costura
(function() {
  const items = document.querySelectorAll('.faq-item');
  if (!items.length) return;

  items.forEach(function(item) {
    const btn = item.querySelector('.faq-question');
    if (!btn) return;

    btn.addEventListener('click', function() {
      const isOpen = item.classList.contains('is-open');

      items.forEach(function(i) {
        i.classList.remove('is-open');
        i.querySelector('.faq-question').setAttribute('aria-expanded', 'false');
        i.querySelector('.faq-answer').setAttribute('aria-hidden', 'true');
      });

      if (!isOpen) {
        item.classList.add('is-open');
        btn.setAttribute('aria-expanded', 'true');
        item.querySelector('.faq-answer').setAttribute('aria-hidden', 'false');
      }
    });
  });
})();