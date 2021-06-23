<?php

if ( site_url() == "http://localhost/theme-dev" ) {
    define( "VERSION", time() );
} else {
    define( "VERSION", wp_get_theme()->get( "Version" ) );
}


function philosophy_bootstraping(){
    load_theme_textdomain( "philosophy" );
    add_theme_support( "post-thumbnails" );
    add_theme_support( "title-tag" );
    add_theme_support( 'html5', array( 'search-form' ) );
    add_theme_support( "post-formats", array( "image", "gallery", "quote", "video", "audio", "link" ) );
}
add_action("after_setup_theme", "philosophy_bootstraping");