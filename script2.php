<?php

$name = readline('Как Ваше имя? ');

$task_one = readline('Напишите, какие задачи стоят сегодня перед вами? Задача первая: ');
$time_one = readline('Сколько часов она займет? '); 

$task_two = readline('Задача вторая: ');
$time_two = readline('Сколько часов она займет? ');

$task_three = readline('Задача третья: ');
$time_three = readline('Сколько часов она займет? ');

$total_time = $time_one + $time_two + $time_three;

echo "$name, сегодня у Вас запланированно три приоритетных задачи на день: \n
       - $task_one ($time_one ч) \n
       - $task_two ($time_two ч) \n
       - $task_three ($time_three ч) \n 
       Примерное время выполнение плана = $total_time ч.";




