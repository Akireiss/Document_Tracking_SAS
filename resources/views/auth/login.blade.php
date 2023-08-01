@extends('layouts.app')
@section('content')


    <main>
        <div class="container">
            @if($errors->any())
            <div class="col-12">
                <div class="alert alert-danger mt-3">
                    {{ $errors->first('login') }}
                </div>
            </div>
            @endif
            <section
                class="section register min-vh-100 d-flex flex-column align-items-center justify-content-center py-4">
                <div class="container">
                    <div class="row justify-content-center">
                        <div class="col-lg-4 col-md-6 d-flex flex-column align-items-center justify-content-center">

                            <div class="d-flex justify-content-center py-4">
                                <a href="index.html" class="logo d-flex align-items-center w-auto">
                                    <img src="{{ asset('assets/img/logo.png') }}" alt="">
                                    <span class="d-none d-lg-block"> Oler Panget</span>
                                </a>

                            </div><!-- End Logo -->
                            <div class="pagetitle">


                            </div><!-- End Page Title -->
                            <div class="card mb-3">

                                <div class="card-body">

                                    <div class="d-flex justify-content-center py-4">
                                        <img class="d-flex align-items-center w-auto" src="{{ asset('img/sample1.png') }}" alt=""
                                            height="100px" width="200px">
                                    </div>
                                    <div class="d-flex justify-content-center py-4">

                                    </div>

                                    <form class="row g-3 needs-validation" action="{{ url('login/auth') }}" method="POST">
                                        @csrf

                                        <div class="col-12">
                                            <label for="yourUsername" class="form-label">Username</label>
                                            <div class="input-group has-validation">
                                                <input type="text" name="username" class="form-control"
                                                    id="yourUsername" required autofocus="autofocus">
                                                <div class="invalid-feedback">Please enter your username.</div>
                                            </div>
                                        </div>

                                        <div class="col-12">
                                            <label for="yourPassword" class="form-label">Password</label>
                                            <input type="password" name="password" class="form-control"
                                                id="yourPassword" required>
                                            <div class="invalid-feedback">Please enter your password!</div>
                                        </div>

                                        <div class="col-12">
                                            <button class="btn btn-warning w-100" type="submit"
                                                name="submit">Login</button>
                                        </div>

                                    </form>

                                </div>
                            </div>

                            <div class="credits">
                                                 <center>

                                </center>
                            </div>
                        </div>
                    </div>
                </div>

            </section>

        </div>
    </main>




@endsection
