if(Modernizr.audio.mp3 == "probably") {
	document.write('<audio id="simplecast_player" controls>'
   						+ '<source src="' + simplecastMediaURL + '" type="audio/mp3">'
					+ '</audio>');
} else {
   	AudioPlayer.setup(simplecastPlayerSWF, {
			          	width: "100%",
           				animation: "no",
            		});

	AudioPlayer.embed("simplecast_player_"+player_id, {soundFile: simplecastMediaURL});
}
