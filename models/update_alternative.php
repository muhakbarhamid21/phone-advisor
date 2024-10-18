<?php
include('../config/connection.php');

// Tangkap data dari form
$id_alternative = $_POST['id_alternative'];
$name_alternative = mysqli_real_escape_string($conn, $_POST['name_alternative']);

// Query untuk update data alternative
$query = "UPDATE alternative SET name_alternative = '$name_alternative' WHERE id_alternative = $id_alternative";

if (mysqli_query($conn, $query)) {
  // Redirect ke halaman utama setelah berhasil update data
  header("Location: ../views/admin/alternative-admin.php");
  exit();
} else {
  echo "Error updating record: " . mysqli_error($conn);
}

// Tutup koneksi database
mysqli_close($conn);
