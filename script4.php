<?php
function add ($x, $y) {
    return $x + $y;
}
function sub ($x, $y) {
    return $x - $y;
}
function mult ($x, $y) {
    $x * $y;
}
function div ($x, $y) {
    return ($y == 0) ? null : $x / $y;
}


function mathOperation($x, $y, $operation) {
    $func = $operation;
    return $func($x, $y);
}
var_dump(mathOperation(2, 0, 'div'));

