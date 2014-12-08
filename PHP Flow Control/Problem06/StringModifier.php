<?php
require "index.html";
if (isset($_GET['start'])&& isset($_GET['type'])){
    $string = htmlentities($_GET['start']);
   $transform = $_GET['type'];
    if($_GET['type'] == "parlindrome"){
       $reversedString = strrev($string);
        if($reversedString == $string){
            echo "Hello it is a palindrome";
        }
        else{
            echo "Hello it is not a palindrome";
        }
    }
    if($transform == "reverse"){
        $reversedString = strrev($string);
        echo $reversedString;
    }
    if($transform== "split"){
        $pieces = str_split($string);
        $result= implode(" ", $pieces);
        echo $result;
    }
    if($transform == "hash"){
        $result = crypt($string, "");
        echo $result;
    }
    if($transform == "shuffle"){
        $pieces = str_split($string);
        shuffle($pieces);
        $result = implode("", $pieces);
        echo $result;
    }
}
?>