<?php

// SWITCH je sličan strukturama if elseif else
// dozvoljava nam da uspoređujemo isti izraz sa različitim vrijednostima i time vrti različiti dio koda
// runs the code based on which value matches the given expression

$paymentStatus = 'declined'; // možemo raditi i sa integerima za vrijednost i case value

switch ($paymentStatus) {
    case 'paid': // upisujemo vrijednost varijable gore
        echo 'Paid submission';
        break; 
    case 'rejected':
    case 'declined': // izvršit će Declined Payment za oba slučaja
        echo 'Declined Payment';
        break;

    default: // ako ne može naći što odgovara varijabli - ispisuje ovo
        echo 'Unknown Payment Status';
        break;
}

// Switch tvrdnja izvršava kod liniju po liniju - ali tek kad nađe odgovarajući slučaj


$danUtjednu = date(1); // ispisuje case 1

switch ($danUtjednu) {
    case 1:
        echo "Danas je ponedjeljak.";
        break;
    
    case 2:
        echo "Danas je utorak.";
       break;
    case 3:
        echo "Danas je srijeda.";
       break;
}



?>