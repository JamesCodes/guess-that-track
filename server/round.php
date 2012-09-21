<?php

class Round {

	public $track;
	public $answers;

	function __construct() {
		// pick track
		$countTracks = count($GLOBALS['tracks'])-1;
		$pick1 = rand(0,$countTracks);
		$pick2 = rand(0,$countTracks);
		$pick3 = rand(0,$countTracks);
		$pick4 = rand(0,$countTracks);

		$this->answers = array($GLOBALS['tracks'][rand(0,$countTracks)][0], $GLOBALS['tracks'][rand(0,$countTracks)][0], $GLOBALS['tracks'][rand(0,$countTracks)][0], $GLOBALS['tracks'][rand(0,$countTracks)][0]);

		$this->track = $GLOBALS['tracks'][$pick1];


	}

	function pullRound() {

		$randomTrack = $this->getRandomTrack();
		
		return "{ 'track': '" . $randomTrack->title . "', 
		 			'mp3': '". $randomTrack->preview ."', 
		 			answers: ['" . $this->getRandomAnswer() . "', '" . $this->getRandomAnswer() . "', '" . $this->getRandomAnswer() . "', '" . $this->getRandomAnswer() . "'] }";
	}

	function getRandomTrack(){
		$randomTrackId = rand(1000000, 15000000);

		$deezerUrl = "http://api.deezer.com/2.0/track/$randomTrackId";
		$ch = curl_init(); 
		$timeout = 10;
		curl_setopt($ch, CURLOPT_URL, $deezerUrl);
		curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, $timeout);
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
		$data = curl_exec($ch);
		curl_close($ch);

		return json_decode($data);

	}

	function getRandomAnswer(){
		$track = $this->getRandomTrack();
		return $track->title;

	}
}

?>