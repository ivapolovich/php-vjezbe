<?php
/** variable scope */
/** we have GLOBAL and LOCAL scope
 * velikim dijelom varijable imaju samo jedan scope koji 
 * se odnosi onda na svaki include i require file
  */

  $x = 5; /** dostupna kroz cijeli script */

  /** definiranjem funcije i varijabli UNUTAR funkcije, one 
   * imaju LOCAL scope - 
   */
/** definiramo varijablu unutar funkcije */
   function food() 
   {
    $y = "lignje";
    echo $y . "\n";
   }

   food();

/** unosimo ju kao parametar i kao argument 
 * kada pozivamo funkciju */

$z = "fanta";

function drinks($z) 
{
 echo $z . "\n";
}

drinks($z);

/** GLOBAL ključna riječ za dohvat globalnih varijabli */

$p = "kolacic";

function deserts() 
{
 global $p;

 // ovdje ju možeš i mijenjati - $p = "banana";
 echo $p . "\n";
}

deserts();


?>