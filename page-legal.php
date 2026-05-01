<?php
/**
 * Template Name: Página Legal
 *
 * Plantilla para páginas legales: aviso legal, privacidad, cookies.
 */

if ( ! defined( 'ABSPATH' ) ) exit;
?>
<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
  <meta charset="<?php bloginfo('charset'); ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <?php wp_head(); ?>
</head>
<body <?php body_class('naspro-landing-body naspro-legal-body'); ?>>
<?php wp_body_open(); ?>

<div class="legal-page">

  <header class="legal-header">
    <a href="/" class="legal-header__logo">NASPRO</a>
    <a href="/" class="legal-header__back">← Volver</a>
  </header>

  <main class="legal-main">
    <div class="legal-wrap">
      <h1 class="legal-title"><?php the_title(); ?></h1>
      <div class="legal-content">
        <?php the_content(); ?>
      </div>
    </div>
  </main>

  <?php get_template_part('sections/footer'); ?>

</div>

<?php wp_footer(); ?>
</body>
</html>
