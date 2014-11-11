<?php 

include_once 'shoe.php';

echo "<h1>tonekids.com BLACKJACK shoe_test</h1>";

$numDecks = 6;
$shoe = new Shoe($numDecks);

echo "<p>".$numDecks."-deck shoe, draw every card...</p>";

echo "<p>";

$numCardsDrawn = 0;

$suitDistro = array(0,0,0,0);
$valueDistro = array(0,0,0,0,0,0,0,0,0,0,0,0,0);

do
{
	$card = $shoe->drawNextCard();
	
	if(null != $card)
	{
		$numCardsDrawn++;
		
		$suitDistro[$card->getSuit()]++;
		$valueDistro[$card->getValue() - 1]++;
		
		echo $card->getStringDescription().", ";
		if(($numCardsDrawn > 0) && (0 == $numCardsDrawn % 10))
		{
			echo "</p><p>";
		}
	}
} while(null != $card);

echo "</p>";
$numDecks = $numCardsDrawn/52;
echo "<p>Total cards drawn: ".$numCardsDrawn." = ".$numDecks." decks. </p>";

echo "<p>Suit distribution: ";
for($i = 0; $i < count($suitDistro); $i++)
{
	echo $suitDistro[$i].", ";
}
echo "</p>";

echo "<p>Value distribution: ";
for($i = 0; $i < count($valueDistro); $i++)
{
	echo $valueDistro[$i].", ";
}
echo "</p>";

?>