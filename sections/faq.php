<?php
/**
 * Sección FAQ — Vitrina de museo
 */
if ( ! defined( 'ABSPATH' ) ) exit;

$faqs = [
  [
    'num' => '01',
    'pregunta' => '¿Cómo se usa NASPRO?',
    'respuesta' => 'Limpia y seca la zona del puente nasal. Dobla ligeramente la tira por el centro y aplícala sobre la nariz siguiendo su forma natural. Presiona suavemente los extremos para fijarla. Lista en segundos.'
  ],
  [
    'num' => '02',
    'pregunta' => '¿Se mantiene bien durante el sudor o el entrenamiento?',
    'respuesta' => 'Sí. NASPRO está diseñada para aguantar sesiones de alta intensidad. Su adhesivo técnico mantiene la fijación incluso con sudor, agua o movimiento brusco.'
  ],
  [
    'num' => '03',
    'pregunta' => '¿Cuánto tiempo dura cada tira?',
    'respuesta' => 'Cada tira está diseñada para un uso de hasta 12 horas. Úsala durante el entreno, la competición o mientras duermes y retírala al terminar.'
  ],
  [
    'num' => '04',
    'pregunta' => '¿Se nota al instante?',
    'respuesta' => 'La mayoría de usuarios notan la diferencia en los primeros minutos — más aire, menos resistencia nasal y mayor comodidad respiratoria desde el primer uso.'
  ],
  [
    'num' => '05',
    'pregunta' => '¿Se puede usar para dormir?',
    'respuesta' => 'Sí, es perfecta para el descanso. Mejora el flujo de aire nasal durante la noche, favoreciendo una respiración más profunda y un sueño más reparador.'
  ],
  [
    'num' => '06',
    'pregunta' => '¿Es apto para pieles sensibles?',
    'respuesta' => 'Sí. Los materiales de NASPRO han sido seleccionados para minimizar la irritación. Si tienes piel muy reactiva, te recomendamos hacer una prueba en una zona pequeña antes del primer uso completo.'
  ],
];
?>

<section id="faq">
  <div class="faq-bg"></div>
  <div class="faq-wrap">

    <div class="faq-header">
      <span class="faq-eyebrow">Todo lo que necesitas saber</span>
      <h2 class="faq-title">Preguntas frecuentes</h2>
    </div>

    <div class="faq-list">
      <?php foreach ( $faqs as $i => $f ) : ?>
        <div class="faq-item" data-index="<?php echo $i; ?>">
          <button class="faq-question" type="button" aria-expanded="false">
            <span class="faq-num"><?php echo $f['num']; ?></span>
            <span class="faq-q-text"><?php echo esc_html( $f['pregunta'] ); ?></span>
            <span class="faq-icon" aria-hidden="true"></span>
          </button>
          <div class="faq-answer">
            <p><?php echo esc_html( $f['respuesta'] ); ?></p>
          </div>
        </div>
      <?php endforeach; ?>
    </div>

  </div>
</section>
