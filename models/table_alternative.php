<?php
// Koneksi ke database
include('../../config/connection.php');

// Query untuk mendapatkan data alternatif dan nama brand yang sesuai
$query = "SELECT alternative.id_alternative, brand.brand, alternative.name_alternative 
          FROM alternative 
          JOIN brand ON alternative.id_brand = brand.id_brand";

$result = mysqli_query($conn, $query);

// Memeriksa apakah query berhasil dijalankan
if (!$result) {
  die("Query failed: " . mysqli_error($conn));
}

// Kembalikan hasil query
return $result;
