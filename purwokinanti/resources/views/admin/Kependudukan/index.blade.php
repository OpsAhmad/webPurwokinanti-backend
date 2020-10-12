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
                <h3 class="text-themecolor">Data penduduk</h3>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Kependudukan</a></li>
                    <li class="breadcrumb-item active">Daftar penduduk</li>
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
                        <div class="d-flex justify-content-between w-100">
                            <h4 class="card-title">Data Kependudukan</h4>
                            <div class="search-box">
                                <form action="" class="form d-flex align-items-center">
                                <input type="text" name="q" class="form-control mr-3 w-75" placeholder="Cari Nama Penduduk">
                                <button type="submit" style="font-size: 22px;outline:none;border:none;" class="fa fa-search bg-transparent"></button>
                                </form>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Nama</th>
                                        <th>NIK</th>
                                        <th>Jenis Kelamin</th>
                                        <th>Tanggal lahir</th>
                                        <th>Alamat</th>
                                        <th>Keluarga</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($penduduk as $key => $pend)
                                    <tr>
                                    <td>{{$penduduk->firstItem() + $key}}</td>
                                        <td>{{$pend->name}}</td>
                                        <td>{{Crypt::decryptString($pend->nik)}}</td>
                                        <td>{{$pend->gender}}</td>
                                        <td>{{date('d-m-Y', strtotime(Crypt::decryptString($pend->born)))}}</td>
                                        <td>{{$pend->address}}</td>
                                        <td>{{$pend->keluarga->kependudukan->name}}</td>
                                        <td>
                                            <a href="{!! route('admin.kependudukan.detail',['id'=>$pend->id,'from'=>'home']) !!}" class="btn btn-sm btn-outline-primary">Detail</a>
                                            <a href="{!! route('admin.kependudukan.edit',['id'=>$pend->id,'from'=>'home']) !!}" class="btn btn-sm btn-outline-secondary">Edit</a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            {{-- pagination --}}
                            <div class="mt-2">
                            {{$penduduk->appends(request()->except('page'))->links('vendor.pagination.bootstrap-4')}}
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