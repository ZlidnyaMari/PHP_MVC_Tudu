<?php
while (true) {
    $question = (int)readline("В каком году произошло крещение Руси? Вариаты ответа: 810, 988, 740. ");

    if ($question === 810 || $question === 740) {
        echo "Это неверный вариант ответа. ";
        break;
    } elseif ($question === 988) {
        echo "Поздравляю Вы ответили правильно. ";
        break;
    };
};
