<?php 

$host = "localhost";
$user = "root";
$password = "";
$database = "db_clarity";

$connection = mysqli_connect($host,$user,$password,$database);

if (!$connection) {
    die("Koneksi Gagal: " .mysqli_connect_error());

}

?>