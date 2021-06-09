<footer class="site-footer dark-blue-bg">
        <div class="container">
          <div class="footer-row">
            <div class="footer-lh">
                <?php $footer_logo = get_field( 'footer_logo', 'option' ); ?>
                <?php if ( $footer_logo ) : ?>
                  <div class="footer-logo">
                    <img src="<?php echo esc_url( $footer_logo['url'] ); ?>" alt="<?php echo esc_attr( $footer_logo['alt'] ); ?>" />
                  </div>
                <?php endif; ?>
              <div class="footer-social">
                <ul class="social-icons">
                  <?php $facebook = get_field( 'facebook', 'option' ); ?>
                    <?php if ( $facebook ) : ?>
                      <li>
                        <a href="<?php echo esc_url( $facebook['url'] ); ?>" target="<?php echo esc_attr( $facebook['target'] ); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/facebook.svg" alt="<?php echo esc_html( $facebook['title'] ); ?>" title="<?php echo esc_html( $facebook['title'] ); ?>"/></a>
                      </li>
                    <?php endif; ?>
                    <?php $instagram = get_field( 'instagram', 'option' ); ?>
                    <?php if ( $instagram ) : ?>
                      <li>
                        <a href="<?php echo esc_url( $instagram['url'] ); ?>" target="<?php echo esc_attr( $instagram['target'] ); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/instagram.svg" alt="<?php echo esc_html( $instagram['title'] ); ?>" title="<?php echo esc_html( $instagram['title'] ); ?>"/></a>
                      </li>
                    <?php endif; ?>
                    <?php $linkedin = get_field( 'linkedin', 'option' ); ?>
                    <?php if ( $linkedin ) : ?>
                      <li>
                        <a href="<?php echo esc_url( $linkedin['url'] ); ?>" target="<?php echo esc_attr( $linkedin['target'] ); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/linkedin.svg" alt="<?php echo esc_html( $linkedin['title'] ); ?>" title="<?php echo esc_html( $linkedin['title'] ); ?>"/></a>
                      </li>
                      <?php endif; ?>
                </ul>
              </div>
            </div>
            <div class="footer-rh">
              <div class="footer-menu">
                  <?php 
                    $defaults = array(
                      'theme_location'  => 'menu-3',
                      'container'       => '',
                      'menu_class'      => '',
                      'items_wrap'      => '<ul class="footer-menu-ul">%3$s</ul>',
                    );
                    wp_nav_menu( $defaults ); 
                  ?>
                  </div>
              <div class="footer-contact-dtl">
                <div class="footer-contact-lh">
                  <p><?php the_field( 'address_site', 'option' ); ?></p>
                  <p><a href="mailto:<?php the_field( 'email', 'option' ); ?>"><?php the_field( 'email', 'option' ); ?></a><br>
                    <a href="tel:+<?php the_field( 'phone', 'option' ); ?>"><?php the_field( 'phone', 'option' ); ?></a><br><br>
                    <?php the_field( 'footer_number', 'option' ); ?></p>
                </div>
              <?php $title_foo_wh=get_field( 'title_foo_wh', 'option' ); ?>
              <?php $text_foo_wh=get_field( 'text_foo_wh', 'option' ); ?>
              <?php $button_foo_wh = get_field( 'button_foo_wh', 'option' ); ?>
                  <?php if ( !empty($title_foo_wh) || !empty($text_foo_wh) || $button_foo_wh ) : ?>
                <div class="footer-contact-rh">
                  <div class="register-block white-bg">
                      <?php if ( !empty($title_foo_wh)) : ?>
                        <span class="h4"><?php the_field( 'title_foo_wh', 'option' ); ?></span>
                      <?php endif; ?>
                    <?php the_field( 'text_foo_wh', 'option' ); ?>
                      <?php if ( $button_foo_wh ) : ?>
                        <a class="btn" href="<?php echo esc_url( $button_foo_wh['url'] ); ?>" target="<?php echo esc_attr( $button_foo_wh['target'] ); ?>"><?php echo esc_html( $button_foo_wh['title'] ); ?></a>
                    <?php endif; ?>
                  </div>
                </div>
                  <?php endif; ?>
              </div>
            </div>
          </div>
          <div class="footer-copy-row">
            <div class="footer-copy">© <?php echo date("Y");?> Brandpulse | All Rights Reserved</div>
            <div class="footer-privacy-links">
                <?php 
                    $defaults = array(
                      'theme_location'  => 'menu-2',
                      'container'       => '',
                      'menu_class'      => '',
                      'items_wrap'      => '<ul class="footer-privacy-links-ul">%3$s</ul>',
                    );
                    wp_nav_menu( $defaults ); 
                  ?>
            </div>
          </div>
        </div>
    </footer>