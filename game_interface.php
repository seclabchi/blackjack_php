<?php 
session_start();

global $numHits; 
global $numStands; 

switch($_POST['gameAction'])
{
	case "RESET":
		//echo "GAME RESET<br/>";
		$_SESSION['numHits'] = 0;
		$_SESSION['numStands'] = 0;
		$numHits = 0;
		$numStands = 0;
		break;
	case "HIT_STAND":
		switch($_POST['playerAction'])
		{
			case "HIT":
				//echo "PLAYER HIT<br/>";
				$numHits = ++$_SESSION['numHits'];
				$numStands = $_SESSION['numStands'];
				break;
			case "STAND":
				//echo "PLAYER STAND<br/>";
				$numHits = $_SESSION['numHits'];
				$numStands = ++$_SESSION['numStands'];
				break;
			default:
				break;
		}
		break;
	default:
		break;
}

$_SESSION['numHits'] = $numHits;
$_SESSION['numStands'] = $numStands;

//echo $numHits." HITS / ".$numStands." STANDS";

?>