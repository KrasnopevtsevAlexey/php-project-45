<?php

namespace BrainGames\Games\Gcd;

use function BrainGames\Engine\runEngine;

function runGame(): void
{
    $gameDescription = 'Find the greatest common divisor of given numbers.';

    $gameData = [];

    for ($i = 0; $i < \BrainGames\Engine\ROUNDS_COUNT; $i++) {
        $num1 = random_int(1, 100);
        $num2 = random_int(1, 100);

        $question = "$num1 $num2";
        $correct = (string) gcd($num1, $num2);

        $gameData[] = [$question, $correct];
    }
    runEngine($gameDescription, $gameData);
}


function gcd($a, $b)
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
