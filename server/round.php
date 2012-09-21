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

		return '{ 
			"track": "' . $this->track[0] . '" ,
			"mp3": "http://cdn-preview-a.deezer.com/stream/a4e149e52e2ffdc4f057661b40ba7ee3-1.mp3",
			"answers": [
				"' . $this->track[0] . '",
				"' . $this->answers[1] . '",
				"' . $this->answers[2] . '",
				"' . $this->answers[3] . '"
			]

		}';

	}
}

?>