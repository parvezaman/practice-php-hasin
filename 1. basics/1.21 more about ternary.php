<?php
$n = 10;
$resust = ($n % 2 === 0) ? "A" : ($n % 2 == 11) ? "B" : "C"; // B

// lets break it down how ternary operator works
// ternary takes the last ? and calculate before that
$resust = (($n % 2 === 0) ? "A" : ($n % 2 == 11)); // ? "B" : "C";
// output is "A"

//now the code is like
$resust = ("A") ? "B" : "C";

// which means if first ternary check is true / having any value, then "B". here we are getting a value which is "A"
// that is why we were getting "B" as output


// so how do we solve the problem? we just keep the second checking in brackets()
$resust = ($n % 2 === 0) ? "A" : (($n % 2 == 11) ? "B" : "C"); // A

// breakdown
// $resust = ($n % 2 === 0) ? "A" : (($n % 2 == 11) ? "B" : "C");
//           ($n % 2 === 0) ? "A" : "C"
// output = A

echo $resust;
