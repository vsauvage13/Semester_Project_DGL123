<?php 

$server = "localhost";
$username = "root"; 
$password = "";
$database = "plants";

$conn = new mysqli($server, $username, $password, $database); 
if ($conn->connect_error) {
    die("". $conn->connect_error);
}
echo "connected";