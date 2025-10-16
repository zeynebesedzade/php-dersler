<?php
$a = 14;
if ($a < 20) {
    echo ' $a deyiseni 20-den kicikdir';
}

echo "<br>";

$a = 10;
if ($a == 140) {
    echo ' $a deyiseni 140-a beraberdir';
} elseif ($a == 100) {
    echo ' $a deyisen 100-e beraberdir';
} elseif ($a == 10) {
    echo ' $a deyiseni 10-a beraberdir';
}
echo "<br>";
$a = 1000;
if ($a == 140) {
    echo ' $a deyiseni 140-a beraberdir';
} elseif ($a == 100) {
    echo ' $a deyisen 100-e beraberdir';
} elseif ($a == 10) {
    echo ' $a deyiseni 10-a beraberdir';
} else {
    echo "hec biri dogru deyil";
}

