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

while ( have_posts() ) : the_post(); ?> 
<section class="home-about-section dark-blue-bg subpage-top-caps top-header-padding">
	<div class="home-about-section-inner">
		<div class="container">
			<div class="container-980">
				<label><?php the_field( 'label_contact_info' ); ?></label>
				<div class="home-about-section-row">
					<div class="home-about-section-lh">
						<h1><?php the_field( 'title_contact_info' ); ?></h1>
					</div>
					<div class="home-about-section-rh">
						<?php the_field( 'text_contact_info' ); ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="contact-section">
	<div class="container">
		<div class="container-980">
			<div class="contact-section-inner">
				<div class="contact-section-lh">
					<div class="contact-section-lh-inner">
						<img src="<?php echo get_template_directory_uri(); ?>/images/contact-ring.svg" alt="" title="" class="contact-ring"/>
						<?php the_field( 'address_contact_info' ); ?>
						<ul class="social-icons">
						<?php 
							$facebook = get_field( 'facebook' ); 
							$instagram = get_field( 'instagram' ); 
							$linkedin = get_field( 'linkedin' );  ?>
							<?php if ( $facebook ) : ?><li><a href="<?php echo esc_url( $facebook['url'] ); ?>" target="<?php echo esc_attr( $facebook['target'] ); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/facebook-b.svg" alt="facebook" title="facebook"/></a></li><?php endif; ?>
							<?php if ( $instagram ) : ?><li><a href="<?php echo esc_url( $instagram['url'] ); ?>" target="<?php echo esc_attr( $instagram['target'] ); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/instagram-b.svg" alt="instagram" title="instagram"/></a></li><?php endif; ?>
							<?php if ( $linkedin ) : ?><li><a href="<?php echo esc_url( $linkedin['url'] ); ?>" target="<?php echo esc_attr( $linkedin['target'] ); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/linkedin-b.svg" alt="linkedin" title="linkedin"/></a></li><?php endif; ?>
						</ul>
					</div>
					<?php $map_image = get_field( 'map_image' ); ?>
					<?php $map_link = get_field( 'map_link' ); ?>
					<?php if ( $map_link ) : ?>
						<a href="<?php echo esc_url( $map_link['url'] ); ?>" target="<?php echo esc_attr( $map_link['target'] ); ?>" class="map-img"><img src="<?php echo esc_url( $map_image['url'] ); ?>" alt="<?php echo esc_attr( $map_image['alt'] ); ?>" /></a>
					<?php endif; ?>
				</div>
				<div class="contact-section-mid">
					<div class="register-form">
						<div class="register-form-inner">
							<div class="register-form-caps-form">
								<div class="register-form-block">
									<p>Bedankt voor je bericht! We nemen zo snel mogelijk contact met je op.</p>

									<p>Kun je niet wachten om Brandpulse te ontdekken? Bekijk onze cases!</p>

									<p><a class="btn btn-border" href="/cases/">Cases</a></p>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="contact-section-rh">
					<div class="register-popup-block pinned">
						<a href="javascript:;" class="close-icon"></a>
						<?php $image_newslatter = get_field( 'image_newslatter' ); ?>
						<div class="register-block-img">
							<?php if ( $image_newslatter ) : ?>
								<img src="<?php echo esc_url( $image_newslatter['url'] ); ?>" alt="<?php echo esc_attr( $image_newslatter['alt'] ); ?>" />
							<?php else : ?>
								<img src="<?php echo get_template_directory_uri(); ?>/images/register-block.jpg" alt="" title=""/>
							<?php endif; ?>
								<span><?php the_field( 'tittle_newslatter' ); ?></span>
						</div>
						<div class="register-block-caps">
							<?php the_field( 'text_newslatter' ); ?>
							<?php $link_newslatter = get_field( 'link_newslatter' ); ?>
							<?php if ( $link_newslatter ) : ?>
								<a class="btn" href="<?php echo esc_url( $link_newslatter['url'] ); ?>" target="<?php echo esc_attr( $link_newslatter['target'] ); ?>"><?php echo esc_html( $link_newslatter['title'] ); ?></a>
							<?php endif; ?>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<?php	endwhile; // End of the loop.?>
<script src="<?php echo get_template_directory_uri(); ?>/js/gsap.min.js"></script>
<script src="<?php echo get_template_directory_uri(); ?>/js/ScrollTrigger.min.js?v=6"></script>
<script>
gsap.registerPlugin(ScrollTrigger);

ScrollTrigger.create({
  trigger: ".pinned",
  start: "top bottom-=520",
  endTrigger: ".contact-section",
  end: "bottom bottom-=100",
  pin: true,
  pinSpacing: false
});
</script>

<?php 	

get_footer();
