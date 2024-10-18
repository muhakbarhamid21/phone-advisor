<?php
session_start();

if (!isset($_SESSION['role']) || $_SESSION['role'] != 'user') {
  header("Location: ../errors/401.php");
  exit();
}

include('../../models/table_alternative.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <title>Smartphone List - User - Phone Advisor</title>
  <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
  <link href="../../assets/css/styles.css" rel="stylesheet" />
  <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
  <style>
    #datatablesSimple thead th,
    #datatablesSimple tfoot th {
      text-align: center;
      vertical-align: middle;
    }

    #datatablesSimple tbody td {
      text-align: center;
      vertical-align: middle;
    }
  </style>
</head>

<body class="sb-nav-fixed">
  <!-- TODO: Navigation -->
  <?php include('../includes/navigation.php'); ?>
  <div id="layoutSidenav">
    <!-- TODO: Sidebar -->
    <div id="layoutSidenav_nav">
      <?php include('../includes/sidebar-user.php'); ?>
    </div>
    <!-- TODO: Content -->
    <div id="layoutSidenav_content">
      <main>
        <div class="container-fluid px-4">
          <!-- Breadcrumb -->
          <h1 class="mt-4">Smartphone List</h1>
          <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="dashboard-user.php">Dashboard</a></li>
            <li class="breadcrumb-item active">Smartphone List</li>
          </ol>

          <!-- TODO: Main Content [START] -->

          <div class="card mb-4">
            <div class="card-header">
              Smartphone List (Alternative)
            </div>
            <div class="card-body">
              <table id="datatablesSimple">
                <thead>
                  <tr>
                    <th>#</th>
                    <th>Brand</th>
                    <th>Smartphone Name</th>
                  </tr>
                </thead>
                <tbody>
                  <?php
                  if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                      echo "<tr>";
                      echo "<td>" . $no + 1 . "</td>";
                      echo "<td>" . $row['brand'] . "</td>";
                      echo "<td>" . $row['name_alternative'] . "</td>";
                      echo "</tr>";
                      $no++;
                    }
                  } else {
                    echo "<tr><td colspan='3' style='text-align: center;'>No data available</td></tr>";
                  }
                  ?>
                </tbody>
              </table>
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
</body>

</html>