<?php
/*
Template Name: Case Study Template
*/
?>
<?php get_header(); ?>
<header>
	
	<div class="header-content">
		<div class="promo"><img src="<?php echo the_field('banner_image'); ?>" /></div>
		<div class="introduction"><?php echo the_field('service_banner_content'); ?></div>
	</div>
	
</header>

<div class="case-container">
	
	<?php
	$args = array(
	    'post_type'      => 'page',
	    'posts_per_page' => -1,
	    'post_parent'    => $post->ID,
	    'order'          => 'ASC',
	    'orderby'        => 'menu_order'
	 );
	
	$parent = new WP_Query( $args );
	
	if ( $parent->have_posts() ) : ?>
	
	    <?php while ( $parent->have_posts() ) : $parent->the_post(); ?>
	
	        <div class="service">
	        	<div class="banner">
	        		<img src="<?php the_field('service_banner_image'); ?>" />
	        		<?php echo the_field('banner_title'); ?>
	        	</div>
	        	<div class="service-intro">
	        		<?php the_excerpt(); ?>
	        		<button onclick="window.location.href='<?php the_permalink(); ?>'">Read more</button>
	        	</div>
	        </div>
	
	    <?php endwhile; ?>
	
	<?php endif; wp_reset_query(); ?>

</div>

<?php get_footer(); ?>