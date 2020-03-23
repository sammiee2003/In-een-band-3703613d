<?php

$albums = array("Citizen of Glass" => 4.5,"Night" => 9, "New eyes" => 5, "Strange Trails" => 10);
echo "Het album overzicht:". PHP_EOL;

foreach ($albums as $album => $prijs){
    echo $album . " kost " . $prijs . PHP_EOL;
}

$totaal = array_sum($albums);
echo "het totale bedrag van alle albums is: " . $totaal . PHP_EOL ;

$gemiddeld = $totaal /4;
echo "het gemiddelde bedrag van de albums is: ". $gemiddeld;