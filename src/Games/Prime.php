<?php

namespace BrainGames\Games\Prime;

use function BrainGames\Engine\runEngine;

use const BrainGames\Engine\ROUNDS_COUNT;

const MIN_NUMBER = 2;
const MAX_NUMBER = 100;

function runGame(): void
{
    $gameDescription = 'Answer "yes" if given number is prime. Otherwise answer "no".';

    $gameData = [];
    for ($i = 0; $i < ROUNDS_COUNT; $i++) {
        $number = random_int(MIN_NUMBER, MAX_NUMBER);


        $question = (string) $number;
        $correct = isPrime($number) ? 'yes' : 'no';

        $gameData[] = [$question, $correct];
    }
    runEngine($gameDescription, $gameData);
}


function isPrime(int $n): bool
{

    if ($n < 2) {
        return false;
    }


    if ($n === 2) {
        return true;
    }


    if ($n % 2 === 0) {
        return false;
    }


    $sqrt = (int) sqrt($n);
    for ($i = 3; $i <= $sqrt; $i += 2) {
        if ($n % $i === 0) {
            return false;
        }
    }

    return true;
}
