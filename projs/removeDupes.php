<?php 

function removeDupes($arr1, $arr2) {
  $arr_lens = count($arr1) + count($arr2);
  $first_array = array_merge($arr1, $arr2);
  $another_array = array_fill(0, $arr_lens, 0);

  for ($i=0; $i < $arr_lens; $i++) {
    $another_array[$first_array[$i]]++;
  };

  $let = 0;
  for ($i=0; $i < $arr_lens; $i++) {
    if ($another_array[$i] == 1) {
      $new_array[$let++] = $i;
    }
  };

  return $new_array;
}

$x = [1, 2, 3];
$y = [2, 1, 4];

echo "<pre></pre>";
print_r(removeDupes($x, $y));

echo date_default_timezone_get()

?>