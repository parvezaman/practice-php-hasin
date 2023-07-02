<?php
// deep copy || copy by value
$person = array(
    'f_name'=> "pikalachu",
    'l_name'=>'pokuta',
);

$newPerson=$person;
$newPerson['l_name']='richuana';

// print_r($person);
// print_r($newPerson);
// print_r($person);

/*
Array
(
    [f_name] => pikalachu
    [l_name] => pokuta
)
Array
(
    [f_name] => pikalachu
    [l_name] => richuana
)
Array
(
    [f_name] => pikalachu
    [l_name] => pokuta
)
*/


// shallow copy
$person2 = array(
    'f_name'=>"shallow",
    'l_name'=>'copy'
);

$newPerson2 = &$person2; // with the & we are copying the reference not value

$newPerson2['l_name']="copy by reference";

// print_r($person2);
// print_r($newPerson2);
// print_r($person2);

/*
Array
(
    [m_name] => shallow
    [p_name] => copy by reference
)
Array
(
    [m_name] => shallow
    [p_name] => copy by reference
)
Array
(
    [m_name] => shallow
    [p_name] => copy by reference
)
*/


function printData(&$person)
{
    $person['f_name'] .= ' Changed';
    print_r($person);
}

printData($person);
print_r($person);
