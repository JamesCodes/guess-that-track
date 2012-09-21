
// Pusher
var feeder = new Pusher("6713f57b7b14ab10a724");
var round = feeder.subscribe('rounds');

// Audio
var audio = null;

// Game
function Game() {

	this.name = "FB Game";
	this.rounds = [];
	this.round = 0;
	this.myAnswer = "";
	this.audio = null;
	
	this.renderRound = function() {

		var thisRound = this.rounds[this.round]
		var answers = thisRound.answers;
		var mp3 = thisRound.mp3;

		// Add audio
		// $('#player audio source').attr('src', mp3)
		if(this.audio!=null) this.audio.stop();
		this.audio = new buzz.sound(mp3, { autoplay: true });
		
		// Add answers
		for (var i = answers.length - 1; i >= 0; i--) {
			$('.guess ul li:nth-child(' + (i + 1) + ') a').text(answers[i]).attr('data-track-id', answers[i])
		};

		// next round 
		this.round++;
	};
	
	this.setup = function() {
		var closure = this;

		// Listen for pusher evenets (new rounds)
		round.bind('new', function(data) {

			$('.user .answer').removeClass('incorrect').removeClass('correct');

			// parse response
			data = JSON.parse(data);
			console.log(data);

			// Show Answer
			if(closure.round>0) closure.showAnswer();

			// New Round
			closure.rounds.push(new Round(data));
			closure.renderRound();

			startTimer();
		});

		// Answers click bind
		$('.guess a').bind("click", function(e) {
			e.preventDefault();
			closure.myAnswer = $(this).attr('data-track-id');
			console.log(closure.rounds, closure.round-1);
			RoundAnswer = closure.rounds[closure.round-1].track;

			if(closure.myAnswer==RoundAnswer) {
				$('.you .answer').addClass('correct');
			} else {
				$('.you .answer').addClass('incorrect');
			}
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

$(document).ready(function() {
	var game = new Game();
	game.setup();
});

function startTimer(){

	var count = 0;

	// Timer bar
	var time = setInterval(function(){
		count++;
		$('.game .countdown-bar .amount').css('width', count + '%');

		if(count >= 100) clearInterval(time);
	}, 1000/30);


	var players = 15;

	for (var i = 0; i < players; i++) {
		
		var answer = Math.round(Math.random());
		
		

		var randomTime = Math.round(Math.random() * 3000) + 0;

		setTimeout("randomAnswer(" + i + "," + answer + ")", randomTime);
	};
}

function randomAnswer(user, answer){

	if(answer == 0){
		answer = 'correct';
	}else{
		answer = 'incorrect';
	}

	$('.user .answer').eq(user + 1).addClass(answer)
}
