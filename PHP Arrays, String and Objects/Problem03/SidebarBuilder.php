<?php
require "index.html";
if (isset ($_GET['categories']) && isset($_GET['tags']) && isset($_GET['months'])) {
    $regex = ('/\w+/');
    //var_dump($_GET['tags']);
    preg_match_all($regex, $_GET['categories'], $categories);
    preg_match_all($regex, $_GET['tags'], $tags);
    preg_match_all($regex, $_GET['months'], $months);
    //var_dump($categories[0]);
    createAside($categories[0], 'Categories');
    createAside($tags[0], "Tags");
    createAside($months[0], "Months");
    //cat

}
function createAside($arr, $string){
    echo "<aside style='width: 150px; border: 1px solid black; border-radius: 5px; background-color: cornflowerblue;margin: 2%'>";
    echo "<h3 style='text-align: center'>$string</h3>";
    echo "<hr>";
    echo "<ul>";
    for($i =0 ; $i< count($arr); $i++){
    echo "<li>".htmlentities($arr[$i]) ."</li>";
    }
    echo "</ul>";
    echo "</aside>";
}
?>