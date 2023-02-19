<?php 
function primeCheck($num) {
  if ($num < 2) {
    return false;
  }
  
  for ($i = 2; $i <= sqrt($num); $i++) {
    if ($num % $i == 0) {
      return false;
    }
  }
  return true;
}
$num = 9;
if (primeCheck($num)) {
    echo $num . " is a prime number.\n";
} else {
    echo $num . " is not a prime number.\n";
}
?>