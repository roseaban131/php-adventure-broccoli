<!-- 
    Write a program that takes an array of numbers as input and outputs the median of the numbers.
 -->
 <?php
 
 $num = array(4, 6, 8, 10, 14);
 $median = findMedian($num);

function findMedian($num) {
    // sort finction for the array in ascending order
  sort($num); 
  $count = count($num);
  
  // find the middle index of the array
  $mid = floor($count / 2); 
  if ($count % 2 == 0) {
    // if the array has an even number of elements, find the average of the two middle elements
    $median = ($num[$mid-1] + $num[$mid]) / 2;
  } else {
    // if the array has an odd number of elements, the median is the middle element
    $median = $num[$mid];
  }

  return $median;
}

echo "The median of the array [4, 6, 8, 10, 14] is: " . $median;

?>
