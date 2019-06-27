<?php
/**
 * Modify excerpt like length and more.
 *
 * @author    DesignThingy
 * @link      https://www.designthingy.co
 * @copyright DesignThingy
 */

/**
 * Theme excert length limit.
 *
 * @param int $length limited post excerpt words.
 */
function excerpt_length($length)
{
  $length = 146;
  return $length;
}
add_filter('excerpt_length', 'excerpt_length', 999);
/**
 * Theme excert more.
 *
 * @param string $more string after excerpt.
 */
function excerpt_more($more)
{
  $more = '...';
  return $more;
}
add_filter('excerpt_more', 'excerpt_more');