<?php

$host = "localhost";
$user = 'root';
$password = '';
$dbconnect = 'dbcir';

$conn = mysqli_connect("$host","$user","$password","$dbconnect");
mysqli_set_charset($conn,"utf8");
?>