<?php $image = get_sub_field( 'image' ); ?>
<section style="background: <?php the_sub_field( 'background_color' ); ?>; color: <?php the_sub_field( 'font_color' ); ?>;" class="home-tow-col-section">
  <div class="container">
    <div class="row align-center">
      <div class="col-2">
          <?php if ( $image ) : ?>
        <div class="home-tow-col-img">
          <img src="<?php echo esc_url( $image['url'] ); ?>" alt="<?php echo esc_attr( $image['alt'] ); ?>" title=""/>
        </div>
          <?php endif; ?>
      </div>
      <div class="col-2">
      <?php if ( have_rows( 'content' ) ) : ?>
            <?php while ( have_rows( 'content' ) ) : the_row(); ?>
            <?php $title = get_sub_field( 'title' ); ?>
            <div class="home-tow-col-caps">
                <?php if(!empty($title)): ?>
                <span class="h1"><?php echo $title;?></span>
                <?php endif; ?>
                <?php the_sub_field( 'text' ); ?>
                <?php $link = get_sub_field( 'link' ); ?>
                <?php if ( $link ) : ?>
                    <a class="btn" href="<?php echo esc_url( $link['url'] ); ?>" target="<?php echo esc_attr( $link['target'] ); ?>"><?php echo esc_html( $link['title'] ); ?></a>
                <?php endif; ?>
            </div>
          <?php endwhile; ?>
        <?php endif; ?>
      </div>
    </div>
  </div>
</section>