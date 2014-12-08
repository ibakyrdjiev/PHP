<?php

if(isset ($_GET['input'])){
    require "index.html";
    $input = ($_GET['input']);
    $a = str_replace("<a href", "[URL", $input);
    $a = str_replace("</a>", "[URL]", $a);
    echo htmlentities($a);
}


?>