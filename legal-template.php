<?php
/*
Template Name: Legal Template
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
		<div class="sub-menu-header">Legal <strong>Information</strong></div>
		<ul>
			<?php 
			$id = get_the_ID();
			wp_list_pages('include=95,97&title_li=&order=asc'); ?>
		</ul>
	</div>
	
	<div class="legal-content">
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		
			<?php the_content(); ?>
		
		<?php endwhile; else: ?>
			<p><?php _e('No posts were found. Sorry!'); ?></p>
		<?php endif; ?>
	</div>

</div>

<?php get_footer(); ?>