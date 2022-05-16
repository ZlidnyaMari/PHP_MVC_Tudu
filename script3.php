<?php
$students = [
    'ИТ20' => [
        'Иванов Иван' => 5,
        'Кириллов Кирилл' => 3,
        'Сергеев Сергей' => 4,
        'Данилов Данил' => 2
    ],
    'БАП20' => [
        'Антонов Антон' => 4,
        'Андреев Андрей' => 1,
        'Юрьев Юрий' => 2,
    ]
 ];

$average = [];
$studentAscending = [];
$forDeduction = [];
$minGrade = 3;

foreach ($students as $key => $studentList) {
        $average[$key] = round(array_sum($studentList) / count($studentList), 2); // узнаем среднюю оценку
        $maxGroup = array_keys($average, max($average))[0];
        $maxGrade = max($average);

    foreach ($studentList as $index => $value) {
        if ($value < $minGrade) $forDeduction[$index] = $key; // студенты на отчисление
    }
}
    print_r($forDeduction);
    echo "Самая лучшая успеваемость у группы $maxGroup. Средняя оценка по успеваемости $maxGrade.";