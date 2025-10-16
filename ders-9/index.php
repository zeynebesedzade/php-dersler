<?php

$x = 100;
$y = 50;
echo $x == 100 || $y == 50;
echo "<br>";
echo $x == 100 && $y == 50;
echo "<br>";

$x = 100;
echo $x == 100 || $x == 50;

echo "<br>";

$x = NULL;
echo $x;
echo "<br>";

$x = 100;
$y = 50;
echo !($x == 100 || $y == 50); // false olacaq