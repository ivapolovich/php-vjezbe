<?php

// do-while - glavna razlika od while-a je da će se tvrdnje u loop-u izvršiti BAREM jednom - jer je izraz while-a "iščitan" na kraju itreacije a ne na početku -- while ($i <= 15);

$i = 55;

do {
    echo $i++;      // čak i kad je vrijednost varijable npr 55, do while loop će se izvršiti JEDNOM - izbaciti ce broj 55 i to je to - dalje neće nastaviti jer ne ispunjava uvjete unutar while () zagrada

} while ($i <= 15);


// Counting from 1 to 10

$x = 10;

do {
    echo $x . "\n";
    $x--;
} while ($x >= 1);

// counts down from 10 to 1 

$number = 1;

do {
    echo $number . "\n";
    $number++;
} while ($number <= 10);



// Php script that prompts the user to enter a number greater than 100

$number = 0;

do {
    echo "Enter the number greater than 100: ";
    $number = trim(fgets(STDIN)); // getting input from the user
    if (is_numeric($number) && $number > 100) {
        echo "Thank you, you've entered a valid number : $number\n";
    } else {
        echo "Invalid input. The answer must be greater than 100.\n";
    }
} while ($number <= 100);


// Prompting to guess the password hello

$correctPassword = "hello"; //defining the correct password
$userGuess = ''; // user guess 

do {
    echo " Guess the correct password : ";
    $userGuess = trim(fgets(STDIN));
    if ($userGuess === $correctPassword) {
        echo "Congratulations, correct password!";
    } else {
        echo "Incorrect password, try again. \n";
    }
} while ($userGuess !== $correctPassword);


// Multiplication Table - generate and print the multiplication table ( up to 10) of a number entered by user using a do-while loop

// Number we are multiplying with
$number = 5;  // $number = intval(trim(fgets(STDIN))); za user input preko terminala

// The multiplier
$multiplier = 1;

do {
    //Kalkulacija produkta
    $product = $number * $multiplier;
    // Prikaz trenutnog tablice
    echo "$number * $multiplier = $product \n";
    // Inkrementiramo multiplier da dobijemo sljedeći umnožak
    $multiplier++;
} while ($multiplier <= 10); // izvršavaj ovu naredbu sve dok se kod ne izvrši 10 puta

// Use a do-while loop to find the sum of numbers from 1 to 20. Print the sum at the end.

$number = 1; // počnemo zbrajati od 1
$sum = 0; // inicijalizacija sume

do {
   $sum += $number; // dodavanje broja 1 sumi
   $number++; // inkrement broja
} while ($number <= 20); // izvršavaj kod dok ne dodes do 20

echo "The sum of numbers from 1 to 20 is: $sum\n";

// Ispiši zbrojeve broja 5 sa svim brojevima od 1 do 50

$number = 5;  
$suma = 1;

do {
   
    $rjesenje = $number * $suma;

    echo "$number + $suma = $rjesenje \n";
   
    $suma++;
} while ($suma <= 50);

// Printing squares from 1 to 10

$number = 1;

do {
    $square = $number * $number;
    echo "The square of $number is $square\n";
    $number++;
} while ($number <= 10);

// Printing only odd numbers from 1 to 20

$number = 1; // Initialize starting number

do {
    if ($number % 2 != 0) { // Check if the number is odd
        echo $number . "\n"; // Print the odd number
    }
    $number++; // Increment the number for next iteration

} while ($number <=20); // continu the loop until 20

// Printing only even numbers from 1 to 20

$number = 1; // Initialize starting number

do {
    if ($number % 2 == 0) { // Check if the number is even
        echo $number . "\n"; // Print the even number
    }
    $number++; // Increment the number for next iteration

} while ($number <=20); // continu the loop until 20

?>