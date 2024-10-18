<?php
include('../config/connection.php');

// Tangkap id dari parameter URL
$id_alternative = $_GET['id'];

// Query untuk menghapus alternative berdasarkan ID
$query = "DELETE FROM alternative WHERE id_alternative = $id_alternative";

if (mysqli_query($conn, $query)) {
  // Redirect ke halaman utama setelah berhasil menghapus data
  header("Location: ../views/admin/alternative-admin.php");
  exit();
} else {
  echo "Error deleting record: " . mysqli_error($conn);
}

// Tutup koneksi database
mysqli_close($conn);
