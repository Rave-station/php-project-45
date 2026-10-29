<?php

namespace BrainGames\Cli;

use function cli\line;
use function cli\prompt;

function welcome()
{
    echo "Welcome to the Brain Games!\n";
    $name = prompt('May I have your name');
    echo "Hello, {$name}!\n";

    return $name;
}
