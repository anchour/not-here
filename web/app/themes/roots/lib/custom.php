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

    $url = roots_root_relative_url($field['url']);

    return "<img class=\"background\" src=\"{$url}\">";
}