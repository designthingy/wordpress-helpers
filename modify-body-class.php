<?php
/**
 * Add new classes to body class filter.
 *
 * @author    DesignThingy
 * @link      https://www.designthingy.co
 * @copyright DesignThingy
 *
 * @param array $classes array of classes.
 */
function modify_body_class($classes) {
  switch ( get_field('page_background') ) {
    case 'Blue' :
      $classes[] = 'page--blue';
      break;
    case 'Yellow' :
      $classes[] = 'page--yellow';
      break;
    case 'Violet' :
      $classes[] = 'page--violet';
      break;
    default:
      $classes[] = 'page--yellow';
  }
  return $classes;
}
add_filter('body_class', 'modify_body_class');