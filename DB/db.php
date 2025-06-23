<?php
// creazione per il primo film

$V = new Movie("V per Vendetta", "V per Vendetta è una graphic novel e un film che racconta la storia di V, un enigmatico anarchico che indossa una maschera di Guy Fawkes e combatte contro un regime totalitario in una futuristica Gran Bretagna", 5, new Genre($B = ["Action", "Thriller"]));
$V->setAvailable("Film Disponibile");

// creazione per il secondoo film
$Avatar = new MOvie("Avatar", "Avatar è un film di fantascienza ambientato nell'anno 2154 su di un pianeta chiamato Pandora, dove gli umani, smaniosi di sfruttare i giacimenti minerari presenti nel sottosuolo, si scontrano con la popolazione locale dei Na'vi, degli umanoidi alti tre metri e ricoperti da una pelle blu striata.", 4.5, new Genre($A = ["Fantascienza", "Thriller"]));
$Avatar->setAvailable("Film Non Disponibile");
