<?php 
    $desktop_image_obj = get_sub_field( 'desktop_image_obj' ); 
    $mobile_image_obj = get_sub_field( 'mobile_image_obj' );
?>
<?php if ( $desktop_image_obj ||  $mobile_image_obj) : ?>
<section class="cases-dtl-ipad-mobile-screens-sec">
  <div class="cases-dtl-grid-img-sec-inner">
    <div class="container">
      <div class="cases-dtl-ipad-mobile-screens">
        <?php if ( $desktop_image_obj ) : ?>
            <img src="<?php echo esc_url( $desktop_image_obj['url'] ); ?>" alt="<?php echo esc_attr( $desktop_image_obj['alt'] ); ?>" class="desktop-md"/>
        <?php endif; ?>
        <?php if ( $mobile_image_obj ) : ?>
                <img src="<?php echo esc_url( $mobile_image_obj['url'] ); ?>" alt="<?php echo esc_attr( $mobile_image_obj['alt'] ); ?>" class="mobile-md" />
        <?php else: ?>
            <?php if ( $desktop_image_obj ) : ?>
                <img src="<?php echo esc_url( $desktop_image_obj['url'] ); ?>" alt="<?php echo esc_attr( $desktop_image_obj['alt'] ); ?>" class="mobile-md"/>
            <?php endif; ?>
        <?php endif; ?>
      </div>
    </div>
  </div>
</section>
<?php endif; ?>