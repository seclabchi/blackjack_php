<?php 

include_once('cards.php');

class Deck
{
	private $cards;
	private $curPos;
	private $maxPos;
	
	public function __construct()
	{
		for($value = Value::ACE; $value < Value::MAX_VALUE; $value++)
		{
			for($suit = Suit::HEARTS; $suit < Suit::MAX_SUIT; $suit++)
			{
				$this->cards[] = new Card($value, $suit);
			}
		}
		
		$this->resetPointers();
	}
	
	public function shuffle()
	{
		for($i = count($this->cards)-1 ; $i > 0; $i--)
		{
			$j = rand(0, $i);
			$tmpVal = $this->cards[$i];
			$this->cards[$i] = $this->cards[$j];
			$this->cards[$j] = $tmpVal;
		}
		
		$this->resetPointers();
	}
	
	private function resetPointers()
	{
		$this->curPos = 0;
		$this->maxPos = count($this->cards) - 1;
	}
	
	public function drawNextCard()
	{
		$nextCard = null;
		
		if($this->curPos <= $this->maxPos) 
		{
			$nextCard = $this->cards[$this->curPos];
			$this->curPos++;
		}
		
		return $nextCard;
	}
}

?>