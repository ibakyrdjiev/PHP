<?php
require"index.html";
if(isset($_GET['input'])){

    $inputArray = preg_split("/ /",$_GET['input']);
    $inputArray = implode("", $inputArray);
    $inputArray = str_split($inputArray);
   // var_dump($inputArray);
    echo "<br/>";
    for($i =0; $i< count($inputArray); $i++){
         if($i%2 ==0){
            echo "<span style='color:blue'>".htmlentities($inputArray[$i])." </span>";
        }
        else{
            echo "<span style='color:red'>".htmlentities($inputArray[$i])." </span>";
        }
    }
}
?>