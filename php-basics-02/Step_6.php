<?php
function sumDigits($num) {
  $sum = 0;
  for ($i = 0; $i < strlen($num); $i++) {
    $sum += (int)$num[$i];
  }
  return $sum;
}
$num = '123';
$sum = sumDigits($num);
echo $sum . "\n"; 
?>