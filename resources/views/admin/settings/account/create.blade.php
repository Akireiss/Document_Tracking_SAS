@include('layouts.header');
@extends('layouts.admin.index')

@section('content')
<h4 class="text-left">
Add Account
<style>
    .card {
        background-color: #f3f8fb;
        color: #333;
    }

    .form-label {
        color: #555;
    }

    .form-control {
        background-color: #fff;
        border-color: #ccc;
        color: #555;
    }

    .btn-primary {
        background-color: limegreen;
        border-color: #17a2b8;
        color: #fff;
    }

    .btn-primary:hover {
        background-color: lime;
        border-color: lightgreen;
    }
</style>

<!-- Rest of the HTML form code -->
@if (session('success'))
<div class="alert alert-success alert-dismissible fade show" role="alert">
    {{ session('success') }}
</div>
@endif

<div class="card shadow-md p-4">
    <form action="{{ route('form.submit') }}" method="POST">
        @csrf
        <div class="row">
            <div class="mb-3 col-md-6">
                <label for="first_name" class="form-label">First Name</label>
                <input type="text" class="form-control" id="first_name" name="f_name">
            </div>
            <div class="mb-3 col-md-6">
                <label for="middle_name" class="form-label">Middle Name</label>
                <input type="text" class="form-control" id="middle_name" name="m_name">
            </div>
            <div class="mb-3 col-md-6">
                <label for="last_name" class="form-label">Last Name</label>
                <input type="text" class="form-control" id="last_name" name="l_name">
            </div>
            <div class="mb-3 col-md-6">
                <label for="username" class="form-label">Username</label>
                <input type="text" class="form-control" id="username" name="username">
            </div>
            <div class="mb-3 col-md-6">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password">
            </div>
            <div class="mb-3 col-md-6">
                <label for="office" class="form-label">Office</label>
               <select  class="form-select" name="office_id">
                @foreach ( $offices as $office )
                <option value="{{ $office->id }}">{{ $office->office_name }} {{ $office->id }}</option>
                @endforeach

               </select>
            </div>

            <div class="mb-3 col-md-6">
                <label for="role" class="form-label">Role</label>
                <select class="form-select" id="role" name="role_id">
                    @foreach ($roles as $role )
                    <option value="{{$role->id}}">{{$role->role}}{{$role->id}}</option>
                    @endforeach
                </select>
            </div>
            <div class="d-flex justify-content-end">
                <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
    </form>
</div>

@endsection
