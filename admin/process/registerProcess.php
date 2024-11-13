<?php
include 'connectdb.php';
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    session_unset();
    $firstname = $_POST["firstname"];
    $lastname = $_POST["lastname"];
    $username = $_POST["username"];
    $password = $_POST["password"];
    $email = $_POST["email"];
    $role = "unassigned";

    include 'registerRequired.php';
    $hashedPassword = password_hash($password, PASSWORD_BCRYPT);
    $sql = "INSERT INTO admin(firstname, lastname, username, password, email, role) VALUES('$firstname', '$lastname', '$username', '$hashedPassword', '$email', '$role')";
    $signup = mysqli_query($conn, $sql);

    if ($signup) {
        $_SESSION['success'] = "Registered Succesfully!";
        header('Location: ../login.php');
        exit();
    } 
} else {
    echo  '<script> alert("Register Failed!") </script>';
    header('Location: ../register.php');
    exit();
}