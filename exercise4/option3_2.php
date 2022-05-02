<?php

$text = "Информация обо мне";

$content = file_get_contents('option3_1.php');

$content = str_replace("{{ text }}", $text, $content);

echo $content;
