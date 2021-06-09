<?php 
    $title_ser=get_sub_field( 'title' ); 
    $services = get_sub_field( 'services' ); 
    $counter=1;
?>
<section class="dark-blue-bg home-services-section">
  <div class="container">
   <?php if(!empty($title_ser)): ?>
    <span class="h1"><?php echo $title_ser;?></span>
  <?php endif; ?>
  <?php if ( $services ) : ?>
    <div class="row">
    <?php foreach ( $services as $post_ids ) : ?>
        <?php
            $class="home-services-block";
            $class_btn="btn btn-white";
            if($counter%4==0){
                $class="home-services-white-block white-bg";
                $class_btn="btn";
            }
        ?>
      <div class="col-4">
        <div class="<?php echo $class;?>">
          <span class="h4"><?php echo get_the_title( $post_ids ); ?></span>
          <?php the_field( 'home_page_listing_content', $post_ids); ?>
          <a href="<?php echo get_permalink( $post_ids ); ?>" class="<?php echo $class_btn;?>">Lees meer</a>
        </div>
      </div>
    <?php $counter++; endforeach; ?>
    </div>
  <?php endif; ?>
  </div>
</section>