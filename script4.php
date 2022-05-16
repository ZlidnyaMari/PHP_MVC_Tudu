<?php
$arr =  ["str", 2, 3, 4, 5, 0, 0, 0, 0, 0];

$newArr = array_diff($arr, array(0));
print_r(array_merge(...array_map(null, $newArr, $newArr)));

