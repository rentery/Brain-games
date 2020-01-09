<?php

namespace BrainGames\games\Prime;

use function BrainGames\Cli\startGame;
use const BrainGames\Cli\ROUND_COUNT;

const BRAIN_PRIME_RULE = 'Answer "yes" if given number is prime. Otherwise answer "no".';


function isPrime($number)
{
    for ($i = 2; $i < sqrt($number); $i++) {
        if ($number % $i == 0) {
            return false;
        }
    }
    return true;
}

function prime()
{
    for ($i = 0; $i < ROUND_COUNT; $i++) {
        $question = rand(2, 4000);
        $correctAnswers[] = isPrime($question) ? 'yes' : 'no';
        $questions[] = $question;
    }
    $gameData = [BRAIN_PRIME_RULE, $questions, $correctAnswers];
    startGame($gameData);
}
