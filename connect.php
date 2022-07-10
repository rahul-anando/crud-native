<?php
$servername = "localhost";
$username="root";
$password="";
$database="crud_latihan";
$connect = mysqli_connect($servername, $username, $password, $database);
if (!$connect){
    die("gagal terhubung ke server" . mysql_connect_error());
    }
?>