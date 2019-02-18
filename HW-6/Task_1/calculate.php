<?php
function isNumber($string)
{
  $pattern = '#^[0-9]+$#';
  return preg_match($pattern, $string) ? true : false;
}

function sum($operand1, $operand2)
{
  return $operand1 + $operand2;
}

function sub($operand1, $operand2)
{
  return $operand1 - $operand2;
}

function multi($operand1, $operand2)
{
  return $operand1 * $operand2;
}

function div($operand1, $operand2)
{
  return $operand2 != 0 ? $operand1 / $operand2 : "Ошибка: деление на ноль!";
}

function mathOperation($operand1, $operand2, $operator)
{
  $res = null;
  if (isNumber($operand1) && isNumber($operand2)) {
    switch ($operator) {
      case "+":
        $res = sum($operand1, $operand2);
        break;
      case "-":
        $res = sub($operand1, $operand2);
        break;
      case "*":
        $res = multi($operand1, $operand2);
        break;
      case "/":
        $res = div($operand1, $operand2);
        break;
    }
  } else {
    $res = "Введены не числа!";
  }
  return $res;
}

$operand1 = $_POST['operand1'];
$operand2 = $_POST['operand2'];
$operator = $_POST['operator'];
$response['result'] = "Результат: " . mathOperation($operand1, $operand2, $operator);
echo json_encode($response);
