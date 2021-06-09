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

$queried_object = get_queried_object();
$term_id = $queried_object->term_id;

$taxonomies = get_terms( array(
        'taxonomy' => 'cases-type',
        'hide_empty' => true,
    ));
?>
<section class="home-cases-section cases-list-section">
      <div class="container">
      <?php if ( !empty($taxonomies) ) : ?>
        <div class="cases-filter">
          <div class="cases-filter-label">
            <p>Ik wil meer weten over</p>
            <select id="taxonomy" name="taxonomy">
              <option value="<?php echo get_post_type_archive_link( 'cases' ); ?>">alles</option>
                <?php foreach( $taxonomies as $taxonomy ) { ?>
                    <option value="<?php echo get_term_link( $taxonomy);?>" <?php if($term_id==$taxonomy->term_id){ ?> selected <?php } ?>><?php echo $taxonomy->name;?></option>
                <?php } ?>
            </select>
          </div>
        </div>
      <?php endif;?>
          
        <div class="row">
            <?php 
            wp_reset_query();
$args = array(
			'post_type'              => array( 'cases' ),
			'post_status'            => array( 'Publish' ),
			'posts_per_page'         => -1,
            'tax_query' => array(
                array(
                    'taxonomy' => 'cases-type',
                    'field' => 'term_id',
                    'terms' => $term_id
                )
            )
		);
            $query = new WP_Query( $args );
                while ( $query->have_posts() ) : $query->the_post();
                    
                    $term_obj_list = get_the_terms( get_the_ID(), 'cases-tag' );
                    $terms_string = join(', ', wp_list_pluck($term_obj_list, 'name'));
                    $featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full'); 
                    if(empty($featured_img_url)){
                        $featured_img_url=get_template_directory_uri().'/images/anwb.jpg';
                    }
            ?>
                  <div class="col-2">
                    <div class="case-list-block">
                        <?php if(!empty($featured_img_url)): ?>
                      <div class="case-list-img" style="background-image: url(<?php echo $featured_img_url; ?>);">
                      </div>
                        <?php endif; ?>
                      <div class="case-list-caps">
                        <?php if(!empty($terms_string)): ?>
                            <label><?php echo $terms_string;?></label>
                        <?php endif; ?>
                        <h4><?php the_title();?></h4>
                        <a href="<?php the_permalink();?>" class="btn">Check deze case</a>
                      </div>
                      <a href="<?php the_permalink();?>" class="overlay-link"></a>
                    </div>
                  </div>
            <?php endwhile; 
            wp_reset_query();
            ?>
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
				<div class="mail-sec-caps">
					<h1><?php the_field( 'cta_text',$post->ID ); ?></h1>
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
							<h4 class="hide-title">Stuur <?php echo get_the_title($post->ID); ?> een bericht </h4>
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