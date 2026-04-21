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
  /* =========================================================
     3. SECCIÓN ABOUT (deck de cartas frontal/trasera)
     ========================================================= */
  function initAbout() {
    var showcase = document.getElementById('abShowcase');
    var idxNum   = document.getElementById('abIdxNum');
    var idxLabel = document.getElementById('abIdxLabel');
    var hintLbl  = document.getElementById('abHintLabel');
    var swapBtn  = document.getElementById('abSwap');

    if (!showcase || !idxNum || !idxLabel || !hintLbl || !swapBtn) return;

    var cards = showcase.querySelectorAll('.ab-card-photo');
    if (!cards.length) return;

    function setView(view) {
      var isBack = (view === 'back');
      showcase.classList.toggle('is-back', isBack);
      idxNum.textContent   = isBack ? '02'           : '01';
      idxLabel.textContent = isBack ? 'Trasera'      : 'Frontal';
      hintLbl.textContent  = isBack ? 'Ver frontal'  : 'Ver trasera';
    }

    // Click en cada carta → activa esa cara
    cards.forEach(function (card) {
      card.addEventListener('click', function () {
        setView(card.getAttribute('data-view'));
      });
    });

    // Botón de alternar
    swapBtn.addEventListener('click', function () {
      setView(showcase.classList.contains('is-back') ? 'front' : 'back');
    });

    // Teaser al cargar: muestra brevemente la trasera y vuelve
    setTimeout(function () {
      setView('back');
      setTimeout(function () { setView('front'); }, 1400);
    }, 1800);
  }

})();