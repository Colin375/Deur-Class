<?php
include "deur.php";

// Scenario 1: deur blijft op slot (foutmeldingen)
$deur1 = new Deur("Voordeur");
echo $deur1->sleutelGebruiken("rechts") . "\n";
echo $deur1->deurOpenen() . "\n";
echo $deur1->doorDeurLopen() . "\n";

echo "\n";

// Scenario 2: wel ontgrendeld, maar niet geopend
$deur2 = new Deur("Voordeur");
echo $deur2->sleutelGebruiken("links") . "\n\n";
echo $deur2->doorDeurLopen() . "\n";

echo "\n";

// Scenario 3: ontgrendelen, openen en naar binnen lopen
$deur3 = new Deur("Voordeur");
echo $deur3->sleutelGebruiken("links") . "\n";
echo $deur3->deurOpenen() . "\n";
echo $deur3->doorDeurLopen() . "\n";
?>