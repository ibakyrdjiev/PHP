<?php
require "index.html";
if (isset($_GET['start'])&& isset($_GET['type'])){
    $string = htmlentities($_GET);
}
?>