<?php
/*
Template Name: Homepage
*/
?>
<?php get_header(); ?>

<hgroup>
	<h1>A Book Crowdsourced in One Week</h1>
	<h2>May 21-28, 2010</h2>
</hgroup>
<p class="highlight"><a href="http://hackingtheacademy.org/what-this-is-and-how-to-contribute/">What This Is, and How to Contribute</a></p>
<p class="highlight"><a href="http://hackingtheacademy.org/2010/06/next-steps/">Next Steps</a></p>
<h2>Table of Contents</h2>
<nav id="toc">
<ul>
    <?php wp_list_pages('title_li=&depth=1&sort_column=menu_order&exclude=2,33'); ?>
</ul>
</nav>
	
<?php get_footer(); ?>
