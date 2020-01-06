<?php

namespace BrainGames\Even;

use function BrainGames\Cli\game;
use function BrainGames\Cli\welcome;

const BRAIN_EVEN_RULE = 'Answer "yes" if the number is even, otherwise answer "no"';
const ARRAY_DATA_SIZE = 3;

function isEven($question)
{
    return $question % 2;
}

function even()
{
    for ($prepareData = 0; $prepareData < ARRAY_DATA_SIZE; $prepareData++) {
        $question = rand(1, 50);
        $correctAnswers[] = isEven($question) == 0 ? 'yes' : 'no';
        $questions[] = $question;
    }
    $gameData = [BRAIN_EVEN_RULE, $questions, $correctAnswers];
    game($gameData);
}
