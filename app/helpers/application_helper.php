<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');
/**
 * CodeIgniter View Helpers
 *
 * @package     CodeIgniter
 * @subpackage  Helpers
 * @category    Helpers
 * @author      ben
 * @link        http://dreamerslab.com/
 *
 */

// ------------------------------------------------------------------------

/**
 * array_merge_recursive does indeed merge arrays, but it converts values with duplicate
 * keys to arrays rather than overwriting the value in the first array with the duplicate
 * value in the second array, as array_merge does. I.e., with array_merge_recursive,
 * this happens (documented behavior):
 *
 * array_merge_recursive(array('key' => 'org value'), array('key' => 'new value'));
 *     => array('key' => array('org value', 'new value'));
 *
 * array_merge_recursive_distinct does not change the datatypes of the values in the arrays.
 * Matching keys' values in the second array overwrite those in the first array, as is the
 * case with array_merge, i.e.:
 *
 * array_merge_recursive_distinct(array('key' => 'org value'), array('key' => 'new value'));
 *     => array('key' => array('new value'));
 *
 * Parameters are passed by reference, though only for performance reasons. They're not
 * altered by this function.
 *
 * @param array $array1
 * @param array $array2
 * @return array
 * @author Daniel <daniel (at) danielsmedegaardbuus (dot) dk>
 * @author Gabriel Sobrinho <gabriel (dot) sobrinho (at) gmail (dot) com>
 */
if ( ! function_exists('array_merge_recursive_distinct'))
{
  function array_merge_recursive_distinct ( array &$array1, array &$array2 )
  {
    $merged = $array1;

    foreach ( $array2 as $key => &$value )
    {
      if ( is_array ( $value ) && isset ( $merged [$key] ) && is_array ( $merged [$key] ) )
      {
        $merged [$key] = array_merge_recursive_distinct ( $merged [$key], $value );
      }
      else
      {
        $merged [$key] = $value;
      }
    }

    return $merged;
  }
}

// ------------------------------------------------------------------------

/**
 * add string selected if the given 2 value match
 *
 * @access  public
 * @param   string
 * @param   string
 */
if ( ! function_exists('selected'))
{
  function selected($target, $value)
  {
    if($target == $value)
    {
      echo 'selected';
    }
  }
}

// ------------------------------------------------------------------------

/**
 * toggle contact link
 *
 * @access  public
 * @param   string
 * @param   string
 */
if ( ! function_exists('contact'))
{
  function contact($url, $from, $text)
  {
    $id = $url == 'contact' ? 'contact-us' : 'go-back';
    echo "<a id=\"{$id}\" href=\"".site_url($url).$from."\">{$text}</a>";
  }
}

// ------------------------------------------------------------------------

/**
 * generate url of previous photo
 *
 * @access  public
 * @param   string
 * @param   string
 */
if ( ! function_exists('pre_photo'))
{
  function pre_photo($page, $nav_selected, $type)
  {
    $class = "";
    if ($page - 1 == 0) {
      $class = "class=\"nav_disable\"";
      $pre_url = "#";
      $url = "<a id=\"photo-previous\" {$class} href=\"{$pre_url}\"></a>";
    } else {
      $pre_url = $page - 1;
      $url = "<a id=\"photo-previous\" {$class} href=\"".site_url("/photographer/{$nav_selected}/{$type}/{$pre_url}")."\"></a>";
    }
    echo $url;
  }
}

// ------------------------------------------------------------------------

/**
 * generate url of next photo
 *
 * @access  public
 * @param   string
 * @param   string
 */
if ( ! function_exists('next_photo'))
{
  function next_photo($page, $nav_selected, $type, $pages)
  {
    $class = "";
    if ($page + 1 > $pages) {
      $class = "class=\"nav_disable\"";
      $pre_url = "#";
      $url = "<a id=\"photo-next\" {$class} href=\"{$pre_url}\"></a>";
    } else {
      $pre_url = $page + 1;
      $url = "<a id=\"photo-next\" {$class} href=\"".site_url("/photographer/{$nav_selected}/{$type}/{$pre_url}")."\"></a>";
    }
    echo $url;
  }
}

/* End of file application_helper.php */
/* Location: ./app/helpers/application_helper.php */