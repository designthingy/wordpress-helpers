<?php
/**
 * Add new mime types.
 *
 * @author    DesignThingy
 * @link      https://www.designthingy.co
 * @copyright DesignThingy
 *
 * @param string $image return string.
 */

function add_mime_types( $mimes ) {
  $mimes['svg'] = 'image/svg+xml';
  $mimes['svgz'] = 'image/svg+xml';
  return $mimes;
}
add_filter( 'upload_mimes', 'add_mime_types' );