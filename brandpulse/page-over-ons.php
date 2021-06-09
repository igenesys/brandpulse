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

while ( have_posts() ) : the_post(); 	endwhile; // End of the loop.?>
	
<?php 
	$banner_image = get_field( 'banner_image' );
	if ( $banner_image ) :
		$banner_image_url =	esc_url( $banner_image['url'] );
		$banner_image_alt =	esc_attr( $banner_image['alt'] );
		$banner_image_title = esc_attr( $banner_image['title'] );
	else :
		$banner_image_url =	get_template_directory_uri().'/images/over.jpg';
		$banner_image_alt =	'';
		$banner_image_title = '';
	endif;
?>
<section class="over-top-two-col dark-blue-bg top-header-padding">
	<div class="over-top-two-col-inner">
		<div class="container">
			<div class="row">
				<div class="col-6">
					<div class="over-top-two-col-img">
						<img src="<?php echo $banner_image_url; ?>" alt="<?php echo $banner_image_alt; ?>" title="<?php echo $banner_image_title; ?>"/>
					</div>
				</div>
				<div class="col-6">
					<div class="over-top-tow-col-caps">
						<?php the_field( 'banner_text' ); ?>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>

<?php $select_team = get_field( 'select_team' ); ?>
<div class="over-ons-candidate" id="over-ons-candidate">
    <div class="container">
	<?php 
	$k=1;
	if ( $select_team ) : ?>	
		<div class="over-ons-candidate-row">
			<?php  foreach ( $select_team as $post ) :  
			if($k==3){ echo '</div><div class="over-ons-candidate-row justify-center">'; } 
			if($k==6){ echo '</div><div class="over-ons-candidate-row">'; } 
			if($k==10){ echo '</div><div class="over-ons-candidate-row justify-center">'; } 
			if($k==13){ echo '</div><div class="over-ons-candidate-row">'; } 
			setup_postdata( $post ); ?>
			<div class="over-ons-block">
				<div class="over-candimg">
					<?php 
						
						$featured_img_url = get_the_post_thumbnail_url($post->ID,'full'); 
						if($featured_img_url){
							$featured_img = $featured_img_url;
						}else{
							$featured_img = get_template_directory_uri().'/images/susette.png';
						}
					?>
					<img src="<?php echo $featured_img ; ?>" alt="<?php echo get_the_title($post->ID); ?>" title="<?php echo get_the_title($post->ID); ?>" >
				</div>
				<div class="over-candcontent">
					<label><?php echo get_the_title($post->ID); ?></label>
					<p><?php the_field( 'designation',$post->ID ); ?></p>
				</div>
				
				<?php $page_link_to = get_field( 'page_link_to' ); ?>
				<?php if ( $page_link_to ) : ?>
					<a href="<?php echo esc_url( $page_link_to['url'] ); ?>" class="overlay-link team-caps-btn" target="<?php echo esc_attr( $page_link_to['target'] ); ?>"></a>
				
				<?php else: ?>
				
					<a href="javascript:void(0);" class="overlay-link team-caps-btn" data-tab="over-form-<?php echo $k;?>"></a>
					<div class="team-caps-block" id="over-dtl-7">
						<div class="team-caps-block-inner">
							<label><?php echo get_the_title($post->ID); ?></label>
							<p><?php the_field( 'introduction',$post->ID ); ?></p>
						</div>
					</div>
				<?php endif; ?>
				
				
			</div>
			<?php if($k==15){$k=1;}else{$k=$k+1;}  endforeach; ?>
			<?php wp_reset_postdata(); ?>
		</div>
		<div class="over-ons-candidate-row over-ons-candidate-mobile-row">
			<?php  foreach ( $select_team as $post ) :  
			setup_postdata( $post ); ?>
			<div class="over-ons-block">
				<div class="over-candimg">
					<?php 
						
						$featured_img_url = get_the_post_thumbnail_url($post->ID,'full'); 
						if($featured_img_url){
							$featured_img = $featured_img_url;
						}else{
							$featured_img = get_template_directory_uri().'/images/susette.png';
						}
					?>
					<img src="<?php echo $featured_img ; ?>" alt="<?php echo get_the_title($post->ID); ?>" title="<?php echo get_the_title($post->ID); ?>" >
				</div>
				<div class="over-candcontent">
					<label><?php echo get_the_title($post->ID); ?></label>
					<p><?php the_field( 'designation',$post->ID ); ?></p>
				</div>
				
				<?php $page_link_to = get_field( 'page_link_to' ); ?>
				<?php if ( $page_link_to ) : ?>
					<a href="<?php echo esc_url( $page_link_to['url'] ); ?>" class="overlay-link team-caps-btn" target="<?php echo esc_attr( $page_link_to['target'] ); ?>"></a>
				
				<?php else: ?>
				
					<a href="javascript:void(0);" class="overlay-link team-caps-btn" data-tab="over-form-<?php echo $k;?>"></a>
					<div class="team-caps-block" id="over-dtl-7">
						<div class="team-caps-block-inner">
							<label><?php echo get_the_title($post->ID); ?></label>
							<p><?php the_field( 'introduction',$post->ID ); ?></p>
						</div>
					</div>
				<?php endif; ?>
				
				
			</div>
			<?php  endforeach; ?>
			<?php wp_reset_postdata(); ?>
		</div>
	<?php endif; ?>  
	</div>
</div>
  
<?php $full_width_image = get_field( 'full_width_image' ); ?>
<?php if ( $full_width_image ) : ?>
	<section class="over-section-img black-bottom-bg">
		<div class="container">
			<img src="<?php echo esc_url( $full_width_image['url'] ); ?>" alt="<?php echo esc_attr( $full_width_image['alt'] ); ?>" />
		</div>
	</section>
<?php endif; ?>
	
	
<?php if ( have_rows( 'content_text' ) ) : ?>
<?php while ( have_rows( 'content_text' ) ) : the_row(); ?>
<section class="over-caps-secton <?php the_sub_field( 'background_color' ); ?>">
	<div class="container">
		<div class="container-780">
			<?php the_sub_field( 'text' ); ?>
		</div>
    </div>
</section>
<?php endwhile; ?>
<?php endif; ?>

<?php if ( have_rows( 'add_partners_logo' ) ) : ?>
	<section class="partners-logos-section dark-blue-bg">
		<div class="container">
			<?php while ( have_rows( 'add_partners_logo' ) ) : the_row(); ?>
			<div class="row">
				<div class="col-3">
				  <span class="h1"><?php the_sub_field( 'title_partners_logo' ); ?></span>
				</div>
				<?php if ( have_rows( 'add_logos' ) ) : ?>
				<div class="col-2-5">
					<ul class="brand-logos">
					<?php while ( have_rows( 'add_logos' ) ) : the_row(); ?>
						<?php $logo = get_sub_field( 'logo' ); ?>
						<?php $link = get_sub_field( 'link' ); ?>
						<?php if ( $link ) : ?>
							<li><a href="<?php echo esc_url( $link['url'] ); ?>" target="<?php echo esc_attr( $link['target'] ); ?>"><img src="<?php echo esc_url( $logo['url'] ); ?>" alt="<?php echo esc_attr( $logo['alt'] ); ?>" /><?php echo esc_html( $link['title'] ); ?></a></li>
						<?php else: ?>
							<li><img src="<?php echo esc_url( $logo['url'] ); ?>" alt="<?php echo esc_attr( $logo['alt'] ); ?>" /><?php echo esc_html( $link['title'] ); ?></li>
						<?php endif; ?>
					<?php endwhile; ?>
					</ul>
				</div>
				<?php endif; ?>
			</div>
			<?php endwhile; ?>
		</div>
	</section>
<?php endif; ?>
 
  
<?php $section_title = get_field( 'section_title' ); ?>  
<?php $select_cases = get_field( 'select_cases' ); ?>
<?php if ( $select_cases ) : ?>  
<section class="over-cases-section cases-list-section">
    <div class="container">
		<span class="h1"><?php echo $section_title; ?></span>
		<div class="row">
			<?php foreach ( $select_cases as $post ) :  ?>
			<?php setup_postdata( $post ); ?>
			<div class="col-2">
				<div class="case-list-block">
					<?php 
						$featured_img_url = get_the_post_thumbnail_url($post->ID,'full'); 
						if($featured_img_url){
							$featured_img = $featured_img_url;
						}else{
							$featured_img = get_template_directory_uri().'/images/Moeders-voor-moeders.jpg';
						}
					?>
					<div class="case-list-img" style="background-image: url(<?php echo $featured_img_url; ?>);"></div>
					<div class="case-list-caps">
						<?php $post_categories = get_the_terms( $post->ID, 'cases-tag' ); ?>
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
						<span class="h4"><?php the_title(); ?></span>
						<a href="<?php the_permalink(); ?>" class="btn btn-border">Check deze case</a>
					</div>
					<a href="<?php the_permalink(); ?>" class="overlay-link"></a>
				</div>
			</div>
			<?php endforeach; ?>
			<?php wp_reset_postdata(); ?>
		</div>
    </div>
</section>
<?php endif; ?>
<?php 	

get_footer();
