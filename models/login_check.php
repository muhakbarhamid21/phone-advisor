<?php
session_start();

include_once '../config/connection.php';

$username = $_POST['username'];
$password = $_POST['password'];

$username = mysqli_real_escape_string($conn, $username);
$password = mysqli_real_escape_string($conn, $password);

$query = "SELECT * FROM users WHERE BINARY username = '$username' AND BINARY password = '$password'";
$res = mysqli_query($conn, $query);

if (mysqli_num_rows($res) == 1) {
  $usr = mysqli_fetch_array($res);

  $_SESSION['username'] = $usr['username'];
  $_SESSION['role'] = $usr['roles'];

  if ($usr['roles'] == "admin") {
    header("Location: ../views/admin/dashboard-admin.php");
  } else if ($usr['roles'] == "user") {
    header("Location: ../views/user/dashboard-user.php");
  }
  exit();
} else {
  $_SESSION['message'] = 'User not found or wrong credentials';
  header("Location: ../views/login.php");
  exit();
}
