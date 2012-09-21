require({
    paths: {
        jquery: 'libs/jquery',
		pusher: 'libs/pusher',
		jplayer: 'libs/jquery.jplayer.min',
		mp3: 'models/mp3'
    }
}, ['require', 'jquery', 'pusher', 'jplayer', 'mp3'], function (req, $, pusher, jPlayer, mp3) {

	$(function () {
		
		mp3.player();

    });
});