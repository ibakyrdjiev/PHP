<?php
$firstNumber = $_GET['firstNumber'];
$secondNumber = $_GET['secondNumber'];

$sum = $firstNumber + $secondNumber;
$sum = number_format($sum , 2);
require "index.html";
echo "<p> \$firstNumber + \$secondNumber  = $firstNumber + $secondNumber = $sum </p>";
//echo var_dump($sum); -> string!
?>