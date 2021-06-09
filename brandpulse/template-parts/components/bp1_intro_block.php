<?php 

// Variation - is dark-blue-bg

if ( get_sub_field( 'decrease_bottom_padding' ) == 1 ) :
  $class_remove_padding = 'remove-top-padding remove-bottom-padding add-title-bottom-margin';
endif;
$cta = get_sub_field( 'cta' );

if ( is_singular( 'cases' ) ) {
?>
<section style="background: <?php the_sub_field( 'background_color' ); ?>; color: <?php the_sub_field( 'font_color' ); ?>;" class="section default-padding <?php echo $class." ".$class_remove_padding; ?>">
  <div class="container">
    <div class="container-980">
      <div class="home-about-section-row cases-dtl-sec-title">
        <div class="home-about-section-lh">
          <span class="h4"><?php the_sub_field( 'title' ); ?></span>
        </div>
        <div class="home-about-section-rh">
          <?php the_sub_field( 'content' ); ?>
          <?php if ( $cta ) : ?>
            <a class="btn"href="<?php echo esc_url( $cta['url'] ); ?>" target="<?php echo esc_attr( $cta['target'] ); ?>"><?php echo esc_html( $cta['title'] ); ?></a>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </div>
</section>
<?php
}
else{
?>
<section class="home-about-section <?php echo $class." ".$class_remove_padding; ?>">
  <div class="container">
    <div class="container-980">
      <div class="home-about-section-row">
        <div class="home-about-section-lh">
          <span class="h1"><?php the_sub_field( 'title' ); ?></span>
        </div>
        <div class="home-about-section-rh">
          <?php the_sub_field( 'content' ); ?>
          <?php if ( $cta ) : ?>
            <a class="btn"href="<?php echo esc_url( $cta['url'] ); ?>" target="<?php echo esc_attr( $cta['target'] ); ?>"><?php echo esc_html( $cta['title'] ); ?></a>
          <?php endif; ?>
        </div>
      </div>
    </div>
  </div>
</section>
<?php
    }
?>
