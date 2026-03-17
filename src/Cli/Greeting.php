<?php

namespace BrainGames\Cli;

class Greeting
{
    public static function hello(): string
    {
        
        \cli\line('Welcome to the Brain Game!');
        $name = \cli\prompt('May I have your name?');
        \cli\line("Hello, %s!", $name);

        return $name;
    }
}
