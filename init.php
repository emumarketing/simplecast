<?php
/*
Plugin Name: SimpleCast
Plugin URI: http://marketing.uoregon.edu
Description: Simple Shoutcast Player
Version: 1.0
Author: Joshua Rose
Author URI: http://marketing.uoregon.edu
*/


function simplecast_shortcode() {
	$output = '<audio id="audioplayer" preload="metadata" controls style="width:100%;" >
    			<source src="http://d55-84.uoregon.edu:8000/;stream.nsv&type=mp3" type="audio/mp3">
			  </audio>';

	return $output;
}

add_shortcode( 'simplecast', 'simplecast_shortcode' );
?>