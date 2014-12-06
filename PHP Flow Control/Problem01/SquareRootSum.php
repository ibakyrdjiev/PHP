<?php
    require "index.html";
    echo"<br/>";
    if(isset ($_GET['input'])){
        $num = htmlentities($_GET['input']);
        if($num % 2 ==0){
            echo "<table><th>Number</th><th> Square</th>";
            for($i = $num; $i< 101; $i++){
                $square = number_format(sqrt($i), 2);
                echo "<tr><td>$i</td><td>$square</td></tr>";
            }
        echo "</table>";
        }
        else{
            echo "<p>number is not even</p>";
        }
    }

?>