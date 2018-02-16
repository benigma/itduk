<?php
/*
Template Name: Case Study Page Template
*/
?>
<?php get_header('case-study'); ?>
<header>
	
	<div class="header-content">
		<div class="promo"><img src="<?php echo the_field('banner_image'); ?>" /></div>
		<div class="introduction">
		<h5>Case Study</h5>
		<?php echo the_field('service_banner_content'); ?></div>
	</div>
	
</header>

<div class="casestudy-container">
	
	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
	
	<div class="challenge-container">
		<div class="cs-image">
			<img src="<?php echo get_template_directory_uri(); ?>/img/cs1.png" class="case-image-first" />
		</div>
		<div class="company-image">
			<img src="<?php echo the_field('company_logo_image'); ?>" />
		</div>
		<div class="challenge">
			<?php echo the_field('the_challenge'); ?>
		</div>
	</div>	
	
	<div class="approach-container">
		<div class="cs-image">
			<img src="<?php echo get_template_directory_uri(); ?>/img/cs2.png" class="case-image" />
		</div>
		<div class="approach">	
			<?php echo the_field('our_approach'); ?>
		</div>
		
		<div class="approach_image">
			<img src="<?php echo the_field('our_approach_image'); ?>" />
		</div>
	</div>
		
	<div class="results-container">	
		<div class="cs-image">
			<img src="<?php echo get_template_directory_uri(); ?>/img/cs3.png" class="case-image" />
		</div>
		<div class="quote">
			<?php echo the_field('customer_quote'); ?>
		</div>
		
		<div class="results">	
			<?php echo the_field('the_results'); ?>
		</div>
	</div>
		
	<?php endwhile; else: ?>
		<p><?php _e('No posts were found. Sorry!'); ?></p>
	<?php endif; ?>

</div>

<div class="extra-casestudy-container">

	<h2>Other <strong>Case</strong> Studies</h2>
	<p>Read about our other case studies to see the IT challenges, approach, and the results gained as a result of the new solutions.</p>
	<p>Interested in the services we provided? Email our sales team - <a href="mailto:sales@itduk.com">sales@itduk.com</a> or call us on <a href="tel:02076484940">020 7648 4940</a></p>
	
	<div class="casestudy-small-container">
	<?php
	$pagelist = get_pages('child_of=36&sort_column=menu_order&sort_order=asc');
	$pages = array();
	foreach ($pagelist as $page) {
	$pages[] += $page->ID;
	}
	
	$current = array_search(get_the_ID(), $pages);
	$prevID = $pages[$current-1];
	$nextID = $pages[$current+1];
	?>
	
		<div class="previous" <?php if(!empty($prevID)) { ?> style="background: url('<?php echo get_field('service_banner_image', $prevID); ?>') no-repeat center; background-size: 100%; cursor: pointer;" onclick="window.location.href='<?php echo get_permalink($prevID); ?>'" <?php } else { }; ?>>
		<?php if (!empty($prevID)) { ?>
			<div class="prev-arrow">
				<img src="<?php echo get_template_directory_uri(); ?>/img/prev-btn.png" />
			</div>
			
			<div class="prev-title">
				<?php echo get_field('banner_title', $prevID); ?>
			</div>
			<?php } ?>
		</div>
		<div class="next" <?php if(!empty($nextID)) { ?> style="background: url('<?php echo get_field('service_banner_image', $nextID); ?>') no-repeat center; background-size: 100%; cursor: pointer;" onclick="window.location.href='<?php echo get_permalink($nextID); ?>'" <?php } else { }; ?>>
		<?php if (!empty($nextID)) { ?>
			<div class="next-title">
				<?php echo get_field('banner_title', $nextID); ?>
			</div>
			
			<div class="next-arrow">
				<img src="<?php echo get_template_directory_uri(); ?>/img/next-btn.png" />
			</div>
		<?php } ?>	
		</div>
	
	</div>
	 
</div>

<?php get_footer('case-study'); ?>