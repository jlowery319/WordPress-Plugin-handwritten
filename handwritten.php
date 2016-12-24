<?php
/* 
Plugin Name: Handwritten
Plugin URI:  
Description: Changes the font of post content to a handwriting-style font
Version:     1.0
Author:      eviljessica
Author URI:  http://jlowery319.github.io
License:     GPL2
*/
?>

<!-- CSS class to turn text cursive -->
<style type="text/css">
.to-handwritten {
	font-family: cursive;
}
</style>

<?php

// Debugging - save error if found
function tl_save_error() {
    update_option( 'plugin_error',  ob_get_contents() );
}
add_action( 'activated_plugin', 'tl_save_error' );

// display the error message: 
echo get_option( 'plugin_error' );


// Begin plugin

function to_handwritten_font( $text ) {
	// return $text since this is the_content
	return "<span class='to-handwritten'>$text</span>";
}

// the_content is sent as $text arg to to_handwritten font
add_filter( 'the_content', 'to_handwritten_font' );
