<?php
//Database connection file

error_reporting(0);

$servername = "localhost";
$dbusername = "root";
$dbpassword = "";
$dbname = "hackathon";

// Create connection
$conn = new mysqli($servername, $dbusername, $dbpassword, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}


?>
