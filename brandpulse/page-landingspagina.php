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
?>
<section class="landingspagina-banner">
    <div class="landingspagina-banner__bg landingspagina-banner__bg_larg" style="background-image:url(<?php echo get_template_directory_uri(); ?>/images/landingspagina-banner.jpg);"></div>
    <div class="landingspagina-banner__bg landingspagina-banner__bg_medium" style="background-image:url(<?php echo get_template_directory_uri(); ?>/images/landingspagina-banner-medium.jpg);"></div>
    <div class="landingspagina-banner__bg landingspagina-banner__bg_small" style="background-image:url(<?php echo get_template_directory_uri(); ?>/images/landingspagina-banner-mobile.jpg);"></div>
    <div class="landingspagina-banner__caps_cover">
        <div class="container">
            <div class="container-980">
                <div class="landingspagina-banner__caps_inner">
                    <label>brandpulse content</label>                
                    <h1>Lorem ipsum dolor sit amet, consect etur adipiscing elit. Aliquam a erat massa.</h1>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="home-about-section remove-top-padding remove-bottom-padding"> 
  <div class="container">
    <div class="container-980">
      <div class="home-about-section-row">
        <div class="home-about-section-lh">
          <span class="h1">Lorem ipsum<br> dolor sit amet</span>
        </div>
        <div class="home-about-section-rh">
            <p>Curabitur et massa massa. Suspendisse potenti. Nunc suscipit, erat ac finibus lacinia, felis magna venenatis lacus, eu varius justo ante eget libero. Donec porttitor bibendum porta. Pellentesque quis risus metus., volutpat vitae libero.</p>
            <p>Aliquam placerat finibus tortor, non pellentesque quam. Class aptent taciti sociosqu ad litora torquent per conubia nostra, per inceptos himenaeos.</p>
            <a class="btn" href="/over-ons/" target="">BROCHURE DOWNLOADEN</a>
            <br>
            <br>
            <br>
            <p>Benieuwe wat we allemaal voor jou kunnen betekenen? Check onze contentpakketten!</p>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="pricing-section">
    <div class="pricing-section__inner">
        <div class="container">
            <div class="pricing-section__slider owl-carousel owl-theme">
                <div class="item">
                    <div class="pricing-block">
                        <div class="pricing-block__title">
                            <span class="h4">medium</span>
                            <p>XX uur per maand</p>
                        </div>
                        <div class="pricing-block__desc">
                            <div class="pricing-block__desc_top">
                                <p>We starten met een volledige analyse en stemmen alles af op jouw behoeftes.</p>
                            </div>
                            <div class="pricing-block__desc_bottom">
                                <ul>
                                    <li>Sed id erat ut leo tincidunt ultrices</li>
                                    <li>Velit eu blandit vulputate</li>
                                    <li>Nec semper nunc</li>
                                    <li>Pellentesque mollis nulla bibendum</li>
                                    <li>Praesent ac metus dignissim</li>
                                </ul>
                                <div class="pricing-block__btn">
                                    <a href="javascript:void(0);" class="btn" data-tab="item1">Ik wil dit pakket</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="pricing-block">
                        <div class="pricing-block__title">
                            <span class="h4">large</span>
                            <p>XX uur per maand</p>
                        </div>
                        <div class="pricing-block__desc">
                            <div class="pricing-block__desc_top">
                                <p>We starten met een volledige analyse en stemmen alles af op jouw behoeftes.</p>
                            </div>
                            <div class="pricing-block__desc_bottom">
                                <ul>
                                    <li>Sed id erat ut leo tincidunt ultrices</li>
                                    <li>Velit eu blandit vulputate</li>
                                    <li>Nec semper nunc</li>
                                    <li>Pellentesque mollis nulla bibendum</li>
                                    <li>Praesent ac metus dignissim</li>
                                </ul>
                                <div class="pricing-block__btn">
                                    <a href="javascript:void(0);" class="btn" data-tab="item2">Ik wil dit pakket</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="item">
                    <div class="pricing-block">
                        <div class="pricing-block__title">
                            <span class="h4">Extra large</span>
                            <p>XX uur per maand</p>
                        </div>
                        <div class="pricing-block__desc">
                            <div class="pricing-block__desc_top">
                                <p>We starten met een volledige analyse en stemmen alles af op jouw behoeftes.</p>
                            </div>
                            <div class="pricing-block__desc_bottom">
                                <ul>
                                    <li>Sed id erat ut leo tincidunt ultrices</li>
                                    <li>Velit eu blandit vulputate</li>
                                    <li>Nec semper nunc</li>
                                    <li>Pellentesque mollis nulla bibendum</li>
                                    <li>Praesent ac metus dignissim</li>
                                </ul>
                                <div class="pricing-block__btn">
                                    <a href="javascript:void(0);" class="btn" data-tab="item3">Ik wil dit pakket</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="pricing-section__bottom-caps">
                <p>Meer weten over de mogelijkheden? Neem <a href="#">contact</a> met ons op!</p>
            </div>
        </div>
    </div>
    <script>
    jQuery('.pricing-section__slider').owlCarousel({
        loop:false,
        margin:20,
        nav:false,
        center: true,
        touchDrag: false,
        mouseDrag: false,
        slideBy: 3,
        responsive:{
            0:{
                items:1,
                autoWidth:true,
                touchDrag: true,
                dots: true,
                mouseDrag: true,
            },
            1024:{
                items:3
            }
        }
    });
    var owl = jQuery('.pricing-section__slider');
    owl.trigger('to.owl.carousel', [1, 0]);
    </script>
</section>
            <div class="services-inner-form" id="item1">
                <a href="javascript:void(0);" class="back-link close-link mobile-md"><svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="14.143px" height="14.141px" viewBox="0 0 14.143 14.141" enable-background="new 0 0 14.143 14.141" xml:space="preserve"><g><line fill="none" stroke="#FFFFFF" stroke-width="2" stroke-miterlimit="10" x1="0.707" y1="13.434" x2="13.436" y2="0.707"/><line fill="none" stroke="#FFFFFF" stroke-width="2" stroke-miterlimit="10" x1="0.707" y1="0.707" x2="13.436" y2="13.434"/></g></svg></a>
                <div class="d-table">
                    <div class="d-table-cell">
                        <div class="menu-inner">
                            <div class="register-form">
                                <div class="register-form-inner">
                                    <div class="register-form-title">
                                        <span class="hide-title h4">Ik wil het medium<br> contentpakket</span>
                                        <a href="javascript:void(0);" class="back-link desktop-md">Sluiten</a>
                                    </div>
                                    <div class="register-form-caps-form">
                                        <div class="register-form-block">
                                        
                                            <div class="gf_browser_chrome gform_wrapper" id="gform_wrapper_6">
                                                <form>
                                                    <div class="gform_body">
                                                        <ul class="gform_fields top_label form_sublabel_below description_below">
                                                        <li class="gfield gfield_contains_required field_sublabel_below field_description_below hidden_label gfield_visibility_visible">
                                                            <label class="gfield_label">Voornaam<span class="gfield_required">*</span></label>
                                                            <div class="ginput_container ginput_container_text"><input name="input_1" id="input_6_1" type="text" value="" class="large" placeholder="Voornaam" aria-required="true" aria-invalid="false"></div>
                                                        </li>
                                                        <li class="gfield gfield_contains_required field_sublabel_below field_description_below hidden_label gfield_visibility_visible">
                                                            <label class="gfield_label">Achternaam<span class="gfield_required">*</span></label>
                                                            <div class="ginput_container ginput_container_text"><input name="input_2" id="input_6_2" type="text" value="" class="large" placeholder="Achternaam" aria-required="true" aria-invalid="false"></div>
                                                        </li>
                                                        <li class="gfield gfield_contains_required field_sublabel_below field_description_below hidden_label gfield_visibility_visible">
                                                            <label class="gfield_label">Bedrijf / Organisatie<span class="gfield_required">*</span></label>
                                                            <div class="ginput_container ginput_container_email">
                                                                <input name="input_3" id="input_6_3" type="text" value="" class="large" placeholder="Bedrijf / Organisatie" aria-required="true" aria-invalid="false">
                                                            </div>
                                                        </li>
                                                        <li class="gfield gfield_contains_required field_sublabel_below field_description_below hidden_label gfield_visibility_visible">
                                                            <label class="gfield_label">E-mailadres<span class="gfield_required">*</span></label>
                                                            <div class="ginput_container ginput_container_email">
                                                                <input name="input_3" id="input_6_3" type="text" value="" class="large" placeholder="E-mailadres" aria-required="true" aria-invalid="false">
                                                            </div>
                                                        </li>
                                                        <li class="gfield gfield_contains_required field_sublabel_below field_description_below hidden_label gfield_visibility_visible">
                                                            <label class="gfield_label">Telefoonnummer<span class="gfield_required">*</span></label>
                                                            <div class="ginput_container ginput_container_email">
                                                                <input name="input_3" id="input_6_3" type="text" value="" class="large" placeholder="Telefoonnummer" aria-required="true" aria-invalid="false">
                                                            </div>
                                                        </li>
                                                        <li class="gfield field_sublabel_below field_description_below hidden_label gfield_visibility_visible">
                                                            <label class="gfield_label">Bericht</label>
                                                            <div class="ginput_container ginput_container_textarea"><textarea class="textarea medium" placeholder="Bericht" aria-invalid="false" rows="10" cols="50"></textarea></div>
                                                        </li>
                                                        </ul>
                                                    </div>
                                                    <div class="gform_footer top_label"> 
                                                        <input type="submit" id="gform_submit_button_6" class="gform_button button" value="verzenden" onclick="if(window[&quot;gf_submitting_6&quot;]){return false;}  window[&quot;gf_submitting_6&quot;]=true;  " onkeypress="if( event.keyCode == 13 ){ if(window[&quot;gf_submitting_6&quot;]){return false;} window[&quot;gf_submitting_6&quot;]=true;  jQuery(&quot;#gform_6&quot;).trigger(&quot;submit&quot;,[true]); }"> <input type="hidden" name="gform_ajax" value="form_id=6&amp;title=&amp;description=&amp;tabindex=0">
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
            <div class="services-inner-form" id="item2">
                <a href="javascript:void(0);" class="back-link close-link mobile-md"><svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="14.143px" height="14.141px" viewBox="0 0 14.143 14.141" enable-background="new 0 0 14.143 14.141" xml:space="preserve"><g><line fill="none" stroke="#FFFFFF" stroke-width="2" stroke-miterlimit="10" x1="0.707" y1="13.434" x2="13.436" y2="0.707"/><line fill="none" stroke="#FFFFFF" stroke-width="2" stroke-miterlimit="10" x1="0.707" y1="0.707" x2="13.436" y2="13.434"/></g></svg></a>
                <div class="d-table">
                    <div class="d-table-cell">
                        <div class="menu-inner">
                            <div class="register-form">
                                <div class="register-form-inner">
                                    <div class="register-form-title">
                                        <span class="hide-title h4">Ik wil het large <br>contentpakket</span>
                                        <a href="javascript:void(0);" class="back-link desktop-md">Sluiten</a>
                                    </div>
                                    <div class="register-form-caps-form">
                                        <div class="register-form-block">
                                        
                                            <div class="gf_browser_chrome gform_wrapper" id="gform_wrapper_6">
                                                <form>
                                                    <div class="gform_body">
                                                        <ul class="gform_fields top_label form_sublabel_below description_below">
                                                        <li class="gfield gfield_contains_required field_sublabel_below field_description_below hidden_label gfield_visibility_visible">
                                                            <label class="gfield_label">Voornaam<span class="gfield_required">*</span></label>
                                                            <div class="ginput_container ginput_container_text"><input name="input_1" id="input_6_1" type="text" value="" class="large" placeholder="Voornaam" aria-required="true" aria-invalid="false"></div>
                                                        </li>
                                                        <li class="gfield gfield_contains_required field_sublabel_below field_description_below hidden_label gfield_visibility_visible">
                                                            <label class="gfield_label">Achternaam<span class="gfield_required">*</span></label>
                                                            <div class="ginput_container ginput_container_text"><input name="input_2" id="input_6_2" type="text" value="" class="large" placeholder="Achternaam" aria-required="true" aria-invalid="false"></div>
                                                        </li>
                                                        <li class="gfield gfield_contains_required field_sublabel_below field_description_below hidden_label gfield_visibility_visible">
                                                            <label class="gfield_label">Bedrijf / Organisatie<span class="gfield_required">*</span></label>
                                                            <div class="ginput_container ginput_container_email">
                                                                <input name="input_3" id="input_6_3" type="text" value="" class="large" placeholder="Bedrijf / Organisatie" aria-required="true" aria-invalid="false">
                                                            </div>
                                                        </li>
                                                        <li class="gfield gfield_contains_required field_sublabel_below field_description_below hidden_label gfield_visibility_visible">
                                                            <label class="gfield_label">E-mailadres<span class="gfield_required">*</span></label>
                                                            <div class="ginput_container ginput_container_email">
                                                                <input name="input_3" id="input_6_3" type="text" value="" class="large" placeholder="E-mailadres" aria-required="true" aria-invalid="false">
                                                            </div>
                                                        </li>
                                                        <li class="gfield gfield_contains_required field_sublabel_below field_description_below hidden_label gfield_visibility_visible">
                                                            <label class="gfield_label">Telefoonnummer<span class="gfield_required">*</span></label>
                                                            <div class="ginput_container ginput_container_email">
                                                                <input name="input_3" id="input_6_3" type="text" value="" class="large" placeholder="Telefoonnummer" aria-required="true" aria-invalid="false">
                                                            </div>
                                                        </li>
                                                        <li class="gfield field_sublabel_below field_description_below hidden_label gfield_visibility_visible">
                                                            <label class="gfield_label">Bericht</label>
                                                            <div class="ginput_container ginput_container_textarea"><textarea class="textarea medium" placeholder="Bericht" aria-invalid="false" rows="10" cols="50"></textarea></div>
                                                        </li>
                                                        </ul>
                                                    </div>
                                                    <div class="gform_footer top_label"> 
                                                        <input type="submit" id="gform_submit_button_6" class="gform_button button" value="verzenden" onclick="if(window[&quot;gf_submitting_6&quot;]){return false;}  window[&quot;gf_submitting_6&quot;]=true;  " onkeypress="if( event.keyCode == 13 ){ if(window[&quot;gf_submitting_6&quot;]){return false;} window[&quot;gf_submitting_6&quot;]=true;  jQuery(&quot;#gform_6&quot;).trigger(&quot;submit&quot;,[true]); }"> <input type="hidden" name="gform_ajax" value="form_id=6&amp;title=&amp;description=&amp;tabindex=0">
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
            <div class="services-inner-form" id="item3">
                <a href="javascript:void(0);" class="back-link close-link mobile-md"><svg version="1.1" id="Layer_1" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px" width="14.143px" height="14.141px" viewBox="0 0 14.143 14.141" enable-background="new 0 0 14.143 14.141" xml:space="preserve"><g><line fill="none" stroke="#FFFFFF" stroke-width="2" stroke-miterlimit="10" x1="0.707" y1="13.434" x2="13.436" y2="0.707"/><line fill="none" stroke="#FFFFFF" stroke-width="2" stroke-miterlimit="10" x1="0.707" y1="0.707" x2="13.436" y2="13.434"/></g></svg></a>
                <div class="d-table">
                    <div class="d-table-cell">
                        <div class="menu-inner">
                            <div class="register-form">
                                <div class="register-form-inner">
                                    <div class="register-form-title">
                                        <span class="hide-title h4">Ik wil het extra large<br>contentpakket</span>
                                        <a href="javascript:void(0);" class="back-link desktop-md">Sluiten</a>
                                    </div>
                                    <div class="register-form-caps-form">
                                        <div class="register-form-block">
                                        
                                            <div class="gf_browser_chrome gform_wrapper" id="gform_wrapper_6">
                                                <form>
                                                    <div class="gform_body">
                                                        <ul class="gform_fields top_label form_sublabel_below description_below">
                                                        <li class="gfield gfield_contains_required field_sublabel_below field_description_below hidden_label gfield_visibility_visible">
                                                            <label class="gfield_label">Voornaam<span class="gfield_required">*</span></label>
                                                            <div class="ginput_container ginput_container_text"><input name="input_1" id="input_6_1" type="text" value="" class="large" placeholder="Voornaam" aria-required="true" aria-invalid="false"></div>
                                                        </li>
                                                        <li class="gfield gfield_contains_required field_sublabel_below field_description_below hidden_label gfield_visibility_visible">
                                                            <label class="gfield_label">Achternaam<span class="gfield_required">*</span></label>
                                                            <div class="ginput_container ginput_container_text"><input name="input_2" id="input_6_2" type="text" value="" class="large" placeholder="Achternaam" aria-required="true" aria-invalid="false"></div>
                                                        </li>
                                                        <li class="gfield gfield_contains_required field_sublabel_below field_description_below hidden_label gfield_visibility_visible">
                                                            <label class="gfield_label">Bedrijf / Organisatie<span class="gfield_required">*</span></label>
                                                            <div class="ginput_container ginput_container_email">
                                                                <input name="input_3" id="input_6_3" type="text" value="" class="large" placeholder="Bedrijf / Organisatie" aria-required="true" aria-invalid="false">
                                                            </div>
                                                        </li>
                                                        <li class="gfield gfield_contains_required field_sublabel_below field_description_below hidden_label gfield_visibility_visible">
                                                            <label class="gfield_label">E-mailadres<span class="gfield_required">*</span></label>
                                                            <div class="ginput_container ginput_container_email">
                                                                <input name="input_3" id="input_6_3" type="text" value="" class="large" placeholder="E-mailadres" aria-required="true" aria-invalid="false">
                                                            </div>
                                                        </li>
                                                        <li class="gfield gfield_contains_required field_sublabel_below field_description_below hidden_label gfield_visibility_visible">
                                                            <label class="gfield_label">Telefoonnummer<span class="gfield_required">*</span></label>
                                                            <div class="ginput_container ginput_container_email">
                                                                <input name="input_3" id="input_6_3" type="text" value="" class="large" placeholder="Telefoonnummer" aria-required="true" aria-invalid="false">
                                                            </div>
                                                        </li>
                                                        <li class="gfield field_sublabel_below field_description_below hidden_label gfield_visibility_visible">
                                                            <label class="gfield_label">Bericht</label>
                                                            <div class="ginput_container ginput_container_textarea"><textarea class="textarea medium" placeholder="Bericht" aria-invalid="false" rows="10" cols="50"></textarea></div>
                                                        </li>
                                                        </ul>
                                                    </div>
                                                    <div class="gform_footer top_label"> 
                                                        <input type="submit" id="gform_submit_button_6" class="gform_button button" value="verzenden" onclick="if(window[&quot;gf_submitting_6&quot;]){return false;}  window[&quot;gf_submitting_6&quot;]=true;  " onkeypress="if( event.keyCode == 13 ){ if(window[&quot;gf_submitting_6&quot;]){return false;} window[&quot;gf_submitting_6&quot;]=true;  jQuery(&quot;#gform_6&quot;).trigger(&quot;submit&quot;,[true]); }"> <input type="hidden" name="gform_ajax" value="form_id=6&amp;title=&amp;description=&amp;tabindex=0">
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
<section class="home-about-section remove-bottom-padding">
  <div class="container">
    <div class="container-980">
      <div class="home-about-section-row">
        <div class="home-about-section-lh">
          <span class="h4">Meet the team</span>
        </div>
        <div class="home-about-section-rh">
            <p>Curabitur et massa massa. Suspendisse potenti. Nunc suscipit, erat ac finibus lacinia, felis magna venenatis lacus, eu varius justo ante eget libero. Donec porttitor bibendum porta. Pellentesque quis risus metus. Nam vulputate vulputate sem. Duis diam urna.</p>
        </div>
      </div>
    </div>
  </div>
</section>
<div class="over-ons-candidate landingspagina-team">
   <div class="container">
        <div class="over-ons-candidate-row">
            <div class="over-ons-block">
                <div class="over-candimg">
                    <img src="<?php echo get_template_directory_uri(); ?>/images/Aaron.png" alt="Aaron" title="Aaron">
                </div>
                <div class="over-candcontent">
                    <label>Aaron</label>
                    <p>Content Strateeg</p>
                </div>
                <a href="javascript:void(0);" class="overlay-link" target=""></a>
            </div>
            <div class="over-ons-block">
                <div class="over-candimg">
                    <img src="https://wordpress-322151-1873133.cloudwaysapps.com/wp-content/uploads/2021/05/simone.png" alt="Simone" title="Simone">
                </div>
                <div class="over-candcontent">
                    <label>Simone</label>
                    <p>Campagnemanager</p>
                </div>
                <a href="javascript:void(0);" class="overlay-link"></a>
            </div>
            <div class="over-ons-block">
                <div class="over-candimg">
                    <img src="https://wordpress-322151-1873133.cloudwaysapps.com/wp-content/uploads/2021/05/fleur.png" alt="Fleur" title="Fleur">
                </div>
                <div class="over-candcontent">
                    <label>Fleur</label>
                    <p>Content Creator</p>
                </div>
                <a href="javascript:void(0);" class="overlay-link"></a>
            </div>
            <div class="over-ons-block">
                <div class="over-candimg">
                    <img src="https://wordpress-322151-1873133.cloudwaysapps.com/wp-content/uploads/2021/05/svenja.png" alt="Svenja" title="Svenja">
                </div>
                <div class="over-candcontent">
                    <label>Svenja</label>
                    <p>Social Media Expert</p>
                </div>
                <a href="javascript:void(0);" class="overlay-link"></a>
            </div>
        </div>
   </div>
</div>
<section class="light-gray-bg mail-section remove-bottom-margin">
	<div class="container">
		<div class="container-780">
			<div class="mail-section-row mail-sec-caps-top">
				<div class="mail-sec-img">
					<span><img src="<?php echo get_template_directory_uri(); ?>/images/Aaron.png" alt="" title=""></span>
				</div>
				<div class="mail-sec-caps">
					<span class="h1">Samen scoren met content?<br> Stuur Aaron een berichtje!</span>
					<a href="javascript:void(0);" class="btn" data-tab="adventure-8-form">Mail Aaron</a>				
                </div>
    		</div>
            <div class="mail-section-row mail-sec-caps-bottom">
                <div class="mail-sec-img"></div>
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
							<span class="hide-title h4">Stuur Aaron een bericht </span>
							<a href="javascript:void(0);" class="back-link desktop-md">Sluiten</a>
						</div>
						<div class="register-form-caps-form">
							<div class="register-form-block">
                            
                                <div class="gf_browser_chrome gform_wrapper" id="gform_wrapper_6">
                                    <form>
                                        <div class="gform_body">
                                            <ul class="gform_fields top_label form_sublabel_below description_below">
                                            <li class="gfield gfield_contains_required field_sublabel_below field_description_below hidden_label gfield_visibility_visible">
                                                <label class="gfield_label">Voornaam<span class="gfield_required">*</span></label>
                                                <div class="ginput_container ginput_container_text"><input name="input_1" id="input_6_1" type="text" value="" class="large" placeholder="Voornaam" aria-required="true" aria-invalid="false"></div>
                                            </li>
                                            <li class="gfield gfield_contains_required field_sublabel_below field_description_below hidden_label gfield_visibility_visible">
                                                <label class="gfield_label">Achternaam<span class="gfield_required">*</span></label>
                                                <div class="ginput_container ginput_container_text"><input name="input_2" id="input_6_2" type="text" value="" class="large" placeholder="Achternaam" aria-required="true" aria-invalid="false"></div>
                                            </li>
                                            <li class="gfield gfield_contains_required field_sublabel_below field_description_below hidden_label gfield_visibility_visible">
                                                <label class="gfield_label">E-mailadres<span class="gfield_required">*</span></label>
                                                <div class="ginput_container ginput_container_email">
                                                    <input name="input_3" id="input_6_3" type="text" value="" class="large" placeholder="E-mailadres" aria-required="true" aria-invalid="false">
                                                </div>
                                            </li>
                                            <li class="gfield field_sublabel_below field_description_below hidden_label gfield_visibility_visible">
                                                <label class="gfield_label">Bericht</label>
                                                <div class="ginput_container ginput_container_textarea"><textarea class="textarea medium" placeholder="Bericht" aria-invalid="false" rows="10" cols="50"></textarea></div>
                                            </li>
                                            </ul>
                                        </div>
                                        <div class="gform_footer top_label"> 
                                            <input type="submit" id="gform_submit_button_6" class="gform_button button" value="verzenden" onclick="if(window[&quot;gf_submitting_6&quot;]){return false;}  window[&quot;gf_submitting_6&quot;]=true;  " onkeypress="if( event.keyCode == 13 ){ if(window[&quot;gf_submitting_6&quot;]){return false;} window[&quot;gf_submitting_6&quot;]=true;  jQuery(&quot;#gform_6&quot;).trigger(&quot;submit&quot;,[true]); }"> <input type="hidden" name="gform_ajax" value="form_id=6&amp;title=&amp;description=&amp;tabindex=0">
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
<?php
get_footer();