<?php
// creazione classe per i generi
class Genre
{
    public $name;
    public function __construct($_genre)
    {
        $this->name = $_genre;
    }

    public function getName()
    {
        return $this->name;
    }
}
