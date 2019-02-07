<?php
$menuArr = [
  "Дом" => "home",
  "Архив" => "archive",
  "Контакты" => [
    "Дом" => "home",
    "Архив" => "archive",
    "Контакты" => [
      "Дом" => "home",
      "Архив" => "archive",
      "Контакты" => "contact",
    ],
    "О нас" => "about us",
  ],
  "О нас" => "about us",
];

function menuGenerate($menuArr)
{
  $menu = "<ul>";
  foreach ($menuArr as $item => $value) {
    if (!is_array($value)) {
      $menu .= "<li><a href='$value'>$item</a></li>";
    } else {
      $menu .= "<li>" . $item . menuGenerate($value) . "</li>";
    }
  }
  return $menu . "</ul>";
}

echo menuGenerate($menuArr);
