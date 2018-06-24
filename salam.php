<?php
/**
 * @package hts_salam
 * @version 1.0
 */
/*
Plugin Name: Howdy to Salam
Plugin URI: 
Description: Changes Howdy text displayed in WordPress admin to Assalam O Alaikum which is blessing in Arabic.
Author: Fahad Uddin
Version: 1.0
Author URI: https://www.fahaduddin.com
Text Domain: hts_salam
*/
add_filter('gettext', 'hts_change_howdy', 10, 3);

function hts_change_howdy($translated, $text, $domain) {

    if (!is_admin() || 'default' != $domain)
        return $translated;

    if (false !== strpos($translated, 'Howdy'))
        return str_replace('Howdy', 'Assalam O Alaikum', $translated);

    return $translated;
}