
// Pusher
var feeder = new Pusher("6713f57b7b14ab10a724");
var round = feeder.subscribe('rounds');

// Game
function Game() {

	this.name = "FB Game";
	this.round = null;
	
	this.renderRound = function() {
		console.log(this.round.details);
		$(".container").html(
			this.round.track
		);
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
	this.details = JSON.parse(data);
	this.mp3 = this.details.mp3;
	this.answers = this.details.answers;
	this.track = this.details.track;
}


var Game = new Game();
Game.setup();

