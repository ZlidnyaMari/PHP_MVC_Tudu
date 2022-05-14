<?php
$name = readline('Как Ваше имя? ');
$numberTask = (int)readline("$name какое количество задач запланированно на сегодня? ");
$arrTask = [];
$result_time = 0;

if ($numberTask === 0) echo "Вы ввели неверное число, или у вас действительно нет задач на сегодня? ";

for ($i = 1; $i <= $numberTask; $i++) {
       $task = readline("$name напишите запланированную задачу. ");
       $time = readline("Сколько часов она займет. ");

       $arrTask[$task] = $time; 
       $result_time += $time;

}

echo "$name, сегодня у Вас запланированно $numberTask задач(и) на день \n
колличество общего затраченного времени: $result_time ч. \n";

foreach ($arrTask as $key => $value) {
        echo "$key займет $value ч \n";
}

// Вариант задачи  с конкатинацией
// $str = "";

// for ($i = 1; $i <= $numberTask; $i++) {
//        $task = readline("$name напишите запланированную задачу. "); 
//        $time = readline("Сколько часов она займет. ");

//        $str = $str . $task;
//        $result_time += $time;
// }       

// echo "$name, сегодня у Вас запланированно $numberTask задач(и) на день \n
// $str \n
// колличество общего затраченного времени: $result_time ч. \n";
