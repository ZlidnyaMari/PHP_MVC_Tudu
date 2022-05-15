<?php
$arr = [];

for ($i = 0; count($arr) < 100; $i++) {
    $num = random_int(1, 200);

    if (!in_array($num, $arr)) $arr[] = $num;
}
print_r($arr);