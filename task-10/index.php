<?php

$score = 88;
$attendance = 95;
if($score >= 90 && $attendance >= 90){
    echo "Əla nəticə! Təqaüd qazandın.";
}elseif($score >= 70 && $attendance < 80){
    echo "Yaxşı nəticə, təqaüdsüz keçdin.";
}else {
    echo "Təəssüf, kəsildin.";
}
