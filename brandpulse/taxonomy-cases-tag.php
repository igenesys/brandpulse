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
        'taxonomy' => 'cases-tag',
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
                    'taxonomy' => 'cases-tag',
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
    <section class="light-gray-bg mail-section remove-bottom-margin">
      <div class="container">
        <div class="container-780">
          <div class="mail-section-row mail-sec-caps-top">
            <div class="mail-sec-img">
              <span><img src="<?php echo get_template_directory_uri(); ?>/images/robbert.png" alt="" title=""/></span>
            </div>
            <div class="mail-sec-caps">
              <h1>Klaar om ook mooi werk te maken?</h1>
              <a href="javascript:void(0);" class="btn" data-tab="adventure-8-form">Mail Robbert</a>
            </div>
          </div>
          <div class="mail-section-row mail-sec-caps-bottom">
            <div class="mail-sec-img">
            </div>
            <div class="mail-sec-caps">
              <p>Liever bellen? Dat kan ook!<br>+31 85 210 60 44</p>
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
                        <h4>Stuur Robbert een bericht</h4>
                        <a href="javascript:void(0);" class="back-link desktop-md">Sluiten</a>
                     </div>
                     <div class="register-form-caps-form">
                        <div class="register-form-block">
                           <div class="gf_browser_chrome gform_wrapper" id="gform_wrapper_9">
                              <div id="gf_9" class="gform_anchor" tabindex="-1"></div>
                              <form method="post" enctype="multipart/form-data" target="gform_ajax_frame_9" id="gform_9" action="/cases/toyota-adventure/#gf_9">
                                 <div class="gform_body">
                                    <ul id="gform_fields_9" class="gform_fields top_label form_sublabel_below description_below">
                                       <li id="field_9_2" class="gfield gfield_contains_required field_sublabel_below field_description_below hidden_label gfield_visibility_visible">
                                          <label class="gfield_label" for="input_9_2">voornaam<span class="gfield_required">*</span></label>
                                          <div class="ginput_container ginput_container_text"><input name="input_2" id="input_9_2" type="text" value="" class="large" placeholder="Voornaam" aria-required="true" aria-invalid="false"></div>
                                       </li>
                                       <li id="field_9_3" class="gfield field_sublabel_below field_description_below hidden_label gfield_visibility_visible">
                                          <label class="gfield_label" for="input_9_3">achternaam</label>
                                          <div class="ginput_container ginput_container_text"><input name="input_3" id="input_9_3" type="text" value="" class="large" placeholder="Achternaam" aria-invalid="false"></div>
                                       </li>
                                       <li id="field_9_4" class="gfield gfield_contains_required field_sublabel_below field_description_below hidden_label gfield_visibility_visible">
                                          <label class="gfield_label" for="input_9_4">e-mailadres<span class="gfield_required">*</span></label>
                                          <div class="ginput_container ginput_container_email">
                                             <input name="input_4" id="input_9_4" type="text" value="" class="large" placeholder="E-mailadres" aria-required="true" aria-invalid="false">
                                          </div>
                                       </li>
                                       <li id="field_9_5" class="gfield field_sublabel_below field_description_below hidden_label gfield_visibility_visible">
                                          <label class="gfield_label" for="input_9_5">bericht</label>
                                          <div class="ginput_container ginput_container_textarea"><textarea name="input_5" id="input_9_5" class="textarea medium" placeholder="Bericht" aria-invalid="false" rows="10" cols="50"></textarea></div>
                                       </li>
                                    </ul>
                                 </div>
                                 <div class="gform_footer top_label"> <button class="btn" id="gform_submit_button_9"><span>verzenden</span></button> <input type="hidden" name="gform_ajax" value="form_id=9&amp;title=&amp;description=&amp;tabindex=0">
                                 </div>
                              </form>
                           </div>
                        </div>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
<script type="text/javascript">
jQuery(document).ready(function($) {
    $(document).on('change', '#taxonomy', function(event){
        window.location.href=$(this).val();
    });
});
</script>
<?php get_footer();