<?php 
	session_start();
?>

<html>
<head>
	<title>tonekids.com BLACKJACK</title>
	<script src="jquery-1.11.1.min.js"></script>
	<script src="blackjack-0.9.js"></script>
	<link rel="stylesheet" type="text/css" href="main.css" />
</head>
<body>
	 <h1>tonekids.com BLACKJACK</h1> 
	 <p>Yet another foray into writing interactive stuff for the web...</p> 
	 <p>The PHP <---> Javascript links are interesting but complex and 
		hard to wrap our heads around.  At some point in time this will be a
		fully-featured Blackjack game. </p> 
	 <hr/> 
	 <div class="dealerHand"></div> 
	 <hr/> 
	 <div class="playerHand"></div> 
	 <div class="playerControl">
	 <form name="playerControl">
	 	<input type="button" class="playerButton" value="New Game" onclick="newGame()">
	 	<input type="button" class="playerButton" value="Hit" onclick="playerHit()">
	 	<input type="button" class="playerButton" value="Stand" onclick="playerStand()">
	 </form>
	 </div>
	 <script>newGame();</script>
</body>
</html>