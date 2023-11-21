<?php 

$server = "localhost";
$username = "root"; 
$password = "";
$database = "n0169849_plantsm3";

$conn = new mysqli($server, $username, $password, $database); 
if ($conn->connect_error) {
    die("". $conn->connect_error);
}
