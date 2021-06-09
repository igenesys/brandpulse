<?php
$term_obj_list = get_the_terms( get_the_ID(), 'cases-tag' );
$terms_string = join(', ', wp_list_pluck($term_obj_list, 'name'));
$services_array=array();
$services = get_the_terms( get_the_ID(), 'cases-type' );
foreach($services as $service){
    $services_array[]='<a href="'.get_term_link( $service).'">'.$service->name.'</a>';
}
$services_string=implode(" & ",$services_array);
?>
<section class="cases-detail-top-up-section dark-blue-bg" style="background: <?php the_field( 'background_color' ); ?>;color: <?php the_field( 'text_color' ); ?>;" >
    <div class="container">
    <div class="container-980">
        <div class="cases-detail-top-up-row row">
        <div class="cases-detail-top-up-lh col-2">
            <?php the_field( 'intro_content' ); ?>
        </div>
        <div class="cases-detail-top-up-rh col-2">
            <div class="cases-detail-top-up-rh-inner white-bg">
            <?php if(!empty($terms_string)): ?>
                <div class="cases-detail-top-up-rh-row">
                    <label>Klant</label>
                    <p><?php echo $terms_string;?></p>
                </div>
            <?php endif; ?>
            <div class="cases-detail-top-up-rh-row">
                <label>Bereikt</label>
                <?php the_field( 'bereikt_information' ); ?>
            </div>
                <?php if(!empty($services_string)): ?>
            <div class="cases-detail-top-up-rh-row">
                <label>Services</label>
                <p><?php echo $services_string;?></p>
            </div>
                <?php endif; ?>
            </div>
        </div>
        </div>
    </div>
    </div>
</section>