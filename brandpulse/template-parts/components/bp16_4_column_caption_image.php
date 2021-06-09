<style>
.cases-dtl-col-img-sec .cases-dtl-col-img-sec-inner:before {
	background: <?php echo get_sub_field( 'background_color' ); ?>;
}
.font-color-4 {
	color: <?php echo get_sub_field( 'font_color' ); ?>;
}
</style>
<section class="cases-dtl-col-img-sec col-4-images-main mobile-carousel-style font-color-4" id="col-4-images-3">
	<div class="cases-dtl-col-img-sec-inner">
        <div class="container">
			<div class="container-980">
				<div class="home-about-section-row cases-dtl-sec-title">
					<div class="home-about-section-lh">
						<span class="h4"><?php the_sub_field( 'title' ); ?></span>
					</div>
					<div class="home-about-section-rh">
						<?php the_sub_field( 'description' ); ?>
					</div>
				</div>
			</div>
			<div class="cases-dtl-col-imgs">
				<div class="col-4-img-carousel owl-carousel owl-theme">
					<?php if ( have_rows( 'image_1' ) ) : ?>
					<?php while ( have_rows( 'image_1' ) ) : the_row(); ?>
					<?php $img_1 = get_sub_field( 'img_1' ); ?>
					<div class="item">
						<div class="col-4">
							<div class="case-dtl-col-img col-img-caps" style="background-image: url(<?php echo esc_url( $img_1['url'] ); ?>);">
								<div class="case-dtl-col-img-label">
									<p><?php the_sub_field( 'cap_1' ); ?></p>
								</div>
							</div>
						</div>
					</div>
					<?php endwhile; ?>
					<?php endif; ?>
					
					
					<?php if ( have_rows( 'image_2' ) ) : ?>
					<?php while ( have_rows( 'image_2' ) ) : the_row(); ?>
					<?php $img_2 = get_sub_field( 'img_2' ); ?>
					<div class="item">
						<div class="col-4">
							<div class="case-dtl-col-img col-img-caps" style="background-image: url(<?php echo esc_url( $img_2['url'] ); ?>);">
								<div class="case-dtl-col-img-label">
									<p><?php the_sub_field( 'cap_2' ); ?></p>
								</div>
							</div>
						</div>
					</div>
					<?php endwhile; ?>
					<?php endif; ?>
					
					<?php if ( have_rows( 'image_3' ) ) : ?>
					<?php while ( have_rows( 'image_3' ) ) : the_row(); ?>
					<?php $img_3 = get_sub_field( 'img_3' ); ?>
					<div class="item">
						<div class="col-4">
							<div class="case-dtl-col-img col-img-caps" style="background-image: url(<?php echo esc_url( $img_3['url'] ); ?>);">
								<div class="case-dtl-col-img-label">
									<p><?php the_sub_field( 'cap_3' ); ?></p>
								</div>
							</div>
						</div>
					</div>
					<?php endwhile; ?>
					<?php endif; ?>
					
					<?php if ( have_rows( 'image_4' ) ) : ?>
					<?php while ( have_rows( 'image_4' ) ) : the_row(); ?>
					<?php $img_4 = get_sub_field( 'img_4' ); ?>
					<div class="item">
						<div class="col-4">
							<div class="case-dtl-col-img col-img-caps" style="background-image: url(<?php echo esc_url( $img_4['url'] ); ?>);">
								<div class="case-dtl-col-img-label">
									<p><?php the_sub_field( 'cap_4' ); ?></p>
								</div>
							</div>
						</div>
					</div>
					<?php endwhile; ?>
					<?php endif; ?>
				</div>
				<div class="carousel__navigation">
					<div class="slider__counter"></div>
				</div>
			</div>
        </div>
  </div>
<script>
jQuery('#col-4-images-3 .col-4-img-carousel').on('initialized.owl.carousel changed.owl.carousel', function(e) {
  if (!e.namespace)  {
	return;
  }
  var carousel = e.relatedTarget;
  jQuery('#col-4-images-3 .slider__counter').html(carousel.relative(carousel.current()) + 1 + '<span>/</span>' + carousel.items().length);
}).owlCarousel({
  items: 4,
  loop: false,
  margin: 20,
  nav: true,
  dots: false,
  responsive:{
	0:{
		items:1,
		stagePadding: 40
	},
	540:{
		items:1,
		stagePadding: 50
	},
	768:{
		items:2,
		stagePadding: 100
	},
	1024:{
		items:4,
		stagePadding: 0
	},
	1280:{
		items:4
	}
  }
});
</script>
</section>