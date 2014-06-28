<?php

include __DIR__."/app/BowlingGame.php";

// Init new game
$g = new BowlingGame;

// "Throw" 10 + 2 bonus for strike
for ($i = 0; $i < 12; $i++)
{
	$g->roll(10);
}

// Print results
printf("\n\nStrikes: %d\nPerfect game score: %d\n\n", $i, $g->score());