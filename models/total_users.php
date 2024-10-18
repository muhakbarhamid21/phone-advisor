<?php
include('../../config/connection.php'); // Sambungkan dengan koneksi database

$queryUsers = "SELECT COUNT(*) as totalUsers FROM users WHERE roles = 'user'";
$resultUsers = mysqli_query($conn, $queryUsers);

if (!$resultUsers) {
  die("Query failed: " . mysqli_error($conn));
}

$rowUsers = mysqli_fetch_assoc($resultUsers);
$totalUsers = $rowUsers['totalUsers'];

// Lakukan hal yang sama untuk admin
$queryAdmins = "SELECT COUNT(*) as totalAdmins FROM users WHERE roles = 'admin'";
$resultAdmins = mysqli_query($conn, $queryAdmins);

if (!$resultAdmins) {
  die("Query failed: " . mysqli_error($conn));
}

$rowAdmins = mysqli_fetch_assoc($resultAdmins);
$totalAdmins = $rowAdmins['totalAdmins'];
