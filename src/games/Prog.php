<?php

namespace BrainGames\games\Prog;

use function BrainGames\Cli\runGame;

use const BrainGames\Cli\ROUNDS_COUNT;

const BRAIN_PROG_RULE = 'What number is missing in the progression?';
const PROGRESSION_LENGHT = 10;

function getQuestion($progression, $indexNumber)
{
    $question = "";
    foreach ($progression as $key => $value) {
        if ($key == $indexNumber) {
            $question = "$question ..";
        } else {
            $question = "$question $value";
        }
    }
    return trim($question);
}

function prog()
{
    for ($i = 0; $i < ROUNDS_COUNT; $i++) {
        $firstCharOfProgression = rand(1, 50);
        $step = rand(1, 10);
        $lastCharOfProgression = ((PROGRESSION_LENGHT - 1) * $step) + $firstCharOfProgression;
        $progression = range($firstCharOfProgression, $lastCharOfProgression, $step);
        $indexNumber = array_rand($progression);
        $correctAnswers[] = $progression[$indexNumber];
        $questions[] = getQuestion($progression, $indexNumber);
    }
    $gameData = [BRAIN_PROG_RULE, $questions, $correctAnswers];
    runGame($gameData);
}
