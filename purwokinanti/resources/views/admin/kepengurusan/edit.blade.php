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
                <h3 class="text-themecolor">Edit Kepengurusan</h3>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Kepengurusan</a></li>
                    <li class="breadcrumb-item active">Edit Kepengurusan</li>
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
                        <h4 class="card-title">Edit kepengurusan</h4>
                        <h6 class="card-subtitle"> <code></code></h6>
                           <div class="row mt-5">
                               <div class="col-md-8">
                               <form class="form" method="post" action="{{route('admin.kepengurusan.update')}}" enctype="multipart/form-data">
                                    @csrf
                                    @method('patch')
                                    <input type="hidden" name="_id" value="{{$pengurus->id}}">
                                    <input type="hidden" name="old_avatar" value="{{$pengurus->avatar}}">
                                    <div class="custom-file">
                                        <input class="custom-file-input" type="file" id="input-file" name="avatar" onchange="labelImage()">
                                    <label for="my-input" class="custom-file-label" id="label-file">{{$pengurus->avatar}}</label>
                                    </div>
                                    <div class="form-group mt-2">
                                        <label for="my-input">Nama</label>
                                    <input id="my-input" class="form-control @error('name') is-invalid @enderror" type="text" name="name" value="{{$pengurus->name}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="my-input">Jabatan</label>
                                        <input id="my-input" class="form-control @error('position') is-invalid @enderror" type="text" name="position" value="{{$pengurus->position}}">
                                    </div>
                                    <div class="form-group">
                                        <label for="my-select">Prioritas</label>
                                        <select id="my-select" class="form-control @error('priority') is-invalid @enderror" name="priority">
                                            <option disabled selected>Pilih</option>
                                            <option @if($pengurus->priority == 1) selected @endif>1</option>
                                            <option @if($pengurus->priority == 2) selected @endif>2</option>
                                            <option @if($pengurus->priority == 3) selected @endif>3</option>
                                            <option @if($pengurus->priority == 4) selected @endif>4</option>
                                            <option @if($pengurus->priority == 5) selected @endif>5</option>
                                            <option @if($pengurus->priority == 6) selected @endif>5</option>
                                            <option @if($pengurus->priority == 7) selected @endif>6</option>
                                            <option @if($pengurus->priority == 8) selected @endif>6</option>
                                            <option @if($pengurus->priority == 9) selected @endif>9</option>
                                            <option @if($pengurus->priority == 10) selected @endif>10</option>
                                        </select>
                                    </div>
                                    <button type="submit" class="btn btn-primary float-right">Simpan data</button>
                                <a href="{{route('admin.kepengurusan')}}" class="btn btn-outline-secondary float-left">Kembali</a>
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