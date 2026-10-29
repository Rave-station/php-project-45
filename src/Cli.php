<?php

namespace BrainGames\Cli;

use function cli\line;
use function cli\prompt;

function welcome()
{
echo "Welcome to the Brain Games!\n";
    echo "May I have your name? ";

    $name = trim(readline());

    echo "Hello, {$name}!\n";

    return $name;
}
