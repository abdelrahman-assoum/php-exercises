<?php 
function isPowerOfTwo($n) {
  if ($n <= 0) {
    return false;
  }
  while ($n % 2 == 0) {
    $n = $n / 2;
  }
  return $n == 1;
}
$num = 8;
if (isPowerOfTwo($num)) {
  echo "$num is a power of two" . "\n";
} else {
  echo "$num is not a power of two". "\n";
}

?>