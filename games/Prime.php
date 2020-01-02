<?php

namespace BrainGames\Prime;

use function BrainGames\Cli\game;
use function BrainGames\Cli\welcome;

function isPrime($number)
{
    for ($i = 2; $i < sqrt($number); $i++) {
        if ($number % $i == 0) {
            return "no";
        }
    }
    return "yes";
}

function prime()
{
    $gameRule = 'Answer "yes" if given number is prime. Otherwise answer "no".';
    $userName = welcome($gameRule);
    for ($i = 0; $i < 3; $i++) {
        $question = rand(2, 4000);
        $correctAnswers[] = isPrime($question);
        $questions[] = $question;
    }
    $gameData = [$userName, $questions, $correctAnswers];
    game($gameData);
}
