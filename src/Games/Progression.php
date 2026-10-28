<?php

namespace BrainGames\Games;

function getRoundData()
{
$start = random_int(1, 10);
$step = random_int(1, 5);
$length = 10;

$progression = [];
for ($i = 0; $i < $length; $i++) {
$progression[] = $start + ($i * $step);
}

$Index = random_int(0, $length - 1);
$Answer = (string) $progression[$Index];
$progression[$Index] = '..';
$question = implode(' ', $progression);
return [$question, $Answer];
}
