@extends('admin.layouts.app')

@section('content')
    <!-- ============================================================== -->
    <!-- Container fluid  -->
    <!-- ============================================================== -->
   <div class="container-fluid bg-light d-flex justify-content-center align-items-center" style="height: 100vh;">
        <div class="box bg-white p-5">
            <h1>Login</h1>
        <form action="{{route('admin.login.verify')}}" method="POST" class="form mt-4">
        @csrf
        <div class="form-group">
            <label for="my-input">Username</label>
            <input id="my-input" class="form-control @error('username') is-invalid @enderror" type="text" name="username">
        </div>
        <div class="form-group">
            <label for="my-input">Password</label>
            <input id="my-input" class="form-control @error('password') is-invalid @enderror" type="password" name="password">
        </div>
        <button type="submit" class="btn btn-primary float-right">Login</button>
        </form>
        </div>
   </div>
    <!-- ============================================================== -->
    <!-- End Container fluid  -->
    <!-- ============================================================== -->
@endsection