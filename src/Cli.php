<?php

namespace BrainGames\Cli;

use function cli\line;
use function cli\prompt;
use function cli\err;

const ROUND_NUMBER = 3;

function game($gameData)
{
    [$gameRule, $questions, $correctAnswers] = $gameData;
    line('Welcome to the Brain Game!');
    line($gameRule);
    line();
    $userName = prompt('May I have your name?');
    line('Hello, %s!', $userName);
    line();
    for ($roundCounter = 0; $roundCounter < ROUND_NUMBER; $roundCounter++) {
        line("Question: %s", $questions[$roundCounter]);
        $userAnswer = prompt("Your answer");
        if ($userAnswer != $correctAnswers[$roundCounter]) {
            err("'%s' is wrong answer ;(. Correct answer was '%s'.", $userAnswer, $correctAnswers[$roundCounter]);
            return line("Let's try again, %s!", $userName);
        }
        line('Correct!');
    }
    line('Congratulations, %s!', $userName);
}
