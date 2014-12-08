<?php
require "index.html";
if (isset($_GET['input']) && isset($_GET['regex'])) {
    $regex = htmlentities($_GET['regex']);
    preg_match_all("/\b\s*[^.!?]*\b$regex\b.*?[.!?]/m", $_GET['input'], $sentences);
    // var_dump($sentences);
    for ($i = 0; $i < count($sentences[0]); $i++) {
        echo htmlentities($sentences[0][$i]) . "<br/>";
    }
}
?>