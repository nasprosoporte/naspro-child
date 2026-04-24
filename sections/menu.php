<?php
/**
 * Menú flotante global (burger + drawer)
 * Visible en toda la landing.
 */
if ( ! defined( 'ABSPATH' ) ) exit;
?>

<!-- Botón flotante (burger) -->
<div class="naspro-burger" aria-label="Menú">
  <button class="naspro-burger__btn" type="button" aria-label="Abrir menú" aria-expanded="false">
    <img
      class="naspro-burger__icon"
      src="https://naspro.es/wp-content/uploads/2026/02/icons8-menu-32.png"
      alt=""
      aria-hidden="true"
    >
  </button>
</div>

<!-- Drawer del menú -->
<div class="naspro-drawer" aria-hidden="true">
  <div class="naspro-drawer__overlay"></div>
  <aside class="naspro-drawer__panel" role="dialog" aria-label="Menú NASPRO">
    <button class="naspro-drawer__close" type="button" aria-label="Cerrar menú">×</button>
    <div class="naspro-drawer__brand">NASPRO</div>
    <a href="#hero">Inicio</a>
    <a href="#capas">Cómo funciona</a>
    <a href="#about-naspro">Sobre Naspro</a>
    <a href="#faq">FAQ</a>
    <a href="#producto" class="naspro-drawer__cta">Comprar</a>
  </aside>
</div>