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
                <h3 class="text-themecolor">Data Kepengurusan</h3>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Kepengurusan</a></li>
                    <li class="breadcrumb-item active">Daftar Kepengurusan</li>
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
                        <h4 class="card-title">Daftar kepengurusan</h4>
                        <h6 class="card-subtitle"> <code></code></h6>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Nama</th>
                                        <th>Jabatan</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($pengurus as $key => $p)
                                    <tr>
                                        <td>{{$pengurus->firstItem() + $key}}</td>
                                        <td>{{$p->name}}</td>
                                        <td>{{$p->position}}</td>
                                        <td>
                                            <a href="{!! route('admin.kepengurusan.edit',['id'=>$p->id]) !!}" class="btn btn-sm btn-outline-primary">Edit</a>
                                            <a href="{!! route('admin.kepengurusan.destroy',['id'=>$p->id]) !!}" class="btn btn-sm btn-outline-danger">Delete</a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            {{-- pagination --}}
                            <div class="mt-2">
                            {{$pengurus->links('vendor.pagination.simple-bootstrap-4')}}
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
@endsection