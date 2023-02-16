<!-- 
    Write a program that takes a number as input and outputs the sum of its digits.
 -->

 <?php
 
 $sum_of_digit = 0;
 $number = "4567";

//strlen function - return the length of the string.
 for ($i = 0; $i < strlen($number); $i++)
 {
    $sum_of_digit += $number[$i];
 }
//print the sum of the digit from the string.
 echo "<br>".$number;
 echo "<br> The sum of digits is \n". $sum_of_digit
 ?>