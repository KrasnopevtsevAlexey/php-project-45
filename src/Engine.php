<?php

namespace BrainGames\Engine;

use function cli\line;
use function cli\prompt;

const ROUNDS_COUNT = 3;

function runEngine(string $gameDescription, array $gameData): void
{
    line('Welcome to the Brain Games!');
    $name = prompt('May I have your name?');
    line("Hello, %s!", $name);
    line($gameDescription);

    foreach ($gameData as [$question, $correct]) {
        line("Question: %s", $question);
        $answer = prompt('Your answer');

        if ($answer === $correct) {
            line('Correct!');
            continue;
        }
            line("'%s' is wrong answer ;(. Correct answer was '%s'.", $answer, $correct);
            line("Let's try again, %s!", $name);
            return;
    }
    line("Congratulations, %s!", $name);
}
