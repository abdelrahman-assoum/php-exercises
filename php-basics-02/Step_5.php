<?php
function wordToDigit($word) {
  switch ($word) {
    case "zero":
      return 0;
    case "one":
      return 1;
    case "two":
      return 2;
    case "three":
      return 3;
    case "four":
      return 4;
    case "five":
      return 5;
    case "six":
      return 6;
    case "seven":
      return 7;
    case "eight":
      return 8;
    case "nine":
      return 9;
    case "ten":
      return 10;
    default:
      return "Not a valid word";
  }
}
echo wordToDigit("two") . "\n";
echo wordToDigit("eight"). "\n";
echo wordToDigit(""). "\n";
?>