<?php
session_start();

if (!isset($_SESSION['role']) || $_SESSION['role'] != 'admin') {
  header("Location: ../errors/401.php");
  exit();
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
  <title>Alternative - Admin - Phone Advisor</title>
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
          <h1 class="mt-4">Alternative</h1>
          <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="dashboard-admin.php">Dashboard</a></li>
            <li class="breadcrumb-item active">Alternative</li>
          </ol>

          <!-- TODO: Main Content [START] -->

          <?php
          include('../../config/connection.php');

          // Query untuk mendapatkan data dari tabel alternative beserta brand-nya
          $query = "SELECT alternative.id_alternative, brand.brand, alternative.name_alternative 
          FROM alternative 
          JOIN brand ON alternative.id_brand = brand.id_brand";
          $result = mysqli_query($conn, $query);
          ?>

          <!-- Tombol untuk menambah Alternative -->
          <div class="mb-3">
            <button type="button" class="btn btn-success" data-bs-toggle="modal" data-bs-target="#addAlternativeModal">
              Add Alternative
            </button>
          </div>

          <!-- Table untuk menampilkan data Alternative -->
          <div class="card mb-4">
            <div class="card-header">
              Alternative List
            </div>
            <div class="card-body">
              <table id="tabel13" class="table">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>Brand</th>
                    <th>Smartphone Name</th>
                    <th>Action</th> <!-- terdapat button untuk edit dan delete data pada tabel alternative -->
                  </tr>
                </thead>
                <tbody>
                  <?php
                  $no = 1;
                  if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                      echo "<tr>";
                      echo "<td>" . $no . "</td>";
                      echo "<td>" . $row['brand'] . "</td>";
                      echo "<td>" . $row['name_alternative'] . "</td>";
                      // Tombol Edit dan Delete
                      echo "<td>
                                <button type='button' class='btn btn-warning' data-bs-toggle='modal' data-bs-target='#editModal" . $row['id_alternative'] . "'>
                                    <i class='fas fa-edit'></i>
                                </button>
                                <a href='../../models/delete_alternative.php?id=" . $row['id_alternative'] . "' class='btn btn-danger' onclick='return confirm(\"Are you sure?\")'>
                                    <i class='fas fa-trash'></i>
                                </a>
                              </td>";
                      echo "</tr>";

                      // Modal untuk Edit Alternative
                      echo "
                        <div class='modal fade' id='editModal" . $row['id_alternative'] . "' tabindex='-1' aria-labelledby='editModalLabel' aria-hidden='true'>
                          <div class='modal-dialog'>
                            <div class='modal-content'>
                              <div class='modal-header'>
                                <h5 class='modal-title' id='editModalLabel'>Edit Alternative</h5>
                                <button type='button' class='btn-close' data-bs-dismiss='modal' aria-label='Close'></button>
                              </div>
                              <form method='POST' action='../../models/update_alternative.php' id='tabel13'>
                                <div class='modal-body'>
                                  <div class='mb-3'>
                                    <label for='brand' class='form-label'>Brand</label>
                                    <input type='text' class='form-control' id='brand' name='brand' value='" . $row['brand'] . "' readonly>
                                  </div>
                                  <div class='mb-3'>
                                    <label for='name_alternative' class='form-label'>Smartphone Name</label>
                                    <input type='text' class='form-control' id='name_alternative' name='name_alternative' value='" . $row['name_alternative'] . "' required>
                                    <input type='hidden' name='id_alternative' value='" . $row['id_alternative'] . "'>
                                  </div>
                                </div>
                                <div class='modal-footer'>
                                  <button type='button' class='btn btn-secondary' data-bs-dismiss='modal'>Close</button>
                                  <button type='submit' class='btn btn-primary'>Save changes</button>
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

          <!-- Modal untuk Add Alternative -->
          <div class="modal fade" id="addAlternativeModal" tabindex="-1" aria-labelledby="addAlternativeLabel" aria-hidden="true">
            <div class="modal-dialog">
              <div class="modal-content">
                <div class="modal-header">
                  <h5 class="modal-title" id="addAlternativeLabel">Add Alternative</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <form method="POST" action="../../models/add_alternative.php"> <!-- Path ke add_alternative.php -->
                  <div class="modal-body">
                    <div class="mb-3">
                      <label for="id_brand" class="form-label">Brand</label>
                      <select class="form-select" id="id_brand" name="id_brand" required>
                        <option value="" selected disabled>Select a Brand</option>
                        <option value="1">ASUS</option>
                        <option value="2">ACER</option>
                        <option value="3">Lenovo</option>
                        <option value="4">Apple</option>
                        <option value="5">Hewlett Packard</option>
                        <option value="6">DELL</option>
                        <option value="7">MSI</option>
                        <option value="8">Razer</option>
                        <option value="9">SAMSUNG</option>
                      </select>
                    </div>
                    <div class="mb-3">
                      <label for="name_alternative" class="form-label">Smartphone Name</label>
                      <input type="text" class="form-control" id="name_alternative" name="name_alternative" required>
                    </div>
                  </div>
                  <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                    <button type="submit" class="btn btn-primary">Add Alternative</button>
                  </div>
                </form>
              </div>
            </div>
          </div>


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