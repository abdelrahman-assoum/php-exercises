<?php
function swap($firstName, $secondName) {
  $swapping = $firstName;
  $firstName = $secondName;
  $secondName = $swapping;
}

$firstName = "abd";
$secondName = "assoum";
echo "Before swapping: a = $firstName, b = $secondName\n";
swap($firstName, $secondName);
echo "After swapping: a = $firstName, b = $secondName\n";
?>