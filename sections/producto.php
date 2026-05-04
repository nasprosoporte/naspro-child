<?php
/**
 * Sección Producto — "Elige tu NASPRO"
 * 3 tarjetas: Unidad / Pack x2 / Suscripción mensual
 * Los datos se leen desde /config/products.php (placeholders hasta Shopify).
 */
if ( ! defined( 'ABSPATH' ) ) exit;

// Cargar config central de productos
$productos = include get_stylesheet_directory() . '/config/products.php';
?>

<section id="producto">
  <div class="prod-bg" aria-hidden="true"></div>

  <div class="prod-header">
    <span class="prod-eyebrow">Hazte con NASPRO</span>
    <h2 class="prod-title">Elige tu NASPRO</h2>
    <p class="prod-sub">Una unidad, un pack o suscripción mensual. Tú decides.</p>
  </div>

  <div class="prod-grid">
    <?php foreach ( $productos as $key => $p ) : ?>

      <article class="prod-card <?php echo $p['destacado'] ? 'is-featured' : ''; ?>">

        <?php if ( ! empty( $p['badge'] ) ) : ?>
          <span class="prod-card__badge"><?php echo esc_html( $p['badge'] ); ?></span>
        <?php endif; ?>

        <div class="prod-card__image">
          <img src="<?php echo esc_url( $p['imagen'] ); ?>" alt="<?php echo esc_attr( $p['nombre'] ); ?>">
        </div>

        <div class="prod-card__body">
          <h3 class="prod-card__name"><?php echo esc_html( $p['nombre'] ); ?></h3>
          <p class="prod-card__variant"><?php echo esc_html( $p['variante'] ); ?></p>

          <div class="prod-card__price">
            <span class="prod-card__price-amount"><?php echo esc_html( $p['precio'] ); ?></span>
            <?php if ( $key === 'suscripcion' ) : ?>
              <span class="prod-card__price-unit">/mes</span>
            <?php endif; ?>
          </div>

          <?php if ( ! empty( $p['precio_desc'] ) ) : ?>
            <p class="prod-card__price-desc"><?php echo esc_html( $p['precio_desc'] ); ?></p>
          <?php endif; ?>

          <ul class="prod-card__benefits">
            <?php foreach ( $p['beneficios'] as $b ) : ?>
              <li><?php echo esc_html( $b ); ?></li>
            <?php endforeach; ?>
              </ul>

              <a
                href="<?php echo esc_url( $p['shopify_url'] ); ?>"
                class="prod-card__cta"
                data-product="<?php echo esc_attr( $p['id'] ); ?>"
                <?php echo $p['shopify_url'] === '[SHOPIFY_URL_PENDIENTE]' ? 'data-pending="true"' : ''; ?>
              >
            <?php echo esc_html( $p['cta'] ); ?>
            <svg viewBox="0 0 16 16" width="14" height="14" fill="none" stroke="currentColor" stroke-width="1.8" stroke-linecap="round">
              <path d="M3 8 L13 8 M9 4 L13 8 L9 12"/>
            </svg>
          </a>
        </div>

      </article>

    <?php endforeach; ?>
  </div>

  <!-- Tira de confianza: envío / garantía / pago seguro -->
  <div class="prod-trust">
    <div class="prod-trust__item">
      <svg viewBox="0 0 24 24" width="20" height="20" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
        <path d="M3 7 L3 17 L13 17 L13 7 Z M13 10 L18 10 L21 13 L21 17 L13 17 Z"/>
        <circle cx="7" cy="17" r="2"/><circle cx="17" cy="17" r="2"/>
      </svg>
      <div>
        <strong>Envío rápido</strong>
        <span>Recíbelo en 2 a 5 días hábiles</span>
      </div>
    </div>

    <div class="prod-trust__item">
      <svg viewBox="0 0 24 24" width="20" height="20" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
        <path d="M4 12 L20 12 M8 7 L4 12 L8 17 M16 7 L20 12 L16 17"/>
      </svg>
      <div>
        <strong>Devolución fácil</strong>
        <span>Sin complicaciones</span>
      </div>
    </div>

    <div class="prod-trust__item">
      <svg viewBox="0 0 24 24" width="20" height="20" fill="none" stroke="currentColor" stroke-width="1.6" stroke-linecap="round" stroke-linejoin="round" aria-hidden="true">
        <rect x="4" y="10" width="16" height="10" rx="2"/>
        <path d="M8 10 L8 7 a4 4 0 0 1 8 0 L16 10"/>
      </svg>
      <div>
        <strong>Pago seguro</strong>
        <span>Cifrado y protegido</span>
      </div>
    </div>
  </div>
</section>