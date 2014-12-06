<?php
require "index.html";
if (isset ($_GET['start']) && isset($_GET['end'])) {
    $start = $_GET['start'];
    $end = $_GET['end'];
    echo "<div><span>";
    if ($start > $end) {
        echo "wrong input : End must to be larger";
        die;
    }
    for ($i = $start; $i <= $end; $i++) {
        if (isPrime($i) == true) {
            echo "<strong>$i</strong>";
        } else {
            echo $i;
        }

    }
    echo "</span></div>";
}

function isPrime($num)
{
    if ($num == 1)
        return false;
    if ($num == 2)
        return true;
    if ($num % 2 == 0) {
        return false;
    }

    for ($i = 3; $i <= ceil(sqrt($num)); $i = $i + 2) {
        if ($num % $i == 0)
            return false;
    }

    return true;
}

?>