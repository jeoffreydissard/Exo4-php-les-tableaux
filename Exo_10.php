<?php
$Occitanie = array("09"=>"Ariège","11"=>"Aude","12"=>"Aveyron","30"=>"Gard","31"=>"Haute-Garonne","32"=>"Gers","34"=>"Hérault","46"=>"Lot","48"=>"Lozère","65"=>"Hautes-Pyrénées","66"=>"Pyrénées-Orientales","81"=>"Tarn","82"=>"Tarn-et-Garonne");
$nombre = count($Occitanie);
foreach ($Occitanie as $key => $value){
    echo "Le département ".$value." a le numéro ".$key."<br />";
}
?>