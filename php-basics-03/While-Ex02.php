<?php
$num = 5; // the number for which we want to calculate the factorial
$factorial = 1;
$i = 1;

while ($i <= $num) {
  $factorial *= $i;
  $i++;
}

echo "The factorial of $num is: $factorial";
?>