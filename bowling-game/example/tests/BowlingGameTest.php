<?php

require 'app/BowlingGame.php';

class BowlingGameTest extends PHPUnit_Framework_TestCase {
	private $g;

	public function setUp()
	{
		$this->g = new BowlingGame;
	}

	/**
	 * @test
	 */
	public function Should_roll_gutter_game()
	{
		$this->rollMany(20, 0);
		$this->assertEquals(0, $this->g->score());
	}

	/**
	 * @test
	 */
	public function Should_roll_all_ones()
	{
		$this->rollMany(20, 1);
		$this->assertEquals(20, $this->g->score());
	}

	/**
	 * @test
	 */
	public function Should_roll_one_spare()
	{
		$this->g->rollSpare();
		$this->g->roll(3);
		$this->rollMany(17, 0);
		$this->assertEquals(16, $this->g->score());
	}

	/**
	  * @test
	 **/
	public function Should_roll_one_strike()
	{
		$this->rollStrike();
		$this->g->roll(3);
		$this->g->roll(4);
		$this->rollMany(16, 0);
		$this->assertEquals(24, $this->g->score());
	}

	/**
	 * @test
	 **/
	public function Should_roll_perfect_game()
	{
		$this->rollMany(12, 10);
		$this->assertEquals(300, $this->g->score());
	}

	public function rollMany($n, $pins)
	{
		for ($i = 0; $i < $n; $i++)
		{
			$this->g->roll($pins);
		}
	}

	public function rollStrike()
	{
		$this->g->roll(10);
	}
}