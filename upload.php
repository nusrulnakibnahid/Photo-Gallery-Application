<?php
$host = "localhost";
$username = "root";
$password = "";
$database = "photo_gallery";

$conn = new mysqli($host, $username, $password, $database);

if ($conn->connect_error) {
    die("MySQLi Connection failed: " . $conn->connect_error);
} else {
    echo "MySQLi connected successfully!";
}
?>
