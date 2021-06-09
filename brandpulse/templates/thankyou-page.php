<?php
/**
 * Template Name: Thank you page
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
while(have_posts()): the_post();
$image = get_the_post_thumbnail_url( $postID, 'full' );
$author = get_field( 'author' );
$authorImage = get_the_post_thumbnail_url( $author, 'full' );
?>
<a href="<?php echo get_permalink( get_option( 'page_for_posts' ) ); ?>" class="back-link back-link-dark news-back-link mobile-md">Terug</a>
<div class="cases-detail-top-banner-section dark-label" style="background-image: url('<?php echo $image; ?>');">
	<div class="case-detail-mob-bg mobile-md" style="background-image: url('<?php echo $image; ?>')"></div>
</div>

<section class="cases-detail-main-sec news-detail-main-sec">
	
	<div class="container">
	<div class="container-780">
		<div class="detail-white-bg white-bg">
		<h1><?php the_title(); ?></h1>
		<?php if ( have_rows( 'page_builder' ) ): ?>
			<?php while ( have_rows( 'page_builder' ) ) : the_row(); ?>
				<?php if ( get_row_layout() == 'post_content' ) : ?>
					<?php the_sub_field( 'content' ); ?>
				<?php elseif ( get_row_layout() == 'image' ) : ?>
					<?php $post_image = get_sub_field( 'post_image' ); ?>
					<?php if ( $post_image ) : ?>
						<div class="details-contet-image">
							<img src="<?php echo esc_url( $post_image['url'] ); ?>" alt="<?php echo esc_attr( $post_image['alt'] ); ?>" />
						</div>
					<?php endif; ?>
				<?php elseif ( get_row_layout() == 'cta_box' ) : ?>
					<?php $link = get_sub_field( 'link' ); ?>
					<div class="dark-blue-bg services-details-dark-block">
					<?php the_sub_field( 'content' ); ?>
						<a class="btn btn-white" href="<?php echo esc_url( $link['url'] ); ?>" target="<?php echo esc_attr( $link['target'] ); ?>"><?php echo esc_html( $link['title'] ); ?></a>
					</div>
				<?php elseif ( get_row_layout() == 'blockquote' ) : ?>
					<blockquote>
						<span class="h1"><?php the_sub_field( 'testimonial' ); ?></span>
						<label><?php the_sub_field( 'author' ); ?></label>
					</blockquote>
					
					
				<?php endif; ?>
			<?php endwhile; ?>
		<?php else: ?>
			<?php // no layouts found ?>
		<?php endif; ?>
		
		
		</div>
	</div>
	</div>
</section>
<?php endwhile; ?>

</body>
<?php
wp_reset_postdata();
wp_reset_query();
get_footer();