<?php

include_once __DIR__ . '/Models/Movie.php';

$lotr = new Movie("Signore degli Anelli", ["fantasy", "epic", "cult"], 10, 200);
var_dump($lotr);

echo "<br>";

$guerre_stellari = new Movie("Star Wars", ["science-fiction", "history", "cult"], 9.8, 100);
var_dump($guerre_stellari);

?>