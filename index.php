<?php
$number_1 = 20;
$number_2 = 10;

echo "Before swapping: number_1 = $number_1, number_2 = $number_2<br>";


$number_1 = $number_1 + $number_2;
$number_2 = $number_1 - $number_2;
$number_1 = $number_1 - $number_2;

echo "After swapping: number_1 = $number_1, number_2 = $number_2";
 ?>