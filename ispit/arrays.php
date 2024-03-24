<?php

// array_chunk -> splitting array into a list of smaller chunks of array

$items = [
    'a' => 1, 
    'b' => 2,
    'c' => 3,
    'd' => 4,
    'e' => 5,
];

print_r (array_chunk($items, 2, true)); 

print_r (array_slice($items, 4, 2, true));







?>