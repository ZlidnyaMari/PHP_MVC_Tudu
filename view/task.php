<head>
   <meta charset="UTF-8">
   <title>Главная</title>
</head>
<body>
    <h1>Менеджер задач</h1>
    <a href="/">Главная</a>

    <form action="/?controller=task&action=add" method="POST">
        <input type="text" name="task" placeholder="Введите задачу">
        <input type="submit" value="Отправить" >
    </form>

    <?php foreach ($listTask as $task): ?>
        <p>
            
            <?= $task->getDescription() ?> [x]
        </p>
    <?php endforeach; ?>  
</body>