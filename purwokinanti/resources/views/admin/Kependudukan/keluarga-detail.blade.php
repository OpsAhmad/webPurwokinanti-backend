<?php
use  Illuminate\Support\Facades\Crypt; //helper crypt
?>

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
                <h3 class="text-themecolor">Data keluarga</h3>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Kependudukan</a></li>
                <li class="breadcrumb-item"><a href="{{route('admin.kependudukan.keluarga')}}">keluarga</a></li>
                    <li class="breadcrumb-item active">Detail keluarga</li>
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
                        <div class="d-flex justify-content-between">
                            <h4 class="card-title">Detail Keluarga</h4>
                            <div>
                            <a href="{{route('admin.kependudukan.keluarga.destroy',['id' => $keluarga->id])}}" class="btn btn-link text-danger">Hapus Keluarga</a>
                                /
                            <a href="{{route('admin.kependudukan.add',['keluarga_id'=>$keluarga->id])}}" class="btn btn-link">Tambah anggota</a>
                            </div>
                        </div>
                        <h6 class="card-subtitle"> <code></code></h6>
                        <div class="table-responsive mt-4">
                            <h5>Informasi Keluarga :</h5>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>KB</th>
                                        <th>KS</th>
                                        <th>PUS</th>
                                        <th>Kepala keluarga</th>
                                        <th>Edit</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>{{$keluarga->kb}}</td>
                                        <td>{{$keluarga->ks}}</td>
                                        <td>{{$keluarga->pus}}</td>
                                        <td>{{$keluarga->kependudukan->name}}</td>
                                        <td>
                                        <a href="{{route('admin.kependudukan.keluarga.edit',['id' => $keluarga->id])}}" class="btn btn-sm btn-primary">Edit</a></td>
                                    </tr>
                                </tbody>
                            </table>
                            <h5>Anggota Keluarga :</h5>
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Nama</th>
                                        <th>Status</th>
                                        <th>Tanggal lahir</th>
                                        <th>NIK</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($keluarga->penduduk as $key => $pend)
                                    <tr>
                                    <td>{{++$key}}</td>
                                        <td>{{$pend->name}}</td>
                                        <td>{{$pend->status}}</td>
                                        <td>{{date('d-m-Y', strtotime(Crypt::decryptString($pend->born)))}}</td>
                                        <td>{{Crypt::decryptString($pend->nik)}}</td>
                                        <td>
                                            <a href="{!! route('admin.kependudukan.detail',['id'=>$pend->id]) !!}" class="btn btn-sm btn-outline-primary">Detail</a>
                                            <a href="{!! route('admin.kependudukan.edit',['id'=>$pend->id]) !!}" class="btn btn-sm btn-outline-secondary">Edit</a>
                                            <a href="@if($keluarga->kependudukan_id != $pend->id){{route('admin.kependudukan.destroy',['id'=>$pend->id]) }}@else {{route('admin.kependudukan.keluarga.destroy',['id' => $keluarga->id]) }}@endif" class="btn btn-sm btn-outline-danger">Delete</a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
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