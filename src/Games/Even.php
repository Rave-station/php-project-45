<?php

namespace BrainGames\Games;
function even(): array
{
    $number = rand(1, 100);
    $correctAnswer = ($number % 2 === 0) ? 'yes' : 'no';
    
    return [$number, $correctAnswer];
}
