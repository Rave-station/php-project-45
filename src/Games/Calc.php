#!/usr/bin/env php
<?php

namespace BrainGames\Games;

function calc(): array
{
    $num1 = rand(1, 100);
    $num2 = rand(1, 100);
    $operations = ['+', '-', '*'];
    $operation = $operations[rand(0, 2)];

    switch ($operation) {
        case '+':
            $correctAnswer = $num1 + $num2;
            break;
        case '-':
            $correctAnswer = $num1 - $num2;
            break;
        case '*':
            $correctAnswer = $num1 * $num2;
            break;
    }

    $expression = "{$num1} {$operation} {$num2}";
    
    return [$expression, (string) $correctAnswer];
}
