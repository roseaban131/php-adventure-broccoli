<!-- 
    Write a program that takes an array of strings as input and outputs the longest string in the array.
 -->
 <?php
 
 $listOfWords = array("computer", "science", "hello", "lab", "hi");
 $maxNumberOfWords= max(array_map('strlen', $listOfWords));

echo "The longest string in the array is : ", $maxNumberOfWords;

 ?>