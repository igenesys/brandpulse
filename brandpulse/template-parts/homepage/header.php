<?php $desktop_pattern = get_field( 'desktop_pattern' ); ?>
<?php $mobile_pattern = get_field( 'mobile_pattern' ); ?>
<?php $logo = get_field( 'logo' ); ?>
<?php $cta_1 = get_field( 'cta_1' ); ?>
<?php $cta_2 = get_field( 'cta_2' ); ?>
<section class="hero-section height-100vh dark-blue-bg">
  <div class="hero-section-inner-cover">
    <img src="<?php echo esc_url( $desktop_pattern['url'] ); ?>" alt="" title="" class="top-left-cornner-pattern desktop-md"/>
    <img src="<?php echo esc_url( $mobile_pattern['url'] ); ?>" alt="" title="" class="top-left-cornner-pattern mobile-md"/>
    <div class="container">
      <div class="hero-section-inner height-100vh">
        <div class="row">
          <div class="logo-block flex-center-center">
            <div class="blue_round">
              <div class="logo">
                <a href="#">
                  <?php /*<img src="<?php echo esc_url( $logo['url'] ); ?>" alt="<?php echo esc_attr( $logo['alt'] ); ?>" />*/ ?>
                  <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
                  <lottie-player src="wp-content/themes/brandpulse/images/logo_animation_bp_home.json"  background="transparent"  speed="1"  style="width: 100%; height: 100%;"   autoplay></lottie-player>
                </a>
              </div>
            </div>
            <a class="scroll-arrow" href="#home-caps-block"></a>
          </div>   
          <div class="home-caps-block" id="home-caps-block">
            <div class="home-caps-block-inner">
                <h1 data-aos="fade-left" data-aos-duration="1000" data-aos-delay="100" ><?php the_field( 'title' ); ?></h1>
                <?php the_field( 'text' ); ?>
                <span class="case-link aos-init aos-animate" data-aos="fade-left" data-aos-duration="1000" data-aos-delay="300">
                  <?php if ( $cta_1 ) : ?>
                    <a class="btn" href="<?php echo esc_url( $cta_1['url'] ); ?>" target="<?php echo esc_attr( $cta_1['target'] ); ?>"><?php echo esc_html( $cta_1['title'] ); ?></a>
                  <?php endif; ?>
                  <?php if ( $cta_2 ) : ?>
                    <a class="btn" href="<?php echo esc_url( $cta_2['url'] ); ?>" target="<?php echo esc_attr( $cta_2['target'] ); ?>"><?php echo esc_html( $cta_2['title'] ); ?></a>
                  <?php endif; ?>
                </span>
            </div>
            <a href="javascript:void(0);" class="scroll-down"><img src="<?php echo get_template_directory_uri(); ?>/images/down-arrow-white.svg" alt="" title=""/></a>
          </div>       
        </div>  
      </div>
    </div>
  </div>
</section>