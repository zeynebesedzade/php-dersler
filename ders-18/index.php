<?php
/*$avadanliqlar=[
    'monitor',
    'klaviatura',
    'mouse'
];
foreach($avadanliqlar as $a):
    echo $a."<br>";
    endforeach;*/

$avadanliqdetallari=[
    'avadanliqadi'=>'monitor',
    'marka'=>'samsung',
    'qiymeti'=>'2000azn'
];
foreach($avadanliqdetallari as $a=>$b):
    echo $a."-----".$b."<br>";
endforeach;
