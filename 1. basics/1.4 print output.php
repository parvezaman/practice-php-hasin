<?php

$name = "Earth";

var_dump($name);  // shows value and data type
$string1 = '';
$string2 = ' ';
var_dump($string1, $string2);

// php data types

/*
int
double / float
bool
null
string
array
object
resourcre -> suppouse you have a file in your hard drive. location reference of the file is resource
*/

echo "we'r living on {$name}\n";
echo 'we\'r living on '.$name ."\n";  // echo with escaping

// use of printf
$upperName = strtoupper($name);
echo "we'r living on {$upperName}\n"; // we needed extra variable declaration

printf("we'r living on %s \n", strtoupper($name)); // we have done the same with string placeholder without declaring another variable

// echo with line break

echo "You
also 
can 
use line \n
break!\n";


// lets play a little more with printf

$fname ="pinak";
$lname = 'lowey';

printf("His name is %s %s \n", $fname, $lname);
printf('His name is %2$s %1$s', $fname, $lname); // watch out the single quote (' ')
echo "\n";
// see! now you cant use \n with it. so to use the escaping we are going to use "" as following
printf("His name is %2\$s %1\$s \n", $fname, $lname); // watch out the single quote (' ')

$myFloat = 5.1564285;
// lets print upto 2 decimal
printf("%.2f \n", $myFloat);
printf("%04d \n", $myFloat);
printf("%07.2f \n", $myFloat);

//  another way of line 56 using sprintf
// notable thing regarding sprintf is, by sprintf we can get return of the print. printf function only prints the output but sprintf gives us return of the print and we can store them into another variable which can be used later on
$formattedFloat = sprintf("%07.2f", $myFloat);
echo $formattedFloat . "\n";
/*
In this code, the format specifier "%07.2f" is used with sprintf. Let's break it down:

% indicates the start of a format specifier.
0 is the padding character. It specifies that if the resulting string is shorter than the specified width, it should be padded with zeros.
7 is the width of the resulting string. It includes both the integer part and the decimal part of the number, as well as the decimal point.
.2 specifies the precision, indicating that you want to display two decimal places after the decimal point.
f represents the floating-point format.
The sprintf function formats the value of $myFloat according to the specified format specifier and stores the result in the $formattedFloat variable. The resulting value will be "0005.16".
*/
