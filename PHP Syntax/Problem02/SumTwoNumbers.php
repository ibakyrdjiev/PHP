<?php
require "index.html";
if(isset ($_GET['firstNumber']) && isset ($_GET['secondNumber'])) {
$firstNumber = htmlentities( $_GET['firstNumber']);
$secondNumber = htmlentities($_GET['secondNumber']);

$sum = $firstNumber + $secondNumber;
$sum = number_format($sum , 2);


echo "<p> \$firstNumber + \$secondNumber  = $firstNumber + $secondNumber = $sum </p>";
//echo var_dump($sum); -> string!
}
?>