<?php
/**
 * Template Name: Content page
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

get_header(); ?>
<div class="content-page-main top-header-padding">
      <div class="container">
        <div class="container-780">
          <div class="content-page-main-inner">
          <?php if ( have_rows( 'page_builder' ) ): ?>
                <?php while ( have_rows( 'page_builder' ) ) : the_row(); ?>
                    <?php if ( get_row_layout() == 'heading' ) : ?>
                        <div class="content-page-title-block">
                            <label><?php the_sub_field( 'label' ); ?></label>
                            <h1><?php the_sub_field( 'heading' ); ?></h1>
                        </div>
                    <?php elseif ( get_row_layout() == 'spacer' ) : ?>
            			<div style="height:<?php the_sub_field( 'spacer_height' ); ?>px">&nbsp;</div>
		            <?php elseif ( get_row_layout() == 'title' ) : ?>
                        <div class="content-page-caps-block">
                            <h4><?php the_sub_field( 'page_title' ); ?></h4>
                        </div>
                    <?php elseif ( get_row_layout() == 'content' ) : ?>
                        <div class="content-page-caps-block">
                            <?php the_sub_field( 'page_content' ); ?>
                        </div>
                    <?php elseif ( get_row_layout() == 'table' ) : ?>
                        <?php $column = get_sub_field( 'column' ); ?>
                        <?php if($column = 2): ?>
                            <?php if ( have_rows( '2_col_content' ) ) : ?>
                                <div class="label-with-caps-ol">
                                    <ol>
                                        <?php while ( have_rows( '2_col_content' ) ) : the_row(); ?>
                                            <li>
                                                <div class="label"><?php the_sub_field( 'label' ); ?></div>
                                                <div class="caps"><?php the_sub_field( 'text' ); ?></div>
                                            </li>
                                        <?php endwhile; ?>
                                    </ol>
                                </div>
                            <?php endif; ?>
                        <?php endif; ?>
                        <?php if($column = 1): ?>
                            <?php if ( have_rows( '1_col_content' ) ) : ?>
                                <div class="label-with-caps-ol">
                                    <ol>
                                        <?php while ( have_rows( '1_col_content' ) ) : the_row(); ?>
                                            <li><?php the_sub_field( 'text' ); ?></li>
                                        <?php endwhile; ?>
                                    </ol>
                                </div>
                            <?php endif; ?>
                        <?php endif; ?>

                    <?php endif; ?>
                <?php endwhile; ?>
            <?php endif; ?>
            </div>
          </div>
        </div>
      </div>
    </div>
<?php get_footer();
