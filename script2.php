<?php
$wishes = ['счастья', 'здоровья', 'благополучия', 'воображения', 'терпения'];
$epithets = ['бесконечного', 'постоянного', 'невероятного', 'космического'];
$random_congratulation = [];

$name = readline("Назовите ваше имя. ");

for ($i = 0; count($random_congratulation) < 3; $i++) {
    $randWishes = array_rand($wishes, 1);
    $randEpithets = array_rand($epithets, 1);

    $random_congratulation[] = $epithets[$randEpithets].' '.$wishes[$randWishes];
}

//print_r($random_congratulation);
$string_congratulation = implode(",", $random_congratulation);

echo( " $name, от всего сердца поздравляю тебя с Днем Рождения, 
   желаю $string_congratulation.");