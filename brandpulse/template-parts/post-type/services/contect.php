<?php $select_contact_person = get_field( 'contact_person'); 
$cta_text = get_field( 'over_write_cta_text' ); ?>
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