<?php

namespace BrainGames\Games\Gcd;

use function BrainGames\Engine\runEngine;

use const BrainGames\Engine\ROUNDS_COUNT;

const MIN_NUMBER = 1;
const MAX_NUMBER = 100;

function runGame(): void
{
    $gameDescription = 'Find the greatest common divisor of given numbers.';

    $gameData = [];

    for ($i = 0; $i < ROUNDS_COUNT; $i++) {
        $num1 = random_int(MIN_NUMBER, MAX_NUMBER);
        $num2 = random_int(MIN_NUMBER, MAX_NUMBER);

        $question = "$num1 $num2";
        $correct = (string) isGcd($num1, $num2);

        $gameData[] = [$question, $correct];
    }
    runEngine($gameDescription, $gameData);
}


function isGcd(int $a, int $b): int
{
    $a = abs($a);
    $b = abs($b);

    while ($b !== 0) {
        $remainder = $a % $b;
        $a = $b;
        $b = $remainder;
    }

    return $a;
}
