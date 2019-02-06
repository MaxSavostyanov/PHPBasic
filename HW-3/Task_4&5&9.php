<?php
//Задание #4
$alphabetRu = [
  "a" => "a", "А" => "A",
  "б" => "b", "Б" => "B",
  "в" => "v", "В" => "V",
  "г" => "g", "Г" => "G",
  "д" => "d", "Д" => "D",
  "е" => "e", "Е" => "E",
  "ё" => "yo", "Ё" => "Yo",
  "ж" => "g", "Ж" => "G",
  "з" => "z", "З" => "Z",
  "и" => "i", "И" => "I",
  "й" => "y", "Й" => "Y",
  "к" => "k", "К" => "K",
  "л" => "l", "Л" => "L",
  "м" => "m", "М" => "M",
  "н" => "n", "Н" => "N",
  "о" => "o", "О" => "O",
  "п" => "p", "П" => "P",
  "р" => "r", "Р" => "R",
  "с" => "s", "С" => "S",
  "т" => "t", "Т" => "T",
  "у" => "u", "У" => "U",
  "ф" => "f", "Ф" => "F",
  "х" => "kh", "Х" => "Kh",
  "ц" => "c", "Ц" => "C",
  "ч" => "ch", "Ч" => "Ch",
  "ш" => "sh", "Ш" => "Sh",
  "щ" => "shh", "Щ" => "Shh",
  "ъ" => "\'", "Ъ" => "\'",
  "ы" => "u", "Ы" => "U",
  "ь" => "\'", "Ь" => "\'",
  "э" => "eh", "Э" => "Eh",
  "ю" => "yu", "Ю" => "?u",
  "я" => "ya", "Я" => "?a",
  " " => " "
];

function translate($string, $alphabet)
{
  $newString = '';
  for ($i = 0; $i < mb_strlen($string); $i++) {
    $letter = mb_substr($string, $i, 1);
    $newString .= isset($alphabet[$letter]) ? $alphabet[$letter] : $letter;
  }
  return $newString;
}

$string = "Привет, Мир! Меня зовут Максим!";
echo "Оригинал: {$string}<br>";
echo "Транслит: " . translate($string, $alphabetRu) . "<br><br>";

//Задание #5
function replace($string)
{
  $strArr = str_split($string);
  foreach ($strArr as $key => $value) {
    if ($value == " ") {
      $strArr[$key] = "_";
    }
  }
  return implode("", $strArr);
}

$str = "Привет, Мир! Меня зовут Максим!";
echo "{$str}<br>";
$str = replace($str);
echo "{$str}<br><br>";

//Задание #9
function translitURL($string, $alphabet)
{
  $newString = '';
  for ($i = 0; $i < mb_strlen($string); $i++) {
    $letter = mb_substr($string, $i, 1);
    if ($letter == " ") {
      $newString .= "_";
    } else {
      $newString .= isset($alphabet[$letter]) ? $alphabet[$letter] : $letter;
    }
  }
  return $newString;
}

$string = "Привет, Мир! У нас все хорошо!";
echo "Оригинал: {$string}<br>";
echo "Транслит: " . translitURL($string, $alphabetRu);
