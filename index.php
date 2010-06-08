<?php get_header(); ?>

<?php if (have_posts()) : while (have_posts()) : the_post(); ?>
<div class="post" id="post-<?php the_ID(); ?>">
	<h1><?php the_title(); ?></h1>
	<br />
	<br />
	<div class="content">
		<?php 
		if (is_single() || is_page()) {
		    the_content(); 
		} else {
		    the_excerpt();
		}
		?>
	</div>	
</div>

<?php endwhile; else: ?>
<p><?php _e('Sorry, no posts matched your criteria.'); ?></p>

<?php posts_nav_link(' &#8212; ', __('&laquo; Previous Page'), __('Next Page &raquo;')); ?>
<?php endif; ?>
<br />
<br />
<br />
<br />

<?php get_footer(); ?>