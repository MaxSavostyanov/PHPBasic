<?php
function sum($a, $b)
{
  return $a + $b;
}

function sub($a, $b)
{
  return $a - $b;
}

function multi($a, $b)
{
  return $a * $b;
}

function div($a, $b)
{
  return $b !== 0 ? $a / $b : "Ошибка: деление на ноль!";
}

function mathOperation($arg1, $arg2, $operation)
{
  switch ($operation) {
    case "+":
    case "sum":
      $res = sum($arg1, $arg2);
      break;
    case "-":
    case "sub":
      $res = sub($arg1, $arg2);
      break;
    case "*":
    case "multi":
      $res = multi($arg1, $arg2);
      break;
    case "/":
    case "div":
      $res = div($arg1, $arg2);
      break;
    default:
      $res = "нет такой операции";
      break;
  }
  return $res;
}

$a = 7;
$b = 3;
$result = mathOperation($a, $b, "+");
echo "{$a} + {$b} = {$result} <br>";
$result = mathOperation($a, $b, "-");
echo "{$a} - {$b} = {$result} <br>";
$result = mathOperation($a, $b, "*");
echo "{$a} * {$b} = {$result} <br>";
$result = mathOperation($a, $b, "/");
echo "{$a} / {$b} = {$result} <br>";
$result = mathOperation($a, $b, "?");
echo "{$a} ? {$b} = {$result} <br>";

$b = 0;
$result = mathOperation($a, $b, "/");
echo "{$a} / {$b} = {$result} <br>";
