<!-- 
    Write a program that takes a string as input and outputs the string with all vowels removed.
 -->

 <?php
 
 $Mystring = "<b> I can by myself flowers. </b>";
 $vowels = array("a","e","i", "o", "u", "A", "E", "I", "O", "U");

 $Mystring = str_replace($vowels, "", $Mystring);

 echo "Ouput: ".$Mystring;
 
 ?>