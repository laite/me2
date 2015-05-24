<?php
/**
 * Jetpack Compatibility File
 * See: https://jetpack.me/
 *
 * @package me2
 */

/**
 * Add theme support for Infinite Scroll.
 * See: https://jetpack.me/support/infinite-scroll/
 */
function me2_jetpack_setup() {
	add_theme_support( 'infinite-scroll', array(
		'container' => 'main',
		'render'    => 'me2_infinite_scroll_render',
		'footer'    => 'page',
	) );
} // end function me2_jetpack_setup
add_action( 'after_setup_theme', 'me2_jetpack_setup' );

function me2_infinite_scroll_render() {
	while ( have_posts() ) {
		the_post();
		get_template_part( 'template-parts/content', get_post_format() );
	}
} // end function me2_infinite_scroll_render