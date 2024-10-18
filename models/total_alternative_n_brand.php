<?php
include('../../config/connection.php'); // Sambungkan dengan koneksi database

// Query untuk menghitung total alternatif
$queryAlternative = "SELECT COUNT(*) AS total_alternative FROM alternative";
$resultAlternative = mysqli_query($conn, $queryAlternative);
$rowAlternative = mysqli_fetch_assoc($resultAlternative);
$totalAlternative = $rowAlternative['total_alternative'];

// Query untuk menghitung total brand
$queryBrand = "SELECT COUNT(*) AS total_brand FROM brand";
$resultBrand = mysqli_query($conn, $queryBrand);
$rowBrand = mysqli_fetch_assoc($resultBrand);
$totalBrand = $rowBrand['total_brand'];
