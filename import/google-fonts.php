<?php
function THEMENAME_fonts_url() {
    $font_url = '';
    if ( 'off' !== _x( 'on', 'Google font: on or off', 'THEMENAME' ) ) {
        $font_url = add_query_arg( 'family', urlencode( 'Roboto:300,400|Raleway:400,600,500,300|Roboto Slab|Cairo' ), "//fonts.googleapis.com/css" );
    }   
    return $font_url;
}

function THEMENAME_enqueue_fonts() {
    wp_enqueue_style( 'THEMENAME-fonts', THEMENAME_fonts_url(), array(), '1.0.0' );
}
add_action( 'wp_enqueue_scripts', 'THEMENAME_enqueue_fonts' );
