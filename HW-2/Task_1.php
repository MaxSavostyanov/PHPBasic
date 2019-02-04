<?php
function script($a, $b)
{
  if ($a >= 0 && $b >= 0) {
    $res = $a - $b;
    return $res;
  } elseif ($a < 0 && $b < 0) {
    $res = $a * $b;
    return $res;
  } else {
    $res = $a + $b;
    return $res;
  }
}

$a = 5;
$b = 3;
echo script($a, $b) . "<br>";

$a = -5;
$b = -3;
echo script($a, $b) . "<br>";

$a = 5;
$b = -3;
echo script($a, $b) . "<br>";
