<?php
/**
 * The template for displaying all single posts
 *
 * @link https://developer.wordpress.org/themes/basics/template-hierarchy/#single-post
 *
 * @package brandpulse
 */

get_header();
while(have_posts()): the_post();
$image = get_the_post_thumbnail_url( $postID, 'full' );
$author = get_field( 'author' );
$authorImage = get_the_post_thumbnail_url( $author, 'full' );
?>
<a href="<?php echo get_permalink( get_option( 'page_for_posts' ) ); ?>" class="back-link back-link-dark news-back-link mobile-md">Terug</a>
<div class="cases-detail-top-banner-section dark-label" style="background-image: url('<?php echo $image; ?>');">
	<div class="case-detail-mob-bg mobile-md" style="background-image: url('<?php echo $image; ?>')"></div>
</div>

<section class="cases-detail-main-sec news-detail-main-sec">
	<div class="back-social-icons pinned desktop-md">
	<div class="container">
		<div class="back-social-icons-inner">
		<div class="back-link-outer">
			<a href="<?php echo get_permalink( get_option( 'page_for_posts' ) ); ?>" class="back-link back-link-dark desktop-md">Terug</a>
		</div>
		<div class="social-icon-sticky">
			<label>Delen</label>
			<ul>
			<li><a target="_BLANK" href="https://www.facebook.com/sharer.php?u=<?php echo get_the_permalink(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/facebook.svg" alt="" title=""/></a></li>
			<li><a target="_BLANK" href="https://www.linkedin.com/shareArticle?url={<?php echo get_the_permalink(); ?>}&title={<?php echo get_the_title(); ?>}"><img src="<?php echo get_template_directory_uri(); ?>/images/linkedin.svg" alt="" title=""/></a></li>
			</ul>
		</div>
		</div>
	</div>
	</div>
	<div class="container">
	<div class="container-780">
		<div class="detail-white-bg white-bg">
		<?php if($author) { ?>
		<div class="detail-center-profile">
			<div class="cases-detail-profile-img-name">
			<div class="cases-detail-profile-img">
				<img src="<?php echo $authorImage; ?>" alt="" title=""/>
			</div>
			<div class="cases-detail-profile-name">
				<label>Door <strong><?php echo get_the_title($author); ?></strong></label>
			</div>
			</div>
		</div>
		<?php } ?>
		<h1><?php the_title(); ?></h1>
		<?php if ( have_rows( 'page_builder' ) ): ?>
			<?php while ( have_rows( 'page_builder' ) ) : the_row(); ?>
				<?php if ( get_row_layout() == 'post_content' ) : ?>
					<?php the_sub_field( 'content' ); ?>
				<?php elseif ( get_row_layout() == 'image' ) : ?>
					<?php $post_image = get_sub_field( 'post_image' ); ?>
					<?php if ( $post_image ) : ?>
						<div class="details-contet-image">
							<img src="<?php echo esc_url( $post_image['url'] ); ?>" alt="<?php echo esc_attr( $post_image['alt'] ); ?>" />
						</div>
					<?php endif; ?>
				<?php elseif ( get_row_layout() == 'cta_box' ) : ?>
					<?php $link = get_sub_field( 'link' ); ?>
					<div class="dark-blue-bg services-details-dark-block">
					<?php the_sub_field( 'content' ); ?>
						<a class="btn btn-white" href="<?php echo esc_url( $link['url'] ); ?>" target="<?php echo esc_attr( $link['target'] ); ?>"><?php echo esc_html( $link['title'] ); ?></a>
					</div>
				<?php elseif ( get_row_layout() == 'blockquote' ) : ?>
					<blockquote>
						<span class="h1"><?php the_sub_field( 'testimonial' ); ?></span>
						<label><?php the_sub_field( 'author' ); ?></label>
					</blockquote>
					
					
				<?php endif; ?>
			<?php endwhile; ?>
		<?php else: ?>
			<?php // no layouts found ?>
		<?php endif; ?>
		<br>
		<br>
		<?php 
		$id = get_the_id();
		$terms = get_the_terms( $id, 'category' );
		$cat_id = $terms[0]->term_id
		?>
		<date class="post-date">Geplaatst op <strong><?php echo get_the_date(); ?></strong> in <strong><a href="<?php echo get_category_link($cat_id); ?>"><?php echo get_the_category($postID)[0]->name; ?></a></strong></date>
		<div class="back-social-icons mobile-md">
			<div class="social-icon-sticky">
			<label>Delen</label>
			<ul>
				<li><a target="_BLANK" href="https://www.facebook.com/sharer.php?u=<?php echo get_the_permalink(); ?>"><img src="<?php echo get_template_directory_uri(); ?>/images/facebook.svg" alt="" title=""/></a></li>
				<li><a target="_BLANK" href="https://www.linkedin.com/shareArticle?url={<?php echo get_the_permalink(); ?>}&title={<?php echo get_the_title(); ?>}"><img src="<?php echo get_template_directory_uri(); ?>/images/linkedin.svg" alt="" title=""/></a></li>
			</ul>
			</div>
		</div>
		</div>
	</div>
	</div>
</section>
<?php endwhile; ?>
<?php 
	wp_reset_postdata();
	wp_reset_query();
	$args = array(
		'post_type' => 'post',
		'post_status' => 'publish',
		'category_name' => get_the_category($postID)[0]->slug,
		'orderby'   => 'rand',
		'posts_per_page' => 3, 
	);
	$the_query = new WP_Query( $args ); 
	if ( $the_query->have_posts() ) { ?>
	<div class="news-details-listing">
      <div class="news-listing-section">
        <div class="container">
          <span class="h1">Ook interresant om te lezen</span>
          <div class="row">
			<?php 
				while ( $the_query->have_posts() ) { 
                    $the_query->the_post();
                    
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
				<?php }  ?>	
          </div>
        </div>
      </div>
	</div> 
	<?php } ?>
	
<script src="<?php echo get_template_directory_uri(); ?>/js/jquery.pin.min.js"></script>
<!--/*Home Main slider*/-->
<script>
jQuery(window).on('load', function(){
    jQuery(".pinned").pin({
      containerSelector: ".cases-detail-main-sec",
      padding: {top: 90}
    });
});
</script>
</body>
<?php
wp_reset_postdata();
wp_reset_query();
get_footer();
