<?php

namespace BrainGames\Games;

use function cli\line;
use function cli\prompt;

const ROUNDS_COUNT = 3;

function runGames(): void
{
    line("Welcome to the Brain Games!");
    $name = \cli\prompt("May I have your name?");
    line("Hello, %s!", $name);
    line("Answer \"yes\" if the number is even, otherwise answer \"no\".");

	for ($i = 0; $i < ROUNDS_COUNT; $i++) {
        // @SuppressWarnings
        $number = random_int(1, 100);
        
        
        line("Question: %s", $number);
        
        
        $answer = \cli\prompt('Your answer');
        
        
        $correctAnswer = ($number % 2 === 0) ? 'yes' : 'no';
        
        
        if ($answer === $correctAnswer) {
            line('Correct!');
        } else {
            line("'%s' is wrong answer ;(. Correct answer was '%s'.", $answer, $correctAnswer);
            line("Let's try again, %s!", $name);
            return; 
        }
    }
    
    
    line("Congratulations, %s!", $name);
}
