<?php

function quicksort(array $list): array {
  if (count($list) <= 1) {
    return $list;
  }
  
  
  $pivot = $list[0];

  $left = [];
  $right = [];
  foreach(array_slice($list, 1) as $value) {
    if ($pivot > $value) {
      $left[] = $value;
    } else {
      $right[] = $value;
    }
  }

  return array_merge(quicksort($left), [$pivot], quicksort($right));
}


ini_set('assert.exception', 1);

echo "Teste quicksort com [3, 5, 4, 2, 2, 1]... ";
assert(quicksort([3, 5, 4, 2, 2, 1]) === [1, 2, 2, 3, 4, 5]);
echo "passou!\n";

echo "Teste quicksort com [7, 3, 1]... ";
assert(quicksort([7, 3, 1]) === [1, 3, 7]);
echo "passou!\n";

echo "Teste quicksort com array vazio... ";
assert(quicksort([]) === []);
echo "passou!\n";

echo "Teste quicksort com [1]... ";
assert(quicksort([1]) === [1]);
echo "passou!\n";

echo "Parece que está tudo funcionando!";