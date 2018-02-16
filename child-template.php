<?php
/*
Template Name: Child Template
*/
?>
<?php get_header(); ?>
<header>
	
	<div class="header-content">
		<div class="promo"><img src="<?php echo the_field('banner_image'); ?>" /></div>
		<div class="introduction"><?php echo the_field('service_banner_content'); ?></div>
	</div>
	
</header>

<div class="page-container">

	<div class="sub-menu">
		<div class="sub-menu-header"><?php $parent_title = get_the_title($post->post_parent);echo $parent_title;?> <strong>Features Include</strong></div>
		<ul>
			<?php if ( $post->post_parent ) { ?>
			    <li><a href="<?php echo get_permalink( $post->post_parent ); ?>" >
			        <?php echo get_the_title( $post->post_parent ); ?>
			    </a></li>
			<?php } ?>
	   		<?php 
	   		global $id;
	   		global $current;
	   		$id = $post->post_parent;
	   		$current = get_the_ID();
	   		wp_list_pages('title_li=&depth=2&child_of='.$id.'&exclude='.$current.'&sort_column=menu_order'); ?>
		</ul>
	</div>
	
	<div class="page-content">
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		
			<?php the_content(); ?>
		
		<?php endwhile; else: ?>
			<p><?php _e('No posts were found. Sorry!'); ?></p>
		<?php endif; ?>
	</div>

</div>

<div class="service-container">
	
	<h2>Other <strong>Services</strong> include</h2>
	
	<?php 
		if($post->post_parent == 25) {
			$in = array(32,34);
			$not_in = array($post->ID);
		} else if ($post->post_parent == 32) {
			$in = array(25,34);
			$not_in = array($post->ID);
		} else if ($post->post_parent == 34) {
			$in = array(25,32);
			$not_in = array($post->ID);
		} else {
		}
		
		$args = array(
		  'post_type' => 'page',
		  'post__not_in' => $not_in,
		  'post__in' => $in,
		  'order' => ASC
		  );
		
		$the_query = new WP_Query($args);
	?>
	
	<?php while ($the_query -> have_posts()) : $the_query -> the_post();  ?>
	
	<div class="service">
		<div class="banner">
			<img src="<?php the_field('service_banner_image'); ?>" />
			<?php echo the_field('banner_title'); ?>
		</div>
		<div class="service-intro">
			<?php the_excerpt(); ?>
			<button onclick="window.location.href='<?php the_permalink(); ?>'">Explore your options</button>
		</div>
	
	</div>
	
	<?php endwhile;?>
</div>

<?php get_footer(); ?>