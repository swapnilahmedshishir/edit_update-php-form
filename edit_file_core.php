<?php

if(isset($_REQUEST["update_btn"])){
    $upfname = $_REQUEST["fname"];
    $uplname = $_REQUEST["lname"];
    $upEmail = $_REQUEST["usr_email"];
    $upPsw = $_REQUEST["usr_psw"];
    $upID = $_REQUEST["id"];


include_once("root.php");
$dbQuery ="UPDATE user_data SET fname='$upfname',lname='$uplname',email='$upEmail',password='$upPsw' WHERE id='$upID'";
$dbQueryConnect = mysqlI_query($con,$dbQuery);
if($dbQueryConnect== true){
    header("location:sineup.php?update");
}}
?>