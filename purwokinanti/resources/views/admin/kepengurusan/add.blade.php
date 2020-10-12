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
                <h3 class="text-themecolor">Tambah Kepengurusan</h3>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Kepengurusan</a></li>
                    <li class="breadcrumb-item active">Tambah Kepengurusan</li>
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
                        <h4 class="card-title">Tambah kepengurusan</h4>
                        <h6 class="card-subtitle"> <code></code></h6>
                           <div class="row mt-5">
                               <div class="col-md-8">
                               <form class="form" method="post" action="{{route('admin.kepengurusan.insert')}}" enctype="multipart/form-data">
                                    @csrf
                                    <div class="custom-file">
                                        <input class="custom-file-input" type="file" id="input-file" name="avatar" onchange="labelImage()" required>
                                        <label for="my-input" class="custom-file-label" id="label-file">Foto profil</label>
                                    </div>
                                    <div class="form-group mt-2">
                                        <label for="my-input">Nama</label>
                                    <input id="my-input" class="form-control @error('name') is-invalid @enderror" type="text" name="name" value="{{old('name')}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="my-input">Jabatan</label>
                                        <input id="my-input" class="form-control @error('position') is-invalid @enderror" type="text" name="position" value="{{old('position')}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="my-select">Prioritas</label>
                                        <select id="my-select" class="form-control @error('priority') is-invalid @enderror" name="priority">
                                            <option disabled selected>Pilih</option>
                                            <option>1</option>
                                            <option>2</option>
                                            <option>3</option>
                                            <option>4</option>
                                            <option>5</option>
                                            <option>5</option>
                                            <option>6</option>
                                            <option>6</option>
                                            <option>9</option>
                                            <option>10</option>
                                        </select>
                                    </div>
                                    <button type="submit" class="btn btn-primary float-right">Tambah pengurus</button>
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
</div>
<script>
    function labelImage()
    {
        inputFile = document.getElementById('input-file');
        labelFile = document.getElementById('label-file');

        labelFile.innerHTML = inputFile.files[0].name;
    }
</script>
@endsection