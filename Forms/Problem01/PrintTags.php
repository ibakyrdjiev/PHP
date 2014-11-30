<?php
require "index.html";
$data = $_GET['data'];
$data = split(",", $data);
echo "<br />";
if (isset ($_GET['data'])) {
    for ($i = 0; $i < count($data); $i++) {
        echo "$i: $data[$i] <br />";
    }
}
?>