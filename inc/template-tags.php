<?php
/**
 * Custom template tags for this theme
 *
 * @package WordPress
 * @subpackage Twenty_Twenty_One
 * @since Twenty Twenty-One 1.0
 */


if ( ! function_exists( 'twenty_twenty_one_the_posts_navigation' ) ) {
	/**
	 * Print the next and previous posts navigation.
	 *
	 * @since Twenty Twenty-One 1.0
	 *
	 * @return void
	 */
	function twenty_twenty_one_the_posts_navigation() {
		the_posts_pagination();
	}
}

