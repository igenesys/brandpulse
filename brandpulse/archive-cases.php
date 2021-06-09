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
get_template_part('template-parts/archive/cases/header');  

$taxonomies = get_terms( array(
        'taxonomy' => 'cases-type',
        'hide_empty' => true,
    ));
?>
<section class="home-cases-section cases-list-section">
      <div class="container">
        <div class="cases-filter">
			<?php if ( !empty($taxonomies) ) : ?>
				<div class="cases-filter-label">
					<p>Ik wil meer weten over</p>
					<select id="taxonomy" name="taxonomy">
					<option value="<?php echo get_post_type_archive_link( 'cases' ); ?>">alles</option>
						<?php foreach( $taxonomies as $taxonomy ) { ?>
							<option value="<?php echo get_term_link( $taxonomy);?>"><?php echo $taxonomy->name;?></option>
						<?php } ?>
					</select>
				</div>
			<?php endif;?>
        </div>
        <div class="row">


		<?php if ( have_rows( 'case_listing_layout', 'option' ) ): ?>

			<?php while ( have_rows( 'case_listing_layout', 'option' ) ) : the_row(); ?>

				
				
				<?php if ( get_row_layout() == '2_column_case' ) : ?>
					<?php $case_1 = get_sub_field( 'case_1' ); ?>
					<?php $image_1 = get_the_post_thumbnail_url($case_1, 'full' ); ?>
					<?php $tag_1 = get_the_terms( $case_1, 'cases-tag' ); ?>
						<?php if ( $case_1 ) : ?>
							<div class="col-2">
								<div class="case-list-block">
								<div class="case-list-img" style="background-image: url('<?php echo $image_1; ?>');">
								</div>
								<div class="case-list-caps">
									<label><?php echo $tag_1[0]->name; ?></label>
									<span class="h4"><?php echo get_the_title( $case_1 ); ?></span>
									<a href="<?php echo get_permalink( $case_1 ); ?>" class="btn">Check deze case</a>
								</div>
								<a href="<?php echo get_permalink( $case_1 ); ?>" class="overlay-link"></a>
								</div>
							</div>
						<?php endif; ?>
					<?php $case_2 = get_sub_field( 'case_2' ); ?>
					<?php $image_2 = get_the_post_thumbnail_url($case_2, 'full' ); ?>
					<?php $tag_2 = get_the_terms( $case_2, 'cases-tag' ); ?>
						<?php if ( $case_2 ) : ?>	
							<div class="col-2">
								<div class="case-list-block">
								<div class="case-list-img" style="background-image: url('<?php echo $image_2; ?>');">
								</div>
								<div class="case-list-caps">
									<label><?php echo $tag_2[0]->name; ?></label>
									<span class="h4"><?php echo get_the_title( $case_2 ); ?></span>
									<a href="<?php echo get_permalink( $case_2 ); ?>" class="btn">Check deze case</a>
								</div>
								<a href="<?php echo get_permalink( $case_2 ); ?>" class="overlay-link"></a>
								</div>
							</div>
						<?php endif; ?>

				<?php elseif ( get_row_layout() == '1_column_2_column' ) : ?>

					<div class="col-1">
						<div class="row">
						<?php $case_3 = get_sub_field( 'case_3' ); ?>
						<?php $image_3 = get_the_post_thumbnail_url($case_3, 'full' ); ?>
						<?php $tag_3 = get_the_terms( $case_3, 'cases-tag' ); ?>
							<?php if ( $case_3 ) : ?>
								<div class="col-2-5">
									<div class="case-list-block">
									<div class="case-list-img" style="background-image: url('<?php echo $image_3; ?>');">
									</div>
									<div class="case-list-caps">
										<label><?php echo $tag_3[0]->name; ?></label>
										<span class="h4"><?php echo get_the_title( $case_3 ); ?></span>
										<a href="<?php echo get_permalink( $case_3 ); ?>" class="btn">Check deze case</a>
									</div>
									<a href="<?php echo get_permalink( $case_3 ); ?>" class="overlay-link"></a>
									</div>
								</div>
							<?php endif; ?>
						<div class="col-3">
							<div class="light-gray-bg cases-two-row-box">

								<?php $case_4 = get_sub_field( 'case_4' ); ?>
								<?php $image_4 = get_the_post_thumbnail_url($case_4, 'full' ); ?>
								<?php $tag_4 = get_the_terms( $case_4, 'cases-tag' ); ?>
								<?php if ( $case_4 ) : ?>

									<div class="case-list-block">
										<div class="case-list-caps">
											<label><?php echo $tag_4[0]->name; ?></label>
											<span class="h4"><?php echo get_the_title( $case_4 ); ?></span>
											<a href="<?php echo get_permalink( $case_4 ); ?>" class="btn btn-border btn-border-blue">Check deze case</a>
										</div>
										<a href="<?php echo get_permalink( $case_4 ); ?>" class="overlay-link"></a>
									</div>
								<?php endif; ?>

								<?php $case_5 = get_sub_field( 'case_5' ); ?>
								<?php $image_5 = get_the_post_thumbnail_url($case_5, 'full' ); ?>
								<?php $tag_5 = get_the_terms( $case_5, 'cases-tag' ); ?>
								<?php if ( $case_5 ) : ?>
									<div class="case-list-block">
										<div class="case-list-caps">
										<label><?php echo $tag_5[0]->name; ?></label>
										<span class="h4"><?php echo get_the_title( $case_5 ); ?></span>
										<a href="<?php echo get_permalink( $case_5 ); ?>" class="btn btn-border btn-border-blue">Check deze case</a>
										</div>
										<a href="<?php echo get_permalink( $case_5 ); ?>" class="overlay-link"></a>
									</div>
								<?php endif; ?>


							</div>
						</div>

						</div>
					</div>

				<?php endif; ?>

			<?php endwhile; ?>

		<?php endif; ?>
          



          




          
          
          

          
        </div>
      </div>
    </section>
    
<?php $select_contact_person = get_field( 'select_contact_person', 'option' ); ?>
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
					$featured_img = get_template_directory_uri().'/<?php echo get_template_directory_uri(); ?>/images/susette.png';
				}
				?>
				<div class="mail-sec-img">
					<span><img src="<?php echo $featured_img; ?>" alt="" title=""/></span>
				</div>
				<?php 
					
					$cta_text = get_field( 'over_write_cta_text', 'option' );
					if($cta_text=="") {
						$cta_text= get_field( 'cta_text',$post->ID );
					  } 
				?>
				<div class="mail-sec-caps">
					<span class="h1"><?php echo $cta_text; ?></span>
					<?php if($form_shortcode){ ?><a href="javascript:void(0);" class="btn" data-tab="adventure-8-form">Mail <?php echo get_the_title($post->ID); ?></a><?php } ?>
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
							<span class="hide-title h4">Stuur <?php echo get_the_title($post->ID); ?> een bericht </span>
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
<script type="text/javascript">
jQuery(document).ready(function($) {
    $(document).on('change', '#taxonomy', function(event){
        window.location.href=$(this).val();
    });
});
</script>
<?php get_footer();