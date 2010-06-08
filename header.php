<!DOCTYPE html>
<html lang="en-us">
<head>
	<meta charset="utf-8">
	<title><?php bloginfo('name'); ?></title>	
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" />
	<link rel="alternate" type="application/rss+xml" title="RSS 2.0" href="<?php bloginfo('rss2_url'); ?>" />
	<link rel="alternate" type="text/xml" title="RSS .92" href="<?php bloginfo('rss_url'); ?>" />
	<link rel="alternate" type="application/atom+xml" title="Atom 0.3" href="<?php bloginfo('atom_url'); ?>" />
	<link rel="Shortcut Icon" href="<?php bloginfo('stylesheet_directory'); ?>/favicon.ico" type="image/x-icon" />	
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
	<?php wp_enqueue_script("jquery"); ?>
	<?php wp_head(); ?>
	
    <script>
    (function($) {
        $("#toc li").each(function(i) {
            $(this).wrapInner('<span class="title"></span>').append('<span class="number">'+i+'</span>').css("background", "#fff url(images/dot.png) repeat-x 0 0.8em");
        });
        
    })(jQuery);
    
    
    </script>
</head>

<body <?php body_class(); ?>>
		<header>
			<a id="logo" href="<?php bloginfo('url'); ?>/"><?php bloginfo('name'); ?></a>
			<p id="desc"><?php bloginfo('description'); ?></p>			
		</header>
		<div id="content" class="group">