@extends('layouts.app')
@section('content')



    <center>

    </center>













































    <!DOCTYPE html>
    <html lang="en">

    <head>
      <meta charset="utf-8">
      <meta content="width=device-width, initial-scale=1.0" name="viewport">

      <title>Monitoring and Evaluation of Beekeepers</title>
      <meta content="" name="description">
      <meta content="" name="keywords">

      <!-- Favicons -->
      <link href="assets/img/NARTDILogo.png" rel="icon" type="image/x-icon">

      <!-- Google Fonts -->
      <link href="https://fonts.gstatic.com" rel="preconnect">
      <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Nunito:300,300i,400,400i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

      <!-- Vendor CSS Files -->
      <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
      <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
      <link href="assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
      <link href="assets/vendor/quill/quill.snow.css" rel="stylesheet">
      <link href="assets/vendor/quill/quill.bubble.css" rel="stylesheet">
      <link href="assets/vendor/remixicon/remixicon.css" rel="stylesheet">
      <link href="assets/vendor/simple-datatables/style.css" rel="stylesheet">

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
                      <img src="assets/img/NARTDILogo.png" alt="">
                      <span class="d-none d-lg-block"> Oler Panget</span>
                    </a>

                  </div><!-- End Logo -->
                  <div class="pagetitle">


                  </div><!-- End Page Title -->
                  <div class="card mb-3">

                    <div class="card-body">

                      <div class="d-flex justify-content-center py-4">
                          <img class="d-flex align-items-center w-auto" src="assets/img/meb1.png"
                                alt="" height="100px" width="200px">
                      </div>
                      <div class="d-flex justify-content-center py-4">

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
                          <button class="btn btn-warning w-100" type="submit" name="submit">Login</button>
                        </div>

                      </form>

                    </div>
                  </div>

                  <div class="credits">
                    <!-- All the links in the footer should remain intact. -->
                    <!-- You can delete the links only if you purchased the pro version. -->
                    <!-- Licensing information: https://bootstrapmade.com/license/ -->
                    <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/nice-admin-bootstrap-admin-html-template/ -->
        <center>

        </center>
    </div>
                </div>
              </div>
            </div>

          </section>

        </div>
      </main><!-- End #main -->

      <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

      <!-- Vendor JS Files -->
      <script src="assets/vendor/apexcharts/apexcharts.min.js"></script>
      <script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
      <script src="assets/vendor/chart.js/chart.min.js"></script>
      <script src="assets/vendor/echarts/echarts.min.js"></script>
      <script src="assets/vendor/quill/quill.min.js"></script>
      <script src="assets/vendor/simple-datatables/simple-datatables.js"></script>
      <script src="assets/vendor/tinymce/tinymce.min.js"></script>
      <script src="assets/vendor/php-email-form/validate.js"></script>

      <!-- Template Main JS File -->
      <script src="assets/js/main.js"></script>

    </body>

    </html>
    Error 404 (Not Found)!!1 --}}





{{-- <section class="vh-100">
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
    </div>
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
  </section> --}}
@endsection
