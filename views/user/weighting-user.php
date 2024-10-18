<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
  <meta name="description" content="" />
  <meta name="author" content="" />
  <title>Weighting - User - Phone Advisor</title>
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
      <?php include('../includes/sidebar-user.php'); ?>
    </div>
    <!-- TODO: Content -->
    <div id="layoutSidenav_content">
      <main>
        <div class="container-fluid px-4">
          <!-- Breadcrumb -->
          <h1 class="mt-4">Weighting</h1>
          <ol class="breadcrumb mb-4">
            <li class="breadcrumb-item"><a href="dashboard-user.php">Dashboard</a></li>
            <li class="breadcrumb-item active">Weighting</li>
          </ol>

          <!-- TODO: Main Content [START] -->

          <div class="card mb-4">
            <div class="card-header">
              Weighting
            </div>
            <div class="card-body">
              <div class="row">
                <div class="col-md-12">
                  <form>
                    <div class="mb-3 row">
                      <label for="selectC1" class="col-sm-2 col-form-label">Input C1</label>
                      <div class="col-sm-10">
                        <select class="form-select" id="selectC1">
                          <option value="" disabled selected>-</option>
                          <option value="1">1 (Extremely Unimportant)</option>
                          <option value="2">2 (Very Unimportant)</option>
                          <option value="3">3 (Less Important)</option>
                          <option value="4">4 (Slightly Less Important)</option>
                          <option value="5">5 (Fairly Important)</option>
                          <option value="6">6 (Slightly Important)</option>
                          <option value="7">7 (Important)</option>
                          <option value="8">8 (Very Important)</option>
                          <option value="9">9 (Extremely Important)</option>
                        </select>
                      </div>
                    </div>
                    <div class="mb-3 row">
                      <label for="selectC2" class="col-sm-2 col-form-label">Input C2</label>
                      <div class="col-sm-10">
                        <select class="form-select" id="selectC2">
                          <option value="" disabled selected>-</option>
                          <option value="1">1 (Extremely Unimportant)</option>
                          <option value="2">2 (Very Unimportant)</option>
                          <option value="3">3 (Less Important)</option>
                          <option value="4">4 (Slightly Less Important)</option>
                          <option value="5">5 (Fairly Important)</option>
                          <option value="6">6 (Slightly Important)</option>
                          <option value="7">7 (Important)</option>
                          <option value="8">8 (Very Important)</option>
                          <option value="9">9 (Extremely Important)</option>
                        </select>
                      </div>
                    </div>
                    <div class="mb-3 row">
                      <label for="selectC3" class="col-sm-2 col-form-label">Input C3</label>
                      <div class="col-sm-10">
                        <select class="form-select" id="selectC3">
                          <option value="" disabled selected>-</option>
                          <option value="1">1 (Extremely Unimportant)</option>
                          <option value="2">2 (Very Unimportant)</option>
                          <option value="3">3 (Less Important)</option>
                          <option value="4">4 (Slightly Less Important)</option>
                          <option value="5">5 (Fairly Important)</option>
                          <option value="6">6 (Slightly Important)</option>
                          <option value="7">7 (Important)</option>
                          <option value="8">8 (Very Important)</option>
                          <option value="9">9 (Extremely Important)</option>
                        </select>
                      </div>
                    </div>
                    <div class="mb-3 row">
                      <label for="selectC4" class="col-sm-2 col-form-label">Input C4</label>
                      <div class="col-sm-10">
                        <select class="form-select" id="selectC4">
                          <option value="" disabled selected>-</option>
                          <option value="1">1 (Extremely Unimportant)</option>
                          <option value="2">2 (Very Unimportant)</option>
                          <option value="3">3 (Less Important)</option>
                          <option value="4">4 (Slightly Less Important)</option>
                          <option value="5">5 (Fairly Important)</option>
                          <option value="6">6 (Slightly Important)</option>
                          <option value="7">7 (Important)</option>
                          <option value="8">8 (Very Important)</option>
                          <option value="9">9 (Extremely Important)</option>
                        </select>
                      </div>
                    </div>
                    <div class="mb-3 row">
                      <label for="selectC5" class="col-sm-2 col-form-label">Input C5</label>
                      <div class="col-sm-10">
                        <select class="form-select" id="selectC5">
                          <option value="" disabled selected>-</option>
                          <option value="1">1 (Extremely Unimportant)</option>
                          <option value="2">2 (Very Unimportant)</option>
                          <option value="3">3 (Less Important)</option>
                          <option value="4">4 (Slightly Less Important)</option>
                          <option value="5">5 (Fairly Important)</option>
                          <option value="6">6 (Slightly Important)</option>
                          <option value="7">7 (Important)</option>
                          <option value="8">8 (Very Important)</option>
                          <option value="9">9 (Extremely Important)</option>
                        </select>
                      </div>
                    </div>
                    <div class="mb-3 row">
                      <label for="selectC6" class="col-sm-2 col-form-label">Input C6</label>
                      <div class="col-sm-10">
                        <select class="form-select" id="selectC6">
                          <option value="" disabled selected>-</option>
                          <option value="1">1 (Extremely Unimportant)</option>
                          <option value="2">2 (Very Unimportant)</option>
                          <option value="3">3 (Less Important)</option>
                          <option value="4">4 (Slightly Less Important)</option>
                          <option value="5">5 (Fairly Important)</option>
                          <option value="6">6 (Slightly Important)</option>
                          <option value="7">7 (Important)</option>
                          <option value="8">8 (Very Important)</option>
                          <option value="9">9 (Extremely Important)</option>
                        </select>
                      </div>
                    </div>
                    <div class="mb-3 row">
                      <label for="selectC7" class="col-sm-2 col-form-label">Input C7</label>
                      <div class="col-sm-10">
                        <select class="form-select" id="selectC7">
                          <option value="" disabled selected>-</option>
                          <option value="1">1 (Extremely Unimportant)</option>
                          <option value="2">2 (Very Unimportant)</option>
                          <option value="3">3 (Less Important)</option>
                          <option value="4">4 (Slightly Less Important)</option>
                          <option value="5">5 (Fairly Important)</option>
                          <option value="6">6 (Slightly Important)</option>
                          <option value="7">7 (Important)</option>
                          <option value="8">8 (Very Important)</option>
                          <option value="9">9 (Extremely Important)</option>
                        </select>
                      </div>
                    </div>
                    <div class="d-flex justify-content-center">
                      <button type="submit" class="btn btn-warning" style="color: white; margin-top: 20px;"><strong>Analysis</strong></button>
                    </div>
                  </form>
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