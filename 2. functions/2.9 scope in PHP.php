<?php
/*
// global scope
$name = "Earth";

function printName()
{
    // global $name; // either you declare a global variable with the same name. NOT RECOMMENDED
    // echo $name;
    echo $GLOBALS['name']; // or you destructure the $GLOBALS variable
}

printName();
 */


/* // local scope

function printName()
{
    $name = "Earth";
    echo $name;
}

printName(); */


// static scope

function doSomething()
{
    static $i;
    $i =$i ?? 0;

    $i++;
    echo "$i \n";
}


function doSomethingAgain()
{
    static $i;
    $i =$i ?? 0;

    $i++;
    echo "$i \n";
}

doSomething();
doSomething();
doSomething();
doSomething();
doSomethingAgain();
doSomethingAgain();
doSomething();
doSomethingAgain();
