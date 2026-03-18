<?php

namespace BrainGames\Games\Progression;

use function BrainGames\Engine\runEngine;

const PROGRESSION_LENGTH_MIN = 5;
const PROGRESSION_LENGTH_MAX = 10;
const START_MIN = 1;
const START_MAX = 10;
const STEP_MIN = 1;
const STEP_MAX = 5;



function runGame(): void
{
$gameDescription = 'What number is missing in the progression?';


$gameData = [];
    for ($i = 0; $i < \BrainGames\Engine\ROUNDS_COUNT; $i++) {
        $length = rand(PROGRESSION_LENGTH_MIN, PROGRESSION_LENGTH_MAX);
        $start = rand(START_MIN, START_MAX);
        $step = rand(STEP_MIN, STEP_MAX);
        $hiddenPosition = random_int(0, $length - 1);
        
        $progression = [];
        $displayParts = [];
        
        for ($j = 0; $j < $length; $j++) {
            $value = $start + $j * $step;
            $progression[] = $value;
            
            if ($j === $hiddenPosition) {
                $displayParts[] = '..';
            } else {
                $displayParts[] = (string) $value;
            }
        }
        
        $question = implode(' ', $displayParts);
        $correctAnswer = (string) $progression[$hiddenPosition];
        
        $gameData[] = [$question, $correctAnswer];
    }
    
    runEngine($gameDescription, $gameData);
}
