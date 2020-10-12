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
                <h3 class="text-themecolor">Tambah Keluarga</h3>
                <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('admin.kependudukan.keluarga')}}">Keluarga</a></li>
                    <li class="breadcrumb-item active">Tambah Keluarga</li>
                </ol>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- End Bread crumb and right sidebar toggle -->
        <!-- ==========================================1==================== -->
        <!-- ============================================================== -->
        <!-- Start Page Content -->
        <!-- ============================================================== -->
        <div class="row">
            <!-- column -->
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                        <h4 class="card-title">Tambah keluarga</h4>
                        <h6 class="card-subtitle">Masukan data keluarga<code></code></h6>
                        <hr>
                        <h6 class="card-subtitle mt-4">&middot;Data kepala keluarga<code></code></h6>
                        <div class="row">
                            <div class="col-lg-8">
                            <form method="post" action="{{route('admin.kependudukan.keluarga.insert')}}" enctype="multipart/form-data">
                                @csrf
                                <div class="form-group">
                                    <label for="my-input">Nama</label>
                                    <input id="my-input" class="form-control  @error('name') is-invalid @enderror" type="text" name="name" value="{{old('name')}}">
                                </div>        
                                <div class="form-group">
                                    <label for="my-input">Tanggal Lahir</label>
                                    <input id="my-input" class="form-control @error('born') is-invalid @enderror" type="date" name="born"  value="{{ old('born') }}">
                                </div>        
                                <div class="form-group">
                                    <label for="my-input">NIK</label>
                                    <input id="my-input" class="form-control @error('nik') is-invalid @enderror" type="number" name="nik"  value="{{ old('nik') }}">
                                </div>        
                                <div class="form-group">
                                    <label for="my-input">Alamat</label>
                                    <input id="my-input" class="form-control @error('address') is-invalid @enderror" type="text" name="address"  value="{{ old('address') }}">
                                </div>        
                                <div class="form-group">
                                    <label for="my-input">Jenis Kelamin</label>
                                    <select name="gender" id="" class="form-control @error('gender') is-invalid @enderror">
                                        <option disabled selected>Pilih</option>
                                        <option value="Laki-Laki">Laki-Laki</option>
                                        <option value="Perempuan">Perempuan</option>
                                    </select>
                                </div> 
                                <div class="row">
                                    <div class="col-md-4">
                                <div class="form-group">
                                    <label for="my-input">Status hubungan</label>
                                    <select name="status" id="" class="form-control @error('status') is-invalid @enderror">
                                        <option disabled selected>Pilih</option>
                                        <option value="Suami">Suami</option>
                                        <option value="Istri">Istri</option>
                                        <option value="Anak">Anak</option>
                                        <option value="Famili lain">Famili lain</option>
                                    </select>
                                </div>        
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="my-input">Pekerjaan</label>
                                    <select name="job" id="" class="form-control @error('job') is-invalid @enderror">
                                        <option disabled selected>Pilih</option>
                                        <option value="Tidak bekerja">Tidak bekerja</option>
                                        <option value="Rumah Tangga">Rumah Tangga</option>
                                        <option value="Pelajar/Mahasiswa">Pelajar/Mahasiswa</option>
                                        <option value="PNS/ASN">PNS/ASN</option>
                                        <option value="Wirausaha">Wirausaha</option>
                                        <option value="Karyawan Swasta">Karyawan Swasta</option>
                                        <option value="Buruh">Buruh</option>
                                        <option value="Guru/Dosen">Guru/Dosen</option>
                                        <option value="Lainya">Lainya</option>
                                    </select>
                                </div>  
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="my-input">Pendidikan</label>
                                    <select name="education" id="" class="form-control @error('education') is-invalid @enderror">
                                        <option disabled selected>Pilih</option>
                                        <option value="Tidak sekolah">Tidak sekolah</option>
                                        <option value="SD">SD</option>
                                        <option value="SMP">SMP</option>
                                        <option value="SMA">SMA</option>
                                        <option value="D1">D1</option>
                                        <option value="D2">D2</option>
                                        <option value="D3">D3</option>
                                        <option value="D4">D4</option>
                                        <option value="S1">S1</option>
                                        <option value="S2">S2</option>
                                        <option value="S3">S3</option>
                                        <option value="Lainya">Lainya</option>
                                    </select>
                                </div>    
                            </div>          
                        </div>          
                        <h6 class="card-subtitle">&middot;Data keluarga<code></code></h6>
                        <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="my-input">Keluarga Berencana</label>
                                            <br>
                                            <select name=kb id="" class="form-control @error('kb') is-invalid @enderror">
                                                <option disabled selected>Pilih</option>
                                                <option value="Tidak terdaftar">Tidak terdaftar</option>
                                                <option value="KB IUD">KB IUD</option>
                                                <option value="KB MOP">KB MOP</option>
                                                <option value="KB MOW">KB MOW</option>
                                                <option value="KB Implant">KB Implant</option>
                                                <option value="KB CO">KB CO</option>
                                                <option value="KB Suntik">KB Suntik</option>
                                                <option value="KB Pil">KB Pil</option>
                                            </select>
                                       </div>        
                                     </div>        
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="my-input">Pasangan Usia Subur</label>
                                            <br>
                                            <select name=pus id="" class="form-control @error('pus') is-invalid @enderror">
                                                <option disabled selected>Pilih</option>
                                                <option value="Tidak terdaftar">Tidak terdaftar</option>
                                                <option value="PUS Hamil">PUS Hamil</option>
                                                <option value="PUS IAS">PUS IAS</option>
                                                <option value="PUS IAT">PUS IAT</option>
                                                <option value="PUS TIAL">PUS TIAL</option>
                                            </select>
                                       </div>        
                                    </div>        
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="my-input">Keluarga Sejahtera</label>
                                            <br>
                                            <select name=ks id="" class="form-control @error('ks') is-invalid @enderror">
                                                <option disabled selected>Pilih</option>
                                                <option value="Tidak terdaftar">Tidak terdaftar</option>
                                                <option value="KS BKB">KS BKB</option>
                                                <option value="KS BKR">KS BKR</option>
                                                <option value="KS BKL">KS BKL</option>
                                                <option value="KS UPPKS">KS UPPKS</option>
                                            </select>
                                       </div>        
                                    </div>        
                                  </div>
                            <div class="my-4">
                                <button type="submit" class="btn btn-outline-primary float-right"><i class="fa fa-paper-plane"></i> Tambah</button>
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