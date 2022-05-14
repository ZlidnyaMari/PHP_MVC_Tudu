<?php
$number = (int)readline("Введите число, что бы узнать палец. ");

if ($number <= 0) die("Неверное значение. ");

switch (true) {
    case ($number % 8 == 0 || $number % 8 == 2):
        echo "Указательный палец";
        break;
    case $number % 8 == 1:
        echo "Большой палец";
        break;
    case ($number % 8 == 3 || $number % 8 == 7):
        echo "Средний палец";
        break;
    case ($number % 8 == 4 || $number % 8 == 6):
        echo "Безымянный палец";
        break;
    case $number % 8 == 5:
        echo "Мезинец";
        break; 
     default:
        echo "Неверное значение";
}

