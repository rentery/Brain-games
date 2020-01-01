<?php

namespace BrainGames\Gcd;

use function BrainGames\Cli\game;
use function BrainGames\Cli\welcome;

function getGcd($a, $b)
{
    $remainder = $a % $b;
    return ($remainder != 0) ? getGcd($b, $remainder) : abs($b);
}

function gcd()
{
    $gameRule = 'Find the greatest common divisor of given numbers.';
    $userName = welcome($gameRule);
    for ($i = 0; $i < 3; $i++) {
        $char1 = rand(1, 100);
        $char2 = rand(1, 100);
        $correctAnswers[] = getGcd($char1, $char2);
        $questions[] = "{$char1} {$char2}";
    }
    $gameData = [$userName, $questions, $correctAnswers];
    game($gameData);
}