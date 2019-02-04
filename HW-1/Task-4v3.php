<?
$h1 = "Информация обо мне";
$title = "Главная страница - страница обо мне";
$year =  date('Y');

echo "Вариант 3";

$site = file_get_contents("site.tpl");
$site = str_replace("{{HEADING}}", $h1, $site);
$site = str_replace("{{TITLE}}", $title, $site);
$site = str_replace("{{YEAR}}", $year, $site);

echo $site;

