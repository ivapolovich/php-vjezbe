<?php

// Primjer iz skripte

function generiranjeBrojeva($nizBrojeva, $brojGeneriranihBrojeva, $djeljivoSa) 
{
    for ($i = 1; $i <= $brojGeneriranihBrojeva; $i++) {
        array_push($nizBrojeva, $i*$djeljivoSa);
    }
    return $nizBrojeva;
}

$nizBrojeva = [2,4,6,8,10];
$brojGeneriranihBrojeva = 5;
$djeljivoSa = 2;

generiranjeBrojeva($nizBrojeva, $brojGeneriranihBrojeva, $djeljivoSa);
print_r($nizBrojeva);

// CHATGPT vježba

function generateMultiples($multipleOf, $limit, &$resultArray) 
{
    for ($i = 1; $i <= $limit; $i++) {
        $resultArray[] = $i * $multipleOf;
    }
    return $resultArray;
}

$resultArray = [];

generateMultiples(3, 5, $resultArray);
print_r($resultArray);

?>