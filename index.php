<?php
/* 
è definita una classe ‘Movie’
all'interno della classe sono dichiarate delle variabili d'istanza
all'interno della classe è definito un costruttore
all'interno della classe è definito almeno un metodo
vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà
*/

class Movie
{
    public $name;
    public $genre;
    public $year;
    public $movieLength;

    function __construct($name, $genre, $year, $movieLength)
    {
        $this->name = $name;
        $this->genre = $genre;
        $this->year = $year;
        $this->movieLength = $movieLength;
    }
}
