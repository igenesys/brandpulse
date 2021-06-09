<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package brandpulse
 */

?>
<?php get_template_part('template-parts/global/footer'); ?>

<?php wp_footer(); ?>
<script type="text/javascript">
jQuery(document).on('gform_confirmation_loaded', function(event, formId){
    jQuery('.hide-title').css('display','none');
});
</script>
</body>
</html>
