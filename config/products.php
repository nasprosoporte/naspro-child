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
        'imagen'      => 'https://naspro.es/wp-content/uploads/2025/11/Packaging.jpg',
        'destacado'   => false,
        'badge'       => '',
        'beneficios'  => [
            'Respira sin límites',
            'Diseño ergonómico de 4 capas',
            'Resistente al sudor',
        ],
        'cta'         => 'Comprar ahora',
        'shopify_url' => 'https://tienda.naspro.es/products/naspro-sport-30-tiras-nasales',
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
        'imagen'      => 'https://naspro.es/wp-content/uploads/2025/11/Packaging.jpg',
        'destacado'   => true,     // el "favorito", destacado visualmente
        'badge'       => 'Más vendido',
        'beneficios'  => [
            'Doble unidad, mejor precio',
            'Envío siempre gratis',
            'Ideal para uso regular',
        ],
        'cta'         => 'Comprar Pack',
        'shopify_url' => 'https://tienda.naspro.es/products/pack-duo-naspro-60-tiras-nasales',
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
        'imagen'      => 'https://naspro.es/wp-content/uploads/2025/11/Packaging.jpg',
        'destacado'   => false,
        'badge'       => '',
        'beneficios'  => [
            'Envío automático cada mes',
            'Cancela cuando quieras',
            'Primer mes con descuento',
        ],
        'cta'         => 'Suscribirme',
        'shopify_url' => '#',
    ],

];