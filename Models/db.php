<?php
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

    function get_movies()
    {

        return $this->name;
        return $this->genre;
        return $this->year;
        return $this->movieLength;
    }
}
