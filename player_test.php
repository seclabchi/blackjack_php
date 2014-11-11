<?php 

include_once 'cards.php';
include_once 'player.php';

echo "<h1>tonekids.com BLACKJACK player_test</h1>";

$testPlayer = new Player("Paul");
$testCard = null;

echo "test player ".$testPlayer->getName()." has ".$testPlayer->getTotalStr().".<br/>";

$testCard = new Card(Value::KING, Suit::DIAMONDS);
$testPlayer->dealCard($testCard);

echo "dealt player ".$testCard->getValueStr()." of ".$testCard->getSuitStr()."<br/>";
echo "test player ".$testPlayer->getName()." has ".$testPlayer->getTotalStr().".<br/>";

$testCard = new Card(Value::QUEEN, Suit::HEARTS);
$testPlayer->dealCard($testCard);

echo "dealt player ".$testCard->getValueStr()." of ".$testCard->getSuitStr()."<br/>";
echo "test player ".$testPlayer->getName()." has ".$testPlayer->getTotalStr().".<br/>";

$testCard = new Card(Value::ACE, Suit::SPADES);
$testPlayer->dealCard($testCard);

echo "dealt player ".$testCard->getValueStr()." of ".$testCard->getSuitStr()."<br/>";
echo "test player ".$testPlayer->getName()." has ".$testPlayer->getTotalStr().".<br/>";

?>