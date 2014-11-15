<?php 

include_once 'cards.php';

if( isset($_POST['getRandomCard']) )
{
	$value = rand(Value::ACE, Value::KING);
	$suit = rand(Suit::HEARTS, Suit::SPADES);
	$card = new Card($value, $suit);
	
	$card->draw(); 
}

?>