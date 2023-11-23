<?php
$db['host'] = "localhost"; // Host name
$db['user'] = "root"; // Mysql username
$db['pass'] = ""; // Mysql password
$db['name'] = "db_login new"; // Database name

// Create connection
$conn = new mysqli($db['host'], $db['user'], $db['pass'], $db['name']);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>


