<?php
session_start();

include('../config/connection.php');

$username = $_POST['username'];
$password = $_POST['password'];
$roles = $_POST['roles'];

$username = mysqli_real_escape_string($conn, $username);
$password = mysqli_real_escape_string($conn, $password);
$roles = mysqli_real_escape_string($conn, $roles);

$query = "INSERT INTO users (username, password, roles) VALUES ('$username', '$password', '$roles')";

if (mysqli_query($conn, $query)) {
  $_SESSION['success_message'] = 'Registration successful! Please login.';
  header("Location: ../views/login.php");
  exit();
} else {
  echo "Error: " . $query . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
