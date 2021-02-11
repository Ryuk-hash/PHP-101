<?php 

function removeDupes($arr1, $arr2) {
  // Merge the two arrays
  $first_array = array_merge($arr1, $arr2);

  // Get merged-array length
  $arr_lens = count($first_array);

  // Create an array filled with 0's - same size as merged-array
  $another_array = array_fill(0, $arr_lens, 0);

  // Store no. of iterations of each element in the newly created array
  for ($i=0; $i < $arr_lens; $i++) {
    $another_array[$first_array[$i]]++;
  };

  // Check if the no. of iterations is greater than 1, if so - duplicates present - don't add to the final array
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

echo "<pre>";
print_r(removeDupes($x, $y));

?>