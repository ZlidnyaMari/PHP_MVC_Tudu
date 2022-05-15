<?php
$arr1 = [1, 2, 3, 4, 5, 6, 7, 8, 9, 10];
$arr2 = [10, 9, 8, 7, 6, 5, 4, 3, 2, 1];
$rezult = [];

for ($i = 0; $i < count($arr1); $i++) {
    $rezult[] = $arr1[$i] * $arr2[$i];
};

print_r($rezult);
 