<?php
/**
 * Functions which enhance the theme by hooking into WordPress
 *
 * @package SFEE
 */

/**
 * Adds custom classes to the array of body classes.
 *
 * @param array $classes Classes for the body element.
 * @return array
 */
function sfee_body_classes( $classes ) {
	// Adds a class of hfeed to non-singular pages.
	if ( ! is_singular() ) {
		$classes[] = 'hfeed';
	}

	// Adds a class of no-sidebar when there is no sidebar present.
	if ( ! is_active_sidebar( 'sidebar-1' ) ) {
		$classes[] = 'no-sidebar';
	}

	return $classes;
}
add_filter( 'body_class', 'sfee_body_classes' );

/**
 * Add a pingback url auto-discovery header for single posts, pages, or attachments.
 */
function sfee_pingback_header() {
	if ( is_singular() && pings_open() ) {
		printf( '<link rel="pingback" href="%s">', esc_url( get_bloginfo( 'pingback_url' ) ) );
	}
}
add_action( 'wp_head', 'sfee_pingback_header' );

/**
 *  Search Form
 */
function sfee_search_form( $form ) { 
	$form = '<form role="search" method="get" action="' . home_url( '/' ) . '">
		<label>
			<span class="screen-reader-text sr-only">' . __( 'Search for:',  'sfee') . '</span>
			<input type="search" class="search-field" placeholder="' . esc_attr__( 'e.g. delicious sandwiches', 'sfee') . '" value="" name="s">
		</label>
		<button type="submit" class="search-submit">
			<svg class="icon" width="19px" height="19px">' .
				sprintf( '<use xlink:href="%s/menu-icons.svg#icon-search-submit"></use>', get_stylesheet_directory_uri() . '/assets/images' ) . 
			'</svg>
			<span class="screen-reader-text sr-only">' . esc_html__( 'Search', 'sfee' ) . '</span>
		</button>
	</form>';

	return $form;
}
add_filter( 'get_search_form', 'sfee_search_form' );
