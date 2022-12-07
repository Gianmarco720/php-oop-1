<?php
/* 
è definita una classe ‘Movie’
all'interno della classe sono dichiarate delle variabili d'istanza
all'interno della classe è definito un costruttore
all'interno della classe è definito almeno un metodo
vengono istanziati almeno due oggetti ‘Movie’ e stampati a schermo i valori delle relative proprietà
*/

require __DIR__ . '/Models/db.php';

$wednesday = new Movie('Wednesday', 'Horror Comedy', 2022, '8 Episodes');
var_dump($wednesday);
