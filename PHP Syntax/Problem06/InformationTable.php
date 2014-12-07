<?php
if(isset ($_GET['name']) && isset($_GET['gsm']) && isset($_GET['age']) && isset ($_GET['address']) ){
require "index.html";
    $name = htmlentities($_GET['name']);
    $number = $_GET['gsm'];
    $age = $_GET['age'];
    $address= htmlentities(['address']);
    echo "<style>
table{

    border : 1px solid black;
    margin:  0 auto;
    margin-top: 30px;
}
td{
border: 1px solid black;
width: 150px;
}
.row{
background-color: orange;
}
input{
display: block;
margin: 0 auto;
margin-top: 2px;
}


</style>";
    echo "<table>";
    echo "<tr><td class=row>Name</td><td>$name</td></tr>";
    echo "<tr><td class=row>Phone Number</td><td>$number</td></tr>";
    echo "<tr><td class=row>Age</td><td>$age</td></tr>";
    echo "<tr><td class=row>Address</td><td>$address</td></tr>";
    echo "</table>";
}
?>