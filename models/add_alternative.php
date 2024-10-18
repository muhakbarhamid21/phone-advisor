<?php
include('../config/connection.php');

// Tangkap data dari form
$id_brand = $_POST['id_brand'];
$name_alternative = mysqli_real_escape_string($conn, $_POST['name_alternative']);

// Query untuk menambahkan alternative baru ke database
$query = "INSERT INTO alternative (id_brand, name_alternative) VALUES ('$id_brand', '$name_alternative')";

if (mysqli_query($conn, $query)) {
  // Redirect ke halaman alternative-admin.php setelah berhasil menambahkan data
  header("Location: ../admin/alternative-admin.php");
  exit();
} else {
  // Menampilkan pesan error jika query gagal
  echo "Error: " . $query . "<br>" . mysqli_error($conn);
}

// Tutup koneksi database
mysqli_close($conn);
