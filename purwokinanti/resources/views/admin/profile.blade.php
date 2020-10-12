@extends('admin.layouts.app')

@section('content')
    <!-- ============================================================== -->
    <!-- Container fluid  -->
    <!-- ============================================================== -->
   <div class="container-fluid bg-light d-flex justify-content-center align-items-center" style="height: 100vh;">
        <div class="box bg-white p-5">
            <h1>Profil</h1>
        <form action="{{route('admin.profile.update')}}" method="POST" class="form mt-4">
        @csrf
        <div class="form-group">
            <label for="my-input">Username</label>
        <input id="my-input" class="form-control @error('username') is-invalid @enderror" type="text" value="{{Auth::user()->username}}" readonly>
        </div>
        <div class="form-group">
            <label for="my-input">Password lama</label>
            <input id="my-input" class="form-control @error('old_password') is-invalid @enderror" type="password" name="old_password">
        </div>
        <div class="form-group">
            <label for="my-input">Password baru</label>
            <input id="my-input" class="form-control @error('password') is-invalid @enderror" type="password" name="password">
        </div>
        <button type="submit" class="btn btn-primary float-right">Perbarui password</button>
        </form>
        </div>
   </div>
    <!-- ============================================================== -->
    <!-- End Container fluid  -->
    <!-- ============================================================== -->
@endsection