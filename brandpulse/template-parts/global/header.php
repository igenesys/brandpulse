<?php 

$darkHeader = "";

if (is_single()) {  $darkHeader = "dark-header-content"; }

if (get_the_ID()=='515' || get_the_ID()=='517' || get_the_ID()=='519') {  $darkHeader = "dark-header-content"; }

if (is_single()&&  get_post_type( get_the_ID() ) == 'vacancy') {  $darkHeader = ""; }

if (is_single()&&  get_post_type( get_the_ID() ) == 'cases') {  $darkHeader = ""; }

if(get_the_ID()=='382' || get_the_ID()=='1469' ){ $darkHeader = ""; }

if (is_404()) {  $darkHeader = "dark-header-content"; }

?>
<header class="site-header <?php echo $darkHeader; ?>">
        <div class="container">
          <div class="site-header-inner">
            <div class="header-row">
              <div class="logo">
                <a href="<?php echo home_url(); ?>">
                  <?php $white_logo = get_field( 'white_logo', 'option' ); ?>
                  <?php if ( $white_logo ) : ?>
                    <img class="white-logo" src="<?php echo esc_url( $white_logo['url'] ); ?>" alt="<?php echo esc_attr( $white_logo['alt'] ); ?>" />
                  <?php endif; ?>
                  
                  <?php $dark_logo = get_field( 'dark_logo', 'option' ); ?>
                  <?php if ( $dark_logo ) : ?>
                    <img class="dark-logo" src="<?php echo esc_url( $dark_logo['url'] ); ?>" alt="<?php echo esc_attr( $dark_logo['alt'] ); ?>" />
                  <?php endif; ?>
                </a>
              </div>
              <div class="header-rh">
                  <div class="menu-main">
                    <ul class="menu">
                      <li>
                        <?php $link = get_field( 'link', 'option' ); ?>
                        <?php if ( $link ) : ?>
                          <a href="<?php echo esc_url( $link['url'] ); ?>" target="<?php echo esc_attr( $link['target'] ); ?>"><?php echo esc_html( $link['title'] ); ?></a>
                        <?php endif; ?>
                      </li>
                    </ul>
                  </div>
                  <div class="menu-icon-cover">
                    <div class="desktop-md menu-text">
                      Menu
                    </div>
                    <div class="menu-icon">
                      <span></span>
                      <span></span>
                      <span></span>
                    </div>
                  </div>
              </div>
            </div>
          </div>
          <div class="menu-cover">
            <div class="menu-cover-inner">
              <div class="container">
                <div class="menu-inner-main">
                  <div class="menu-contact-and-list">
                    <div class="menu-contact-dtl">
                      <div class="menu-contact-inner">
                        <div class="menu-social-icon">
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
                        <div class="menu-contact-block">
                          <a href="mailto:<?php the_field( 'email', 'option' ); ?>"><?php the_field( 'email', 'option' ); ?></a><br>
                          <a href="tel:+<?php the_field( 'phone', 'option' ); ?>"><?php the_field( 'phone', 'option' ); ?></a>
                        </div>
                        <div class="menu-mail-link">
                          <span><img src="<?php echo get_template_directory_uri(); ?>/images/mail.svg" alt="" title=""/></span>
                          <?php the_field( 'content', 'option' ); ?>
                        </div>
                        <div class="menu-privacy-links">
                          <?php 
                            $defaults = array(
                              'theme_location'  => 'menu-2',
                              'container'       => '',
                              'menu_class'      => 'menu',
                              'items_wrap'      => '<ul class=menu-privacy-links-ul">%3$s</ul>',
                            );
                            wp_nav_menu( $defaults ); 
                          ?>
                        </div>
                      </div>
                    </div>
                    <div class="menu-list-cover">
                      <div class="menu-list-inner">
                        <?php 
                            $defaults = array(
                              'theme_location'  => 'menu-1',
                              'container'       => '',
                              'items_wrap'      => '<ul class=menu>%3$s</ul>',
                            );
                            wp_nav_menu( $defaults ); 
                        ?>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
    </header>