<?php
for($i=0; $i<=10;$i++){
    echo $i."<br>";
}
echo "<br>";
for($i=0; $i<=10;$i+=2){
    echo $i."<br>";
}
echo "<br>";
$adlar=[
    'Zeyneb','Ibrahim','Humay','Yaqut','Murat','Fidan'
    ];
//print_r($adlar);
//echo $adlar[0];
//echo $adlar[1];
//echo $adlar[2];
//echo $adlar[3];
//echo count($adlar);
//echo "<br>";

//for($i=0; $i<=3;$i++){
//    echo $adlar[$i]."<br>";
//}
$arrayelementsayi=count($adlar)-1;
for ($i=0; $i <= $arrayelementsayi ; $i++) {
    echo $adlar[$i]."<br>";
}