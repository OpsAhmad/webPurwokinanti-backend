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
                <h3 class="text-themecolor">Edit Berita</h3>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Berita</a></li>
                    <li class="breadcrumb-item active">Edit berita website purwokinanti</li>
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
                        <h4 class="card-title">Edit berita</h4>
                        <h6 class="card-subtitle">Edit berita di web<code></code></h6>
                        <div class="row">
                            <div class="col-lg-8">
                            <form method="post" action="{{route('admin.berita.update')}}" enctype="multipart/form-data">
                                @csrf
                                @method('patch')
                                <input type="hidden" name="id" value="{{$news->id}}">
                               <input type="hidden" name="old_thumbnail" value="{{$news->thumbnail}}">
                                <div class="form-group">
                                    <label for="my-input">Judul</label>
                                <input id="my-input" class="form-control  @error('title') is-invalid @enderror" type="text" name="title" placeholder="berita satu.." value="{{$news->title}}">
                                </div>        
                                <div class="form-group">
                                    <label for="my-input">Deskripsi singkat</label>
                                <input id="my-input" class="form-control @error('excerpt') is-invalid @enderror" type="text" name="excerpt" placeholder="kami melaksanakan acara peresmian..." value="{{ $news->excerpt }}">
                                </div>        
                                 <div class="form-group">
                                        <label for="my-textarea">Isi berita</label>
                                 <textarea id="my-textarea" class="form-control  @error('body') is-invalid @enderror" name="body" rows="6" placeholder="untuk memperingati....">{{$news->body}}</textarea>
                                </div>        
                                <div class="custom-file">
                                    <input id="input-thumbnail" class="custom-file-input  @error('thumbnail') is-invalid @enderror" type="file" name="thumbnail" onchange="imagePreview()">
                                <label for="my-input" class="custom-file-label" id="label-preview">{{$news->thumbnail}}</label>
                                </div>
                                <div class="my-4">
                                    <button type="submit" class="btn btn-outline-primary float-right"><i class="fa fa-paper-plane"></i> Update</button>
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
<script>
    function imagePreview()
    {
            //change label thumbnail
            input = document.getElementById('input-thumbnail'); 
            document.getElementById('label-preview').innerHTML = input.files[0].name;
            // change thumbnail image
    }
</script>
@endsection