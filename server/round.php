<?php

class Round {

	public $track;
	public $answers;

	function __construct() {
		// pick track
		$countTracks = count($GLOBALS['tracks']);
		$pick = rand(0,$countTracks);

		$this->track = $GLOBALS['tracks'][$pick-1];


	}

	function pullRound() {
		return "{ 'track': '" . $this->track[0] . "', 'mp3': 'http://cdn-preview-a.deezer.com/stream/a4e149e52e2ffdc4f057661b40ba7ee3-1.mp3', answers: ['song 1', 'song 2', 'song 3', 'song 4'] }";
	}
}

?>