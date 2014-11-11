<?php 

include_once 'cards.php';

class Hand
{
	
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