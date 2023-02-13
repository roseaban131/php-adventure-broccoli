<!-- 
    Write a program that takes a string as input and outputs whether it is a palindrome.
-->
<?php

$input = 'civic';

echo "<br> $input. \n";
$output = strrev($input);

echo "<br>" .$output;

if($input== $output)
    echo "<br> The $input is palindrome";

else 
    echo "<br> The $input is not a palindrome";

?>