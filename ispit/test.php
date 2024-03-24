<?php

$a = 5;
$b = 3;
$c = 15;


if (($b > $a && $b < $c ) || ($b < $a && $b > $c))
{
    echo "b je između a i c";
} else {
    echo "b nije između a i c";
}

/*$i = 1;

while ($i <= 10)
{
    echo $i;
    $i++;
}
*/

for ($i=0; $i <= 100; $i++) { 
    if ($i % 2 == 0)
    {
        echo $i;
    }
    $i++;
}


$names = ['Ana', 'Ivana', 'Iva', 'Marija', 'Petra'];

foreach ($names as $key => $name) {
    echo $key . " " . $name . "\n";
}

function writeHello()
{
    return "Hello World";
}

$x = writeHello();

echo $x;


function person($name, $surname)
{
    $ukupno = $name . " " . $surname;
    $ukupnoVeliki = strtoupper($ukupno);
    echo "The result is . $ukupnoVeliki";
}

$ukupno = person('ana', 'bandic');

?>