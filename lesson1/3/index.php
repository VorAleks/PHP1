<?php
$title = "Главная страница - страница обо мне";
$aboutMe = "Информация обо мне";
$year = date("Y");

$content = file_get_contents ("site.html");

$content = str_replace ("{{ Title }}", $title, $content);
$content = str_replace ("{{ aboutMe }}", $aboutMe, $content);
$content = str_replace ("{{ Year }}", $year, $content);

echo $content;