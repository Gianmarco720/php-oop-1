<?php
/* 
è definita una classe ‘Movie’
all'interno della classe sono dichiarate delle variabili d'istanza
all'interno della classe è definito un costruttore
all'interno della classe è definito almeno un metodo
vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà
*/

require __DIR__ . '/Models/db.php';

$FirstMovie = new Movie('The Lord Of The Rings: The Fellowship Of The Ring', 'Fantasy', 2001, '228 min');
$SecondMovie = new Movie('Wednesday', 'Horror Comedy', 2022, '8 Episodes');
$ThirdMovie = new Movie('The Big Lebowski', 'Comedy', 1998, '117 min');

echo $FirstMovie->get_movies();
echo ('<br>');
echo $SecondMovie->get_movies();
echo ('<br>');
echo $ThirdMovie->get_movies();
