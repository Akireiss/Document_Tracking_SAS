@extends('layouts.app')
@section('content')



<section class="vh-100" style="background-color: #eee;">
    <div class="container py-5 h-100">
      <div class="row d-flex justify-content-center align-items-center h-100">
        <div class="col-12 col-md-8 col-lg-6 col-xl-5">
          <div class="card shadow-2-strong" style="border-radius: 1rem;">
            <div class="card-body p-5 text-start">

              <h3 class="mb-5">Sign in</h3>

              <div class="form-outline mb-4">
                <label class="form-label">Email</label>
                <input type="email" id="typeEmailX-2" class="form-control form-control-lg" />

              </div>

              <div class="form-outline mb-4">
                <label class="form-label" for="typePasswordX-2">Password</label>
                <input type="password" id="typePasswordX-2" class="form-control form-control-lg" />

              </div>

              <!-- Checkbox -->
              <div class=" d-flex justify-content-start mb-3">
                <p  for="form1Example3">Don't Have An Account? <span class="text-decoration-underline text-primary">Click Here</span> </p>
              </div>

              <div class="d-flex justify-content-end">
                <a href="{{ url("admin/dashboard") }}" class="btn btn-primary btn-lg ms-auto" type="submit">Login</a>
              </div>

            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection
