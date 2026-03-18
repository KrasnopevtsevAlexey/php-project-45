<?php

namespace BrainGames\Games\Calc;

use function BrainGames\Engine\runEngine;

const OPERATS = ['+', '-', '*'];

function runGame(): void
{
$gameDescription = 'What is the result of the expression?';

$gameData = [];
    for ($i = 0; $i < \BrainGames\Engine\ROUNDS_COUNT; $i++) {

$num1 = random_int(1, 20);
$num2 = random_int(1, 20);

$operation = OPERATS[array_rand(OPERATS)];
$question = "$num1 $operation $num2";

$correct = (string) calculate($num1, $num2, $operation);

$gameData[] = [$question, $correct];

}

runEngine($gameDescription, $gameData);
}

function calculate(int $a, int $b, string $oper): int
{
switch ($oper) {
	case '+':
	   return $a + $b;
	case '-':
	   return $a - $b;
	case '*':
	   return $a * $b;
	default:
	   throw new \Exception("Unknonw operation: $oper");
}
}



