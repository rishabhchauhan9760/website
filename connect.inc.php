<?php
$servername = "localhost";
$username = "id2751991_rishabh";
$password = "hfirst";
$dbname = "id2751991_hfirst";
global $conn;

$conn=new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

?>