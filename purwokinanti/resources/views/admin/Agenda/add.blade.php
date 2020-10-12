@extends('admin.layouts.app')

@section('content')
<div class="page-wrapper">
    <!-- ============================================================== -->
    <!-- Container fluid  -->
    <!-- ============================================================== -->
    <div class="container-fluid">
        <!-- ============================================================== -->
        <!-- Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <div class="row page-titles">
            <div class="col-md-5 align-self-center">
                <h3 class="text-themecolor">Tambah agenda</h3>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Agenda</a></li>
                    <li class="breadcrumb-item active">Tambah agenda</li>
                </ol>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- End Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <!-- ============================================================== -->
        <!-- Start Page Content -->
        <!-- ============================================================== -->
        <div class="row">
            <!-- column -->
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Tambah agenda</h4>
                        <h6 class="card-subtitle">Tambahkan agenda baru di web<code></code></h6>
                        <div class="row">
                            <div class="col-lg-8">
                            <form method="post" action="{{route('admin.agenda.insert')}}" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label for="my-input">Judul</label>
                                <input id="my-input" class="form-control  @error('title') is-invalid @enderror" type="text" name="title" value="{{old('title')}}">
                                </div>        
                                <div class="form-group">
                                    <label for="my-input">Lokasi</label>
                                <input id="my-input" class="form-control  @error('location') is-invalid @enderror" type="text" name="location" value="{{old('location')}}">
                                </div>        
                                <div class="form-group">
                                    <label for="my-input">Waktu</label>
                                <input id="my-input" class="form-control  @error('time') is-invalid @enderror" type="time" name="time" value="{{old('time')}}">
                                </div>        
                                <div class="form-group">
                                    <label for="my-input">Tanggal</label>
                                <input id="my-input" class="form-control  @error('date') is-invalid @enderror" type="date" name="date" value="{{old('date')}}">
                                </div>        
                                 <div class="form-group">
                                        <label for="my-textarea">Deskripsi</label>
                                 <textarea id="my-textarea" class="form-control  @error('description') is-invalid @enderror" name="description" rows="6" >{{old('description')}}</textarea>
                                </div>        
                                <div class="my-4">
                                    <button type="submit" class="btn btn-outline-primary float-right"><i class="fa fa-paper-plane"></i> Upload</button>
                                </div>
                            </form>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- End PAge Content -->
        <!-- ============================================================== -->
    </div>
    <!-- ============================================================== -->
    <!-- End Container fluid  -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
</div>
@endsection