<!-- 
    Write a program that takes a string as input and outputs the number of words in the string.
 -->
 <?php

 $string = "how are you today?";

//  using the function str_word_count() to count the number of words.
$length = str_word_count($string);
echo $string;
// And to print the result.
 echo "<br> The number of words from the string is: ". $length;
 ?>