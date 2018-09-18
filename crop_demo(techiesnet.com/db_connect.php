<?php
/* Database connection start */
$servername = "192.168.1.32";
$username = "root";
$password = "123456";
$dbname = "techiesnet_demos";
$conn = mysqli_connect($servername, $username, $password, $dbname) or die("Connection failed: " . mysqli_connect_error());
if (mysqli_connect_errno()) {
    printf("Connect failed: %s\n", mysqli_connect_error());
    exit();
}
?>