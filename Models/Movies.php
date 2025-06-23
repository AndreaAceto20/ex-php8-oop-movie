<?php
// creazione classe per i film
class Movie
{
    public $titolo;
    public $descrizione;
    public $rating;
    protected Genre $genre;

    use IsAvailable;

    // creazione construct
    public function __construct($_titolo, $_descrizione, $_rating, Genre $_genre)
    {
        $this->titolo = $_titolo;
        $this->descrizione = $_descrizione;
        if ($_rating <= 5 || $_rating >= 0) {
            $this->rating = $_rating;
        } else {
            return "Voto non valido";
        }
        $this->genre =  $_genre;
    }
    // creazione metodo
    public function isRecommended()
    {
        if ($this->rating > 4) {
            return "Questo film è raccomandato dal publico";
        } else if ($this->rating < 3) {
            return "Questo film non è raccomandato dal publico";
        }
    }

    public function getGenre()
    {
        return $this->genre->getName();
    }
}
