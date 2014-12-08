<?php
if (isset ($_GET['input'])) {
    require "index.html";
    $input = $_GET['input'];
    $inputToLower = strtolower($input);
    $regex = ("/\b[a-z]+\b/");
    preg_match_all($regex, $inputToLower, $wordsArray);
    //   var_dump($wordsArray);
    $output = array();
    for ($i = 0; $i < count($wordsArray[0]); $i++) {
        //echo $wordsArray[0][$i];
        $current = $wordsArray[0][$i];
        if (!array_key_exists($current, $output)) {
            $output[$current] = 0;
        }
        $output[$current]++;
    }
    //var_dump($output);
    echo "<br/>";
    echo "<table>";
    foreach($output as $word => $times){
        echo "<tr><td>".htmlentities($word)."</td><td>$times</td></tr>";
    }
    echo "</table>";
}
?>