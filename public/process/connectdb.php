<?php
$host = "localhost";
$username = "root";
$password = "";
$database = "bigcasdb";

$conn = new mysqli($host, $username, $password, $database);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if($_SESSION['loggedin']){
    $sql = "SELECT * FROM admin WHERE admin_id = '$id'";
    $result = mysqli_query($conn, $sql);
    $row = mysqli_fetch_array($result, MYSQLI_ASSOC);
}