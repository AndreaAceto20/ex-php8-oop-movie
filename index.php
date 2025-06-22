<?php



class Movie
{
    public $titolo;
    public $descrizione;
    public $rating;

    public function __construct($_titolo, $_descrizione, $_rating)
    {
        $this->titolo = $_titolo;
        $this->descrizione = $_descrizione;
        if ($_rating <= 5 || $_rating >= 0) {
            $this->rating = $_rating;
        } else {
            return "Voto non valido";
        }
    }

    public function isRecommended()
    {
        if ($this->rating > 4) {
            return "Questo film è raccomandato dal publico";
        } else if ($this->rating < 3) {
            return "Questo film non è raccomandato dal publico";
        }
    }
}


$V = new Movie("V per Vendetta", "Storia di V", 5);
echo "<div class = flex>" . "<div class = movie>" .  $V->titolo . "<br>";
echo $V->descrizione . "<br>";
echo $V->rating . "/5" . "<br>";
echo $V->isRecommended() . "</div>";

$V = new Movie("V per Vendetta", "Storia di V", 5);
echo  "<div class = movie>" .  $V->titolo . "<br>";
echo $V->descrizione . "<br>";
echo $V->rating . "/5" . "<br>";
echo $V->isRecommended() . "</div>" . "</div>";










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