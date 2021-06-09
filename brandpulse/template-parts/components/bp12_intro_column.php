<?php 

// Variation 3 column and 4 column 
if ( get_sub_field( 'column' ) == 1 ) :
    $column = "car-carousel-item-3";
    $num = 3;
else :
    $column = "car-carousel-item-4";
    $num = 4;
endif;
$colID = uniqid();
?>
<section class="section default-padding remove-top-padding <?php echo $column; ?> mobile-carousel-style" id="<?php echo $colID; ?>">
      <div class="section-inner">
        <div class="container">
          <div class="car-carousel owl-carousel owl-theme">
              <?php if ( have_rows( 'column_1' ) ) : ?>
				<?php while ( have_rows( 'column_1' ) ) : the_row(); ?>
                        <?php 
                            $title=get_sub_field( 'title' ); 
                            $image_intro = get_sub_field( 'image_intro' );
                            $text = get_sub_field( 'text' );
                        if(!empty($title) || !empty($text) || $image_intro){
                        ?>
                    <div class="item">
                      <div class="car-block">
                        <div class="car-label-with-img">
                          <label><?php the_sub_field( 'title' ); ?></label>
                           <?php if ( $image_intro ) : ?>
                          <div class="car-img">
                            <img src="<?php echo esc_url( $image_intro['sizes']['3-col'] ); ?>" alt="<?php echo esc_attr( $image_intro['alt'] ); ?>" title=""/>
                          </div>
                            <?php endif; ?>
                        </div>
                        <div class="car-details">
                          <p><?php the_sub_field( 'text' ); ?></p>
                        </div>
                      </div>
                    </div>
              <?php     }
                    endwhile; ?>
			<?php endif; ?>
              <?php if ( have_rows( 'column_2' ) ) : ?>
				<?php while ( have_rows( 'column_2' ) ) : the_row(); ?>
                        <?php 
                            $title=get_sub_field( 'title' ); 
                            $image_intro = get_sub_field( 'image_intro' );
                            $text = get_sub_field( 'text' );
                        if(!empty($title) || !empty($text) || $image_intro){
                        ?>
                    <div class="item">
                      <div class="car-block">
                        <div class="car-label-with-img">
                          <label><?php the_sub_field( 'title' ); ?></label>
                           <?php if ( $image_intro ) : ?>
                          <div class="car-img">
                            <img src="<?php echo esc_url( $image_intro['sizes']['3-col'] ); ?>" alt="<?php echo esc_attr( $image_intro['alt'] ); ?>" title=""/>
                          </div>
                            <?php endif; ?>
                        </div>
                        <div class="car-details">
                          <p><?php the_sub_field( 'text' ); ?></p>
                        </div>
                      </div>
                    </div>
              <?php     }
                    endwhile; ?>
			<?php endif; ?> 
              <?php if ( have_rows( 'column_3' ) ) : ?>
				<?php while ( have_rows( 'column_3' ) ) : the_row(); ?>
                        <?php 
                            $title=get_sub_field( 'title' ); 
                            $image_intro = get_sub_field( 'image_intro' );
                            $text = get_sub_field( 'text' );
                        if(!empty($title) || !empty($text) || $image_intro){
                        ?>
                    <div class="item">
                      <div class="car-block">
                        <div class="car-label-with-img">
                          <label><?php the_sub_field( 'title' ); ?></label>
                           <?php if ( $image_intro ) : ?>
                          <div class="car-img">
                            <img src="<?php echo esc_url( $image_intro['sizes']['3-col'] ); ?>" alt="<?php echo esc_attr( $image_intro['alt'] ); ?>" title=""/>
                          </div>
                            <?php endif; ?>
                        </div>
                        <div class="car-details">
                          <p><?php the_sub_field( 'text' ); ?></p>
                        </div>
                      </div>
                    </div>
              <?php     }
                    endwhile; ?>
			<?php endif; ?>
              <?php if ( have_rows( 'column_4' ) ) : ?>
				<?php while ( have_rows( 'column_4' ) ) : the_row(); ?>
                        <?php 
                            $title=get_sub_field( 'title' ); 
                            $image_intro = get_sub_field( 'image_intro' );
                            $text = get_sub_field( 'text' );
                        if(!empty($title) || !empty($text) || $image_intro){
                        ?>
                    <div class="item">
                      <div class="car-block">
                        <div class="car-label-with-img">
                          <label><?php the_sub_field( 'title' ); ?></label>
                           <?php if ( $image_intro ) : ?>
                          <div class="car-img">
                            <img src="<?php echo esc_url( $image_intro['sizes']['3-col'] ); ?>" alt="<?php echo esc_attr( $image_intro['alt'] ); ?>" title=""/>
                          </div>
                            <?php endif; ?>
                        </div>
                        <div class="car-details">
                          <p><?php the_sub_field( 'text' ); ?></p>
                        </div>
                      </div>
                    </div>
              <?php     }
                    endwhile; ?>
			<?php endif; ?>
            
          </div>
          <div class="carousel__navigation">
            <div class="slider__counter"></div>
          </div>
        </div>
      </div>
      <script>
        jQuery('#<?php echo $colID; ?> .car-carousel').on('initialized.owl.carousel changed.owl.carousel', function(e) {
          if (!e.namespace)  {
            return;
          }
          var carousel = e.relatedTarget;
          jQuery('#<?php echo $colID; ?> .slider__counter').html(carousel.relative(carousel.current()) + 1 + '<span>/</span>' + carousel.items().length);
        }).owlCarousel({
          items: <?php echo $num; ?>,
          loop: false,
          margin:20,
          nav:true,
          dots: false,
          responsive:{
            0:{
                items:1,
                stagePadding: 40
            },
            540:{
                items:1,
                stagePadding: 50
            },
            640:{
                items:2,
                stagePadding: 100
            },
            768:{
                items:3,
                stagePadding: 100
            },
            1024:{
                items: <?php echo $num; ?>,
                stagePadding: 0
            },
            1280:{
                items:<?php echo $num; ?>
            }
          }
        });
      </script>
    </section>