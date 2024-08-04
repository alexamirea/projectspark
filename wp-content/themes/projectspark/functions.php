<?php
function projectspark_base_setup() {
	// Add default posts and comments RSS feed links to head.
	add_theme_support('automatic-feed-links');

	// Let WordPress manage the document title.
	add_theme_support('title-tag');

	// Enable support for Post Thumbnails on posts and pages.
	add_theme_support('post-thumbnails');

	// Register a single menu location.
	register_nav_menus(array(
		'primary' => __('Primary Menu', 'projectspark_theme'),
	));

	// Switch default core markup for search form, comment form, and comments to output valid HTML5.
	add_theme_support('html5', array(
		'search-form', 'comment-form', 'comment-list', 'gallery', 'caption'
	));
}
add_action('after_setup_theme', 'projectspark_base_setup');

function projectspark_scripts_setup() {
	wp_enqueue_style('my-custom-theme-style', get_stylesheet_uri());
}
add_action('wp_enqueue_scripts', 'projectspark_scripts_setup');
