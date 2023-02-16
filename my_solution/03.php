<!-- 
    Write a program that takes a string as input and outputs the frequency of each character in the string.
-->
<?php
// define a input string as $Mystring
$Mystring = "Hello Rose Jean";
// to store the character counts array called $count_chars
$count_chars = array();

$i = 0;
// use a while loop to iterate through each character in the string
while($i < strlen($Mystring)){
    $char = $Mystring[$i];
    if(isset($count_chars[$char])){
        $count_chars[$char]++;
    } else {
        $count_chars[$char] = 1;
    } $i++;
}
// use a foreach loop to iterate through $count_chars array and the output for each character.
foreach($count_chars as $char => $count){
    echo $char . ": " . $count  . "<br>". "\n";
}
?>