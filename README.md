# SimpleCast
A simple audio stream player for WordPress.

##What is this?
We needed a simple, straightforward way to embed a ShoutCast stream player on a website, and were quickly disappointed at the available options. So, seeing the lack of a simple player, we whipped one up. 

This plugin adds an HTML5 audio element to the page with the media source of your choice (specified in init.php, will be configurable in the future). If the browser doesn't support the audio element or the encoding yet, the player will fall back to the flash-based [Wordpress Audio Player](http://wpaudioplayer.com/).

That's it! Edit init.php with your media file/stream location and add the player to the page with the [simplecast] shortcode.