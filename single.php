<?php get_header(); ?>
<header>
	
	<div class="blog-header-content">
		<div class="introduction"><?php echo the_field('blog_header_information'); ?></div>
	</div>
	
</header>

<div class="blog-post">
    <div class="blog-content">
        <article>
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <?php the_content(); ?>
            <?php endwhile; else: ?>
                <p><?php _e('No posts were found. Sorry!'); ?></p>
            <?php endif; ?>
        </article>
    </div>

    <div class="additional-blog-posts">
        <div class="further-information">
            <h3>Get in <strong>touch</strong></h3>
            <p>Interested in working with ITD?</p>
            <p>We are happy to answer any questions you may have about our services. Reach out to us and we’ll respond as soon as we can.</p>
            <p><a href="mailto:sales@itduk.com">sales@itduk.com</a><br />
            020 7648 4940</p>
        </div>

        <aside>

        </aside>
    </div>
</div>

<?php get_footer('contact'); ?>