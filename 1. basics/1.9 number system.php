<?php
// following are the metods of defining different number system in php
$decinalNum = 12;
$octalNum = 012;
$hexNum = 0x1B;
$binNum = 0b1010110;

printf("decimal eqvalent of octal %o = decimal %d\n", $octalNum, $octalNum);
printf("decimal eqvalent of octal %1\$o = decimal %1\$d\n", $octalNum); // same thing but using one parameter
printf("decimal eqvalent of hexadecimal %x = decimal %d\n", $hexNum, $hexNum);
printf("decimal eqvalent of hexadecimal (upper case) %X = decimal %d\n", $hexNum, $hexNum);
printf("decimal eqvalent of binary %b = decimal %d\n", $binNum, $binNum);
