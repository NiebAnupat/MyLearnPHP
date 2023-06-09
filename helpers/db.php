<?php
$connection = mysqli_connect("localhost", "root", "", "learn-php");
if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
}
?>