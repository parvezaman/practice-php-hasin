<?php
// if there is any number in the string at the begining, switching that can be tricky

$myString = "8balls";

switch ($myString) {
    case "9balls":
        echo "9 Balls \n";
        break;
    case 8:
        echo "8 \n"; // this code will result in 8. because of typecasting problem. switch automatically casts the string into nubmer
        break;
    case "8balls":
        echo "8 balls \n";
        break;
    default:
        echo "some balls \n";
        break;
}


switch ($myString) {
    case (string) "9balls":
        echo "9 Balls \n";
        break;
    case (string) 8: // now we have casted the type as string and this will work as desired
        echo "8 \n";
        break;
    case (string) "8balls":
        echo "8 balls \n";
        break;
    default:
        echo "some balls \n";
        break;
}
