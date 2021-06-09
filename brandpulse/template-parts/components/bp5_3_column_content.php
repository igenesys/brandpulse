<?php 

// Variation - is dark-blue-bg

?>

<section style="background: <?php the_sub_field( 'background_color' ); ?>; color: <?php the_sub_field( 'font_color' ); ?>;" class="section three-col-caps-section default-padding text-center">
    <div class="container">
    <div class="container-980">
        <div class="row">
        <?php if ( have_rows( 'column_1' ) ) : ?>
            <?php while ( have_rows( 'column_1' ) ) : the_row(); ?>
                <div class="col-3">
                    <label><?php the_sub_field( 'title' ); ?></label>
                    <p><?php the_sub_field( 'content' ); ?></p>
                </div>
            <?php endwhile; ?>
        <?php endif; ?>
        <?php if ( have_rows( 'column_2' ) ) : ?>
            <?php while ( have_rows( 'column_2' ) ) : the_row(); ?>
                <div class="col-3">
                    <label><?php the_sub_field( 'title' ); ?></label>
                    <p><?php the_sub_field( 'content' ); ?></p>
                </div>
            <?php endwhile; ?>
        <?php endif; ?>
        <?php if ( have_rows( 'column_3' ) ) : ?>
            <?php while ( have_rows( 'column_3' ) ) : the_row(); ?>
                <div class="col-3">
                    <label><?php the_sub_field( 'title' ); ?></label>
                    <p><?php the_sub_field( 'content' ); ?></p>
                </div>
            <?php endwhile; ?>
        <?php endif; ?>
        
        </div>
    </div>
    </div>
</section>