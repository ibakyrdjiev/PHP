<?php
require "index.html";
if (isset ($_GET['amount'], $_GET['currency'], $_GET['compound'], $_GET['dropDown'] )) {
    echo "<style>
input{
display: block;
margin-top: 1%  ;
}
select
{
margin-top: 1%;
}
p{
margin-top: 1%;
}
</style>";
    $amount = htmlentities($_GET['amount']);
    $currency = htmlentities($_GET['currency']);
    $compound= htmlentities($_GET['compound']/ 12);
    $time = htmlentities($_GET['dropDown']);
    $answer = 0;
   for($i =0; $i< intval($time); $i++){
    $amount = $amount + $amount*$compound /100;
    }
    echo "<p>".$currency .number_format($amount, 2)."</p>";

}
?>