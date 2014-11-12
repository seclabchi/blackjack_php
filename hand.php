<?php 

include_once 'cards.php';

class Hand
{
	const NO_STATUS = 0;
	const HIT_OR_STAND = 1;
	const STAND = 2;
	const BUST = 3;
	const BLACKJACK = 4;
	const TWENTY_ONE = 5;
	const MAX_STATUS = 6;
	
	private $cards = null;
	
	function __construct()
	{
		$this->cards = array();
	}
	
	public function getNumCards()
	{
		return count($this->cards);
	}
	
	public function drawCard($cardNum)
	{
		$this->cards[$cardNum]->draw();
	}
	
	public function dealCard($card)
	{
		$this->cards[] = $card;
	}
	
	public function getStatus()
	{
		$total = $this->getTotal();
		$numCards = $this->hand->getNumCards();
		
		if($total < 21)
		{
			$status = Person::HIT_OR_STAND;
		}
		else if($total > 21)
		{
			$status = Person::BUST;
		}
		else 
		{
			if($numCards == 2)
			{
				$status = Person::BLACKJACK;
			}
			else 
			{
				$status = Person::TWENTY_ONE;
			}
		}
	}
	
	public function getStatusStr()
	{
		$status = $this->getStatus();
		$statusStr = null;
		
		switch($status)
		{
			case Hand::NO_STATUS:
				$statusStr = "NO_STATUS";
				break;
			case Hand::HIT_OR_STAND:
				$statusStr = "HIT_OR_STAND";
				break;
			case Hand::BUST:
				$statusStr = "BUST";
				break;
			case Hand::BLACKJACK:
				$statusStr = "BLACKJACK";
				break;
			case Hand::TWENTY_ONE:
				$statusStr = "TWENTY_ONE";
				break;
			default:
				break;
		}
		
		return $statusStr;
	}
	
	/* Count up all of the non-ace cards first.  Then, calculate the
	 * "dual hand" for successive aces, knowing that an ace can be 1 or 11.
	 * 
	 * If there are no aces, the first ace is treated as the 1 or 11.
	 */
	public function getTotal()
	{
		$firstAce = true;
		$total = array(0,0);
		
		rsort($this->cards);
		
		foreach($this->cards as $card)
		{
			if($card->getValue() != Value::ACE)
			{
				$total[0] += $card->getNumericalValue();
				$total[1] += $card->getNumericalValue();
			}
			else 
			{
				$total[0]++;
				
				if(true == $firstAce)
				{
					$total[1] += 11;
					$firstAce = false;
				}
				else
				{
					$total[1]++;
				}
			}
		}
		
		if(($total[0] == $total[1]) || ($total[1] > 21))
		{
			$total = array($total[0]);
		}
		
		return $total;
	}
	
	public function getTotalStr()
	{
		$total = $this->getTotal();
		
		if(count($total) == 1)
		{
			return $total[0];
		}
		else
		{
			return $total[0]." OR ".$total[1];
		}
	}
}

?>