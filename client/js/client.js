
// Pusher
var feeder = new Pusher("6713f57b7b14ab10a724");
var round = feeder.subscribe('rounds');

// Game
function Game() {

	this.name = "FB Game";
	this.rounds = [];
	this.round = 0;
	this.myAnswer = "";
	
	this.renderRound = function() {

		var thisRound = this.rounds[this.round]
		var answers = thisRound.answers;
		
		// Add answers
		for (var i = answers.length - 1; i >= 0; i--) {
			$('.guess ul li:nth-child(' + (i + 1) + ') a').text(answers[i]);
		};

		// next round 
		this.round++;
	};
	
	this.setup = function() {
		var closure = this;
		round.bind('new', function(data) {

			// parse response
			data = JSON.parse(data);
			console.log(data);

			// Show Answer
			if(closure.round>0) closure.showAnswer();

			// New Round
			closure.rounds.push(new Round(data));
			closure.renderRound();

		});
	}

	this.answer = function(answer) {
		this.myAnswer = answer;
	}

	this.showAnswer = function(answer) {

		lastRoundAnswer = this.rounds[this.round-1].track;

		if(this.myAnswer==lastRoundAnswer) {
			console.log('correct');
		} else {
			console.log('incorrect');
		}
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

