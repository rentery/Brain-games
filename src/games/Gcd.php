<?php

namespace BrainGames\games\Gcd;

use function BrainGames\Cli\startGame;
use function BrainGames\Cli\welcome;

const BRAIN_GCD_RULE = 'Find the greatest common divisor of given numbers.';
const ARRAY_DATA_SIZE = 3;

function getGcd($a, $b)
{
    $remainder = $a % $b;
    return ($remainder != 0) ? getGcd($b, $remainder) : abs($b);
}

function gcd()
{
    for ($prepareData = 0; $prepareData < ARRAY_DATA_SIZE; $prepareData++) {
        $char1 = rand(1, 100);
        $char2 = rand(1, 100);
        $correctAnswers[] = getGcd($char1, $char2);
        $questions[] = "{$char1} {$char2}";
    }
    $gameData = [BRAIN_GCD_RULE, $questions, $correctAnswers];
    game($gameData);
}
