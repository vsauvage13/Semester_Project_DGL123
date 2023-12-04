<?php 

$server = "localhost";
$username = "n0169849_vsauvage"; 
$password = "vmay1313";
$database = "n0169849_plantsm3";

$conn = new mysqli($server, $username, $password, $database); 
if ($conn->connect_error) {
    die("". $conn->connect_error);
}
