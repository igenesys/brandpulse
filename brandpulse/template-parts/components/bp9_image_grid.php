<?php 
    $image_grid_images = get_sub_field( 'image_grid' ); 
    $counter=1;
?>
<?php if ( $image_grid_images ) :  ?>
<section class="cases-dtl-grid-img-sec">
  <div class="cases-dtl-grid-img-sec-inner">
    <div class="container">
      <div class="cases-dtl-grid-img-block-main">
          <?php foreach ( $image_grid_images as $image_grid_image ): ?>
            <div class="cases-dtl-grid-img-col cases-dtl-grid-img-<?php echo $counter;?>">
              <div class="cases-dtl-grid-img">
                <img src="<?php echo esc_url( $image_grid_image['url'] ); ?>" alt="<?php echo esc_attr( $image_grid_image['alt'] ); ?>" title=""/>
              </div>
            </div>
          <?php $counter++; endforeach; ?>
      </div>
    </div>
  </div>
</section>
<?php endif; ?>