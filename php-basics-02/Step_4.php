
<?php
function isArmstrong($num) {
  $num_str = (string) $num;
  $num_len = strlen($num_str);
  $sum = 0;
  for ($i = 0; $i < $num_len; $i++) {
    $len = (int) $num_str[$i];
    $sum += pow($len, $num_len);
  }
  if ($sum == $num) {
    echo "Yes, this number is an armstrong number.\n";
  } else {
    echo "No, this number is not an armstrong number.\n";
  }
}
isArmstrong(199);
isArmstrong(153);
isArmstrong(228);
?>