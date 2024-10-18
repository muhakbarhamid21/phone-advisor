<?php
session_start();

if (!isset($_SESSION['role']) || $_SESSION['role'] != 'admin') {
  header("Location: ../errors/401.php");
  exit();
}

include('../../models/total_users.php');
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <title>Dashboard - Admin - Phone Advisor</title>
  <link href="https://cdn.jsdelivr.net/npm/simple-datatables@7.1.2/dist/style.min.css" rel="stylesheet" />
  <link href="../../assets/css/styles.css" rel="stylesheet" />
  <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
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
          <h1 class="mt-4">Dashboard</h1>
          <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item active">Dashboard</li>
          </ol>

          <!-- TODO: Main Content [START] -->

          <!-- Box Card Row -->
          <div class="row">
            <!-- Smartphones Card -->
            <div class="col-lg-6 col-md-12 mb-4">
              <div class="card shadow-sm rounded" style="background-color: #212529; color: white;">
                <div class="card-body d-flex justify-content-between align-items-center">
                  <div>
                    <h5 class="card-title">Users</h5>
                    <h2 class="card-text" id="smartphone-count"><?php echo $totalUsers; ?></h2>
                  </div>
                  <div>
                    <i class="fas fa-user fa-3x"></i>
                  </div>
                </div>
              </div>
            </div>
            <!-- Brand Card -->
            <div class="col-lg-6 col-md-12 mb-4">
              <div class="card shadow-sm rounded" style="background-color: #212529; color: white;">
                <div class="card-body d-flex justify-content-between align-items-center">
                  <div>
                    <h5 class="card-title">Admins</h5>
                    <h2 class="card-text" id="brand-count"><?php echo $totalAdmins; ?></h2>
                  </div>
                  <div>
                    <i class="fas fa-user fa-3x"></i>
                  </div>
                </div>
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
</body>

</html>