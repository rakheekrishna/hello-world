<?php
// data file for ajax
$make = $_GET['make'];
$models = "";
switch($make)
{
    case 'Nissan': 
        $models = "Altima,Sentra,Rogue";
    break;
    case 'Honda': 
        $models = "City,Civic,Brio,Odyssey";
    break;
    case 'Jeep': 
        $models = "Wrangler,Compass,Cherokee";
    break;
}
echo $models;
?>