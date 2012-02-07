<?php
require_once 'game.php';

class demo extends PHPUnit_Framework_Testcase
{
	private $game;

	public function setUp()
	{
		$this->game = new RockPaperScissorsLizardSpock();
	}


	public function testhandsEmptyAtStart()
	{
          $this->assertFalse(true);
	}

	/**
	 * @test
	 */
	public function addPlayerWorks()
	{

        }
	/**
 	* @dataProvider players
	*/
	public function testCheckMoreThanOnePlayer($players)
	{

        }

	/**
 	* @dataProvider provider
	*/
	public function testGameResetCorrectly($data)
	{
		$this->game->hands=$data;
		$this->assertNotEmpty($this->game->hands);
		$this->game->resetGame();
	}

/*
	public function testSheldonWins()
	{
		$this->game->addPlayer("howard");
		$this->game->addPlayer("rajesh");
		$this->game->addPlayer("sheldon");

		$this->game->play("scissors","rajesh");
		$this->game->play("rock","howard");
		$this->game->play("spock","sheldon");
		$this->game->score();
                $this->game->getWinner();
                $this->ExpectOutputString("sheldon");
	}

	public function tearDown()
	{
		unset($this->game);
	}

	public function testWinnerisNobodyIfAllPlaySame()
	{
		$this->game->addPlayer("howard");
		$this->game->addPlayer("rajesh");
		$this->game->addPlayer("sheldon");

		$this->game->play("lizard","rajesh");
		$this->game->play("lizard","howard");
		$this->game->play("lizard","sheldon");
		$this->game->score();
		$this->game->getWinner();
		$this->expectOutputString("Nobody wins");

	}

 */
	public function provider()
	    {
	        return array(
	         array(array("rock",
	         "scissors",
	          "lizard",
	          "spock"))

	        );
	    }

public function players()
		{
	        return array(
	         array(array("sheldon",
	         "howard",
	          "rajesh",
	          "leonard"))

	        );
	}


}
