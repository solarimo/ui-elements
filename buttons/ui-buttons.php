<?php

function ui_buttons_handler( $atts, $content = null ) {
    return '<div class="ui-buttons">' . do_shortcode($content) . '</div>';
}