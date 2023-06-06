<?php
$i = 0;

increment_i : $i++; // here increment_i is called line mark. there is no $ sign for line mark
echo $i.PHP_EOL;

if ($i<10) {
    goto increment_i;
}
