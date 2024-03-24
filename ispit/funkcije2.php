<?php
// klasična funkcija

function foo() 
{
    echo "Hello World\n";
}

foo(); // pozivanje funkcije

// naredba return koji dodjeljujemo varijabli $x

function faa() 
{
    return "Hello Beautifull\n";
}

$x = faa(); // dodjeljivanje varijabli

echo $x; // echo-amo varijablu


// ako imamo neki uvjet, on uvijek mora ici prije nego što pozovemo funkciju :

if(true) 
{
    function fii() 
    {
        return "Hello there\n";
    }
}

var_dump(fii());

// navodimo tip podataka : pa naziv podataka

function bla(): int
{
    return 1;
}

var_dump(bla());

// pritanje praznine?

function bli(): void
{
    return;
}

var_dump(bli()); // dobivamo NULL

// Kada smatramo da će biti više različitih podataka

function flu(): int|float|array // ili napises mixed
{
    return [1];
}

var_dump(flu());

/** Funkcija sa promjenjivim brojem argumenata - ...$argumenti + foreach */

function mojaFunkcija(... $argumenti)
{
    foreach ($argumenti as $argument) 
    {
        echo $argument . "\n";
    }
}

mojaFunkcija(1, 4, "lava");



?>