<?php

namespace BrainGames\games\Prime;

use function BrainGames\Cli\startGame;
use function BrainGames\Cli\welcome;

const BRAIN_PRIME_RULE = 'Answer "yes" if given number is prime. Otherwise answer "no".';
const ARRAY_DATA_SIZE = 3;

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
    for ($prepareData = 0; $prepareData < ARRAY_DATA_SIZE; $prepareData++) {
        $question = rand(2, 4000);
        $correctAnswers[] = isPrime($question) ? 'yes' : 'no';
        $questions[] = $question;
    }
    $gameData = [BRAIN_PRIME_RULE, $questions, $correctAnswers];
    startGame($gameData);
}
