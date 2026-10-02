<?php 

$host = "localhost";
$user = "root";
$password = "";
$database = "db_clarity";

$connection = mysqli_connect($host,$user,$password,$database);

if (!$connection) {
    die("Failed Connection " .mysqli_connect_error());

}

?>