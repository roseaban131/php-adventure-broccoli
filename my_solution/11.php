<!-- 
    Write a program that takes an array of numbers as input and outputs the average of the numbers.
-->
<?php

$num = array(4,6,8,10,14);
$average = findAvg($num);

function findAvg($num) {
  $count = count($num);
  $sum = 0;
  $i = 0;

  while ($i < $count) {
    // add each number to the sum
    $sum += $num[$i]; 
    $i++;
  }
 // divide the sum by the number of elements to get the average
  $average = $sum / $count;
  return $average;
}

echo "The average of the array [4, 6, 8, 10, 14] is: " . $average;

?>
