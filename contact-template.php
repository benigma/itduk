<?php
/*
Template Name: Contact Template
*/
?>
<?php get_header(); ?>
<header>
	
	<div class="header-content">
		<div class="introduction"><?php echo the_field('service_banner_content'); ?></div>
	</div>
	
</header>

<div class="page-container">

	<div class="sub-menu">
		<div class="sub-menu-header">Contact <strong>Information</strong></div>
		<ul>
			<li><a href="<?php echo get_site_url(); ?>/contact-us">Contact Us</a></li>
			<li><a href="<?php echo get_site_url(); ?>/contact-us/work-with-us/">Work with us</a></li>
		</ul>
		
		<div class="contact-information">	
			<h3><strong>general</strong> enquiries</h3>
			<p class="mail"><a href="mailto:sales@itduk.com">sales@itduk.com</a></p>
			<p class="tel"><a href="tel:02076484940">020 7648 4940</a></p>
			
			<h3><strong>TECHNICAL</strong> SUPPORT</h3>	
			<p class="mail"><a href="mailto:support@itduk.com">support@itduk.com</a></p>
			<p class="tel"><a href="tel:02073374602">020 7337 4602</a></p>
			
			<h3><strong>london</strong> office</h3>
			<span class="address"></span>
			<p class="address-text">ITD UK<br>
			8 Laurence Pountney Hill<br>
			London<br>
			EC4R 0BE</p>
		</div>
		
	</div>
	
	<div class="page-content">
		<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
		
			<?php the_content(); ?>
		
		<?php endwhile; else: ?>
			<p><?php _e('No posts were found. Sorry!'); ?></p>
		<?php endif; ?>
		
	</div>

</div>
	
<iframe width='100%' height='500px' frameBorder='0' src='https://a.tiles.mapbox.com/v4/benigma.004fkc50/attribution,zoompan,zoomwheel.html?access_token=pk.eyJ1IjoiYmVuaWdtYSIsImEiOiJlZjg4YmJiNmMyYTlkMjQ0MzlmYTA1YjYwYTRmN2NiYiJ9.nz1A1vJJVSXY5GgKNqQrTw'></iframe>

<?php get_footer('contact'); ?>