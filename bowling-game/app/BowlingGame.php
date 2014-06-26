<?php

class BowlingGame {

	private $rolls = [];

	public function roll($pins)
	{
		$this->rolls[] = $pins;
	}

	public function isStrike($firstInFrame)
	{
		return $this->rolls[$firstInFrame] == 10;
	}

	public function isSpare($firstInFrame)
	{
		return $this->rolls[$firstInFrame] + $this->rolls[$firstInFrame + 1] == 10;
	}

//	public function score()
//	{
//		$score = 0;
//		$rollsMax = count($this->rolls);
//		$firstInFrame = 0;
//
//		for ($frame = 0; $frame < 10; $frame++)
//		{
//			if ($this->isStrike($firstInFrame))
//			{
//
//			}
//		}
//	}
} 