<?php
//Задание #3
$cities = [
  "Московская область" => ["Москва", "Зеленоград", "Клин", "Мытищи", "Щербинка", "Балашиха"],
  "Ленинградская область" => ["Санкт-Петербург", "Всеволожск", "Павловск", "Кронштадт"],
  "Волгоградская область" => ["Волгоград", "Волжский", "Камышин", "Калач-на-Дону", "Суровикино"]
];

foreach ($cities as $region => $city) {
  echo "{$region}: <br>" . join(", ", $city) . "<br><br>";
}

//Задание #8
//вывести на экран только города, начинающиеся с буквы «К».
foreach ($cities as $region => $city) {
  echo "{$region}: <br>" . join(", ", selectCity($city, "К")) . "<br><br>";
}

function selectCity($cities, $select)
{
  $selectCities = [];
  foreach ($cities as $nameCity) {
    if (mb_substr($nameCity, 0, 1, "UTF-8") == $select) {
      $selectCities[] = $nameCity;
    }
  };
  return $selectCities;
}
