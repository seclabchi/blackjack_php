
function playerHit()
{
	drawCard();
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





function drawCard(who)
{
	if(who == "dealer")
	{
		$.post("card_interface.php", {getRandomCard:"TRUE"}, function(data){
			$("div.dealerHand").append(data);
		});
	}
	else
	{
		$.post("card_interface.php", {getRandomCard:"TRUE"}, function(data){
			$("div.playerHand").append(data);
		});
	}
		
}

function deal()
{
	drawCard("player");
	drawCard("dealer");
	drawCard("player");
	drawCard("dealer");
}

function newGame()
{
	 $.post("game_interface.php", {gameAction:"RESET"}, function(data){
		$("div.playerHand").html("");
		$("div.dealerHand").html("");
		});
	deal();
}

