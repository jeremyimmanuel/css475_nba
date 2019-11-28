<?php

// Connect to database
$host = "localhost";
$username = "root";
$password = "usbw";
$database_in_use = "css475_nba";

// Create db connection instance
$mysqli = new mysqli($host, $username, $password, $database_in_use);

if ($mysqli->connect_errno) {
    echo "Failed to connect to MySQL: (" . $mysqli->connect_errno . ") " . $mysqli->connect_error;
}
echo $mysqli->host_info . "<br>";


?>
