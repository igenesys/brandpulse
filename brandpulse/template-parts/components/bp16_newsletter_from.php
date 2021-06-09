<section class="nb-section dark-blue-bg top-header-padding">
	<div class="nb-section-inner">
		<div class="container">
			<div class="container-580">
				<img src="<?php echo get_template_directory_uri(); ?>/images/nb-pattern.svg" alt="" title="" class="nb-pattern"/>
				<div class="bn-block">
					<label><?php the_sub_field( 'label_newsletter_from' ); ?></label>
					<span class="hide-title h1" ><?php the_sub_field( 'title_newsletter_from' ); ?></span>
					<div class="hide-title" ><?php the_sub_field( 'short_description_newsletter_from' ); ?></div>
					<div class="bn-form">
						<div class="register-form">
							<div class="register-form-inner">
								<div class="register-form-caps-form">
									<div class="register-form-block">
										<?php echo do_shortcode(get_sub_field( 'from_shortcode_newsletter_from' )); ?>
										<br>
										<?php the_sub_field( 'description_newsletter_from' ); ?>
										<?php if ( have_rows( 'buttons_newsletter_from' ) ) : ?>
										<div class="bn-thanks-btns padding-top-0">
										<?php while ( have_rows( 'buttons_newsletter_from' ) ) : the_row(); ?>
											<?php $link_buttons_newsletter = get_sub_field( 'link_buttons_newsletter' ); ?>
											<?php if ( $link_buttons_newsletter ) : ?>
												<a class="btn btn-border" href="<?php echo esc_url( $link_buttons_newsletter['url'] ); ?>" target="<?php echo esc_attr( $link_buttons_newsletter['target'] ); ?>"><?php echo esc_html( $link_buttons_newsletter['title'] ); ?></a>
											<?php endif; ?>
										<?php endwhile; ?>
										</div>
										<?php endif; ?>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>