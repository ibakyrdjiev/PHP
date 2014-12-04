<?php
require "index.html";

$input = split(', ',$_GET['data']);
$input = array_count_values($input);
asort($input);
if (isset ($_GET['data'])) {
    foreach ($input as $key => $value) {
        echo "<p>".htmlentities($key).":".htmlentities($value) ." time" . (htmlentities($value) != 1 ? 's' : '') . "</p>";
    }
}
echo "<p>Most fequent tag is: " . array_search(max($input), $input)."</p>";
?>