<?php
// 1. Дан массив из n элементов, начиная с 1. Каждый следующий элемент равен (предыдущий + 1). Но в массиве гарантированно 1 число пропущено. Необходимо вывести на экран пропущенное число.

function findMissing($arr) {
  $start = 0;
  $end = count($arr) - 1;

  while ($start < $end) {
    $middle = floor(($start + $end) / 2);

    if ($arr[$middle] - $arr[$start] != $middle - $start) {
      if ($middle - $start == 1 && $arr[$middle] - $arr[$start] > 1) {
        return $arr[$middle] - 1;
      } 
      $end = $middle; 
    } else if ($arr[$end] - $arr[$middle] != $end - $middle) {
      if ($end - $middle == 1 && $arr[$end] - $arr[$middle] > 1) {
        return $arr[$middle] + 1;
      }
      $start = $middle;
    } else {
      return 'no missing numbers';
    }
  }

  return 'no missing numbers';

}

echo findMissing([1, 2, 4, 5, 6]); // 3
echo findMissing([1, 2 ,3, 4, 5, 6, 7, 8, 9, 10, 12, 13, 14, 15, 16]); // 11