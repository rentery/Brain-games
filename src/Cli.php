<?php

namespace BrainGames\Cli;

use function cli\line;
use function cli\prompt;
use function cli\err;

const ROUNDS_COUNT = 3;

function runGame($gameData): void
{
    [$gameRule, $questions, $correctAnswers] = $gameData;
    line('Welcome to the Brain Game!');
    line($gameRule);
    line();
    $userName = prompt('May I have your name?');
    line('Hello, %s!', $userName);
    line();
    for ($roundCounter = 0; $roundCounter < ROUNDS_COUNT; $roundCounter++) {
        $correctAnswer = $correctAnswers[$roundCounter];
        line("Question: %s", $questions[$roundCounter]);
        $userAnswer = prompt("Your answer");
        if ($userAnswer != $correctAnswer) {
            err("'%s' is wrong answer ;(. Correct answer was '%s'.", $userAnswer, $correctAnswer);
            line("Let's try again, %s!", $userName);
            return;
        }
        line('Correct!');
    }
    line('Congratulations, %s!', $userName);
}
