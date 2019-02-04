<?php
function power($val, $pow)
{
  if ($pow < 0) {
    return "!!возведение только в положительную степень";
  } elseif ($pow > 0) {
    return $val * power($val, $pow - 1);
  } else {
    return 1;
  }
}

echo "2 ^ 10 = " . power(2, 10);
