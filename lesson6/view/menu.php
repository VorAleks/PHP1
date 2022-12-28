<a href="/">Главная</a>
<a href="/?controller=security">Авторизации</a>
<?php if ($username !== null) : ?>
<a href="/?controller=tasks">Задачи</a>
<br>
<p>Рады вас приветствовать, <?= $username ?>. <a href="?controller=security&action=logout">[Выход]</a></p>
<?php endif;?>