<?php
while (true) {
    $apple = (int)readline("Сколько яблок вам нужно? (Для выхода из программы нажмите ноль). ");

    if ($apple == 1){
        $endOfWord = "о";
    } elseif ($apple > 1 && $apple < 5) {
        $endOfWord = 'a';
    } elseif ($apple >= 5) {
        $endOfWord = "";   
    } elseif ($apple === 0) {
        break;
    }

    echo "$apple яблок$endOfWord \n";   
}


