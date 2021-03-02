<?php

// Denny direct access
if (!defined('ABSPATH')) {
    exit;
}

// Uncomment as necessary
require get_template_directory() . '/includes/breadcrumbs.php';
require get_template_directory() . '/includes/cleanup.php';
require get_template_directory() . '/includes/enqueues.php';
require get_template_directory() . '/includes/setup.php';
require get_template_directory() . '/includes/navbar.php';
require get_template_directory() . '/includes/svg-loader.php';
require get_template_directory() . '/includes/disable-comments.php';

// TGM Register Required Plugins
require get_template_directory() . '/includes/tgm/class-tgm-plugin-activation.php';
require get_template_directory() . '/includes/tgm/tgm-plugins.php';

require get_template_directory() . '/includes/media.php';
// require get_template_directory() . '/includes/shortcodes.php';
// require get_template_directory() . '/includes/search-widget.php';
// require get_template_directory() . '/includes/widgets.php';
