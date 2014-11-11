<?php 

include_once 'deck.php';

class Shoe
{
	private $decks = null;
	private $cutCardPos = 0;
	private $curDeck = 0;
	
	public function __construct($_numDecks)
	{
		$this->decks = array();
		
		for($i = 0; $i < $_numDecks; $i++)
		{
			$this->decks[] = new Deck();
			$this->decks[$i]->shuffle();
		}
	}
	
	public function placeCutCard($position)
	{
		
	}
	
	public function gotCutCard()
	{
		return false;
	}
	
	public function drawNextCard()
	{
		$card = $this->decks[$this->curDeck]->drawNextCard();
		
		if(null == $card)
		{
			if($this->curDeck == count($this->decks)-1)
			{
				$card = null;
			}
			else
			{
				$this->curDeck++;
				$card = $this->drawNextCard();
			}
		}
		
		return $card;
	}
}


?>