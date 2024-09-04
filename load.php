<?php

require_once "user_details.php";
$obj = new user_details();

$arr = ["black", "white", "green", "red"];

foreach($arr as $color){
  print $color . "<br>";
}

print dirname(__FILE__);
print "<br>";
print "<br>";
print $_SERVER["PHP_SELF"];
print "<br>";
print "<br>";
print basename($_SERVER["PHP_SELF"]);
?>
