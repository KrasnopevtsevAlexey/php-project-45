<?php

namespace BrainGames\Games\Even;

use function BrainGames\Engine\runEngine;

use const BrainGames\Engine\ROUNDS_COUNT;

const MIN_NUMBER = 1;
const MAX_NUMBER = 100;

function runGame(): void
{
    $gameDescription = 'Answer "yes" if the number is even, otherwise answer "no".';

    $gameData = [];
    for ($i = 0; $i < ROUNDS_COUNT; $i++) {
        $number = random_int(MIN_NUMBER, MAX_NUMBER);
        $question = (string) $number;
        $correctAnswer = isEven($number) ? 'yes' : 'no';

        $gameData[] = [$question, $correctAnswer];
    }

    runEngine($gameDescription, $gameData);
}

function isEven(int $number): bool
{
    return $number % 2 === 0;
}
