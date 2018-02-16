<?php get_header(); ?>

<header>
	<div class="header">
		<?php echo the_field('home_introduction'); ?>
		
		<button class="first" onclick="window.location.href='#explore'">Explore our services</button>
		<button onclick="window.location.href='<?php echo get_site_url(); ?>/contact-us'">Get in touch</button>
	</div>
</header>

<a name="explore"></a>
<div class="home-page-content">
	<?php echo the_field('home_area_introduction'); ?>
	<div class="service">
	<?php $the_query = new WP_Query( 'page_id=25' ); ?>
	
	<?php while ($the_query -> have_posts()) : $the_query -> the_post();  ?>
	
		<div class="banner">
			<img src="<?php the_field('service_banner_image'); ?>" />
			<?php echo the_field('banner_title'); ?>
		</div>
		<div class="service-intro">
			<?php the_excerpt(); ?>
			<button onclick="window.location.href='<?php the_permalink(); ?>'">Explore your options</button>
		</div>
	
	<?php endwhile;?>
	</div>
	
	<div class="service">
		<?php $the_query = new WP_Query( 'page_id=32' ); ?>
		
		<?php while ($the_query -> have_posts()) : $the_query -> the_post();  ?>
		
			<div class="banner">
				<img src="<?php the_field('service_banner_image'); ?>" />
				<?php echo the_field('banner_title'); ?>
			</div>
			<div class="service-intro">
				<?php the_excerpt(); ?>
				<button onclick="window.location.href='<?php the_permalink(); ?>'">Explore your options</button>
			</div>
		
		<?php endwhile;?>
	</div>
	
	<div class="service">
		<?php $the_query = new WP_Query( 'page_id=34' ); ?>
		
		<?php while ($the_query -> have_posts()) : $the_query -> the_post();  ?>
		
			<div class="banner">
				<img src="<?php the_field('service_banner_image'); ?>" />
				<?php echo the_field('banner_title'); ?>
			</div>
			<div class="service-intro">
				<?php the_excerpt(); ?>
				<button onclick="window.location.href='<?php the_permalink(); ?>'">Explore your options</button>
			</div>
		
		<?php endwhile;?>
	</div>
	
	<div class="service">
		<?php $the_query = new WP_Query( 'page_id=36' ); ?>
		
		<?php while ($the_query -> have_posts()) : $the_query -> the_post();  ?>
		
			<div class="banner">
				<img src="<?php the_field('service_banner_image'); ?>" />
				<?php echo the_field('banner_title'); ?>
			</div>
			<div class="service-intro">
				<?php the_excerpt(); ?>
				<button onclick="window.location.href='<?php the_permalink(); ?>'">Read more</button>
			</div>
		
		<?php endwhile;?>
	</div>

</div>

<?php get_footer(); ?>