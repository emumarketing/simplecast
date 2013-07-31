<?php
/*
Plugin Name: SimpleCast
Plugin URI: http://marketing.uoregon.edu
Description: Simple Shoutcast Player
Version: 1.0
Author: Joshua Rose
Author URI: http://marketing.uoregon.edu
*/

/**
 * Shortcode handler, renders HTML for player
 *
 * @return   String containing audio player HTML.
 */
function simplecast_shortcode($atts) {
	// Get stream URL from the shortcode.
	$args = shortcode_atts(array( 'media_url' => 'undefined' ), $atts);

	// The basic HTML5 audio component, hopefully this works.
	$output = '<audio id="simplecast_player" controls>
    			<source src="'. $args['media_url'] .'" type="audio/mp3">
			  </audio>';

	// Setup flash player in case we need it
	$output .= '<script type="text/javascript" src="' . plugins_url('vendor/audio-player/audio-player.js', __FILE__) . '"></script>';
	$output .= '<script type="text/javascript">  
            	AudioPlayer.setup("' . plugins_url('vendor/audio-player/player.swf', __FILE__) . '", {  
                	width: "100%",
                	animation: "no",  
            	});
        		</script>';

    // Check to see if HTML5 player will work, or failover to flash player.    		
	$output .= '<script type="text/javascript">
			    var audioTag = document.createElement(\'audio\');
			    if (!(!!(audioTag.canPlayType) && ("no" != audioTag.canPlayType("audio/mpeg")) && ("" != audioTag.canPlayType("audio/mpeg")))) {
			        AudioPlayer.embed("simplecast_player", {soundFile: "'. $args['media_url'] .'"});
			    }
				</script>';

	return $output;
}

add_shortcode( 'simplecast', 'simplecast_shortcode' );
?>