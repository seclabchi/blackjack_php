<?php 

include_once 'deck.php';
echo "<head>";
echo "<style>";
echo "#newDeck { float:left; background-color:#CCFFFF }";
echo "#shuffleArea { float:left; background-color:#CCFFCC; }";
echo "</style>";
echo "</head>";
echo "<h1>tonekids.com BLACKJACK deck_test</h1>";
echo "<div id=\"newDeck\"><p>Creating new unshuffled deck...</p>";

$deck = new Deck();

echo "<table>";
do
{
	$card = $deck->drawNextCard();
	
	if(null != $card)
	{
		echo "<tr><td>";
		echo $card->getStringDescription();
		echo "</td></tr>";
	}
} while(null != $card);

echo "</table>";

echo "</div>";

echo "<div id=\"shuffleArea\"><p>Now create and shuffle four decks...</p>";

$decks = array(new Deck(), new Deck(), new Deck(), new Deck());

$decks[0]->shuffle();
$decks[1]->shuffle();
$decks[2]->shuffle();
$decks[3]->shuffle();

echo "<table>";

do
{
	$card0 = $decks[0]->drawNextCard();
	$card1 = $decks[1]->drawNextCard();
	$card2 = $decks[2]->drawNextCard();
	$card3 = $decks[3]->drawNextCard();
	
	if(null != $card0)
	{
		echo "<tr><td>";
		echo $card0->getStringDescription()."</td><td>";
		echo $card1->getStringDescription()."</td><td>";
		echo $card2->getStringDescription()."</td><td>";
		echo $card3->getStringDescription()."</td></tr>";
	}
} while(null != $card0);

echo "</table>";

echo "<p>Now, reshuffle the four decks...</p>";

$decks[0]->shuffle();
$decks[1]->shuffle();
$decks[2]->shuffle();
$decks[3]->shuffle();

echo "<table>";

do
{
	$card0 = $decks[0]->drawNextCard();
	$card1 = $decks[1]->drawNextCard();
	$card2 = $decks[2]->drawNextCard();
	$card3 = $decks[3]->drawNextCard();
	
	if(null != $card0)
	{
		echo "<tr><td>";
		echo $card0->getStringDescription()."</td><td>";
		echo $card1->getStringDescription()."</td><td>";
		echo $card2->getStringDescription()."</td><td>";
		echo $card3->getStringDescription()."</td></tr>";
	}
} while(null != $card0);

echo "</table></div>";

?>