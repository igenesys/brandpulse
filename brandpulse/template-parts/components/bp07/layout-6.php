<?php 
    $class = '';

    $bg_class = "";
    if ( get_sub_field( 'background_custom' ) == 3 ) :
    $bg_class = 'other-top-part';
    elseif ( get_sub_field( 'background_custom' ) == 2 ) :
    $bg_class = 'dark-top-part';
    else:
    $bg_class = "light-top-part";
    endif;

    $image_4_images = get_sub_field( 'image_4' );  
    $cta_title=get_sub_field( 'title' ); 
    $cta_text=get_sub_field( 'text' ); 

    $uniqeID = uniqid(); 
?>
<?php if ( get_sub_field( 'cta' ) == 1 ) : ?>
    <section class="cases-dtl-col-img-sec col-4-images-main mobile-carousel-style <?php echo $bg_class; ?>" id="<?php echo $uniqeID ?>">
    <div class="cases-dtl-col-img-sec-inner">
        <div class="container">
            <?php if ( !empty($cta_title) || !empty($cta_text)) : ?>
                <div class="container-980">
                    <div class="home-about-section-row cases-dtl-sec-title">
                        <div class="home-about-section-lh">
                            <span class="h4"><?php echo $cta_title;?></span>
                        </div>
                        <div class="home-about-section-rh">
                            <?php echo $cta_text;?>
                        </div>
                    </div>
                </div>
            <?php endif; ?>
            <?php if ( $image_4_images ) :  ?>
                <div class="container">
                <div class="col-4-img-carousel owl-carousel owl-theme">
                    
                        <?php foreach ( $image_4_images as $image_4_image ): ?>
                            <div class="item">
                                <div class="col-4">
                                    <div class="cases-detail-img" style="background-image: url(<?php echo esc_url( $image_4_image['url'] ); ?>);">
                                        <img src="<?php echo esc_url( $image_4_image['url'] ); ?>" alt="<?php echo esc_attr( $image_4_image['alt'] ); ?>" title=""/>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    
                    
                </div>
                <div class="carousel__navigation">
                    <div class="slider__counter"></div>
                </div>
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>
<?php else : ?>
    <?php if ( $image_4_images ) :  ?>
        <section class="<?php echo $class; ?> <?php echo $bg_class; ?> section default-padding remove-top-padding col-4-images-main mobile-carousel-style" id="<?php echo $uniqeID ?>">
            <div class="section-inner">
                <div class="container">
                    <div class="col-4-img-carousel owl-carousel owl-theme">
                        <?php foreach ( $image_4_images as $image_4_image ): ?>
                            <div class="item">
                                <div class="col-4">
                                    <div class="cases-detail-img" style="background-image: url(<?php echo esc_url( $image_4_image['url'] ); ?>);">
                                        <img src="<?php echo esc_url( $image_4_image['url'] ); ?>" alt="<?php echo esc_attr( $image_4_image['alt'] ); ?>" title=""/>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                    <div class="carousel__navigation">
                        <div class="slider__counter"></div>
                    </div>
                </div>
            </div>
            
        </section>
    <?php endif; ?>

<?php endif; ?>

<script>
    jQuery('#<?php echo $uniqeID ?> .col-4-img-carousel').on('initialized.owl.carousel changed.owl.carousel', function(e) {
        if (!e.namespace)  { return; }
        var carousel = e.relatedTarget;
        jQuery('#<?php echo $uniqeID ?> .slider__counter').html(carousel.relative(carousel.current()) + 1 + '<span>/</span>' + carousel.items().length);
        }).owlCarousel({
        items: 4,
        loop:false,
        margin:20,
        nav:true,
        dots: false,
        responsive:{
            0:{
            items:1,
            stagePadding: 40
            },
            480:{
                items:2,
                stagePadding: 60
            },
            641:{
                items:3,
                stagePadding: 80
            },
            1024:{
                stagePadding: 0
            },
            1280:{
                items:4
            }
        }
        });
</script>