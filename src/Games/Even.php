<?php

namespace BrainGames\Games\Even;

use function BrainGames\Engine\runEngine;


function runGame(): void
{
    $gameDescription = 'Answer "yes" if the number is even, otherwise answer "no".';
     
	$gameData = [];

	for ($i = 0; $i < \BrainGames\Engine\ROUNDS_COUNT; $i++) {
        // @SuppressWarnings
        $number = random_int(1, 100);
        
        
        $question = (string) $number;
        
        
        $correct = ($number % 2 === 0) ? 'yes' : 'no';
        
        
        $gameData[] = [$question, $correct];
        }
    runEngine($gameDescription, $gameData);
}
