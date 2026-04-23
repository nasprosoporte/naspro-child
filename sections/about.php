<?php
/**
 * Sección About — "Más aire. Más control. Más rendimiento."
 * Showcase editorial con deck de cartas + grid de pilares.
 */
if ( ! defined( 'ABSPATH' ) ) exit;
?>

<section id="about-naspro">
  <div class="ab-bg"></div>

  <div class="ab-wrap">

    <div class="ab-hero">

      <!-- Columna texto -->
      <div class="ab-copy">
        <p class="ab-eyebrow">Sobre NASPRO</p>
        <h2 class="ab-title">
          Más aire.<br>
          <em>Más control.</em><br>
          Más rendimiento.
        </h2>
        <p class="ab-lead">
          NASPRO abre tu respiración cuando más lo necesitas: entreno, competición o descanso.
          Tracción nasal precisa, ajuste estable y confort real — sin distraerte del momento.
        </p>
        <div class="ab-stats">
          <div>
            <span class="ab-stat__num">+30%</span>
            <span class="ab-stat__label">Flujo de aire</span>
          </div>
          <div>
            <span class="ab-stat__num">4 capas</span>
            <span class="ab-stat__label">De ingeniería</span>
          </div>
          <div>
            <span class="ab-stat__num">100%</span>
            <span class="ab-stat__label">Sin residuos</span>
          </div>
        </div>
        <a href="#capas" class="ab-cta">
          Ver cómo funciona
          <svg width="16" height="16" viewBox="0 0 16 16" fill="none" aria-hidden="true">
            <path d="M3 8h10M9 4l4 4-4 4" stroke="#0b1a2b" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/>
          </svg>
        </a>
      </div>

      <!-- Columna visual: Showcase editorial -->
      <div class="ab-visual">
        <div class="ab-glow" aria-hidden="true"></div>

        <div class="ab-showcase" id="abShowcase">

          <!-- Índice editorial -->
          <div class="ab-showcase__index">
            <span class="ab-idx-num" id="abIdxNum">01</span>
            <span class="ab-idx-line"></span>
            <span class="ab-idx-label" id="abIdxLabel">Frontal</span>
          </div>

          <!-- Imagen flotante -->
          <div class="ab-floating" id="abFloating">
            <img
              id="abFloatImg"
              src="https://naspro.es/wp-content/uploads/2026/04/Packaging-NF-scaled.png"
              alt="NASPRO Sport"
              loading="eager"
              decoding="async"
            >
          </div>

          <!-- Caption editorial -->
          <div class="ab-showcase__caption">
            <span class="ab-cap-tag">Sport Edition</span>
            <span class="ab-cap-sep" aria-hidden="true"></span>
            <span>30 tiras premium</span>
          </div>

          <!-- Hint interactivo -->
          <button class="ab-showcase__hint" id="abSwap" type="button">
            <svg width="12" height="12" viewBox="0 0 12 12" fill="none" aria-hidden="true">
              <path d="M2 4h6M5 2L2 4l3 2M10 8H4M7 10l3-2-3-2" stroke="currentColor" stroke-width="1.1" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
            <span id="abHintLabel">Alternar cara</span>
          </button>

        </div>

        <!-- Badge flotante -->
        <div class="ab-badge" aria-hidden="true">
          <div class="ab-badge__dot"></div>
          <div class="ab-badge__text">
            Rendimiento probado
            <span>por atletas reales</span>
          </div>
        </div>
      </div>

    </div>

    <!-- Separador -->
    <div class="ab-divider">
      <span>Los 4 pilares NASPRO</span>
    </div>

    <!-- Grid pilares -->
    <div class="ab-grid">

      <article class="ab-card">
        <span class="ab-card__tag">01</span>
        <div class="ab-card__icon">
          <svg viewBox="0 0 24 24" width="22" height="22" fill="none" aria-hidden="true">
            <path d="M12 2l3 6 6 .9-4.5 4.3 1.1 6.1L12 16.2l-5.6 3.1 1.1-6.1L3 8.9 9 8z" fill="currentColor"/>
          </svg>
        </div>
        <h3 class="ab-card__title">Tecnología avanzada</h3>
        <p class="ab-card__text">Tracción nasal precisa con materiales técnicos y duraderos, diseñados para el movimiento.</p>
        <hr class="ab-card__line">
      </article>

      <article class="ab-card">
        <span class="ab-card__tag">02</span>
        <div class="ab-card__icon">
          <svg viewBox="0 0 24 24" width="22" height="22" fill="none" aria-hidden="true">
            <circle cx="12" cy="10" r="4" stroke="currentColor" stroke-width="1.6"/>
            <path d="M12 1v3M12 20v3M1 10h3M20 10h3" stroke="currentColor" stroke-width="1.5" stroke-linecap="round"/>
          </svg>
        </div>
        <h3 class="ab-card__title">Ergonomía deportiva</h3>
        <p class="ab-card__text">Diseño cómodo, estable y pensado para movimiento continuo de alta intensidad.</p>
        <hr class="ab-card__line">
      </article>

      <article class="ab-card">
        <span class="ab-card__tag">03</span>
        <div class="ab-card__icon">
          <svg viewBox="0 0 24 24" width="22" height="22" fill="none" aria-hidden="true">
            <path d="M9 12l2 2 4-4" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
            <path d="M12 2a10 10 0 1 0 0 20A10 10 0 0 0 12 2z" stroke="currentColor" stroke-width="1.6"/>
          </svg>
        </div>
        <h3 class="ab-card__title">Validado por atletas</h3>
        <p class="ab-card__text">Probado en entrenamientos reales y escenarios de alta exigencia durante meses.</p>
        <hr class="ab-card__line">
      </article>

      <article class="ab-card">
        <span class="ab-card__tag">04</span>
        <div class="ab-card__icon">
          <svg viewBox="0 0 24 24" width="22" height="22" fill="none" aria-hidden="true">
            <path d="M12 2l7 4v6c0 5-3.2 9.5-7 10-3.8-.5-7-5-7-10V6l7-4z" stroke="currentColor" stroke-width="1.6" stroke-linejoin="round"/>
            <path d="M9 12l2 2 4-4" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round"/>
          </svg>
        </div>
        <h3 class="ab-card__title">Estándares EU</h3>
        <p class="ab-card__text">Calidad, trazabilidad y seguridad certificadas bajo los más exigentes estándares europeos.</p>
        <hr class="ab-card__line">
      </article>

    </div>
  </div>

</section>