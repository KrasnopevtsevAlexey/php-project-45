<?php

namespace BrainGames\Cli\Greeting;

use function cli\line;
use function cli\prompt;

function runGame(): void
{
    line('Welcome to the Brain Games!');
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);
}
