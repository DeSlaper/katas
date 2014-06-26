<?php

require_once 'app/BowlingGame.php';

/**
 * Class BowlingGameTest
 */
class BowlingGameTest extends PHPUnit_Framework_TestCase {

	/**
	 * @var BowlingGame
	 */
	private $g;

	function __construct()
	{
		$this->g = new BowlingGame;
	}

	/**
	 * @test
	 */
	public function is_strike()
	{
		$this->g->roll(10);
		$strike = $this->g->isStrike(0);
		$this->assertEquals(TRUE, $strike);
	}

	/** @test */
	public function is_spare()
	{
		$this->roll_multiple_times(2,5);
		$spare = $this->g->isSpare(0);
		$this->assertEquals(TRUE, $spare);
	}

	/**
	 * @test
	 */
	public function Should_role_gutter_game()
	{
		$this->roll_multiple_times(20, 0);
//		$this->assertEquals(0, $this->g->score());
	}


	protected function roll_multiple_times($n, $pins)
	{
		for ($i = 0; $i < $n; $i++)
		{
			$this->g->roll($pins);
		}
	}

} 