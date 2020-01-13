<?php

namespace BrainGames\games\Even;

use function BrainGames\Cli\runGame;

use const BrainGames\Cli\ROUNDS_COUNT;

const BRAIN_EVEN_RULE = 'Answer "yes" if the number is even, otherwise answer "no"';

function isEven($question)
{
    return $question % 2;
}

function even()
{
    for ($i = 0; $i < ROUNDS_COUNT; $i++) {
        $question = rand(1, 50);
        $correctAnswers[] = isEven($question) == 0 ? 'yes' : 'no';
        $questions[] = $question;
    }
    $gameData = [BRAIN_EVEN_RULE, $questions, $correctAnswers];
    runGame($gameData);
}
