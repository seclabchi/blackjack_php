<?php 
	session_start();
?>

<html>
	<head>
		<title>tonekids.com BLACKJACK</title>
		<script src="jquery-1.11.1.min.js"></script>
		<script src="blackjack-0.9.js"></script>
	</head>
	<body>
		
<?php 
	include_once 'cards.php';
	include_once 'blackjack_exception.php';

	echo "<h1>tonekids.com BLACKJACK</h1>";
	echo "<p>Yet another foray into writing interactive stuff for the web...</p>";
	echo "<p>The PHP <---> Javascript links are interesting but complex and 
		hard to wrap our heads around.  At some point in time this will be a
		fully-featured Blackjack game. But for now, here's some random cards 
		being generated by PHP from a Javascript timer handler and a bunch of 
		jQuery in the middle:</p>";
	echo "<hr/>";
	echo "<div class=\"dealerHand\"></div>";
	echo "<hr/>";
	echo "<div class=\"playerHand\"></div>";
	
	
	
	
	
?>

</body>
</html>