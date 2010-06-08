<?php

/**
 * Adds a new length for the_excerpt().
 **/
function new_excerpt_length($length) {
	return 35;
}

add_filter('excerpt_length', 'new_excerpt_length');

/**
 * Filters the_excerpt() to add a "Continue reading" link at the end.
 **/
function new_excerpt_more($post) {
	return '.... <a href="'. get_permalink($post->ID) . '">' . 'Continue reading.' . '</a>';
}

add_filter('excerpt_more', 'new_excerpt_more');

?>