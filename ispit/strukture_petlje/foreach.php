<?php

// foreach - used to iterate over arrays or object

$programmingLanguages = ['PHP', 'Java', 'C++'];

// foreach ($varijablaNaKojuSeOdnosi as $key => $novaVarijabla)
// toj novoj varijabli SAMA daješ naziv!

foreach ($programmingLanguages as $key => $language) {
    echo $key . ":" . $language . "\n";
}

// kada stavimo $key ispred i konkatoniramo sa : dobijemo index svake stavke array-a -> 0:PHP ...

$user = [
    'name' => 'Iva',
    'email' => 'iva.polovic2@gmail.com',
    'skills' => ['php', 'html', 'css'],
];

foreach($user as $key => $value) {
    echo $key . ":"  . json_encode($value) . "\n";
}

// Morali smo koristiti json_encode jer u suprotnom pokušavamo convertati array u string - što je ne moguće ovako

?>