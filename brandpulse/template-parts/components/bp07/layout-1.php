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

$image_1_images = get_sub_field( 'image_1' );

$cta_title=get_sub_field( 'title' ); 
$cta_text=get_sub_field( 'text' ); 

?>

<?php if ( get_sub_field( 'cta' ) == 1 ) : ?>
<section class="single-column-image-cta cases-dtl-col-img-sec <?php echo $bg_class; ?>">
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
            <?php if ( $image_1_images ) :  ?>
                <div class="cases-dtl-col-imgs">
                    <div class="row">
                        <?php foreach ( $image_1_images as $image_1_image ): ?>
                            <div class="col-1">
                                <div class="case-dtl-col-img">
                                    <img src="<?php echo esc_url( $image_1_image['url'] ); ?>" />
                                    <div class="case-dtl-col-img-label">
                                        <?php if ( !empty($image_1_image['title'])) : ?>
                                            <span><img src="<?php echo get_template_directory_uri(); ?>/images/Pointer.svg" alt="" title=""/></span>
                                            <label><?php echo esc_html( $image_1_image['title'] ); ?></label>
                                        <?php endif; ?>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; ?>
                    </div>
                </div>
            <?php endif; ?>
        </div>
    </div>
</section>
<?php else : ?>
    <?php if ( $image_1_images ) :  ?>
        <section class="single-column-image-cta <?php echo $class; ?> <?php echo $bg_class; ?> section default-padding remove-top-padding">
        <div class="section-inner">
        <div class="container">
            <div class="row">
                <?php foreach ( $image_1_images as $image_1_image ): ?>
                <div class="col-1">
                    <div class="cases-detail-img">
                        <img src="<?php echo esc_url( $image_1_image['url'] ); ?>" alt="<?php echo esc_attr( $image_1_image['alt'] ); ?>" title=""/>
                    </div>
                </div>
                <?php endforeach; ?>
            </div>
        </div>
        </div>
    </section>
    <?php endif; ?>
<?php endif; ?>