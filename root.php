<?php
    
    $hostName = "localhost";
    $userName = "root";
    $password = "";
    $dbName = "fristdatabase";

    $con =mysqli_connect($hostName,$userName,$password,$dbName);
    if($con==false){
        echo "<h1>opps! database not connected .</h1>";
    }
?>