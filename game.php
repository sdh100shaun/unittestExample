<?php
class RockPaperScissorsLizardSpock
{
	
	private $players = array();  
	private $winner; 
	private $hands = array(); 
	
	
	public function __construct()
	{
		
	}
	
	public function __set($key,$value)
	{
		$this->$key=$value;
	}
	
	public function __get($key)
	{
		return $this->$key; 
	}
	
	
	public function play($hand, $player)
	{
		 
		if(in_array($player, $this->players))
		{
			$this->hands[]=array($player,$hand);
		}
	}
	
	public function score()
	{
		$round =array(); 
		
		foreach($this->hands as $hand)
		{
			array_push($round,$hand[1]);
		}
	
		
		if(count(array_unique($round))==1)
		{
				$this->winner="Nobody";
		}
		else
		{
			
			$this->winner="sheldon";
		}
		
		
		
	}
	
	public function getWinner()
	{
		echo $this->winner. " wins";
	}
	
	public function addPlayer($name)
	{
		array_push($this->players,$name);
	}
	
	public function resetGame()
	{
		$this->hands=array();
	}
	
	
}
?>