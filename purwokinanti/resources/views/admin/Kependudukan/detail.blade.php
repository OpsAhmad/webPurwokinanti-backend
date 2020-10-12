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
                <h3 class="text-themecolor">Detail Penduduk</h3>
                <ol class="breadcrumb">
                <li class="breadcrumb-item"><a href="{{route('admin.kependudukan.penduduk')}}">Kependudukan</a></li>
                    <li class="breadcrumb-item active">Detail Penduduk</li>
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
                        <h4 class="card-title">Detail Penduduk</h4>
                        <h6 class="card-subtitle"><code></code></h6>
                        <div class="row">
                            <div class="col-lg-8">
                                <div class="form-group">
                                    <label for="my-input">Nama</label>
                                    <input id="my-input" class="form-control  @error('name') is-invalid @enderror" type="text" name="name" placeholder="Cak lontong" value="{{$penduduk->name}}" readonly>
                                </div>        
                                <div class="form-group">
                                    <label for="my-input">Tanggal Lahir</label>
                                    <input id="my-input" class="form-control @error('born') is-invalid @enderror" type="date" name="born"  value="{{ Crypt::decryptString($penduduk->born) }}" readonly>
                                </div>        
                                <div class="form-group">
                                    <label for="my-input">NIK</label>
                                    <input id="my-input" class="form-control @error('nik') is-invalid @enderror" type="number" name="nik"  value="{{ Crypt::decryptString($penduduk->nik) }}" readonly>
                                </div>        
                                <div class="form-group">
                                    <label for="my-input">Alamat</label>
                                    <input id="my-input" class="form-control @error('address') is-invalid @enderror" type="text" name="address"  value="{{ $penduduk->address }}" readonly>
                                </div>        
                             <div class="row">
                                 <div class="col-md-4">
                                <div class="form-group">
                                    <label for="my-input">Status hubungan</label>
                                    <select name="status" id="" class="form-control @error('status') is-invalid @enderror" disabled>
                                        <option @if ($penduduk->status == "Suami") selected @endif>Suami</option>
                                        <option @if ($penduduk->status == "Istri") selected @endif>Istri</option>
                                        <option @if ($penduduk->status == "Anak") selected @endif>Anak</option>
                                        <option @if ($penduduk->status == "Famili lain") selected @endif>Famili lain</option>
                                    </select>
                                </div>        
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="my-input">Pekerjaan</label>
                                    <select name="job" id="" class="form-control @error('job') is-invalid @enderror" disabled>
                                        <option @if ($penduduk->job == "Tidak bekerja") selected @endif>Tidak bekerja</option>
                                        <option @if ($penduduk->job == "Rumah Tangga") selected @endif">Rumah Tangga</option>
                                        <option @if ($penduduk->job == "Mahasiswa") selected @endif">Pelajar/Mahasiswa</option>
                                        <option @if ($penduduk->job == "PNS/ASN") selected @endif>PNS/ASN</option>
                                        <option @if ($penduduk->job == "Wirausaha") selected @endif>Wirausaha</option>
                                        <option @if ($penduduk->job == "Karyawan Swasta") selected @endif>Karyawan Swasta</option>
                                        <option @if ($penduduk->job == "Buruh") selected @endif>Buruh</option>
                                        <option @if ($penduduk->job == "Guru/Dosen") selected @endif>Guru/Dosen</option>
                                        <option @if ($penduduk->job == "Lainya") selected @endif>Lainya</option>
                                    </select>
                                </div>  
                            </div>
                            <div class="col-md-4">
                                <div class="form-group">
                                    <label for="my-input">Pendidikan</label>
                                    <select name="education" id="" class="form-control @error('education') is-invalid @enderror" disabled>
                                        <option value="Tidak sekolah">Tidak sekolah</option>
                                        <option @if ($penduduk->education == "SD") selected @endif>SD</option>
                                        <option @if ($penduduk->education == "SMP") selected @endif>SMP</option>
                                        <option @if ($penduduk->education == "SMA") selected @endif>SMA</option>
                                        <option @if ($penduduk->education == "D1") selected @endif>D1</option>
                                        <option @if ($penduduk->education == "D2") selected @endif>D2</option>
                                        <option @if ($penduduk->education == "D3") selected @endif>D3</option>
                                        <option @if ($penduduk->education == "D4") selected @endif">D4</option>
                                        <option @if ($penduduk->education == "S1") selected @endif>S1</option>
                                        <option @if ($penduduk->education == "S2") selected @endif>S2</option>
                                        <option @if ($penduduk->education == "S3") selected @endif>S3</option>
                                    </select>
                                </div>    
                            </div>          
                            <div class="d-flex justify-content-between align-items-center w-100">
                                <a href="@if($from == null) {{route('admin.kependudukan.keluarga.detail',['id' => $penduduk->keluarga_id])}} @else {{route('admin.kependudukan.penduduk')}} @endif" class="btn btn-secondary">Kembali</a>
                                <a href="@if($from == null) {{route('admin.kependudukan.edit',['id' => $penduduk->id])}} @else {{route('admin.kependudukan.edit',['id' => $penduduk->id,'from' => 'home'])}} @endif" class="btn btn-primary">Edit</a>
                            </div>
                            </div>          
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