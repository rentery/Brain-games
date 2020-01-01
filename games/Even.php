<?php

namespace BrainGames\Even;

use function BrainGames\Cli\game;
use function BrainGames\Cli\welcome;



function isEven($question)
{
    return $question % 2;
}

function even()
{
    $gameRule = 'Answer "yes" if the number is even, otherwise answer "no"';
    $userName = welcome($gameRule);
    for ($i = 0; $i < 3; $i++) {
        $question = rand(1, 50);
        $correctAnswers[] = isEven($question) == 0 ? 'yes' : 'no';
        $questions[] = $question;
    }
    $gameData = [$userName, $questions, $correctAnswers];
    game($gameData);
}




