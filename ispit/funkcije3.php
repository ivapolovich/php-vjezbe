<?php

declare(strict_types=1); // ovime određujemo da nema type jugglinga
 
 function multiply(int|float $x, int $y) // $x i $y su ovdje PARAMETRI
 {
    return $x * $y . "\n";
 }

echo multiply(5, 19); // vrijednosti koje se upisuju - ARUGUMENTI


// Passing arguments by REFERENCE - referenciramo se na varijable

$a = 10;
$b = 3;

echo multiply($a, $b) . "\n";

// Named arguments  -> x: $x

function fla(int $x , int $y)
{
    if ($x % $y == 0) 
    {
        return $x / $y;
    }
    
    return $x;
}

$x = 6;
$y = 3;

echo fla(x: $x,y: $y);

?>