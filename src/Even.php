<?php

namespace BrainGames\Even;


use function cli\line;
use function cli\prompt;

function even($userName)
{
    for ($i = 0; $i < 3; $i++) {
        $question = rand(1, 50);
        line("Question: %s", $question);
        $answer = $question % 2;
        $userAnswer = prompt("Your answer");
        if ($answer == 0 && $userAnswer == "yes") {
            line("Correct!");
            if ($i == 2) {
                return line("Congratulations, {$userName}!");
            }
        } elseif ($answer != 0 && $userAnswer == 'no') {
            line("Correct!");
            if ($i == 2) {
                return line("Congratulations, {$userName}!");
            }
        } elseif ($answer == 0 && ($userAnswer == "no" || $userAnswer != 'yes')) {
            line("{$userAnswer} is wrong answer ;(. Correct answer was 'yes'.");
            line("Let's try again, {$userName}!");
            break;
        } elseif ($answer != 0 && ($userAnswer == 'yes' || $userAnswer != 'no')) {
            line("{$userAnswer} is wrong answer ;(. Correct answer was 'no'.");
            line("Let's try again, {$userName}!");
            break;
        }   
    }
}


