<?php

include_once __DIR__ . '/Models/Movie.php';

$lotr = new Movie("Signore degli Anelli", "Fantasy", 10);
var_dump($lotr);

echo "<br>";

$guerre_stellari = new Movie("Star Wars", "Science-fiction", 9.8);
var_dump($guerre_stellari);

?>