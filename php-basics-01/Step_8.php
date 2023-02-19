<?php
$grocery = array("Eggs", "Milk", "Cheese", "Water Pack", "Tissues", "Watermelon");
echo "Hello Sir, do you have {$grocery[0]}, {$grocery[1]}, and {$grocery[2]}? Also if you sell fruits can I find a {$grocery[5]}.";
$items = array(
  "Eggs" => array (
    "balade", "mazere3"
  ),
  "milk" => array (
    "Fresh", "Taanayel"
  ),
  "Water-pack" => array (
    "Tanoureen", "Reem"
  )
  );
  echo "Hey Sir, Please I need 1 pack of {$items["Eggs"][0]} eggs and 3 {$items["Water-pack"][1]} Water Pack.";
  echo "Hey Sir, Please I need 1 pack of {$items["Eggs"][0]} {$grocery[0]} and 3 {$items["Water-pack"][1]} {$grocery[3]}.";
?>