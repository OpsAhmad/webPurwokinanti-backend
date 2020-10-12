<?php

use  Illuminate\Support\Facades\Crypt; //helper crypt
use App\Models\Kependudukan;

function findpenduduk($id)
{
    return Kependudukan::where('id', $id)->first()->name;
}
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
                    <li class="breadcrumb-item"><a href="javascript:void(0)">keluarga</a></li>
                    <li class="breadcrumb-item active">Daftar keluarga</li>
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
                            <h4 class="card-title">Data Keluarga</h4>
                                <form action="" class="form d-flex align-items-center">
                                    <div>
                                        <input type="text" name="q" class="form-control mr-3 w-75" placeholder="Cari kepala keluarga">
                                        <button type="submit" style="font-size: 22px;outline:none;border:none;" class="fa fa-search bg-transparent"></button>
                                    </div>
                                </form>
                        </div>
                        <div class="table-responsive">
                            <table class="table">
                                <thead>
                                    <tr>
                                        <th>#</th>
                                        <th>Kepala keluarga</th>
                                        <th>KB</th>
                                        <th>KS</th>
                                        <th>PUS</th>
                                        <th>Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach ($keluarga as $key => $k)
                                    <tr>
                                        <td>{{$keluarga->firstItem() + $key}}</td>
                                        <td>{{$k->name}}</td>
                                        <td>{{$k->kb}}</td>
                                        <td>{{$k->ks}}</td>
                                        <td>{{$k->pus}}</td>
                                        <td>
                                            <a href="{!! route('admin.kependudukan.keluarga.detail',['id'=>$k->id]) !!}" class="btn btn-sm btn-outline-primary">Detail</a>
                                            <a href="{!! route('admin.kependudukan.keluarga.destroy',['id'=>$k->id]) !!}" onclick="confirm('Yakin ingin hapus?')" class="btn btn-sm btn-outline-danger">Delete</a>
                                        </td>
                                    </tr>
                                    @endforeach
                                </tbody>
                            </table>
                            {{-- pagination --}}
                            <div class="mt-2">
                                {{$keluarga->appends(request()->except('page'))->links('vendor.pagination.bootstrap-4')}}
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