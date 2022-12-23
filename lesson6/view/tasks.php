<head>
    <meta charset="UTF-8">
    <title>Главная</title>
</head>
<body>

<?php include "menu.php" ?>

<form method="POST">
    Enter new Task
    <?php if (isset($description) && $description !="" ): ?>
        Empty task
    <?php endif; ?>
    <input type="text" name="addtask" placeholder="Add task">
    <input type="submit">
</form>

Задачи циклом

<form action="" method="GET">
    <?php foreach ($tasks as $item):?>
        <div>
            <?=$item[1]?> <a href="?controller=tasks&action=done&key=<?=$item[0]?>">[Done]</a>
        </div>
    <?php endforeach;?>
</form>



</body>