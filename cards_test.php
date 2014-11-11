<?php 

include_once 'cards.php';

echo "<h1>tonekids.com BLACKJACK cards_test</h1>";

test();

function test()
{	
	echo "<h2>Value enumeration:</h2>";
	
	for($i = 0; $i < Value::MAX_VALUE; $i++)
	{
		try 
		{
			$value = Value::intToValueStr($i);
			echo $i." = ".$value;
		}
		catch(BlackjackException $bjException)
		{
			echo $i." = "." BlackjackException";
		}
		
		echo "<br/>";
	}
	
	echo "<h2>Suit enumeration:</h2>";
	
	
	for($i = 0; $i < Suit::MAX_SUIT; $i++)
	{
		try 
		{
			$value = Suit::intToSuitStr($i);
			echo $i." = ".$value;
		}
		catch(BlackjackException $bjException)
		{
			echo $i." = "." BlackjackException";
		}
		
		echo "<br/>";
	}
	
	echo "<h2>Ace Value:</h2>";
	
	$testCard = new Card(Value::ACE, Suit::SPADES);
	
	echo "<p>";
	for($i = 0; $i < 21; $i++)
	{
		echo "Hand total ".$i.": ".$testCard->getNumericalValue($i);
		
		if($i < 20)
		{
			echo ", ";
		}
	}
	
	echo "</p>";
	
	echo "<h2>Displaying the cards programmatically...</h2>";
	
	$tmpCard = null;
	
	for($j = Suit::HEARTS; $j < Suit::MAX_SUIT; $j++)
	{
		for($i = Value::ACE; $i < Value::MAX_VALUE; $i++)
		{
			$tmpCard = new Card($i, $j);
			echo "<p>".$tmpCard->getValueStr()." of ".$tmpCard->getSuitStr().": ";
			$tmpCard->draw()."<p>";
		}
	}
}


?>