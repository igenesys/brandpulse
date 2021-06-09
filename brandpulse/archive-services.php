<?php
/**
 * The template for displaying all pages
 *
 * This is the template that displays all pages by default.
 * Please note that this is the WordPress construct of pages
 * and that other 'pages' on your WordPress site may use a
 * different template.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package brandpulse
 */

get_header();
$block_1 = get_field( 'block_1', 'option' );
$block_2 = get_field( 'block_2', 'option' );
$block_3 = get_field( 'block_3', 'option' );
$block_4 = get_field( 'block_4', 'option' );
?>
<section class="home-about-section dark-blue-bg subpage-top-caps top-header-padding">
  <div class="home-about-section-inner">
    <div class="container">
      <div class="container-980">
        <label><?php the_field( 'tag_line_text', 'option' ); ?></label>
        <div class="home-about-section-row">
          <div class="home-about-section-lh">
            <h1><?php the_field( 'title_text', 'option' ); ?></h1>
          </div>
          <div class="home-about-section-rh">
            <?php the_field( 'short_content_text', 'option' ); ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="services-list-section">
  <div class="container">
    <div class="row">
      <div class="col-4">
        <div class="services-block">
          <div class="services-block-icon">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20">
              <path id="Shape" d="M10,20a10,10,0,1,1,7.071-2.929A10.011,10.011,0,0,1,10,20ZM10,3.489A6.511,6.511,0,1,0,16.512,10,6.52,6.52,0,0,0,10,3.489Z" transform="translate(-0.001)" fill="#e03c31"/>
            </svg>
          </div>
          <div class="services-name">
            <span class="h4"><?php echo esc_html( $block_1['title'] ); ?></span>
            <a href="#" class="services-link-arrow">
              <svg xmlns="http://www.w3.org/2000/svg" width="7.121" height="11.414" viewBox="0 0 7.121 11.414">
                <g id="Arrow" transform="translate(0.707 10.707) rotate(-90)">
                  <g id="Arrow-2" data-name="Arrow">
                    <path id="Arrow-3" data-name="Arrow" d="M5,10,0,5,5,0" transform="translate(0 5) rotate(-90)" fill="none" stroke="#050a23" stroke-miterlimit="0" stroke-width="2"/>
                  </g>
                </g>
              </svg>                  
            </a>
          </div>
          <a href="<?php echo esc_url( $block_1['url'] ); ?>" target="<?php echo esc_attr( $block_1['target'] ); ?>" class="overlay-link"></a>
        </div>
      </div>
      <div class="col-4">
        <div class="services-block">
          <div class="services-block-icon">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="10" viewBox="0 0 20 10">
              <path id="Path" d="M10,6.512A6.5,6.5,0,0,1,3.488,0H0A10,10,0,0,0,20,0H16.512A6.5,6.5,0,0,1,10,6.512Z" fill="#e03c31"/>
            </svg>                
          </div>
          <div class="services-name">
            <span class="h4"><?php echo esc_html( $block_2['title'] ); ?></span>
            <a href="#" class="services-link-arrow">
              <svg xmlns="http://www.w3.org/2000/svg" width="7.121" height="11.414" viewBox="0 0 7.121 11.414">
                <g id="Arrow" transform="translate(0.707 10.707) rotate(-90)">
                  <g id="Arrow-2" data-name="Arrow">
                    <path id="Arrow-3" data-name="Arrow" d="M5,10,0,5,5,0" transform="translate(0 5) rotate(-90)" fill="none" stroke="#050a23" stroke-miterlimit="0" stroke-width="2"/>
                  </g>
                </g>
              </svg>                  
            </a>
          </div>
          <a href="<?php echo esc_url( $block_2['url'] ); ?>" target="<?php echo esc_attr( $block_2['target'] ); ?>" class="overlay-link"></a>
        </div>
      </div>
      <div class="col-4">
        <div class="services-block">
          <div class="services-block-icon">
            <svg xmlns="http://www.w3.org/2000/svg" width="20" height="20" viewBox="0 0 20 20">
              <path id="Path" d="M10,16.512A6.512,6.512,0,1,1,10,3.488V0A10,10,0,1,0,20,10H16.512A6.576,6.576,0,0,1,10,16.512Z" fill="#e03c31"/>
            </svg>
          </div>
          <div class="services-name">
            <span class="h4"><?php echo esc_html( $block_3['title'] ); ?></span>
            <a href="#" class="services-link-arrow">
              <svg xmlns="http://www.w3.org/2000/svg" width="7.121" height="11.414" viewBox="0 0 7.121 11.414">
                <g id="Arrow" transform="translate(0.707 10.707) rotate(-90)">
                  <g id="Arrow-2" data-name="Arrow">
                    <path id="Arrow-3" data-name="Arrow" d="M5,10,0,5,5,0" transform="translate(0 5) rotate(-90)" fill="none" stroke="#050a23" stroke-miterlimit="0" stroke-width="2"/>
                  </g>
                </g>
              </svg>                  
            </a>
          </div>
          <a href="<?php echo esc_url( $block_3['url'] ); ?>" target="<?php echo esc_attr( $block_3['target'] ); ?>" class="overlay-link"></a>
        </div>
      </div>
      <div class="col-4">
        <div class="services-block pink-bg">
          <div class="services-block-icon">
            <svg id="Group_2" data-name="Group 2" xmlns="http://www.w3.org/2000/svg" width="21.24" height="19.642" viewBox="0 0 21.24 19.642">
              <path id="Path" d="M0,0V3.426a6.395,6.395,0,0,1,0,12.79v3.426A9.821,9.821,0,0,0,0,0Z" transform="translate(11.42 0)" fill="#E03C31"/>
              <path id="Path-2" data-name="Path" d="M9.821,19.642V16.216a6.395,6.395,0,0,1,0-12.79V0a9.821,9.821,0,0,0,0,19.642Z" transform="translate(0 0)" fill="#E03C31"/>
            </svg>                
          </div>
          <div class="services-name">
            <span class="h4"><?php echo esc_html( $block_4['title'] ); ?></span>
            <a href="#" class="services-link-arrow">
              <svg xmlns="http://www.w3.org/2000/svg" width="7.121" height="11.414" viewBox="0 0 7.121 11.414">
                <g id="Arrow" transform="translate(0.707 10.707) rotate(-90)">
                  <g id="Arrow-2" data-name="Arrow">
                    <path id="Arrow-3" data-name="Arrow" d="M5,10,0,5,5,0" transform="translate(0 5) rotate(-90)" fill="none" stroke="#050a23" stroke-miterlimit="0" stroke-width="2"/>
                  </g>
                </g>
              </svg>                  
            </a>
          </div>
          <a href="<?php echo esc_url( $block_4['url'] ); ?>" target="<?php echo esc_attr( $block_4['target'] ); ?>" class="overlay-link"></a>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="services-section-2">
  <div class="container">
    <div class="container-980">
      <div class="row justify-end">
        <div class="col-70-pr">
          <?php the_field( 'service_content', 'option' ); ?>
        </div>
      </div>
    </div>
  </div>
</section>
<?php get_footer();