<?php
/**
 * Custom functions
 */

function get_asset($url)
{
    $url = get_template_directory_uri() . $url;

    return roots_root_relative_url($url);
}

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

/**
 * Gets the image url.
 *
 * @param array $image
 * @return mixed
 */
function get_image($image = array())
{
    $image['url'] = roots_root_relative_url($image['url']);

    return $image['url'];
}

/**
 * Gets the title for the page header if it's set within the ACF field.
 * Otherwise, gets the title from within the loop.
 *
 * @return bool|string
 */
function get_acf_title()
{
    if ( $title = get_field('heading') )
        return $title;

    return get_the_title();
}

// Donors-specific functions

/**
 * Sorts the donors based on their priority level.
 *
 * @param array $donors
 * @return array
 */
function sort_donors_by_type( array $donors)
{
    $priority = [
        'lead'     => [],
        'warrior'  => [],
        'guardian' => [],
        'founding' => [],
        'other'    => []
    ];

    if ( count($donors) > 0 ) {
        foreach ($donors as $donor) {
            $priority[$donor['donor_level']][] = $donor;
        }
    }

    return $priority;
}

function get_donor_class($type = '')
{
    if ( ! strlen($type) === 0 ) return '';

    if ( $type == 'lead' )
        return "donor donor-lead col-md-6 col-sm-6";

    if ( $type == 'warrior' )
        return "donor donor-warrior col-md-4 col-sm-4";

    if ( $type == 'guardian' )
        return "donor donor-guardian col-md-4 col-sm-4";

    if ( $type == 'founding' )
        return "donor donor-founding col-md-4 col-sm-4";

    if ( $type == 'other' )
        return "donor donor-other col-md-4 col-sm-4";

}

/**
 * Formats the url for the donor website to append an http:// to the
 * front of it if the user didn't add that in on the donor page.
 * Ideally it won't be needed, but... still, just in case.
 *
 * @param string $url
 * @return string
 */
function format_donor_url($url)
{
    if ( false != preg_match('/^(http:\/\/|https:\/\/)/i', $url) ) return $url;

    return 'http://' . $url;
}

function format_readable_url($url)
{
    if ( false == preg_match('/^(http:\/\/|https:\/\/)/i', $url) ) return $url;

    return preg_replace('/^(http:\/\/|https:\/\/)/i', '', $url);
}

/**
 * Gets the appropriate image size for the donor logo
 * and returns it as an image string.
 *
 * @param array $donor
 * @return string
 */
function get_donor_logo(array $donor)
{
    if ( count($donor) === 0 || ! array_key_exists('donor_logo', $donor) )
        return '';

    // Get the full size image if the donor level is the lead.
    $size = $donor['donor_level'] == 'lead' ? '' : 'donor_logo';

    $src = wp_get_attachment_image_src($donor['donor_logo'], $size );

    return HTMLBuilder::image($src, '', ['class' => 'donor-logo']);
}

final class HTMLBuilder {
    public static function image($src = array(), $alt = '', $attrs = array())
    {
        if ( ! $src ) return;

        if ( count($attrs) > 0 ) {
            $attrs = static::format_attrs($attrs);
        }

        $width  = $src[1] / 2;
        $height = $src[2] / 2;
        $src    = $src[0];

        return "<img src=\"{$src}\" width=\"{$width}\" height=\"{$height}\" alt=\"{$alt}\"{$attrs}>";
    }

    /**
     * Gets the attribute string.
     *
     * @param $attrs
     * @return string
     */
    private static function format_attrs($attrs)
    {
        $returnAttrs = '';
        foreach ($attrs as $key => $attr)
        {
            $returnAttrs .= " {$key}=\"{$attr}\"";
        }

        return $returnAttrs;
    }
}