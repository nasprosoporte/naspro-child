<?php
/**
 * CONFIG CENTRAL DE PRODUCTOS — NASPRO
 *
 * Cuando añadas un producto nuevo o tengas datos reales (precios, URLs Shopify),
 * edita SOLO este archivo. Todas las secciones de la web (producto, packs,
 * suscripción) leen desde aquí.
 *
 * Placeholders actuales:
 *   '—'                         → precio pendiente
 *   '[SHOPIFY_URL_PENDIENTE]'   → URL de compra (mañana se reemplaza)
 *
 * Escalabilidad: añadir un producto = añadir una entrada al array.
 */
if ( ! defined( 'ABSPATH' ) ) exit;

return [

    /* ─────────────────────────────────────────────
       PRODUCTO BASE: 1 unidad NASPRO Sport 30 tiras
       ───────────────────────────────────────────── */
    'unidad' => [
        'id'          => 'naspro-sport-30',
        'nombre'      => 'NASPRO Sport',
        'variante'    => '30 tiras premium',
        'precio'      => '12,99€',
        'precio_desc' => '',         // descuento (vacío = sin descuento)
        'imagen'      => 'https://naspro.es/wp-content/uploads/2026/04/Packaging-NF-scaled.png',
        'destacado'   => false,
        'badge'       => '',
        'beneficios'  => [
            'Ideal para empezar',
            'Diseño técnico de 4 capas',
            'Ajuste estable durante el uso',
        ],
        'cta'         => 'Comprar ahora',
        'shopify_url' => 'https://tienda.naspro.es/products/naspro-sport-30-tiras-nasales?variant=55610136920404',
    ],

    /* ─────────────────────────────────────────────
       PACK X2
       ───────────────────────────────────────────── */
    'pack2' => [
        'id'          => 'naspro-sport-pack-2',
        'nombre'      => 'Pack Duo',
        'variante'    => '60 tiras · 2 unidades',
        'precio'      => '21,99€',
        'precio_desc' => 'Ahorra un 15%',
        'imagen'      => 'https://naspro.es/wp-content/uploads/2026/04/Packaging-pack2-NF-scaled.png',
        'destacado'   => true,     // el "favorito", destacado visualmente
        'badge'       => 'Más vendido',
        'beneficios'  => [
            'Dos packs para tu rutina',
            'Mejor precio por unidad',
            'Perfecto para repetir o compartir',
        ],
        'cta'         => 'Comprar Pack',
        'shopify_url' => 'https://tienda.naspro.es/products/pack-duo-naspro-60-tiras-nasales?variant=55610427965780',
    ],

    /* ─────────────────────────────────────────────
       SUSCRIPCIÓN MENSUAL
       ───────────────────────────────────────────── */
    'suscripcion' => [
        'id'          => 'naspro-sport-suscripcion',
        'nombre'      => 'Suscripción Mensual',
        'variante'    => '30 tiras cada mes',
        'precio'      => '9,99€',
        'precio_desc' => 'Ahorra un 23%',
        'imagen'      => 'https://naspro.es/wp-content/uploads/2026/04/Sub-mensual-NF_rotate-02-scaled.png',
        'destacado'   => false,
        'badge'       => '',
        'beneficios'  => [
            'Recibe NASPRO cada mes',
            '3 entregas mensuales',
            'Pago único de 29,97€',
        ],
        'cta'         => 'Suscribirme',
        'shopify_url' => 'https://tienda.naspro.es/products/suscripcion-mensual-naspro-3-meses',
    ],

];