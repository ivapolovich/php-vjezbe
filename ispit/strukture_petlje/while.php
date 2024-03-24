<?php

// ispiši sve neparne brojeve između 14 i 34

$number = 14;

while ($number <= 34) 
{
    if ($number % 2 !== 0)
    {
        echo $number . "\n";
    }
    $number++;
}

// Write a script to count from 1 to 50, printing each number in a new line

$i = 1;

while ($i <= 50) 
{
    echo $i . "\n";
    $i++;
}

// Use a while loop to print all even numbers between 1 and 100 on new lines.

$i = 1;

while ($i <= 100)
{
    if ($i % 2 == 0 )
    {
        echo $i . "\n";
    }
    $i++;
}

// Write a script that calculates the factorial of a given number (for example, 5, which is 1*2*3*4*5 = 120). The number can be hardcoded or input by the user.

$number = 5;
$factorial = 1;

$i = $number;

while ($i > 0)
{
    $factorial *= $i; // Multiply the current value of factorial by i
    $i--; // Decrement i by 1
}

echo "The factorial of $number is $factorial\n";

// Ask the user to input a number, then use a while loop to print the multiplication table for that number from 1 to 12. Each entry should be printed on a new line.

$number = 2;
$counter = 1;

while ($counter <= 12) 
{
   $product = $number * $counter;
   echo "$number * $counter = $product\n";
   $counter++;
}


// Svi kvadrati brojeva od 5 do 100

$number = 5;

while ($number <= 100)
{
    $kvadrat = $number * $number;
    echo "$number * $number = $kvadrat\n";
    $number++;
}


?>