<?php
$arr = [4, 5, 1, 4, 7, 8, 15, 6, 71, 45, 2];

function foo (array $n, array $x): array {
    array_push($x, max($n), min($n), (array_sum($n) / count($n)));
    return $x;
}

print_r(foo($arr, []));


