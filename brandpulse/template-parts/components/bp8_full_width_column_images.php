<?php 
    $layout = get_sub_field( 'layout' ); 
    $gallery_1_images = get_sub_field( 'gallery_1' );
    $gallery_2_images = get_sub_field( 'gallery_2' );
    $gallery_3_images = get_sub_field( 'gallery_3' );
?>
<?php if ( $layout == 1 && $gallery_1_images ) : ?>
    <section class="section default-padding remove-top-padding full-width-column">
        <div class="section-inner">
        <div class="row">
            <?php foreach ( $gallery_1_images as $gallery_1_image ): ?>
            <div class="col-1">
                <div class="cases-detail-img" style="background-image: url(<?php echo esc_url( $gallery_1_image['url'] ); ?>);">
                    <img src="<?php echo esc_url( $gallery_1_image['url'] ); ?>" alt="<?php echo esc_attr( $gallery_1_image['alt'] ); ?>" title="">
                </div>
            </div>
            <?php endforeach; ?>
        </div>
        </div>
    </section>
<?php elseif( $layout == 2 && $gallery_2_images ): ?>
    <section class="section default-padding remove-top-padding full-width-column">
      <div class="section-inner">
        <div class="row">
          <?php foreach ( $gallery_2_images as $gallery_2_image ): ?>
            <div class="col-6">
                <div class="cases-detail-img" style="background-image: url(<?php echo esc_url( $gallery_2_image['url'] ); ?>);">
                    <img src="<?php echo esc_url( $gallery_2_image['url'] ); ?>" alt="<?php echo esc_attr( $gallery_2_image['alt'] ); ?>" title="">
                </div>
            </div>
        <?php endforeach; ?>
        </div>
      </div>
    </section>
<?php elseif( $layout == 3 && $gallery_3_images ): ?>
    <section class="section default-padding remove-top-padding full-width-column">
      <div class="section-inner">
        <div class="row">
          <?php foreach ( $gallery_3_images as $gallery_3_image ): ?>
                <div class="col-3">
                    <div class="cases-detail-img" style="background-image: url(<?php echo esc_url( $gallery_3_image['url'] ); ?>);">
                        <img src="<?php echo esc_url( $gallery_3_image['url'] ); ?>" alt="<?php echo esc_attr( $gallery_3_image['alt'] ); ?>" title="">
                    </div>
                </div>
            <?php endforeach; ?>
        </div>
      </div>
    </section>
<?php endif; ?>
