<?php
require "index.html";
if (isset($_GET['input'])) {
    $date = new DateTime();
    $currentYear = intval($date->format('Y'));
    $years = $_GET['input'];
    echo "<br />";
    echo "<table>";
    echo "<tr><td>Year</td><td>January</td><td>February</td><td>March</td><td>April.</td><td>May</td><td>June</td><td>July</td><td>August</td><td>September</td><td>October</td><td>November</td><td>December</td><td>Sum</td></tr>";
    for ($i = $currentYear; $i > $currentYear - $years; $i--) {
        $line = printRnd($i);
        echo $line;
    }
    echo "</ table>";
}


function random()
{
    $number = rand(0, 999);
    return $number;
}

function printRnd($date)
{
    $str = "<tr><td>$date</td><td>" . random() . "</td>" . "<td>" . random() . "</td>" . "<td>" . random() . "</td>" . "<td>" . random() . "</td>" . "<td>" . random() . "</td>" . "<td>" . random() . "</td>" . "<td>" . random() . "</td>" . "<td>" . random() . "</td>" . "<td>" . random() . "</td>" . "<td>" . random() . "</td>" . "<td>" . random() . "</td>" . "<td>" . random() . "</td>";
    $pattern = "/\d+/";
    preg_match_all($pattern, $str, $matches);
    $sum = array_sum($matches[0]);
    $str .= "<td>$sum</td></tr>";
    return $str;
}

?>