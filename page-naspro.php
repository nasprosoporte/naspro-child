<?php
/**
 * Template Name: Naspro Landing
 *
 * Plantilla de página personalizada para la landing de Naspro.
 * Renderiza la página sin header/footer del tema para control total del diseño.
 *
 * Para añadir una nueva sección en el futuro:
 *   1. Crear el archivo en /sections/mi-seccion.php
 *   2. Añadir aquí: get_template_part( 'sections/mi-seccion' );
 *   3. (Opcional) Añadir enlace en /sections/menu.php
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit;
}
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <?php wp_head(); ?>
</head>
<body <?php body_class( 'naspro-landing-body' ); ?>>
<?php wp_body_open(); ?>

<?php
/* ─────────────────────────────────────────────
   MENÚ FLOTANTE GLOBAL
   (fuera de <main> porque es flotante/fixed)
   ───────────────────────────────────────────── */
get_template_part( 'sections/menu' );
?>

<main id="naspro-landing" role="main">
  <?php get_template_part( 'sections/hero' ); ?>
  <?php get_template_part( 'sections/capas' ); ?>
  <?php get_template_part( 'sections/about' ); ?>
  <?php get_template_part( 'sections/manifiesto' ); ?>
  <?php get_template_part( 'sections/producto' ); ?>
  <?php get_template_part( 'sections/faq' ); ?>
  <?php get_template_part( 'sections/footer' ); ?>

</main>

<?php wp_footer(); ?>
</body>
</html>