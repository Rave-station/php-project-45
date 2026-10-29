<?php

namespace BrainGames;

use function cli\line;
use function cli\prompt;
use function BrainGames\Cli\welcome;

const ROUNDS_COUNT = 3;


function run(string $rules, callable $generateRound): void
{
    $name = welcome();
    line($rules);

    for ($i = 0; $i < ROUNDS_COUNT; $i++) {
        
        [$question, $correctAnswer] = $generateRound();

        line("Question: {$question}");
        $answer = prompt('Your answer');

        if (trim($answer) !== (string) $correctAnswer) {
            line("'{$answer}' is wrong answer ;(. Correct answer was '{$correctAnswer}'.");
            line("Let's try again, {$name}!");
            return;
        }

        line('Correct!');
    }

    line("Congratulations, {$name}!");
}
