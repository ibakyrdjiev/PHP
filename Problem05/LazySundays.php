<?php
require "index.html";
$month = $_GET['month'];
$year = $_GET['year'];
$dateString = "$month/1/$year";
$a_date = "$year-$month-5";
$endDayOfMonth = intval( date("t", strtotime($a_date)));
for($i =1 ; $i<= $endDayOfMonth ; $i++){
    $currentDay = "$month/$i/$year";
    $newDate = new DateTime($currentDay);
    $typeDay = date_format($newDate, 'l');
    if($typeDay == "Sunday"){
        echo $newDate->format('jS,F,Y'). "<br />";
    }
}
?>