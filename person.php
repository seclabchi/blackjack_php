<?php 

abstract class Person
{
	const NO_STATUS = 0;
	const HIT_OR_STAND = 1;
	const STAND = 2;
	const BUST = 3;
	const BLACKJACK = 4;
	const TWENTY_ONE = 5;
	const MAX_STATUS = 6;
	
	private $hand = null;
	
	function __construct()
	{
		$this->hand = new Hand();
	}
	
	public function getStatus()
	{
		
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
	
	public function getHand()
	{
		return $this->hand;
	}
	
	public function getTotal()
	{
		return $this->hand->getTotal();
	}
	
	public function getTotalStr()
	{
		return $this->hand->getTotalStr();
	}
	
	public function dealCard($card)
	{
		$this->hand->dealCard($card);
	}
	
	public function getStatus()
	{
		
	}
	
	public abstract function getStatusStr()
	{
		
	}
	
	function __destruct()
	{
		
	}
}


?>