# SimpleCast
A simple audio stream player for WordPress.

##What is this?
We needed a simple, straightforward way to embed a ShoutCast stream player on a website, and were quickly disappointed at the available options. So, seeing the lack of a simple player, we whipped one up. 

This plugin adds an HTML5 audio element to the page with the media source of your choice. If the browser doesn't support the audio element or the encoding yet, the player will fall back to the flash-based [Wordpress Audio Player](http://wpaudioplayer.com/).

Add the player to a page with the [simplecast media_url="http://server.com:port/path/to/stream"] shortcode (e.g. [simplecast media_url="http://d55-84.uoregon.edu:8000/;stream.nsv&type=mp3"].