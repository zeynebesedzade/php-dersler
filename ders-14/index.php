<?php
$cars = array("Volvo", "BMW", "Toyota");
print_r($cars);
echo "<br>";

$meyveler=array('meyve1'=>'alma','meyve2'=>'banan','kivi','portagal');
$meyveler['masin']='opel';
print_r($meyveler);
echo "<br>";

$meta=array();
$meta['title']='Phpdersleri';
$meta['desc']='Phpdersleri youtube';
$meta['keyw']='php, pdo, php, oop, php mvc';
?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width,initial-scale=1" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?= $meta['title'];?></title>
        <meta name="description" content="<?= $meta['desc'];?>">
        <meta name="keywords" content="<?= $meta['keyw'];?>">
</head>
        <body>
        <h1>ARRAYS</h1>
        </body>
</html>
