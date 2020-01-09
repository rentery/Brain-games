<?php

namespace BrainGames\games\Prog;

use function BrainGames\Cli\startGame;

use const BrainGames\Cli\ROUND_COUNT;

const BRAIN_PROG_RULE = 'What number is missing in the progression?';

function getQuestion($progression, $char)
{
    $question = "";
    foreach ($progression as $key => $value) {
        if ($key == $char) {
            $question = "$question ..";
        } else {
            $question = "$question $value";
        }
    }
    return trim($question);
}

function prog()
{
    $progression = range(5, 23, 2);
    for ($i = 0; $i < ROUND_COUNT; $i++) {
        $char = array_rand($progression);
        $correctAnswers[] = $progression[$char];
        $questions[] = getQuestion($progression, $char);
    }
    $gameData = [BRAIN_PROG_RULE, $questions, $correctAnswers];
    startGame($gameData);
}
