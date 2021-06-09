<?php 
    $title=get_sub_field( 'title' ); 
    $content_left=get_sub_field( 'content_left' ); 
    $right_fact_list=get_sub_field( 'right_fact_list' );
    $counter_fact=1;
if(!empty($title) || !empty($content_left) || have_rows( 'right_fact_list' )):
?>
<section class="two-col-caps-section fact-block">
  <div class="container">
    <div class="container-980">
      <div class="row">
          <?php if(!empty($title)): ?>
            <div class="col-1">
              <span class="h4"><?php echo $title;?></span>
            </div>
          <?php endif; ?>
          <?php if(!empty($content_left)): ?>
            <div class="col-2">
              <?php echo $content_left;?>
            </div>
          <?php endif; ?>
          <?php if(have_rows( 'right_fact_list' )): ?>
            <div class="col-2">
                <?php while ( have_rows( 'right_fact_list' ) ) : the_row(); ?>
                  <label><?php the_sub_field( 'title_fact_list' ); ?></label>
                  <?php the_sub_field( 'text_fact_list' ); ?><?php if($counter_fact!=count($right_fact_list)): ?><br><?php endif; ?>
                <?php $counter_fact++; endwhile; ?>
            </div>
          <?php endif; ?>
      </div>
    </div>
  </div>
</section>
<?php endif; ?>