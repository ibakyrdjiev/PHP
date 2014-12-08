<?php

if (isset ($_GET['input']) && isset($_GET['regex'])) {
    require "index.html";
    $input = htmlentities($_GET['input']);
    $regex = htmlentities($_GET['regex']);
    $pattern = ('/\w+/m');
    preg_match_all($pattern, $regex, $bannList);
    //var_dump($bannList[0]);
    //echo $bannList[0][1];
    for ($i = 0; $i <count($bannList[0]); $i++) {
        $censored = "";
       // echo count($bannList[0][$i]);
        while (strlen($censored)<  strlen($bannList[0][$i])) {
           $censored .= "*";
        }
      //  var_dump($censored);
       // echo $bannList[0][$i];
        $input = str_replace($bannList[0][$i], $censored, $input);

    }
echo $input;
}



?>