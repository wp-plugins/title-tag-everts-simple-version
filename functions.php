<?php
function evert_title_tag( $title, $sep ) {
	global $paged, $page;

	if ( is_feed() )
		return strip_tags( get_the_title() );

	// First set to the site name.
	$sitename = get_bloginfo( 'name' );

	// Add the site description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		$title = "$sitename $sep $site_description";
	else $title = get_the_title() ." $sep $sitename";

	// Add a page number if necessary.
	if ( $paged >= 2 || $page >= 2 )
		$title = "$title $sep " . sprintf( __( 'Page %s', 'twentytwelve' ), max( $paged, $page ) );

	return strip_tags( $title );
}

add_filter( 'wp_title', 'evert_title_tag', 10, 2 );

?>

