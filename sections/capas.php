<?php
/**
 * Sección Capas — "Diseñada capa a capa"
 * Cerrado: 4 capas apiladas en el centro.
 * Abierto: despliegue editorial horizontal con info al lado.
 */
if ( ! defined( 'ABSPATH' ) ) exit;
?>

<section id="capas">
  <div class="nx-bg"></div>

  <div class="nx-header">
    <span class="nx-eyebrow">Ingeniería de alto rendimiento</span>
    <div class="nx-title">Diseñada capa a capa</div>
    <div class="nx-sub">Cada componente cumple una función. Nada es casual.</div>
  </div>

  <div class="nx-scene" id="nx-scene">

    <div class="nx-row" id="row1">
      <span class="nx-bignum" aria-hidden="true">01</span>
      <div class="nx-img-wrap">
        <img src="https://naspro.es/wp-content/uploads/2026/04/NASPRO-tiras-capas-Photoroom-4-1-1.png" alt="Capa exterior">
      </div>
      <div class="nx-tag" id="tag1">
        <span class="nx-tag__num">01</span>
        <h4>Capa exterior</h4>
        <p>Acabado técnico microtexturizado. Resistente al sudor, mantiene la forma bajo presión.</p>
      </div>
    </div>

    <div class="nx-row" id="row2">
      <span class="nx-bignum" aria-hidden="true">02</span>
      <div class="nx-img-wrap">
        <img src="https://naspro.es/wp-content/uploads/2026/04/NASPRO-tiras-capas-Photoroom-2-1-1.png" alt="Tiras elásticas">
      </div>
      <div class="nx-tag" id="tag2">
        <span class="nx-tag__num">02</span>
        <h4>Tiras elásticas</h4>
        <p>Controlan la expansión nasal con precisión milimétrica para maximizar el flujo de aire.</p>
      </div>
    </div>

    <div class="nx-row" id="row3">
      <span class="nx-bignum" aria-hidden="true">03</span>
      <div class="nx-img-wrap">
        <img src="https://naspro.es/wp-content/uploads/2026/04/NASPRO-tiras-capas-Photoroom-1-1-1.png" alt="Capa perforada">
      </div>
      <div class="nx-tag" id="tag3">
        <span class="nx-tag__num">03</span>
        <h4>Capa perforada</h4>
        <p>Favorece la transpiración y la comodidad durante esfuerzos prolongados.</p>
      </div>
    </div>

    <div class="nx-row" id="row4">
      <span class="nx-bignum" aria-hidden="true">04</span>
      <div class="nx-img-wrap">
        <img src="https://naspro.es/wp-content/uploads/2026/04/NASPRO-tiras-capas-Photoroom-3-1-1.png" alt="Base adhesiva">
      </div>
      <div class="nx-tag" id="tag4">
        <span class="nx-tag__num">04</span>
        <h4>Base adhesiva</h4>
        <p>Fijación segura, suave con la piel y sin residuos al retirarla.</p>
      </div>
    </div>

  </div>

  <div class="nx-btn-wrap">
    <button class="nx-launch" id="nx-btn" type="button" aria-expanded="false">
      <span class="nx-launch__icon" aria-hidden="true">
        <svg viewBox="0 0 16 16" width="14" height="14" fill="currentColor">
          <path class="nx-launch__icon-play" d="M4 3 L13 8 L4 13 Z"/>
          <rect class="nx-launch__icon-stop" x="4" y="4" width="8" height="8" rx="1"/>
        </svg>
      </span>
      <span class="nx-launch__label" id="nx-lbl">Abrir capas</span>
    </button>
  </div>
</section>