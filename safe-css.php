<?php
/**
 * Add new properties of safe css filter.
 *
 * @author    DesignThingy
 * @link      https://www.designthingy.co
 * @copyright DesignThingy
 *
 * @param array $styles array of properties.
 */

function safe_css($styles) {
  $styles_arr = ['display', 'position', 'left', 'right'];
  $styles = array_merge($styles, $styles_arr);
  return $styles;

}
add_filter( 'safe_style_css', 'safe_css');