<?php
/**
 * The main template file
 *
 * This is the most generic template file in a WordPress theme
 * and one of the two required files for a theme (the other being style.css).
 * It is used to display a page when nothing more specific matches a query.
 * E.g., it puts together the home page when no home.php file exists.
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/
 *
 * @package brandpulse
 */

get_header();
$taxonomies = get_terms( array(
        'taxonomy' => 'category',
        'hide_empty' => true,
    ));
?>
<section class="home-about-section dark-blue-bg subpage-top-caps top-header-padding">
  <div class="home-about-section-inner">
    <div class="container">
      <div class="container-980">
        <label><?php the_field( 'tag_line_text_news_ls', 'option' ); ?></label>
        <div class="home-about-section-row">
          <div class="home-about-section-lh">
            <h1><?php the_field( 'title_text_news_ls', 'option' ); ?></h1>
          </div>
          <div class="home-about-section-rh">
            <?php the_field( 'short_content_text_news_ls', 'option' ); ?>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="cases-list-section news-listing-filter">
  <div class="container">
    <div class="cases-filter">
      <div class="cases-filter-label">
        <p>Ik wil meer weten over</p>
        <select id="taxonomy" name="taxonomy">
              <option value="<?php echo get_post_type_archive_link( 'post' ); ?>">alles</option>
                <?php foreach( $taxonomies as $taxonomy ) { ?>
                    <option value="<?php echo get_term_link( $taxonomy);?>"><?php echo $taxonomy->name;?></option>
                <?php } ?>
            </select>
      </div>
    </div>
  </div>
</section>
<?php 
    $sticky_news_ls = get_field( 'sticky_news_ls', 'option' ); 
    $sticky_post_id="";
?>
<?php if ( $sticky_news_ls ) : ?>
<?php $post = $sticky_news_ls; ?>
	<?php setup_postdata( $post ); 
                    $sticky_post_id=$post->ID;
                    $featured_img_url = get_the_post_thumbnail_url($post->ID,'full'); 
                    if(empty($featured_img_url)){
                        $featured_img_url=get_template_directory_uri().'/images/news-1.jpg';
                    }
                $news_reading_time=get_field( 'news_reading_time' );
?> 
<section class="feacherd-news desktop-lg">
	<div class="container">
		<div class="feacherd-news-row">
			<div class="feacherd-news-img" style="background-image: url(<?php echo $featured_img_url; ?>);">
				<a href="<?php the_permalink(); ?>" class="overlay-link"></a>
			</div>
			<div class="feacherd-news-caps dark-blue-bg">
				<?php if(!empty($news_reading_time)): ?>
				<label><img src="<?php echo get_template_directory_uri(); ?>/images/Clock.svg" alt="" title=""/><?php echo $news_reading_time;?></label>
				<?php endif; ?>
				<span class="h1"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></span>
				<p><?php if ( has_excerpt() ) { echo wp_trim_words( get_the_excerpt(), 170, '...' );}else{ echo wp_trim_words( get_the_content(), 170, '...' ); }?></p>
				<a href="<?php the_permalink(); ?>" class="btn">Lees verder</a>
			</div>
		</div>
  </div>
</section>
<?php wp_reset_postdata(); ?>
<?php endif; ?>
<div class="news-listing-section">
	<div class="container">
		<div class="row">
		
		<?php if ( $sticky_news_ls ) : ?>
		<?php $post = $sticky_news_ls; ?>
		<?php setup_postdata( $post ); 
                    $sticky_post_id=$post->ID;
                    $featured_img_url = get_the_post_thumbnail_url($post->ID,'full'); 
                    if(empty($featured_img_url)){
                        $featured_img_url=get_template_directory_uri().'/images/news-1.jpg';
                    }
			$news_reading_time=get_field( 'news_reading_time' ); ?> 
		<div class="col-3 mobile-block">
			<div class="news-block">
				<div class="news-block-img" style="background-image: url(<?php echo $featured_img_url; ?>);">
					<a href="<?php the_permalink();?>" class="overlay-link"></a>
				</div>
				<div class="news-block-caps">
					<?php if(!empty($news_reading_time)): ?>
						<label><img src="<?php echo get_template_directory_uri(); ?>/images/Clock-dark.svg" alt="" title=""/><?php echo $news_reading_time;?></label>
					<?php endif; ?>
					<span class="h4"><a href="<?php the_permalink();?>"><?php the_title();?></a></span>
				</div>
			</div>
		</div>
		<?php wp_reset_postdata(); ?>
		<?php endif; ?>
		
		
		
		
		<?php wp_reset_query();
			$args = array(
				'post_type'              => array( 'post' ),
				'post_status'            => array( 'Publish' ),
				'posts_per_page'         => -1,
			);
			if(!empty($sticky_post_id)){
				$args['post__not_in']=array($sticky_post_id);
			}
			$query = new WP_Query( $args );
			while ( $query->have_posts() ) : $query->the_post();
			$featured_img_url = get_the_post_thumbnail_url(get_the_ID(),'full'); 
			if(empty($featured_img_url)){
					$featured_img_url=get_template_directory_uri().'/images/news-1.jpg';
				}
			$news_reading_time=get_field( 'news_reading_time' );
        ?>
		<div class="col-3">
			<div class="news-block">
				<div class="news-block-img" style="background-image: url(<?php echo $featured_img_url; ?>);">
					<a href="<?php the_permalink();?>" class="overlay-link"></a>
				</div>
				<div class="news-block-caps">
					<?php if(!empty($news_reading_time)): ?>
						<label><img src="<?php echo get_template_directory_uri(); ?>/images/Clock-dark.svg" alt="" title=""/><?php echo $news_reading_time;?></label>
					<?php endif; ?>
					<span class="h4"><a href="<?php the_permalink();?>"><?php the_title();?></a></span>
				</div>
			</div>
		</div>
		<?php endwhile;wp_reset_query(); ?>
		</div>
	</div>
</div>
<script type="text/javascript">
jQuery(document).ready(function($) {
    $(document).on('change', '#taxonomy', function(event){
        window.location.href=$(this).val();
    });
});
</script>
<?php
get_footer();
