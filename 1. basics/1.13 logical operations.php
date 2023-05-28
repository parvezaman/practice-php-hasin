<?php
// lets find out whether the given year is a leap year or not
// conditions for a year to be a leap year
// year % 4 === 0
// year % 100 === 0
// year % 400 === 0

$year = 2012;

if ($year % 4 === 0 && $year % 100 === 0 && $year % 400 === 0) {
    echo "{$year} is a leap year \n";
} elseif ($year % 4 === 0 && $year % 100 === 0) {
    echo "{$year} is not a leap year \n";
} elseif ($year % 4 === 0) {
    echo "{$year} is a leap year \n";
} else {
    echo "{$year} is not a leap year \n";
}


if (true && false) {
    echo "I will not be printed cause i am false \n";
}

if (false && false) {
    echo "I will not be printed cause i am false \n";
}

if (true && true) {
    echo "I will be printed cause i am true \n";
}


// another way to find out the leap year
if ($year % 4 === 0 && ($year % 100 !== 0 ||$year % 400 === 0)) {
    echo "{$year} is a leap year \n";
} else {
    echo "{$year} is not a leap year \n";
}
