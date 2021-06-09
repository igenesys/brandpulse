<?php
/**
 * The template for displaying 404 pages (not found)
 *
 * @link https://codex.wordpress.org/Creating_an_Error_404_Page
 *
 * @package brandpulse
 */

get_header();
?>
<div class="not-found-page-main top-header-padding">
      <div class="container">
        <div class="container-970">
          <div class="not-found-page-inner">
            <div class="row">
              <div class="label-404">
                <h1><?php the_field( 'title_404_page', 'option' ); ?></h1>
              </div>
              <div class="not-found-page-caps">
                <?php the_field( 'text_404_page', 'option' ); ?>
                <div class="btn-row-block">
					<?php if ( have_rows( 'quick_links_404_page', 'option' ) ) : ?>
					<?php while ( have_rows( 'quick_links_404_page', 'option' ) ) : the_row(); ?>
						<?php $link = get_sub_field( 'link' ); ?>
						<?php if ( $link ) : ?>
							<a class="btn btn-border" href="<?php echo esc_url( $link['url'] ); ?>" target="<?php echo esc_attr( $link['target'] ); ?>"><?php echo esc_html( $link['title'] ); ?></a><br/>
						<?php endif; ?>
					<?php endwhile; ?>
					<?php endif; ?>
				</div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <script src="https://unpkg.com/@lottiefiles/lottie-player@latest/dist/lottie-player.js"></script>
      <div class="for-desktop">
        <lottie-player src="<?php echo get_template_directory_uri(); ?>/json/pattern_404_page_desk.json"  background="transparent"  speed="1" autoplay></lottie-player>
      </div>
      <div class="for-mobile">
        <lottie-player src="<?php echo get_template_directory_uri(); ?>/json/pattern_404_page_mob.json"  background="transparent"  speed="1"  autoplay></lottie-player>
      </div>
</div>
<?php
get_footer();
