<?php 

include_once 'blackjack_exception.php';

abstract class Value
{
	const ACE = 1;
	const TWO = 2;
	const THREE = 3;
	const FOUR = 4;
	const FIVE = 5;
	const SIX = 6;
	const SEVEN = 7;
	const EIGHT = 8;
	const NINE = 9;
	const TEN = 10;
	const JACK = 11;
	const QUEEN = 12;
	const KING = 13;
	const MAX_VALUE = 14;
	
	public function intToValueStr($intVal)
	{
		$valueStr = "";
		
		switch($intVal)
		{
			case self::ACE:
				$valueStr = "ACE";
				break;
			case self::TWO:
				$valueStr = "TWO";
				break;
			case self::THREE:
				$valueStr = "THREE";
				break;
			case self::FOUR:
				$valueStr = "FOUR";
				break;
			case self::FIVE:
				$valueStr = "FIVE";
				break;
			case self::SIX:
				$valueStr = "SIX";
				break;
			case self::SEVEN:
				$valueStr = "SEVEN";
				break;
			case self::EIGHT:
				$valueStr = "EIGHT";
				break;
			case self::NINE:
				$valueStr = "NINE";
				break;
			case self::TEN:
				$valueStr = "TEN";
				break;
			case self::JACK:
				$valueStr = "JACK";
				break;
			case self::QUEEN:
				$valueStr = "QUEEN";
				break;
			case self::KING:
				$valueStr = "KING";
				break;	
			default:
				throw new BlackjackException;
				break;
		}
		
		return $valueStr;
	}
}

abstract class Suit
{
	const HEARTS = 0;
	const DIAMONDS = 1;
	const CLUBS = 2;
	const SPADES = 3;
	const MAX_SUIT = 4;
	
	public function intToSuitStr($intVal)
	{
		$valueStr = "";
		
		switch($intVal)
		{
			case self::HEARTS:
				$valueStr = "HEARTS";
				break;
			case self::DIAMONDS:
				$valueStr = "DIAMONDS";
				break;
			case self::CLUBS:
				$valueStr = "CLUBS";
				break;
			case self::SPADES:
				$valueStr = "SPADES";
				break;
			default:
				throw new BlackjackException;
				break;
		}
		
		return $valueStr;
	}
}

class Card
{
	private $mValue = null;
	private $mSuit = null;
	
	function __construct($value, $suit)
	{
		$this->mValue = $value;
		$this->mSuit = $suit;
	}
	
	public function draw()
	{
		$imgName = "card_images/".Value::intToValueStr($this->mValue)."_".
								   Suit::intToSuitStr($this->mSuit).".png";
											
		echo "<img src='".$imgName."'/>";
	}
	
	public function getValue()
	{
		return $this->mValue;
	}
	
	public function getValueStr()
	{
		return Value::intToValueStr($this->mValue);
	}
	
	public function getNumericalValue()
	{
		$numericalValue = $this->mValue;
		
		if($this->mValue > Value::TEN)
		{
			$numericalValue = 10;
		}
		
		return $numericalValue;
	}
	
	public function getSuit()
	{
		return $this->mSuit;
	}
	
	public function getSuitStr()
	{
		return Suit::intToSuitStr($this->mSuit);
	}
	
	public function getStringDescription()
	{
		$str = Value::intToValueStr($this->mValue)." of ".
			Suit::intToSuitStr($this->mSuit);
		
		return $str;
	}
}

?>