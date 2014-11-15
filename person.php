<?php 

abstract class Person
{
	private $hand = null;
	
	function __construct()
	{
		$this->hand = new Hand();
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
		
	function __destruct()
	{
		
	}
}


?>