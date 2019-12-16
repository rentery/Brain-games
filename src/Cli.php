<?php

namespace BrainGames\Cli;

use function cli\line;
use function cli\prompt;


function welcomeEven()
{
    line('Welcome to the Brain Game!');
    line("Answer \"yes\" if the number is even, otherwise answer \"no\".\n");
}

function runEven($playerName)
{
    return line("Hello, %s! \n", $playerName);
}
