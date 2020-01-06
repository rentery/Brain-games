<?php

namespace BrainGames\Calc;

use function BrainGames\Cli\game;
use function BrainGames\Cli\welcome;

const BRAIN_CALC_RULE = 'What is the result of the expression?';
const ARRAY_DATA_SIZE = 3;

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
    $operators = ['+', '-', '*'];
    for ($prepareData = 0; $prepareData < ARRAY_DATA_SIZE; $prepareData++) {
        $operand1 = rand(1, 50);
        $operand2 = rand(1, 50);
        $randOperator = array_rand($operators);
        $operator = $operators[$randOperator];
        $correctAnswers[] = resultOfCulc($operator, $operand1, $operand2);
        $questions[] = "{$operand1} {$operator} {$operand2}";
    }
    $gameData = [BRAIN_CALC_RULE, $questions, $correctAnswers];
    game($gameData);
}
