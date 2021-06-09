<?php
$featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full'); 
if(empty($featured_img_url)){
    $featured_img_url=get_template_directory_uri().'/images/anwb.jpg';
}
$term_obj_list = get_the_terms( get_the_ID(), 'cases-tag' );
$terms_string = join(', ', wp_list_pluck($term_obj_list, 'name'));
?>
<div class="cases-detail-top-banner-section" style="background-image: url(<?php echo $featured_img_url; ?>);">
    <div class="case-detail-mob-bg mobile-md" style="background-image: url('<?php echo $featured_img_url; ?>')"></div>
    <div class="cases-detail-title">
    <div class="container">
        <div class="container-980">
        <label><?php echo $terms_string;?></label>
        </div>
    </div>
    </div>
</div>