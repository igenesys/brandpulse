<?php $carouselID = uniqid(); ?>
<?php $gallery_images = get_sub_field( 'gallery' ); ?>
<?php if ( $gallery_images ) :  ?>
<section class="section default-padding remove-top-padding full-image-carousel-main" id="<?php echo $carouselID ?>">
    <div class="section-inner">
    <div class="container">
        <div class="full-image-carousel owl-carousel owl-theme">
        <?php foreach ( $gallery_images as $gallery_image ): ?>
            <div class="item">
                <img src="<?php echo esc_url( $gallery_image['url'] ); ?>" class="desktop-md" alt="<?php echo esc_attr( $gallery_image['alt'] ); ?>" title=""/>
                <img src="<?php echo esc_url( $gallery_image['url'] ); ?>" class="mobile-md" alt="<?php echo esc_attr( $gallery_image['alt'] ); ?>" title=""/>
            </div>
        <?php endforeach; ?>
        </div>
        <div class="carousel__navigation">
        <div class="slider__counter"></div>
        </div>
    </div>
    </div>
    <script>
    jQuery('#<?php echo $carouselID ?> .full-image-carousel').on('initialized.owl.carousel changed.owl.carousel', function(e) {
        if (!e.namespace)  {
        return;
        }
        var carousel = e.relatedTarget;
        jQuery('#<?php echo $carouselID ?> .slider__counter').html(carousel.relative(carousel.current()) + 1 + '<span>/</span>' + carousel.items().length);
    }).owlCarousel({
        items: 1,
        loop:false,
        dots: false,
        margin:0,
        nav: true
    });
    </script>
</section>
<?php endif; ?>