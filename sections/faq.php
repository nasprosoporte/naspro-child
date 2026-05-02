<?php
/**
 * Sección FAQ — Editorial de alta costura
 */
if ( ! defined( 'ABSPATH' ) ) exit;

$faqs = [
  [
    'num' => '01',
    'pregunta' => '¿Cómo se usa NASPRO?',
    'respuesta' => 'Limpia y seca la zona del puente nasal. Dobla ligeramente la tira por el centro, colócala siguiendo la forma natural de la nariz y presiona suavemente los extremos para fijarla. Lista en segundos.'
  ],
  [
    'num' => '02',
    'pregunta' => '¿Qué se nota al usarla?',
    'respuesta' => 'La sensación puede variar según cada persona, pero quienes la prueban suelen destacar comodidad, ligereza y una sensación de mayor amplitud durante el uso.'
  ],
  [
    'num' => '03',
    'pregunta' => '¿Se mantiene durante el entrenamiento?',
    'respuesta' => 'Está diseñada para ofrecer una fijación estable durante rutinas intensas, movimiento y sudor. Para una mejor adhesión, aplícala siempre sobre piel limpia, seca y sin crema.'
  ],
  [
    'num' => '04',
    'pregunta' => '¿Se puede usar para dormir?',
    'respuesta' => 'También puedes usarla durante el descanso si te resulta cómoda. NASPRO no está diseñada para tratar problemas respiratorios o del sueño; es una tira nasal de uso personal enfocada en comodidad y bienestar.'
  ],
  [
    'num' => '05',
    'pregunta' => '¿Duele al retirarla?',
    'respuesta' => 'Retírala despacio desde los extremos, sin tirar de golpe. Si notas demasiada adherencia, puedes humedecer ligeramente la zona para retirarla con más suavidad.'
  ],
  [
    'num' => '06',
    'pregunta' => '¿Se puede reutilizar?',
    'respuesta' => 'No. Cada tira está diseñada para un solo uso, para mantener una buena fijación, higiene y comodidad durante la aplicación.'
  ],
];
?>

<section id="faq">
  <div class="faq-wrap">

    <div class="faq-header">
      <span class="faq-eyebrow">Todo lo que necesitas saber</span>
      <h2 class="faq-title">FAQ</h2>
    </div>

    <div class="faq-list">
      <?php foreach ( $faqs as $i => $f ) : ?>
        <div class="faq-item" data-index="<?php echo $i; ?>">
          <button class="faq-question" type="button" aria-expanded="false">
            <span class="faq-num-bg" aria-hidden="true"><?php echo $f['num']; ?></span>
            <span class="faq-q-text"><?php echo esc_html( $f['pregunta'] ); ?></span>
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-answer" aria-hidden="true">
            <div class="faq-answer-line"></div>
            <p><?php echo esc_html( $f['respuesta'] ); ?></p>
          </div>
        </div>
      <?php endforeach; ?>
    </div>

  </div>
</section>
