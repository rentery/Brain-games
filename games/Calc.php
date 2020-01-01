<?php

namespace BrainGames\Calc;

use function BrainGames\Cli\game;
use function BrainGames\Cli\welcome;


function resultOfCulc($operator, $operand1, $operand2)
{
    switch ($operator) {
        case '+':
            return $operand1 + $operand2;
        case '-':
            return $operand1 - $operand2;
        case '*':
            return $operand1 * $operand2;
    }
}


function calc()
{
    $gameRule = 'What is the result of the expression?';
    $userName = welcome($gameRule);
    $operators = ['+', '-', '*'];
    for ($i = 0; $i < 3; $i++) {
        $operand1 = rand(1, 50);
        $operand2 = rand(1, 50);
        $randOperator = array_rand($operators);
        $operator = $operators[$randOperator];
        $correctAnswers[] = resultOfCulc($operator, $operand1, $operand2);
        $questions[] = "{$operand1} {$operator} {$operand2}";
    }
    $gameData = [$userName, $questions, $correctAnswers];
    game($gameData);
}
