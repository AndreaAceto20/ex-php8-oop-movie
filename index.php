<?php

// require Traits
require_once "./Traits/IsAvailable.php";

// require models/classes
require_once "./Models/Genre.php";
require_once "./Models/Movies.php";

// require data
require_once "./DB/db.php";

// dump dei film per debug
var_dump($V);
var_dump($Avatar);


// stampa in pagina del primo film
echo "<div class = flex>" . "<div class = movie>" . $V->titolo . "<br>";
foreach ($V->getGenre() as $genre) {
    echo $genre . ", ";
};
echo "<br>";
echo $V->descrizione . "<br>";
echo $V->rating . "/5" . "<br>";
echo $V->isRecommended() . "<br>";
echo $V->getAvailable() . "</div>";

// stampa in pagina del secondo film
echo "<div class = movie>" . $Avatar->titolo . "<br>";
foreach ($Avatar->getGenre() as $genre) {
    echo $genre . ", ";
};
echo "<br>";
echo $Avatar->descrizione . "<br>";
echo $Avatar->rating . "/5" . "<br>";
echo $Avatar->isRecommended() . "<br>";
echo $Avatar->getAvailable() . "</div>" . "</div>" . "<br>";








?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="./style.css">
    <title>Movies</title>
</head>

<body>

</body>

</html>