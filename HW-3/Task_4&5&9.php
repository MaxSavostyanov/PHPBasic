<?php
//Задание #4
$alphabetRu = [
  "a" => "a", "б" => "b", "в" => "v", "г" => "g",
  "д" => "d", "е" => "e", "ё" => "yo", "ж" => "g",
  "з" => "z", "и" => "i", "й" => "y", "к" => "k",
  "л" => "l", "м" => "m", "н" => "n", "о" => "o",
  "п" => "p", "р" => "r", "с" => "s", "т" => "t",
  "у" => "u", "ф" => "f", "х" => "kh", "ц" => "c",
  "ч" => "ch", "ш" => "sh", "щ" => "shh", "ъ" => "\'",
  "ы" => "u", "ь" => "\'", "э" => "eh", "ю" => "yu",
  "я" => "ya"
];

function translit($string, $alphabet)
{
  $newString = '';
  for ($i = 0; $i < mb_strlen($string); $i++) {
    $letter = mb_substr($string, $i, 1);
    if(isset($alphabet[mb_strtolower($letter)])){
      if (mb_strtolower($letter) == $letter){
        $newString .= $alphabet[$letter];
      }else{
        $newString .= mb_strtoupper($alphabet[mb_strtolower($letter)]);
      }
    }else{
      $newString .= $letter;
    }
  }
  return $newString;
}

$string = "Привет, Нир! Меня зовут Максим!";
echo "Оригинал: {$string}<br>";
echo "Транслит: " . translit($string, $alphabetRu) . "<br><br>";

//Задание #5
function replace($string)
{
  $strArr = preg_split('//u', $string, NULL, PREG_SPLIT_NO_EMPTY);
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
$string = "Привет, Мир! У нас все хорошо!";
echo "Оригинал: {$string}<br>";
echo "Транслит: " . replace(translit($string, $alphabetRu));
