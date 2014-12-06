<?php
require "index.html";
if (isset ($_GET['start'])) {
    $input = htmlentities($_GET['start']);
    $pattern = "/\w+/";
    preg_match_all($pattern, $input, $matches);
    // echo $matches[0][2];
    echo "<table>";
    for ($i = 0; $i < count($matches[0]); $i++) {
        if (is_numeric($matches[0][$i])) {
            $lineArr = str_split($matches[0][$i]);
            $line = $matches[0][$i];
            $result = array_sum($lineArr);
            echo "<tr><td>$line</td><td>$result</td></tr>";
        } else {
            $line = $matches[0][$i];
            echo "<tr><td>$line</td><td>I can not sum that</td></tr>";
        }
    }
    echo "</table>";
}
?>