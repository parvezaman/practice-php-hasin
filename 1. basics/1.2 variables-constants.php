<?php
// coding standard: https://www.php-fig.org/psr/

$name = "Bangladesh";
$favourite = "name";
$what = 'favourite';

echo $$$what; // watch out how multiple $ is used

echo "\n"; // for new line
// concatination among variable and string
echo "Hello ". $name;
echo "\n";
echo "Hello $name";
echo "\n";
echo "Hello {$name}"; // you can do this as well
echo "\n";
echo 'Hello $name'; // you cant do this with  '' single quote
echo "\n";


// lets define a constant

define("PI", 3.1416);
echo "value of PI = ".PI;
echo "\n";
// echo constant('PI');
echo "\n";

$constant = 'constant';
echo "value of PI = {$constant('PI')}";
