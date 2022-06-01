<head>
   <meta charset="UTF-8">
   <title>Главная</title>
</head>
<body>
    <h1><?=$pageHeader?></h1>

    <?php if ($username === null) : ?>
        <a href="/?controller=security">[Авторизация]</a>
    <?php else : ?>
        <p>Рады вас приветствовать <?=$username?></p>
        <a href="/?controller=task">[Менеджер задач]</a> 
        <a href="/?controller=security&action=logout">[Выйти]</a>
    <?php endif ?>
   
</body>
