require({
    paths: {
        jquery: 'libs/jquery',
		pusher: 'libs/pusher',
		facebook: 'models/facebook',
		jplayer: 'libs/jquery.jplayer.min',
		mp3: 'models/mp3'
    }
}, ['require', 'jquery', 'pusher', 'facebook', 'jplayer', 'mp3'], function (req, $, pusher, facebook, jPlayer, mp3) {

	$(function () {
		
		facebook.init();
		mp3.player();

    });
});