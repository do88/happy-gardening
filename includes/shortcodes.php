<?php

// ------------------------------------------------------------------------------------------
// Custom shortcodes if needed

function buttonSC($params, $content = null)
{
    // default parameters
    extract(shortcode_atts(array(
        'link' => '',
        'type' => '',
        'target' => '_self',
    ), $params));
    $html = "<a class='button $type' href='$link' target='$target'>$content</a>";
    return $html;
}
add_shortcode('button', 'buttonSC');
