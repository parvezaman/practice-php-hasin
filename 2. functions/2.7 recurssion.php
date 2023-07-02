<?php
// print 1 - 10 with recurrsion

/* function printNum($i)
{
    if ($i>10) {
        return;
    }

    echo "$i \n";
    $i++;
    printNum($i);
}

printNum(1); */


/* function printNum($counter, $end, $stepping=1)
{
    if ($counter>$end) {
        return;
    }
    echo "$counter \n";
    $counter += $stepping;
    printNum($counter, $end, $stepping);
}

printNum(1, 10, 3);
 */

//  Find fibonacci series
// 0 1 1 2 3 5 8 13 21 34
function fibonacci($old, $new, $end)
{
    static $start;
    $start = $start ?? 1;
    /* The line $start = $start ?? 1; is using the null coalescing operator ?? to initialize $start with a value of 1 if it is currently null or undefined. */
    if ($start > $end) {
        return;
    }
    $start++;

    echo "$old ";

    $_temp = $old+$new;
    $old = $new;
    $new = $_temp;

    fibonacci($old, $new, $end);
}

fibonacci(0, 1, 10);
