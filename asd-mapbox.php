<?php
/*
Plugin Name: ASD MapBOX
Description: Add a form to a MapBox
Version: 0.1
Author: Mike Notta
*/

add_filter('pre_get_document_title', 'change_the_title');
function change_the_title($title) {
    return $title . ' | ASD Mapbox';
}