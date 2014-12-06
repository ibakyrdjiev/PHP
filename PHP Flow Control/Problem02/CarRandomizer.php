<?php
//require "index.html";
include "index.html";
if(isset($_GET['input'])){
    $cars = $_GET['input'];
    $cars = explode(', ', $cars);
    echo "<br / >";
    echo "<table>";
    echo "<table><th>Car</th><th>Count</th>";
    for($i=0 ; $i< count($cars); $i++){
        $color = random_color();
        $randCount = rand ( 1 ,5 );
        echo "<tr><td style='color: #$color'>$cars[$i]</td><td>$randCount</td></tr>";
    }
    echo "</table>";
    //random color generator - > i`m lovin` it :)
}

function random_color_part() {
    return str_pad( dechex( mt_rand( 0, 255 ) ), 2, '0', STR_PAD_LEFT);
}

function random_color() {
    return random_color_part() . random_color_part() . random_color_part();
}

?>