<?php
$i = 0;

increment_i : $i++; // here increment_i is called line mark. there is no $ sign for line mark
echo $i.PHP_EOL;

if ($i<10) {
    goto increment_i;
}


// find factorial of a number using go to command
$number = 6;
$n = $number;
$product = $number;
decrement_n : $n--;
$product *=$n;
if ($n>1) {
    goto decrement_n;
}
echo "factorial of {$number} = ".$product;
