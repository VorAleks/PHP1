<head>
    <meta charset="UTF-8">
    <title>Задачи</title>
</head>
<body>
<h1><?= $pageHeader ?></h1>
Рады вас приветствовать, <?= $username ?>. <a href="?controller=security&action=logout">[Выход]</a>
<a href="?controller=index">Главная</a>
<br>
<br>
<form method="POST">
    Опишите новую задачу
    <input type="text" name="addtask" placeholder="Новая задача">
    <input type="submit">
</form>

Задачи
<!-- <form method="POST">
    <button type="submit" name="tasks" value="unisdone">Незавершенные</button>
    <button type="submit" name="tasks" value="alltasks">Весь список</button>
</form> -->

<form action="" method="GET">
    <?php foreach ($tasks as $item):?>
        <div>
            <?=$item->getDescription()?> <a href="?controller=tasks&action=done&key=<?=$item->getId()?>">[Done]</a>
        </div>
    <?php endforeach;?>
</form>

<?php if ($userlogin == 'admin'): ?>
    Список юзеров только для админа<br>
<br>
    <form action="" method="GET">
        <?php foreach ($users as $user):?>
            <div>
                Имя: <?=$user->getName()?>. Логин: <?=$user->getUsername()?>. <a href="?controller=tasks&action=done&key=<?=$user->getId()?>">[Del]</a>
            </div>
        <?php endforeach;?>
    </form>
<?php endif;?>

</body>