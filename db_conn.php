<?php

$servicename = "localhost";
$username = "root";
$password = "";
$dbname = "tutorial";

$conn = mysqli_connect($servicename, $username, $password, $dbname);

if(!$conn){
    die("connection failed " . mysqli_connect_error());
}
// echo "Connected successfully";