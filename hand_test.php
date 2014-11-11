<?php 
	include_once 'hand.php';
	include_once 'cards.php';
	
	echo "<h1>tonekids.com BLACKJACK hand_test</h1>";

	$testHand = new Hand();
	$tmpCard = null;

	echo "<hr/>";
	
	echo "Test hand has ".$testHand->getTotalStr().".<br/>";

	$tmpCard = new Card(Value::ACE, Suit::SPADES);
	$testHand->dealCard($tmpCard);
	
	echo "Dealt ".$tmpCard->getStringDescription().".</br>";
	echo "Test hand has ".$testHand->getTotalStr().".<br/>";
	
	$tmpCard = new Card(Value::EIGHT, Suit::CLUBS);
	$testHand->dealCard($tmpCard);
	
	echo "Dealt ".$tmpCard->getStringDescription().".</br>";
	echo "Test hand has ".$testHand->getTotalStr().".<br/>";
	
	$tmpCard = new Card(Value::KING, Suit::DIAMONDS);
	$testHand->dealCard($tmpCard);
	
	echo "Dealt ".$tmpCard->getStringDescription().".</br>";
	echo "Test hand has ".$testHand->getTotalStr().".<br/>";
	
	$tmpCard = new Card(Value::QUEEN, Suit::HEARTS);
	$testHand->dealCard($tmpCard);
	
	echo "Dealt ".$tmpCard->getStringDescription().".</br>";
	echo "Test hand has ".$testHand->getTotalStr().".<br/>";
	
	$testHand = new Hand();
	$tmpCard = null;

	echo "<hr/>";
	
	echo "Test hand has ".$testHand->getTotalStr().".<br/>";

	$tmpCard = new Card(Value::THREE, Suit::HEARTS);
	$testHand->dealCard($tmpCard);
	
	echo "Dealt ".$tmpCard->getStringDescription().".</br>";
	echo "Test hand has ".$testHand->getTotalStr().".<br/>";
	
	$tmpCard = new Card(Value::TEN, Suit::DIAMONDS);
	$testHand->dealCard($tmpCard);
	
	echo "Dealt ".$tmpCard->getStringDescription().".</br>";
	echo "Test hand has ".$testHand->getTotalStr().".<br/>";
	
	$tmpCard = new Card(Value::SEVEN, Suit::CLUBS);
	$testHand->dealCard($tmpCard);
	
	echo "Dealt ".$tmpCard->getStringDescription().".</br>";
	echo "Test hand has ".$testHand->getTotalStr().".<br/>";
	
	$tmpCard = new Card(Value::ACE, Suit::HEARTS);
	$testHand->dealCard($tmpCard);
	
	echo "Dealt ".$tmpCard->getStringDescription().".</br>";
	echo "Test hand has ".$testHand->getTotalStr().".<br/>";
	
	echo "<hr/>";
	
	$testHand = new Hand();
	$tmpCard = null;
	
	echo "Test hand has ".$testHand->getTotalStr().".<br/>";

	$tmpCard = new Card(Value::ACE, Suit::HEARTS);
	$testHand->dealCard($tmpCard);
	
	echo "Dealt ".$tmpCard->getStringDescription().".</br>";
	echo "Test hand has ".$testHand->getTotalStr().".<br/>";
	
	$tmpCard = new Card(Value::ACE, Suit::DIAMONDS);
	$testHand->dealCard($tmpCard);
	
	echo "Dealt ".$tmpCard->getStringDescription().".</br>";
	echo "Test hand has ".$testHand->getTotalStr().".<br/>";
	
	$tmpCard = new Card(Value::ACE, Suit::CLUBS);
	$testHand->dealCard($tmpCard);
	
	echo "Dealt ".$tmpCard->getStringDescription().".</br>";
	echo "Test hand has ".$testHand->getTotalStr().".<br/>";
	
	$tmpCard = new Card(Value::ACE, Suit::CLUBS);
	$testHand->dealCard($tmpCard);
	
	echo "Dealt ".$tmpCard->getStringDescription().".</br>";
	echo "Test hand has ".$testHand->getTotalStr().".<br/>";
	
	$tmpCard = new Card(Value::ACE, Suit::CLUBS);
	$testHand->dealCard($tmpCard);
	
	echo "Dealt ".$tmpCard->getStringDescription().".</br>";
	echo "Test hand has ".$testHand->getTotalStr().".<br/>";
	
	$tmpCard = new Card(Value::ACE, Suit::CLUBS);
	$testHand->dealCard($tmpCard);
	
	echo "Dealt ".$tmpCard->getStringDescription().".</br>";
	echo "Test hand has ".$testHand->getTotalStr().".<br/>";
	
	$tmpCard = new Card(Value::ACE, Suit::CLUBS);
	$testHand->dealCard($tmpCard);
	
	echo "Dealt ".$tmpCard->getStringDescription().".</br>";
	echo "Test hand has ".$testHand->getTotalStr().".<br/>";
	
	$tmpCard = new Card(Value::ACE, Suit::CLUBS);
	$testHand->dealCard($tmpCard);
	
	echo "Dealt ".$tmpCard->getStringDescription().".</br>";
	echo "Test hand has ".$testHand->getTotalStr().".<br/>";
	
	$tmpCard = new Card(Value::ACE, Suit::CLUBS);
	$testHand->dealCard($tmpCard);
	
	echo "Dealt ".$tmpCard->getStringDescription().".</br>";
	echo "Test hand has ".$testHand->getTotalStr().".<br/>";
	
	$tmpCard = new Card(Value::ACE, Suit::CLUBS);
	$testHand->dealCard($tmpCard);
	
	echo "Dealt ".$tmpCard->getStringDescription().".</br>";
	echo "Test hand has ".$testHand->getTotalStr().".<br/>";
	
	$tmpCard = new Card(Value::ACE, Suit::CLUBS);
	$testHand->dealCard($tmpCard);
	
	echo "Dealt ".$tmpCard->getStringDescription().".</br>";
	echo "Test hand has ".$testHand->getTotalStr().".<br/>";
	
	$tmpCard = new Card(Value::ACE, Suit::CLUBS);
	$testHand->dealCard($tmpCard);
	
	echo "Dealt ".$tmpCard->getStringDescription().".</br>";
	echo "Test hand has ".$testHand->getTotalStr().".<br/>";
	
	$tmpCard = new Card(Value::ACE, Suit::CLUBS);
	$testHand->dealCard($tmpCard);
	
	echo "Dealt ".$tmpCard->getStringDescription().".</br>";
	echo "Test hand has ".$testHand->getTotalStr().".<br/>";
	
	$tmpCard = new Card(Value::ACE, Suit::CLUBS);
	$testHand->dealCard($tmpCard);
	
	echo "Dealt ".$tmpCard->getStringDescription().".</br>";
	echo "Test hand has ".$testHand->getTotalStr().".<br/>";
	
	$tmpCard = new Card(Value::ACE, Suit::CLUBS);
	$testHand->dealCard($tmpCard);
	
	echo "Dealt ".$tmpCard->getStringDescription().".</br>";
	echo "Test hand has ".$testHand->getTotalStr().".<br/>";
	
	$tmpCard = new Card(Value::TWO, Suit::DIAMONDS);
	$testHand->dealCard($tmpCard);
	
	echo "Dealt ".$tmpCard->getStringDescription().".</br>";
	echo "Test hand has ".$testHand->getTotalStr().".<br/>";
	
	$tmpCard = new Card(Value::SEVEN, Suit::HEARTS);
	$testHand->dealCard($tmpCard);
	
	echo "Dealt ".$tmpCard->getStringDescription().".</br>";
	echo "Test hand has ".$testHand->getTotalStr().".<br/>";
	
	$tmpCard = new Card(Value::ACE, Suit::SPADES);
	$testHand->dealCard($tmpCard);
	
	echo "Dealt ".$tmpCard->getStringDescription().".</br>";
	echo "Test hand has ".$testHand->getTotalStr().".<br/>";
	
	$testHand = new Hand();
	$tmpCard = null;

	echo "<hr/>";
	
	echo "Test hand has ".$testHand->getTotalStr().".<br/>";

	$tmpCard = new Card(Value::TEN, Suit::CLUBS);
	$testHand->dealCard($tmpCard);
	
	echo "Dealt ".$tmpCard->getStringDescription().".</br>";
	echo "Test hand has ".$testHand->getTotalStr().".<br/>";
	
	$tmpCard = new Card(Value::TWO, Suit::HEARTS);
	$testHand->dealCard($tmpCard);
	
	echo "Dealt ".$tmpCard->getStringDescription().".</br>";
	echo "Test hand has ".$testHand->getTotalStr().".<br/>";
	
	$tmpCard = new Card(Value::ACE, Suit::DIAMONDS);
	$testHand->dealCard($tmpCard);
	
	echo "Dealt ".$tmpCard->getStringDescription().".</br>";
	echo "Test hand has ".$testHand->getTotalStr().".<br/>";
	
	$testHand = new Hand();
	$tmpCard = null;

	echo "<hr/>";
	
	echo "Test hand has ".$testHand->getTotalStr().".<br/>";

	$tmpCard = new Card(Value::NINE, Suit::CLUBS);
	$testHand->dealCard($tmpCard);
	
	echo "Dealt ".$tmpCard->getStringDescription().".</br>";
	echo "Test hand has ".$testHand->getTotalStr().".<br/>";
	
	$tmpCard = new Card(Value::ACE, Suit::SPADES);
	$testHand->dealCard($tmpCard);
	
	echo "Dealt ".$tmpCard->getStringDescription().".</br>";
	echo "Test hand has ".$testHand->getTotalStr().".<br/>";
	
	$tmpCard = new Card(Value::ACE, Suit::DIAMONDS);
	$testHand->dealCard($tmpCard);
	
	echo "Dealt ".$tmpCard->getStringDescription().".</br>";
	echo "Test hand has ".$testHand->getTotalStr().".<br/>";
?>