<?php

namespace BrainGames\games\Calc;

use function BrainGames\Cli\startGame;
use const BrainGames\Cli\ROUND_COUNT;

const BRAIN_CALC_RULE = 'What is the result of the expression?';
const OPERATORS = ['+', '-', '*'];

function calculateExpression($operator, $operand1, $operand2)
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
    for ($i = 0; $i < ROUND_COUNT; $i++) {
        $operand1 = rand(1, 50);
        $operand2 = rand(1, 50);
        $randOperator = array_rand(OPERATORS);
        $operator = OPERATORS[$randOperator];
        $correctAnswers[] = calculateExpression($operator, $operand1, $operand2);
        $questions[] = "{$operand1} {$operator} {$operand2}";
    }
    $gameData = [BRAIN_CALC_RULE, $questions, $correctAnswers];
    startGame($gameData);
}
