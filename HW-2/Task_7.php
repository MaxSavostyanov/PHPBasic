<?php
function getCorrectEnding($number, $title1, $title2, $title3) {
  $a = $number % 100;
    if ($a >= 11 && $a <= 14) {
      return $title3;
    } else {
      $b = $a % 10;
      if ($b === 1) {
        return $title1;
      } else if ($b >= 2 && $b <= 4) {
        return $title2;
      } else {
        return $title3;
      }
    }
  }

$hour = date("G");
$minute = date("i");
//очень хотелось использовать массив с правильными окончаниями.
$hourEnding = getCorrectEnding($hour, "час", "часа", "часов");
$minuteEnding = getCorrectEnding($minute, "минута", "минуты", "минут");

echo "Текущее время: <b>{$hour}</b>{$hourEnding} <b>{$minute}</b>{$minuteEnding}";
