<?php

$numbers = array(1, 2, 3, 4, 5);
$cb = function ($number) {
return $number * $number;
};

$squaredNumbers = array_map($cb, $numbers);

$add = fn ($a, $b) => $a + $b;

$sum = $add(2, 3);

echo $sum;