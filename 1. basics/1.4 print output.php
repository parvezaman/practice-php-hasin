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
break!";
