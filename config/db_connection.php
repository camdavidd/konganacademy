<?php
$servername = "localhost";
$username = "root";
$password = "";

date_default_timezone_set('Asia/Manila');
$con = mysqli_connect($servername, $username, $password, 'konganacademy_db');

if (!$con) {
    die("Connection failed: " . mysqli_connect_error());
}
?>