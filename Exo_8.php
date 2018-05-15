<?php
$mois = array("Janvier","Février","Mars","Avril","Mai","Juin","Juillet","Aout","Septembre","Octobre","Novembre","Décembre");
$nombre = count($mois);
$i = 0;
do{
    echo $mois[$i]."<br />";
    $i++;
} while($i < $nombre);
?>