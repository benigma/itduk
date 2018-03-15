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
	
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2483.126875427412!2d-0.09094308386062476!3d51.51088827963585!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x487603546cf4ac71%3A0x128298c046c3fd12!2sITD+UK!5e0!3m2!1sen!2suk!4v1521103971108" width="100%" height="500" frameborder="0" allowfullscreen></iframe>

<?php get_footer('contact'); ?>