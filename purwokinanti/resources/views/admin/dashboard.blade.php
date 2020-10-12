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
                <h3 class="text-themecolor">Dashboard</h3>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Home</a></li>
                    <li class="breadcrumb-item active">Dashboard</li>
                </ol>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- End Bread crumb and right sidebar toggle -->
        <!-- ============================================================== -->
        <div class="row">
            <!-- Column -->
            <div class="col-lg-12">
                <div class="card" style="height: 320px;background: url({{Storage::url('/Dashboard/bridge.jpg')}});background-position:center;background-size:cover">
                <div class="card-body" style="background: rgba(0, 0, 0, 0.2)">
                    <div class="jumbotron jumbotron-fluid h-100 bg-transparent">
                        <h1 class="display-4 text-white">Selamat datang</h1>
                        <p class="lead text-white">di dashboard admin web purwokinanti</p>
                    </div>    
                </div>
                </div>
            </div>
            </div>

            {{-- Informasi web: Jumlah kunjungan --}}
            Informasi Web
            <div class="row">
                <div class="col-lg-5">
                    <div class="card">
                        <div class="card-body">
                            <div class="d-flex m-b-30 no-block">
                                <h5 class="card-title m-b-0 align-self-center">Jumlah kunjungan</h5>
                            </div>
                            <div class="my-4">
                            <h1><i class="fa fa-user mr-2"></i>{{number_format($visitor,0,',','.')}}</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            {{-- Informasi kependudukan --}}
            Kependudukan
            <div class="row">
                <div class="col-lg-6 bg-white">
                    <div class="table-responsive m-t-20 no-wrap">
                        <table class="table vm no-th-brd pro-of-month">
                            <thead class="bg-secondary text-white">
                                <tr>
                                    <th>Jumlah Penduduk</th>
                                    <th>Laki-Laki</th>
                                    <th>Perempuan</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>{{number_format($jumlahPenduduk->count(),0,'.',',')}}</td>
                                    <td>{{number_format($jumlahPenduduk->where('gender','Laki-Laki')->count(),0,'.',',')}}</td>
                                    <td>{{number_format($jumlahPenduduk->where('gender','Perempuan')->count(),0,'.',',')}}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="col-lg-6 bg-white">
                    <div class="table-responsive m-t-20 no-wrap">
                        <table class="table vm no-th-brd pro-of-month">
                            <thead class="bg-secondary text-white">
                                <tr>
                                    <th>Jumlah Keluarga</th>
                                    <th>KB</th>
                                    <th>KS</th>
                                    <th>PUS</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>{{number_format($jumlahKeluarga->count(),0,'.',',')}}</td>
                                    <td>{{number_format($jumlahKeluarga->where('kb','!=','Tidak terdaftar')->count(),0,'.',',')}}</td>
                                    <td>{{number_format($jumlahKeluarga->where('ks','!=','Tidak terdaftar')->count(),0,'.',',')}}</td>
                                    <td>{{number_format($jumlahKeluarga->where('pus','!=','Tidak terdaftar')->count(),0,'.',',')}}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
                Keluarga Berencana
                <div class="row">
                    <div class="col-lg-12 bg-white">
                        <div class="table-responsive m-t-20 no-wrap">
                            <table class="table vm no-th-brd pro-of-month">
                                <thead class="bg-secondary text-white">
                                    <tr>
                                        <th>KB IUD</th>
                                        <th>KB MOP</th>
                                        <th>KB MOW</th>
                                        <th>KB Implant</th>
                                        <th>KB CO</th>
                                        <th>KB Suntik</th>
                                        <th>KB Pil</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>{{number_format($jumlahKeluarga->where('kb','=','KB IUD')->count(),0,'.',',')}}</td>
                                        <td>{{number_format($jumlahKeluarga->where('kb','=','KB MOP')->count(),0,'.',',')}}</td>
                                        <td>{{number_format($jumlahKeluarga->where('kb','=','KB MOW')->count(),0,'.',',')}}</td>
                                        <td>{{number_format($jumlahKeluarga->where('kb','=','KB Implant')->count(),0,'.',',')}}</td>
                                        <td>{{number_format($jumlahKeluarga->where('kb','=','KB CO')->count(),0,'.',',')}}</td>
                                        <td>{{number_format($jumlahKeluarga->where('kb','=','KB Suntik')->count(),0,'.',',')}}</td>
                                        <td>{{number_format($jumlahKeluarga->where('kb','=','KB Pil')->count(),0,'.',',')}}</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                </div>
            </div>
            Pasangan Usia Subur 
            <div class="row">
                <div class="col-lg-12 bg-white">
                    <div class="table-responsive m-t-20 no-wrap">
                        <table class="table vm no-th-brd pro-of-month">
                            <thead class="bg-secondary text-white">
                                <tr>
                                    <th>PUS Hamil</th>
                                    <th>PUS IAS</th>
                                    <th>PUS IAT</th>
                                    <th>PUS TIAL</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>{{number_format($jumlahKeluarga->where('pus','=','PUS Hamil')->count(),0,'.',',')}}</td>
                                    <td>{{number_format($jumlahKeluarga->where('pus','=','PUS IAS')->count(),0,'.',',')}}</td>
                                    <td>{{number_format($jumlahKeluarga->where('pus','=','PUS IAT')->count(),0,'.',',')}}</td>
                                    <td>{{number_format($jumlahKeluarga->where('pus','=','PUS TIAL')->count(),0,'.',',')}}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
            </div>
            </div>
            KS BKB
            <div class="row">
                <div class="col-lg-12 bg-white">
                    <div class="table-responsive m-t-20 no-wrap">
                        <table class="table vm no-th-brd pro-of-month">
                            <thead class="bg-secondary text-white">
                                <tr>
                                    <th>Jumlah Sasaran</th>
                                    <th>Jumlah Anggota</th>
                                    <th>Jumlah Anggota BKB yang masih PUS</th>
                                    <th>Jumlah Anggota BKB yang masih KB</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>{{number_format($jumlahKeluarga->count(),0,'.',',')}}</td>
                                    <td>{{number_format($jumlahKeluarga->where('ks','=','KS BKB')->count(),0,'.',',')}}</td>
                                    <td>{{number_format($jumlahKeluarga->where('pus','!=','Tidak terdaftar')->where('ks','=','KS BKB')->count(),0,'.',',')}}</td>
                                    <td>{{number_format($jumlahKeluarga->where('kb','!=','Tidak terdaftar')->where('ks','=','KS BKB')->count(),0,'.',',')}}</td>
                                </tr>
                            </tbody>
                        </table>
            </div>
            KS BKR
            <div class="row">
                <div class="col-lg-12 bg-white">
                    <div class="table-responsive m-t-20 no-wrap">
                        <table class="table vm no-th-brd pro-of-month">
                            <thead class="bg-secondary text-white">
                                <tr>
                                    <th>Jumlah Sasaran</th>
                                    <th>Jumlah Anggota</th>
                                    <th>Jumlah Anggota BKR yang masih PUS</th>
                                    <th>Jumlah Anggota BKR yang masih KB</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>{{number_format($jumlahKeluarga->count(),0,'.',',')}}</td>
                                    <td>{{number_format($jumlahKeluarga->where('ks','=','KS BKR')->count(),0,'.',',')}}</td>
                                    <td>{{number_format($jumlahKeluarga->where('pus','!=','Tidak terdaftar')->where('ks','=','KS BKR')->count(),0,'.',',')}}</td>
                                    <td>{{number_format($jumlahKeluarga->where('kb','!=','Tidak terdaftar')->where('ks','=','KS BKR')->count(),0,'.',',')}}</td>
                                </tr>
                            </tbody>
                        </table>
            </div>
            KS BKL
            <div class="row">
                <div class="col-lg-12 bg-white">
                    <div class="table-responsive m-t-20 no-wrap">
                        <table class="table vm no-th-brd pro-of-month">
                            <thead class="bg-secondary text-white">
                                <tr>
                                    <th>Jumlah Sasaran</th>
                                    <th>Jumlah Anggota</th>
                                    <th>Jumlah Anggota BKL yang masih PUS</th>
                                    <th>Jumlah Anggota BKL yang masih KB</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>{{number_format($jumlahKeluarga->count(),0,'.',',')}}</td>
                                    <td>{{number_format($jumlahKeluarga->where('ks','=','KS BKL')->count(),0,'.',',')}}</td>
                                    <td>{{number_format($jumlahKeluarga->where('pus','!=','Tidak terdaftar')->where('ks','=','KS BKL')->count(),0,'.',',')}}</td>
                                    <td>{{number_format($jumlahKeluarga->where('kb','!=','Tidak terdaftar')->where('ks','=','KS BKL')->count(),0,'.',',')}}</td>
                                </tr>
                            </tbody>
                        </table>
            </div>
            KS UPPKS
            <div class="row">
                <div class="col-lg-12 bg-white">
                    <div class="table-responsive m-t-20 no-wrap">
                        <table class="table vm no-th-brd pro-of-month">
                            <thead class="bg-secondary text-white">
                                <tr>
                                    <th>Jumlah Sasaran</th>
                                    <th>Jumlah Anggota</th>
                                    <th>Jumlah Anggota UPPKS yang masih PUS</th>
                                    <th>Jumlah Anggota UPPKS yang masih KB</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                    <td>{{number_format($jumlahKeluarga->count(),0,'.',',')}}</td>
                                    <td>{{number_format($jumlahKeluarga->where('ks','=','KS UPPKS')->count(),0,'.',',')}}</td>
                                    <td>{{number_format($jumlahKeluarga->where('pus','!=','Tidak terdaftar')->where('ks','=','KS UPPKS')->count(),0,'.',',')}}</td>
                                    <td>{{number_format($jumlahKeluarga->where('kb','!=','Tidak terdaftar')->where('ks','=','KS UPPKS')->count(),0,'.',',')}}</td>
                                </tr>
                            </tbody>
                        </table>
            </div>
        </div>
    </div>
    <!-- ============================================================== -->
    <!-- End Container fluid  -->
    <!-- ============================================================== -->
    <!-- ============================================================== -->
</div>
@endsection