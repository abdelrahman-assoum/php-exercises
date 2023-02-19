<?php
function isPalindrome($input) {
  $reverse = strrev($input);
  return $input === $reverse;
}
$input = "php";
if (isPalindrome($input)) {
  echo "$input is a palindrome \n";
} else {
  echo "$input is not a palindrome \n";
}
?>