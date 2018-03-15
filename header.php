<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<title><?php wp_title('|','true','right'); ?></title>
	<link rel="stylesheet" type="text/css" href="<?php bloginfo('stylesheet_url'); ?>">
	
	<link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/favicon-32x32.png" sizes="32x32" />
	<link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/favicon-16x16.png" sizes="16x16" />
	<link href="<?php echo get_template_directory_uri(); ?>/img/apple-touch-icon-180x180.png" rel="apple-touch-icon" sizes="180x180" />
	<link rel="icon" type="image/png" href="<?php echo get_template_directory_uri(); ?>/img/android-chrome-192x192.png" sizes="192x192">

	<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>

<nav id="mainNav">
	<div class="logo">
		<a href="<?php echo get_site_url(); ?>">
		<svg id="ITDUK_Logo" data-name="ITDUK_Logo" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 177.73 42.4">
		<title>ITD UK</title><rect width="7.56" height="42.39" rx="1.42" ry="1.42"/><path d="M415.12,290.82H372.89a1.42,1.42,0,0,0-1.42,1.42V296a1.42,1.42,0,0,0,1.42,1.42h17.18V331.8a1.42,1.42,0,0,0,1.42,1.42h4.73a1.42,1.42,0,0,0,1.42-1.42V297.38h17.49a1.42,1.42,0,0,0,1.42-1.42v-3.73A1.42,1.42,0,0,0,415.12,290.82Z" transform="translate(-359.82 -290.82)"/><path d="M483.15,333.21a6.45,6.45,0,0,1-6.45-6.45v-2.26a2,2,0,0,1,0-.22l0-.18V308.85a0.61,0.61,0,0,1,.61-0.61h3a0.61,0.61,0,0,1,.61.61v17.07a3.89,3.89,0,0,0,3.87,3.69h13.84a3.91,3.91,0,0,0,4-3.89V308.85a0.61,0.61,0,0,1,.61-0.61h3a0.61,0.61,0,0,1,.61.61v17.92a6.45,6.45,0,0,1-6.45,6.45H483.15Z" transform="translate(-359.82 -290.82)"/><path d="M462.12,290.82H422a1.42,1.42,0,0,0-1.42,1.42V331.8a1.42,1.42,0,0,0,1.42,1.42h40.07a10.61,10.61,0,0,0,10.57-10.57V301.39A10.61,10.61,0,0,0,462.12,290.82Zm-2.62,35.83h-31.3V297.38h31.3a5.69,5.69,0,0,1,5.63,5.06v19.15A5.69,5.69,0,0,1,459.49,326.65Z" transform="translate(-359.82 -290.82)"/><path d="M534.72,333.22h-0.23a4.51,4.51,0,0,1-1.32-.54l-18-10v9.93a0.61,0.61,0,0,1-.61.61h-3a0.61,0.61,0,0,1-.61-0.61V308.89a0.61,0.61,0,0,1,.61-0.61h3a0.61,0.61,0,0,1,.61.61v9.93l0.45-.25,0.1-.07a0.64,0.64,0,0,1,.29-0.16l17-9.52a5.14,5.14,0,0,1,1.66-.71h2.13a0.69,0.69,0,0,1,.69.69v2.13a0.68,0.68,0,0,1-.31.55l-16.64,9.18,16.63,9.15a0.78,0.78,0,0,1,.33.59v2.13a0.69,0.69,0,0,1-.69.69h-2.13Z" transform="translate(-359.82 -290.82)"/></svg></a>
	</div>
	<?php 
		$defaults = array(	
		'container' => false, 	
		'theme_location' => 'primary-menu'
		);
						
		wp_nav_menu( $defaults );
	 ?>

</nav>