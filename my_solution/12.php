<!-- 
    Write a program that generates a random password of a specified length. The password should include upper and lowercase letters, numbers, and special characters.
-->
<?php

$pass = generatePassword(8);

// first define function called $generatePassword and a string that define a string of characters that you want to include in the password.
function generatePassword($length) {
  $chars = 'abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ0123456789~!@#$%^&*()_+{}[]\|:;"<>,.?/';

//   initialize a empty string called $password.
  $pass = '';
  $i = 0;

  while ($i < $length) {
    // add a random character to the password
    $pass .= $chars[rand(0, strlen($chars) - 1)]; 
    $i++;
  }

  return $pass;
}

echo "Your random password is: " . $pass;

?>
