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
?>
<a href="<?php echo get_post_type_archive_link( 'vacancy' ); ?>" class="back-link back-link-dark news-back-link mobile-lg">Terug</a>
<section class="vacatures-title-section dark-blue-bg top-header-padding">
	<div class="vacatures-title-section-inner">
		<div class="container">
			<div class="vacatures-block-rel">
				<div class="back-link-outer desktop-lg">
					<a href="<?php echo get_post_type_archive_link( 'vacancy' ); ?>" class="back-link">Terug</a>
				</div>
				<div class="container-780">
					<?php $post_categories = get_the_terms( get_the_ID(), 'vacancy-tag' ); ?>
					<?php $array_term_string=array(); ?>
					<label>
						<?php 
							foreach($post_categories as $get_ps_cat){
								$array_term_string[]=$get_ps_cat->name;
							}
							$terms_string =implode(", ",$array_term_string);
						?>
					<?php echo $terms_string ; ?>
					</label>
					<h1><?php the_title(); ?></h1>
					<?php the_content(); ?>
				</div>
			</div>
		</div>
	</div>
</section>
  
<?php if ( have_rows( 'flexible_content' ) ): ?>
<section class="caps-section">
    <div class="container">
		<div class="container-inner">
			<div class="container-780">
			<?php while ( have_rows( 'flexible_content' ) ) : the_row(); ?>
				<?php if ( get_row_layout() == 'bp0_full_width_content' ) : ?>
						<?php the_sub_field( 'contact' ); ?>
				<?php elseif ( get_row_layout() == 'bp1_image_with_content' ) : ?>
					<?php $image = get_sub_field( 'image' ); ?>
					<div class="caps-two-col-section">
						<div class="row">
							<div class="col-6">
								<?php if ( $image ) : ?>
								<div class="caps-two-col-img">
									<img src="<?php echo esc_url( $image['url'] ); ?>" alt="<?php echo esc_attr( $image['alt'] ); ?>" title="<?php echo esc_attr( $image['title'] ); ?>"/>
								</div>
								<?php endif; ?>
							</div>
							<div class="col-6">
								<div class="caps-two-col-caps">
									<?php the_sub_field( 'text' ); ?>
								</div>
							</div>
						</div>
					</div>
				<?php endif; ?>
			<?php endwhile; ?>
			</div>
		</div>
    </div>
</section>
<?php endif; ?>
<?php $select_contact_person = get_field( 'select_contact_person' ); 
$cta_text = get_field( 'over_write_cta_text' );
?>
<?php if ( $select_contact_person ) : $post = $select_contact_person; ?>
<?php setup_postdata( $post ); ?> 
<?php $form_shortcode = get_field( 'form_shortcode',$post->ID ); ?>
<section class="light-gray-bg mail-section remove-bottom-margin">
	<div class="container">
		<div class="container-780">
			<div class="mail-section-row mail-sec-caps-top">
				<?php 
				$featured_img_url = get_the_post_thumbnail_url($post->ID,'full'); 
				if($featured_img_url){
					$featured_img = $featured_img_url;
				}else{
					$featured_img = get_template_directory_uri().'/images/susette.png';
				}
				?>
				<div class="mail-sec-img">
					<span><img src="<?php echo $featured_img; ?>" alt="" title=""/></span>
				</div>
				<?php 
					
					
					if($cta_text=="") {
						$cta_text= get_field( 'cta_text',$post->ID );
					  } 
				?>
				<div class="mail-sec-caps">
					<span class="h1"><?php echo $cta_text; ?></span>
					<?php if($form_shortcode){ ?><a href="javascript:void(0);" class="btn" data-tab="adventure-8-form">Solliciteren</a><?php } ?>
				</div>
			</div>
			<div class="mail-section-row mail-sec-caps-bottom">
				<div class="mail-sec-img"></div>
				<div class="mail-sec-caps">
					<p><?php the_field( 'contact_text',$post->ID ); ?></p>
				</div>
			</div>
		</div>
	</div>
</section>
<div class="services-inner-form" id="adventure-8-form">
    <a href="javascript:void(0);" class="back-link close-link mobile-md"><svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="14.143px" height="14.141px" viewBox="0 0 14.143 14.141" enable-background="new 0 0 14.143 14.141" xml:space="preserve"><g><line fill="none" stroke="#FFFFFF" stroke-width="2" stroke-miterlimit="10" x1="0.707" y1="13.434" x2="13.436" y2="0.707"/><line fill="none" stroke="#FFFFFF" stroke-width="2" stroke-miterlimit="10" x1="0.707" y1="0.707" x2="13.436" y2="13.434"/></g></svg></a>
    <div class="d-table">
		<div class="d-table-cell">
			<div class="menu-inner">
				<div class="register-form">
					<div class="register-form-inner">
						<div class="register-form-title">
							<span class="hide-title h4">Solliciteer bij <?php echo get_the_title($post->ID); ?></span>
							<a href="javascript:void(0);" class="back-link desktop-md">Sluiten</a>
						</div>
						<div class="register-form-caps-form">
							<div class="register-form-block">
								<?php echo do_shortcode($form_shortcode); ?>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
    </div>
</div>
<?php wp_reset_postdata(); ?>
<?php endif; ?>
<?php endwhile; ?>
<?php
/*get_template_part('template-parts/post-type/services/contect');*/
get_footer();
