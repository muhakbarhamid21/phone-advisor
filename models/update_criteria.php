<?php
include('../config/connection.php');

// Tangkap data dari form
$id_criteria = $_POST['id_criteria'];
$criteria = mysqli_real_escape_string($conn, $_POST['criteria']);

// Query untuk update data criteria
$query = "UPDATE criteria SET criteria = '$criteria' WHERE id_criteria = $id_criteria";

if (mysqli_query($conn, $query)) {
  // Redirect kembali ke halaman utama setelah update
  session_start();
  $_SESSION['success_message'] = "Criteria updated successfully!";
  header("Location: ../views/admin/criteria-admin.php");
  exit();
} else {
  echo "Error updating record: " . mysqli_error($conn);
}

// Tutup koneksi database
mysqli_close($conn);
