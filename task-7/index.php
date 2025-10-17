<?php


$price=50;
if ($price < 100) {
    echo $price;
} elseif ($price >100 || $price < 500) {
    echo $price*0.9;
} elseif($price>500){
    echo $price*0.8;
}
