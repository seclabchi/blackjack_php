//var drawTimerResult=setInterval(function () {drawCard()}, 200);

function playerHit()
{
	$.post("game_interface.php", {gameAction:"HIT_STAND", playerAction:"HIT"}, function(data){
		$("div.playerHand").html(data);
		});
}

function playerStand()
{
	$.post("game_interface.php", {gameAction:"HIT_STAND", playerAction:"STAND"}, function(data){
		$("div.playerHand").html(data);
		});
}

function newGame()
{
	$.post("game_interface.php", {gameAction:"RESET"}, function(data){
		$("div.playerHand").html(data);
		});
}

var numRuns = 0;

function drawCard()
{
	if(0 == numRuns)
	{
		$.post("card_interface.php", {getRandomCard:"TRUE"}, function(data){
			$("div.dealerCard").html(data);
			});
	}
	else
	{
		$.post("card_interface.php", {getRandomCard:"TRUE"}, function(data){
			$("div.dealerCard").append(data);
			});
	}
	
	numRuns++;
	if(52 == numRuns)
	{
		numRuns = 0;
	}
}

