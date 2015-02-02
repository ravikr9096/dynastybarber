<?php 
	register_nav_menu('menu', 'primary menu');
	
function dynasty_wp_title( $title, $sep ) {
	global $paged, $page;

	if ( is_feed() )
		return $title;

	// Add the site name.
	$title .= get_bloginfo( 'name', 'display' );

	// Add the site description for the home/front page.
	$site_description = get_bloginfo( 'description', 'display' );
	if ( $site_description && ( is_home() || is_front_page() ) )
		$title = "$title $sep $site_description";

	// Add a page number if necessary.
	if ( ( $paged >= 2 || $page >= 2 ) && ! is_404() )
		$title = "$title $sep " . sprintf( __( 'Page %s', 'twentytwelve' ), max( $paged, $page ) );

	return $title;
}
add_filter( 'wp_title', 'dynasty_wp_title', 10, 2 );

add_theme_support('post-thumbnails');
set_post_thumbnail_size( 250, 250, array( 'center', 'center') );

add_action('init', 'dynasty_media_page');

function dynasty_media_page() {
	$args = array(
		'public' => true,
		'label'  => 'Media Page Files',
		'supports'	=> array( 'title', 'thumbnail' )
    );
    register_post_type( 'media-files', $args );
}