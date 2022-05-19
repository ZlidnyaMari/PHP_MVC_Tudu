<?php
$foo = fn($n) => (((bool)($n & 1)) === true) ? 'нечетное' : 'четное';

$arr = [4, 5, 1, 4, 7, 8, 15, 6, 71, 45, 2];
$arr2 = array_map($foo, $arr);
print_r($arr2);
