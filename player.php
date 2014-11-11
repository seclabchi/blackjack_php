<?php 

include_once 'cards.php';
include_once 'hand.php';
include_once 'person.php';

class Player extends Person
{
	private $name = null;
	
	function __construct($name)
	{
		parent::__construct();
		$this->name = $name;
	}
	
	public function getName()
	{
		return $this->name;
	}
	
	function __destruct()
	{
		
	}
}


?>