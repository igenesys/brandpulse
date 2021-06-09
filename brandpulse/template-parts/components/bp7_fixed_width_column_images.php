<?php 

// Variation - is dark background 
// Variation - is layout

$layout = get_sub_field( 'layout' );
?>
<style>
.section.other-top-part .section-inner:before,
section.other-top-part .section-inner:before,
section.other-top-part .cases-dtl-col-img-sec-inner:before {
  background: <?php echo get_sub_field( 'color' ); ?>;
  content: "";
  position: absolute;
  left: 0;
  right: 0;
  top: 0;
  bottom: 125px;
}
section.light-top-part div:before{
  background: none !important;
}
section.light-top-part {
  color: #091606;
}

</style>
<?php if ( $layout == 1 ) : ?>
  <?php get_template_part('template-parts/components/bp07/layout-1'); ?>
<?php elseif( $layout == 2 ): ?>
  <?php get_template_part('template-parts/components/bp07/layout-2'); ?>  
<?php elseif( $layout == 3 ): ?>
  <?php get_template_part('template-parts/components/bp07/layout-3'); ?>    
<?php elseif( $layout == 4 ): ?>
  <?php get_template_part('template-parts/components/bp07/layout-4'); ?>      
<?php elseif( $layout == 5 ): ?>
  <?php get_template_part('template-parts/components/bp07/layout-5'); ?>          
<?php elseif( $layout == 6 ): ?>
  <?php get_template_part('template-parts/components/bp07/layout-6'); ?>        
<?php endif; ?>
