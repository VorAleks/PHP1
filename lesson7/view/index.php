<head>
    <meta charset="UTF-8">
    <title>Главная</title>
</head>
<body>


<h1><?= $pageHeader ?></h1>
<?php if ($user == null) : ?>
    <form method="GET">
        <button type="submit" name="controller" value="security">ВХОД</button>
        <button type="submit" name="controller" value="registration">РЕГИСТРАЦИЯ</button>
    </form>
    <?php else: ?>
        Рады вас приветствовать, <?= $username ?>. <a href="?controller=security&action=logout">[Выход]</a>
        <a href="/?controller=tasks">Задачи</a>
    <?php endif; ?>
</body>