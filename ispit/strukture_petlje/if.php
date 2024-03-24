<?php

// Write a PHP script that checks if a variable $number is even or odd. If the number is even, print "The number is even." Otherwise, print "The number is odd."

$number = 6;

if ($number % 2 !== 0)
{
    echo "$number is odd\n";
} else {
    echo "$number is even\n";
}

// Based on a student's score ($score), print their grade according to the following criteria:

//A: score >= 90
//B: score >= 80 and < 90
// C: score >= 70 and < 80
// D: score >= 60 and < 70
// F: score < 60

$score = 80;

if ($score >= 90) {
    echo "Grade: A\n";
} elseif ($score >= 80) {
    echo "Grade: B\n";
} elseif ($score >= 70) {
    echo "Grade: C\n";
} elseif ($score >= 60) {
    echo "Grade: D\n";
} else {
    echo "Grade: F\n";
}

?>