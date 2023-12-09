<?php
$hostName = "localhost";
$dbUSer = "root";
$dbPassword = "";
$dbName = "crudDB";
$conn = mysqli_connect($hostName, $dbUSer, $dbPassword, $dbName);
if(!$conn){
    die("Something went wrong;");
}
?>