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
get_template_part('template-parts/homepage/header'); 
while ( have_posts() ) :
    the_post();
    brandpulse_page_builder();
endwhile; // End of the loop.
?>
<script>
    jQuery(window).on('load', function(){
        AOS.init({
        duration: '1200',
        disable: 'mobile'
        });
    });
</script>
<?php get_footer();
