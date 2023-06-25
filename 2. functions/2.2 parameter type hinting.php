<?php

// lets find out the factorial of $num
function findFactorial(int $num)
{
    $result =1;
    for ($i=$num; $i >1; $i--) {
        $result *= $i;
    }
    return $result;
}

echo findFactorial("adf");
