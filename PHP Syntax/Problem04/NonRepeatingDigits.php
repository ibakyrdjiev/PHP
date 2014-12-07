<?php
require "index.html";
if(isset ($_GET["input"])){
$input = $_GET['input'];
if($input <= 100){
    echo "No";
    die;
}
$digitArray = range(100, $input);
$result = "";
for ($i = 0; $i < count($digitArray); $i++) {
    $array = array_map('intval', str_split($digitArray[$i]));
    if ($array[0] == $array[1] || $array[1] == $array[2] || $array[0] == $array[2]) {
        continue;
    }
    $result=  $result. implode("", $array) . " ";
}
echo $result;
}
?>