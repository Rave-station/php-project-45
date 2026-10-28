#!/usr/bin/env php
<?php

namespace BrainGames\Games;

function gcd($a, $b)
{
while ($b !== 0) {
[$a,$b] = [$b, $a % $b];
}
return abs($a);
}
function generateRound()
{
    $num1 = random_int(1, 100);
    $num2 = random_int(1, 100);

    $correctAnswer = (string) gcd($num1, $num2);

    $question = "{$num1} {$num2}";

    return [$question, $correctAnswer];
}
