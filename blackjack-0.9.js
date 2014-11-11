//var drawTimerResult=setInterval(function () {drawCard()}, 200);

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

