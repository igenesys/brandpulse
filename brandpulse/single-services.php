<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package brandpulse
 */

get_header();
while(have_posts()): the_post();
$image = get_the_post_thumbnail_url( $postID, 'full' );
$mobile_featured_image = get_field( 'mobile_featured_image' );
?>
<?php if ( get_field( '2_column_layout' ) == 1 ) : ?>
<div class="quickscan-main top-header-padding">
	<div class="container">
		<div class="quickscan-section-inner-cover">
            <img src="<?php echo get_template_directory_uri(); ?>/images/quick-Pattern.svg" alt="" title="" class="quickscan-pattern"/>
			<div class="quickscan-section-inner light-gray-bg">
				<div class="row">
					<div class="col-2">
							<label><?php the_field( 'title' ); ?></label>
							<?php the_field( 'hero_content' ); ?>
							<?php if ( have_rows( 'grid_icons' ) ) : ?>
							<div class="quickscan-icon-caps">
								<div class="row">
									<?php while ( have_rows( 'grid_icons' ) ) : the_row(); ?>
									<?php $icon = get_sub_field( 'icon' ); ?>
									<?php if ( $icon ) : ?>
									<div class="col-3">
										<span><img src="<?php echo esc_url( $icon['url'] ); ?>" alt="<?php echo esc_attr( $icon['alt'] ); ?>" title="<?php echo esc_attr( $icon['title'] ); ?>"/></span>
										<label><?php the_sub_field( 'title' ); ?></label>
									</div>
									<?php endif; ?>
									<?php endwhile; ?>
								</div>
							</div>
							<?php endif; ?>
						<?php the_content(); ?>
					</div>
					<div class="col-2">
						<div class="quickscan-form">
							<?php echo do_shortcode(get_field( 'form_shortcode' )); ?>
							<?php the_field( 'success_message' ); ?>
						</div>
					</div>
				</div>
            </div>
		</div>
	</div>
</div>
<?php else : ?>	
<div class="cases-detail-top-banner-section dark-label service-content-bg" style="background-image: url(<?php echo $image; ?>);">
	<div class="case-detail-mob-bg mobile-md" style="background-image: url('<?php echo esc_url( $mobile_featured_image['url'] ); ?>')"></div>
	<div class="cases-detail-title">
		<div class="container">
			<div class="container-980">
				<label><?php echo get_the_title(); ?></label>    
			</div>
		</div>
	</div>
</div>
<section class="cases-detail-top-up-section services-detail-top-up-section dark-blue-bg">
	<div class="container">
        <div class="container-980">
			<div class="cases-detail-top-up-row row">
				<div class="cases-detail-top-up-lh col-2">
				  <h1><?php the_field( 'title' ); ?></h1>
				  <?php the_field( 'hero_content' ); ?>
				</div>
				<div class="cases-detail-top-up-rh col-2">
					<div class="cases-detail-top-up-rh-inner white-bg">
						<div class="cases-detail-top-up-rh-row">
							<label><?php the_field( 'cta_title' ); ?></label>
						</div>
						<?php if(get_field( 'cta_content' )){ ?>
						<div class="cases-detail-top-up-rh-row">
							<?php the_field( 'cta_content' ); ?>
						</div>
						<?php } ?>
					</div>
				</div>
			</div>
        </div>
	</div>
</section>	
<?php endif; ?>
<section class="services-content-section">
  <div class="container">
	<div class="container-780">
		<?php if ( have_rows( 'page_builder' ) ): ?>
			<?php while ( have_rows( 'page_builder' ) ) : the_row(); ?>
				<?php if ( get_row_layout() == 'post_content' ) : ?>
					<?php the_sub_field( 'content' ); ?>
				<?php elseif ( get_row_layout() == 'image' ) : ?>
					<?php $post_image = get_sub_field( 'post_image' ); ?>
					<?php if ( $post_image ) : ?>
						<img src="<?php echo esc_url( $post_image['url'] ); ?>" alt="<?php echo esc_attr( $post_image['alt'] ); ?>" />
					<?php endif; ?>
				<?php elseif ( get_row_layout() == 'blockquote' ) : ?>
					<?php the_sub_field( 'testimonial' ); ?>
					<?php the_sub_field( 'author' ); ?>
				<?php elseif ( get_row_layout() == 'cta_box' ) : ?>
					<?php $link = get_sub_field( 'link' ); ?>
					<div class="dark-blue-bg services-details-dark-block">
					<?php the_sub_field( 'content' ); ?>
						<a class="btn btn-white" href="<?php echo esc_url( $link['url'] ); ?>" target="<?php echo esc_attr( $link['target'] ); ?>"><?php echo esc_html( $link['title'] ); ?></a>
					</div>
				<?php endif; ?>
			<?php endwhile; ?>
		<?php else: ?>
			<?php // no layouts found ?>
		<?php endif; ?>
	</div>
  </div>
</section>
<?php endwhile; ?>
<?php
get_template_part('template-parts/post-type/services/contect');
get_footer();
