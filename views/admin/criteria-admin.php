<?php
session_start();

if (!isset($_SESSION['role']) || $_SESSION['role'] != 'admin') {
  header("Location: ../errors/401.php");
  exit();
}

if (isset($_SESSION['success_message'])) {
  echo "<script>alert('" . $_SESSION['success_message'] . "');</script>";
  // Hapus pesan setelah ditampilkan
  unset($_SESSION['success_message']);
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <title>Criteria - Admin - Phone Advisor</title>
  <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
  <link href="../../assets/css/styles.css" rel="stylesheet" />
  <link href="../../assets/css/tables.css" rel="stylesheet" />
  <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

</head>

<body class="sb-nav-fixed">
  <!-- TODO: Navigation -->
  <?php include('../includes/navigation.php'); ?>
  <div id="layoutSidenav">
    <!-- TODO: Sidebar -->
    <div id="layoutSidenav_nav">
      <?php include('../includes/sidebar-admin.php'); ?>
    </div>
    <!-- TODO: Content -->
    <div id="layoutSidenav_content">
      <main>
        <div class="container-fluid px-4">
          <!-- Breadcrumb -->
          <h1 class="mt-4">Criteria</h1>
          <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="dashboard-admin.php">Dashboard</a></li>
            <li class="breadcrumb-item active">Criteria</li>
          </ol>

          <!-- TODO: Main Content [START] -->

          <?php
          include('../../config/connection.php');

          // Query untuk mendapatkan data dari tabel criteria
          $query = "SELECT * FROM criteria";
          $result = mysqli_query($conn, $query);
          ?>

          <div class="card mb-4">
            <div class="card-header">
              Criteria
            </div>
            <div class="card-body">
              <table id="tabel12" class="table">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>Parameter</th>
                    <th>Criteria</th>
                    <th>Action</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  // Inisialisasi variabel penghitung untuk nomor urut
                  $no = 1;

                  // Looping untuk menampilkan data dari hasil query
                  if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                      echo "<tr>";
                      echo "<td>" . $no . "</td>";
                      echo "<td>" . $row['parameter'] . "</td>";
                      echo "<td>" . $row['criteria'] . "</td>";
                      echo "<td><button type='button' class='btn btn-primary' data-bs-toggle='modal' data-bs-target='#editModal" . $row['id_criteria'] . "'>
                                <i class='fas fa-edit'></i>
                              </button></td>";
                      echo "</tr>";

                      // Modal Box untuk Edit Criteria
                      echo "
                        <div class='modal fade' id='editModal" . $row['id_criteria'] . "' tabindex='-1' aria-labelledby='editModalLabel' aria-hidden='true'>
                          <div class='modal-dialog'>
                            <div class='modal-content'>
                              <div class='modal-header'>
                                <h5 class='modal-title' id='editModalLabel'>Edit Criteria</h5>
                                <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
                              </div>
                              <form method='POST' action='../../models/update_criteria.php' id='tabel12'>
                                <div class='modal-body'>
                                  <div class='mb-3'>
                                    <label for='criteria' class='form-label'>Criteria</label>
                                    <select class='form-select' id='criteria' name='criteria' required>
                                        <option value='cos' " . ($row['criteria'] == 'cos' ? 'selected' : '') . ">Cost</option>
                                        <option value='ben' " . ($row['criteria'] == 'ben' ? 'selected' : '') . ">Benefit</option>
                                    </select>
                                    <input type='hidden' name='id_criteria' value='" . $row['id_criteria'] . "'>
                                  </div>
                                </div>
                                <div class='modal-footer'>
                                  <button type='button' class='btn btn-secondary' data-bs-dismiss='modal'>Close</button>
                                  <button type='submit' class='btn btn-primary'>Save</button>
                                </div>
                              </form>
                            </div>
                          </div>
                        </div>";

                      $no++;
                    }
                  } else {
                    echo "<tr><td colspan='4' style='text-align: center;'>No data available</td></tr>";
                  }
                  ?>
                </tbody>
              </table>
            </div>
          </div>

          <?php
          // Tutup koneksi database
          mysqli_close($conn);
          ?>

          <!-- TODO: Main Content [END] -->

        </div>
      </main>
      <!-- Footer -->
      <footer class="py-4 bg-light mt-auto">
        <div class="container-fluid px-4">
          <div class="d-flex align-items-center justify-content-between small">
            <div class="text-muted">Copyright &copy; Phone Advisor 2024</div>
            <div>
              <a href="#">Privacy Policy</a>
              &middot;
              <a href="#">Terms &amp; Conditions</a>
            </div>
          </div>
        </div>
      </footer>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" crossorigin="anonymous"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.8.0/Chart.min.js" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/umd/simple-datatables.min.js"
    crossorigin="anonymous"></script>
  <script src="../../assets/js/datatables-simple-demo.js"></script>
  <script src="../../assets/demo/chart-area-demo.js"></script>
  <script src="../../assets/demo/chart-bar-demo.js"></script>
  <script src="../../assets/js/scripts.js"></script>
  <script src="../../assets/js/tables.js"></script>
</body>

</html>