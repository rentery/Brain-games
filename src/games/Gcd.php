<?php

namespace BrainGames\games\Gcd;

use function BrainGames\Cli\startGame;
use const BrainGames\Cli\ROUND_COUNT;

const BRAIN_GCD_RULE = 'Find the greatest common divisor of given numbers.';

function getGcd($a, $b)
{
    $remainder = $a % $b;
    return ($remainder != 0) ? getGcd($b, $remainder) : abs($b);
}

function gcd()
{
    for ($i = 0; $i < ROUND_COUNT; $i++) {
        $char1 = rand(1, 100);
        $char2 = rand(1, 100);
        $correctAnswers[] = getGcd($char1, $char2);
        $questions[] = "{$char1} {$char2}";
    }
    $gameData = [BRAIN_GCD_RULE, $questions, $correctAnswers];
    game($gameData);
}
