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
                <h3 class="text-themecolor">{{$judul_halaman ?? 'Edit Halaman'}}</h3>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Edit Halaman</a></li>
                    <li class="breadcrumb-item active">{{$judul_halaman ?? 'Edit Halaman'}}</li>
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
                        <h4 class="card-title">{{$judul_halaman ?? 'Edit Halaman'}}</h4>
                        <h6 class="card-subtitle"> <code></code></h6>
                           <div class="row mt-5">
                               <div class="col-md-8">
                               <form class="form" method="post" action="{{route('admin.halaman.update')}}" enctype="multipart/form-data">
                                    @csrf
                                    @method('patch')
                                    {{-- Location --}}
                                    <input type="hidden" name="_location" value="{{$data->location}}">
                                    {{-- Image --}}
                                    @isset($data->image)
                                    <input type="hidden" name="_old_image" value="{{$data->image}}">
                                    <div class="custom-file">
                                        <input class="custom-file-input" type="file" id="input-file" name="image" onchange="labelImage()">
                                        <label for="my-input" class="custom-file-label" id="label-file">{{Str::limit($data->image,30,'...')}}</label>
                                    </div>
                                    @endisset
                                    {{-- Title --}}
                                    @isset($data->title)
                                    <div class="form-group mt-2">
                                        <label for="my-input">Judul</label>
                                    <input id="my-input" class="form-control @error('title') is-invalid @enderror" type="text" name="title" value="{{$data->title}}">
                                    </div>
                                    @endisset
                                    {{-- Description --}}
                                    @isset($data->description)
                                    <div class="form-group">
                                        <label for="my-input">Deskripsi</label>
                                        <textarea id="my-input" class="form-control @error('description') is-invalid @enderror" rows="6" name="description" >{{$data->description}}</textarea>
                                    </div>
                                    @endisset
                                    <div class="mt-3"></div>
                                    <button type="submit" class="btn btn-primary float-right">Simpan data</button>
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