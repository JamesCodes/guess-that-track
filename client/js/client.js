
// Pusher
var feeder = new Pusher("6713f57b7b14ab10a724");
var round = feeder.subscribe('rounds');

// Game
function Game() {

	this.name = "FB Game";
	this.round = new Round({ "track": "Jump" , "mp3": "http://cdn-preview-a.deezer.com/stream/a4e149e52e2ffdc4f057661b40ba7ee3-1.mp3", "answers": [ "Imagine", "Go your own way", "We are young", "Take a walk" ] });
	
	this.renderRound = function() {

		var answers = this.round.answers;
		
		// Add answers
		for (var i = answers.length - 1; i >= 0; i--) {
			$('.guess ul li:nth-child(' + (i + 1) + ') a').text(answers[i]);
		};

		console.log(this.round);
		

		//console.log(this.round.track);
	};
	
	this.setup = function() {
		var closure = this;
		round.bind('new', function(data) {
			closure.round = new Round(data);
			closure.renderRound();

		});
	}
}


function Round(data) {
	this.details = data;
	this.mp3 = this.details.mp3;
	this.answers = this.details.answers;
	this.track = this.details.track;
}


var Game = new Game();
Game.setup();

