<?php

// ------------------------------------------------------------------------------------------
// Alow SVG to be uploaded
if (!function_exists('cc_mime_types')) {
    function cc_mime_types($mimes)
    {
        $mimes['svg'] = 'image/svg+xml';
        return $mimes;
    }
}
add_filter('upload_mimes', 'cc_mime_types');

// ------------------------------------------------------------------------------------------
// ADDITION CUSTOM IMAGE SIZES BELOW UNCOMMENT TO ENABLE

// Add additional image sizes
add_image_size('banner-image', 1800, 770, true);

// Register the new image sizes for use in the add media modal in wp-admin
// function foundationpress_custom_sizes( $sizes ) {
//     return array_merge(
//         $sizes, array(
//             'fp-small'  => __( 'FP Small' ),
//             'fp-medium' => __( 'FP Medium' ),
//             'fp-large'  => __( 'FP Large' ),
//             'fp-xlarge' => __( 'FP XLarge' ),
//         )
//     );
// }
// add_filter( 'image_size_names_choose', 'foundationpress_custom_sizes' );
