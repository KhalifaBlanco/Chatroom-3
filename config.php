<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "chatroom";

// Create connection
$link = mysqli_connect($servername, $username, $password, $database);

// Check connection
if (!$link) {
    die("Connection failed: " . mysqli_connect_error());
}
?>