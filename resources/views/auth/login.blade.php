@extends('layouts.app')
@section('content')


<!DOCTYPE html>
<html lang="en">

<head>
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title>Monitoring and Evaluation of Beekeepers</title>
  <!-- Favicons -->
  <link href="assets/location.png" rel="icon" type="image/x-icon">

  <!-- Template Main CSS File -->
  <link href="assets/css/style.css" rel="stylesheet">
</head>
<body>
  <main>
    <div class="container">
      <section class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
        <div class="container">
          <div class="row justify-content-center">
            <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

              <div class="d-flex justify-content-center py-4">
                <a href="index.html" class="logo d-flex align-items-center w-auto">
                  <img src="assets/logo.png" alt="">
                  <span class="d-none d-lg-block">Oler Panget</span>
                </a>

              </div><!-- End Logo -->
              <div class="pagetitle">


              </div><!-- End Page Title -->
              <div class="card mb-3">

                <div class="card-body">

                  <div class="d-flex justify-content-center py-4">

                      <img class="d-flex align-items-center w-auto" src="assets/img/location.png"

                      alt="" height="100px" width="200px">
                  </div>
                  <div class="d-flex justify-content-center py-4">
                      Panget
                  </div>

                  <form class="row g-3 needs-validation" novalidate action = "#" enctype="multipart/form-data" method="POST">

                    <div class="col-12">
                      <label for="yourUsername" class="form-label">Username</label>
                      <div class="input-group has-validation">
                        <input type="text" name="username" class="form-control" id="yourUsername" required autofocus="autofocus">
                        <div class="invalid-feedback">Please enter your username.</div>
                      </div>
                    </div>

                    <div class="col-12">
                      <label for="yourPassword" class="form-label">Password</label>
                      <input type="password" name="password" class="form-control" id="yourPassword" required>
                      <div class="invalid-feedback">Please enter your password!</div>
                    </div>
                    <div class="col-12">

                        <div class="input-group has-validation">

                          <div class="input-group-append">
                            <div class="input-group-text">
                              <input type="checkbox" id="showPasswordToggle">
                              <label for="showPasswordToggle" class="form-check-label">Show Password</label>
                            </div>
                          </div>
                        </div>
                      </div>
                      <script>
                        document.addEventListener('DOMContentLoaded', function () {
                          var passwordInput = document.getElementById('yourPassword');
                          var showPasswordToggle = document.getElementById('showPasswordToggle');

                          showPasswordToggle.addEventListener('change', function () {
                            if (showPasswordToggle.checked) {
                              passwordInput.type = 'text';
                            } else {
                              passwordInput.type = 'password';
                            }
                          });
                        });
                      </script>

</div>
                    <div class="col-12">
                      <button class="btn btn-warning w-100" type="submit" name="submit">Login</button>
                    </div>
                  </form>
                </div>
              </div>
              <div class="credits">

    <center>

    </center>
















































z

{{--
<section class="vh-100">
    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-8 col-lg-6 col-xl-5">
          <div class="card shadow-2-strong" style="border-radius: 1rem; background-color: #f4f4f4;">
            <div class="card-body p-5 text-start">

              <h3 class="mb-5">Sign in</h3>

              <form>
                <div class="form-outline mb-4">
                  <label class="form-label" for="inputUsername">Username</label>
                  <input type="text" id="inputUsername" class="form-control form-control-lg" required />
                </div>

                <div class="form-outline mb-4">
                  <label class="form-label" for="inputPassword">Password</label>
                  <div class="input-group">
                    <input type="password" id="inputPassword" class="form-control form-control-lg" required />
                  </div>
                </div>

                <div class="d-flex justify-content-end mb-4">
                  <button class="btn btn-outline-primary" type="button" id="togglePassword">
                    Show Password
                  </button>
                </div>
<div

                  <a href="{{ url("admin/dashboard") }}" class="btn btn-primary btn-lg ms-auto" type="submit">Login</a>
                </div>
              </form>

            </div>
          </div>
        </div>
      </div>
    </div> --}}
  </section>

  <script>
    const togglePasswordBtn = document.getElementById("togglePassword");
    const passwordInput = document.getElementById("inputPassword");

    togglePasswordBtn.addEventListener("click", function () {
      const type = passwordInput.getAttribute("type") === "password" ? "text" : "password";
      passwordInput.setAttribute("type", type);
      this.textContent = type === "password" ? "Show Password" : "Hide Password";
    });
  </script>
  </section>
@endsection
