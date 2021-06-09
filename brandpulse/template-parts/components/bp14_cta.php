<?php 
    $cta = get_sub_field( 'cta' ); 
    $cta_text = get_sub_field( 'over_write_cta_text' );
    $carouselID = uniqid();
?>
<?php if ( $cta ) : ?>
<?php 
    if($cta_text=="") {
      $cta_text=get_field( 'cta_text',$cta ); 
    } 
    
    $form_shortcode=get_field( 'form_shortcode',$cta ); 
    $contact_text=get_field( 'contact_text',$cta ); 

    $featured_img_url = get_the_post_thumbnail_url($cta,'full'); 
    if($featured_img_url){
        $featured_img = $featured_img_url;
    }else{
        $featured_img = get_template_directory_uri().'/images/susette.png';
    }
?>
<section class="light-gray-bg mail-section">
  <div class="container">
    <div class="container-780">
      <div class="mail-section-row mail-sec-caps-top">
        <div class="mail-sec-img">
            <span>
              <img src="<?php echo $featured_img_url; ?>" alt="<?php echo get_the_title($cta); ?>" title=""/>
            </span>
        </div>
        <div class="mail-sec-caps">
            <?php if ( !empty($cta_text) ) : ?>
                <span class="h1"><?php echo $cta_text;?></span>
            <?php endif; ?>
            <?php if ( !empty($form_shortcode) ) : ?>
          <a href="javascript:void(0);" class="btn" data-tab="adventure-<?php echo $carouselID;?>-form">Mail <?php echo get_the_title( $cta ); ?></a>
            <?php endif; ?>
        </div>
      </div>
        <?php if ( !empty($contact_text) ) : ?>
      <div class="mail-section-row mail-sec-caps-bottom">
        <div class="mail-sec-img">
        </div>
        <div class="mail-sec-caps">
          <p><?php echo $contact_text;?></p>
        </div>
      </div>
        <?php endif; ?>
    </div>
  </div>
</section>
<?php if ( !empty($form_shortcode) ) : ?>
<div class="services-inner-form" id="adventure-<?php echo $carouselID;?>-form">
<a href="javascript:void(0);" class="back-link close-link mobile-md"><svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="14.143px" height="14.141px" viewBox="0 0 14.143 14.141" enable-background="new 0 0 14.143 14.141" xml:space="preserve"><g><line fill="none" stroke="#FFFFFF" stroke-width="2" stroke-miterlimit="10" x1="0.707" y1="13.434" x2="13.436" y2="0.707"></line><line fill="none" stroke="#FFFFFF" stroke-width="2" stroke-miterlimit="10" x1="0.707" y1="0.707" x2="13.436" y2="13.434"></line></g></svg></a>
  <div class="d-table">
     <div class="d-table-cell">
        <div class="menu-inner">
          <div class="register-form">
            <div class="register-form-inner">
              <div class="register-form-title">
                <span class="hide-title h4">Stuur <?php echo get_the_title( $cta ); ?> een bericht</span>
                <a href="javascript:void(0);" class="back-link desktop-md">Sluiten</a>
              </div>
              <div class="register-form-caps-form">
                <div class="register-form-block">
                  <?php echo do_shortcode($form_shortcode);?>
                </div>
              </div>
            </div>
          </div>
        </div>
     </div>
  </div>
</div>
<?php endif; ?>
<?php endif; ?>