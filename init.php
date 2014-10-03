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

  // give player id a random number to help avoid collisions between multiple instances
  $player_id = rand();

	$output = '<div id="simplecast_player_' . $player_id . '">';
	$output .= '<script type="text/javascript" src="' . plugins_url('vendor/audio-player/audio-player.js', __FILE__) . '"></script>';

	// simplecast.js needs to know the path to the player swf and the media file URL.

	$output .= '<script type="text/javascript">
					var simplecastMediaURL = "' . $args['media_url'] .'";
					var simplecastPlayerSWF = "' . plugins_url('vendor/audio-player/player.swf', __FILE__) . '";
          var player_id = "' . $player_id . '";
				</script>';

  // pass player id to js helper.
  $output .= '<script type="text/javascript" src="'. plugins_url('simplecast.js', __FILE__) . '"></script>';
	$output .= '</div>';

	return $output;
}

function simplecast_scripts() {
	wp_enqueue_script( 'modernizr-custom', plugins_url('/vendor/modernizr.custom.22223.js', __FILE__) );
}

add_action( 'wp_enqueue_scripts', 'simplecast_scripts' );

add_shortcode( 'simplecast', 'simplecast_shortcode' );
?>
