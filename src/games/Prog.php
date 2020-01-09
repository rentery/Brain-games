<?php

namespace BrainGames\Prog;

use function BrainGames\Cli\game;
use function BrainGames\Cli\welcome;

const BRAIN_PROG_RULE = 'What number is missing in the progression?';
const ARRAY_DATA_SIZE = 3;

function getProgression($progression, $char)
{
    $question = "";
    foreach ($progression as $key => $value) {
        if ($key == $char) {
            $question .= ".. ";
        } else {
            $question .= "{$value} ";
        }
    }
    return trim($question);
}

function prog()
{
    $progression = range(5, 23, 2);
    for ($prepareData = 0; $prepareData < ARRAY_DATA_SIZE; $prepareData++) {
        $char = array_rand($progression);
        $correctAnswers[] = $progression[$char];
        $questions[] = getProgression($progression, $char);
    }
    $gameData = [BRAIN_PROG_RULE, $questions, $correctAnswers];
    game($gameData);
}
