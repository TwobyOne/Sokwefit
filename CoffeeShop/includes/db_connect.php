<?php
$host = "localhost";
$user = "root";
$password = "";
$database = "coffeeshop";

// Establish the connection
$connection = mysqli_connect($host, $user, $password, $database);

// Check for connection errors
if (mysqli_connect_errno()) {
    echo "Failed to connect to MySQL: " . mysqli_connect_error();
    exit();
}
?>
