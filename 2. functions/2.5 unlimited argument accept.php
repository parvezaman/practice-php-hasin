<?php

function getSum(int ...$numbers)
{
    $result = 0;
    for ($i=0; $i <count($numbers) ; $i++) {
        $result+=$numbers[$i];
    }
    return $result;
}

echo getSum(2, 5, 9, 3); //19

// what if you want to provide both limited and unlimited arguments at once

function getSumMixed(ine $x, int $y, int ...$numbers)
{
    $result = 0;
    for ($i=0; $i <count($numbers) ; $i++) {
        $result+=$numbers[$i];
    }
    return $result;
}

echo getSumMixed(2, 5, 9, 3); // output: 12; because we only calculated unlimited arguments not limited x=y, y7=5
