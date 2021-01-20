<?php

function ui_button_handler( $atts ) {

    $atts = shortcode_atts([
        'content' => 'Click Me!',
        'link' => '#'
    ], $atts);

    return '<a href="' . $atts['link'] . '" class="ui-btn">' . $atts['content'] . '</a>';
}