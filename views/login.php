<?php
session_start();

if (isset($_SESSION['message'])) {
  echo "<script>alert('" . $_SESSION['message'] . "');</script>";
  unset($_SESSION['message']);
}

if (isset($_SESSION['success_message'])) {
  echo "<script>alert('" . $_SESSION['success_message'] . "');</script>";
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
  <title>Login - Phone Advisor</title>
  <link href="../assets/css/styles.css" rel="stylesheet" />
  <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
</head>

<body style="background-color: #212529">
  <main class="d-flex align-items-center justify-content-center min-vh-100">
    <div class="container">
      <div class="row justify-content-center">
        <div class="col-lg-5">
          <div class="card shadow-lg border-0 rounded-lg mt-5">
            <div class="card-header">
              <h3 class="text-center font-weight-light my-4">Login</h3>
            </div>
            <div class="card-body">
              <!-- Add required validation to form fields -->
              <form method='POST' action='../models/login_check.php' id="loginForm">
                <div class="form-floating mb-3">
                  <input class="form-control" id="username" name="username" type="text" placeholder="Username" required />
                  <label for="username">Username</label>
                </div>
                <div class="form-floating mb-3">
                  <input class="form-control" id="password" name="password" type="password" placeholder="Password" required />
                  <label for="password">Password</label>
                </div>
                <div class="mt-4 mb-0">
                  <div class="d-grid">
                    <button type="submit" class="btn btn-warning btn-block">Login</button>
                  </div>
                </div>
              </form>
            </div>
            <div class="card-footer text-center py-3">
              <div class="small">
                <a href="register.php" style="color: #ffc800;">Need an account? Sign up!</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"
    crossorigin="anonymous"></script>
  <script src="../assets/js/scripts.js"></script>
</body>

</html>