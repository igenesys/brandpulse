<section class="home-cases-section cases-list-section">
  <div class="container">
    <span class="h1"><?php the_sub_field( 'title' ); ?></span>
    <div class="row">
      <?php $latest_case = get_sub_field( 'latest_case' ); ?>
      <?php if ( $latest_case ) : ?>
				<?php foreach ( $latest_case as $post_ids ) : ?>
        <?php $image = get_the_post_thumbnail_url( $post_ids, 'full' );  ?>
					<div class="col-2">
            <div class="case-list-block">
              <div class="case-list-img" style="background-image: url(<?php echo $image; ?>">
              </div>
              <div class="case-list-caps">
                <label><?php echo get_custom_category($post_ids,'cases-tag'); ?></label>
                <span class="h4"><?php echo get_the_title( $post_ids ); ?></span>
                <a href="<?php echo get_permalink( $post_ids ); ?>" class="btn btn-border">Check deze case</a>
              </div>
              <a href="<?php echo get_permalink( $post_ids ); ?>" class="overlay-link"></a>
            </div>
          </div>
        <?php endforeach; ?>
			<?php endif; ?>
    </div>
  </div>
</section>