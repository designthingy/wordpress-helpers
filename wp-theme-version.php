<?php
/**
 * Get WordPress Theme Version.
 *
 * @author    DesignThingy
 * @link      https://www.designthingy.co
 * @copyright DesignThingy
 *
 * @return string $image return string.
 */
function wp_theme_version() {
	if ( function_exists( 'wp_get_theme' ) ) {
		$curr_theme = wp_get_theme();
	} else {
		return null;
	}
	return ( $curr_theme && isset( $curr_theme['Version'] ) ) ? $curr_theme['Version'] : null;
}
define( 'VERSION', wp_theme_version(), false );
