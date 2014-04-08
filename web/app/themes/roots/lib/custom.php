<?php
/**
 * Custom functions
 */

/**
 * Get the banner image if it exists.
 *
 * @param array $field
 * @return bool|string
 */
function banner_image($field = [])
{
    if ( count($field) === 0 ) return false;

    $url = get_image($field);

    return "<img class=\"background\" src=\"{$url}\">";
}

function get_image($image = array())
{
    return $image['url'];
}
add_filter('roots_root_relative_url', 'get_image');

function get_acf_title()
{
    if ( $title = get_field('heading') )
        return $title;

    return get_the_title();
}