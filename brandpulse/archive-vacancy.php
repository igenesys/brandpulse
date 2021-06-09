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
<section class="over-top-two-col dark-blue-bg top-header-padding">
    <div class="over-top-two-col-inner">
		<div class="container">
			<div class="row">
			<?php $vacancy_image = get_field( 'vacancy_image', 'option' ); ?>
				<div class="col-6">
				<?php if ( $vacancy_image ) : ?>
					<div class="over-top-two-col-img">
						<img src="<?php echo esc_url( $vacancy_image['url'] ); ?>" alt="<?php echo esc_attr( $vacancy_image['alt'] ); ?>" />
					</div>
				<?php endif; ?>
				</div>
				<div class="col-6">
					<div class="over-top-tow-col-caps">
						<h1><?php the_field( 'vacancy_title_text', 'option' ); ?></h1>
						<?php the_field( 'vacancy_content_text', 'option' ); ?>
					</div>
				</div>
			</div>
		</div>
    </div>
</section>
<?php if(have_posts()) : $i=0; ?>
<div class="vacatures-listing-main" id="vacatures-listing-main">
    <div class="services-popup-main-inner">
        <div class="container ">
          <div class="container-980">
            <?php while(have_posts()) : the_post(); $i++; ?>
			<div class="vacatures-listing-row">
                <div class="vacatures-listing-lh">
                    <?php $post_categories = get_the_terms( get_the_ID(), 'vacancy-tag' ); ?>
					<?php $array_term_string=array(); ?>
					<label>
						<?php 
								foreach($post_categories as $get_ps_cat){
								if($get_ps_cat->slug!='featured'){
									$array_term_string[]=$get_ps_cat->name;
								}
								 }
								$terms_string =implode(", ",$array_term_string);
						?>
					<?php echo $terms_string ; ?>
					</label>
                    <span class="h1"><?php the_title(); ?></span>
                </div>
                <div class="vacatures-listing-rh">
                    <a href="<?php the_permalink(); ?>" class="btn btn-border" data-tab="vacatures-<?php echo $i; ?>">bekijk vacature</a>
                </div>
                <a href="<?php the_permalink(); ?>" class="overlay-link"></a>
            </div>
            <?php endwhile; ?>
          </div>
        </div>
    </div>
</div>
<?php endif; ?>
<?php get_footer();