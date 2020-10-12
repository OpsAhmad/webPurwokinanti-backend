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
                <h3 class="text-themecolor">Edit keluarga</h3>
                <ol class="breadcrumb">
                    <li class="breadcrumb-item"><a href="javascript:void(0)">Kependudukan</a></li>
                <li class="breadcrumb-item"><a href="{{route('admin.kependudukan.keluarga.detail',['id' => $keluarga->id])}}">keluarga</a></li>
                    <li class="breadcrumb-item active">Edit keluarga</li>
                </ol>
            </div>
        </div>
        <!-- ============================================================== -->
        <!-- End Bread crumb and right sidebar toggle -->
        <!-- ==========================================1==================== -->
        <!-- ============================================================== -->
        <!-- Start Page Content -->
        <!-- ============================================================== -->
    <form action="{{route('admin.kependudukan.keluarga.update')}}" class="form" method="POST">
        @csrf
        @method('patch')
      <input type="hidden" name="_id" value="{{$keluarga->id}}">
        <div class="row">
            <!-- column -->
            <div class="col-12">
                <div class="card">
                    <div class="card-body">
                    <h4 class="card-title">Edit data keluarga: {{$keluarga->kependudukan->name}}</h4>
                        <hr>
                                <div class="row">
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="my-input">Keluarga Berencana</label>
                                            <br>
                                            <select name=kb id="" class="form-control @error('kb') is-invalid @enderror">
                                                <option value="Tidak terdaftar" @if ($keluarga->kb == "Tidak terdaftar") selected @endif>Tidak terdaftar</option>
                                                <option value="KB IUS" @if ($keluarga->kb == "KB IUD") selected @endif>KB IUD</option>
                                                <option value="KB MOP" @if ($keluarga->kb == "KB MOP") selected @endif>KB MOP</option>
                                                <option value="KB MOW" @if ($keluarga->kb == "KB MOW") selected @endif>KB MOW</option>
                                                <option value="KB Implant" @if ($keluarga->kb == "KB Implant") selected @endif>KB Implant</option>
                                                <option value="KB CO" @if ($keluarga->kb == "KB CO") selected @endif>KB CO</option>
                                                <option value="KB Suntik" @if ($keluarga->kb == "KB Suntik") selected @endif>KB Suntik</option>
                                                <option value="KB Pil" @if ($keluarga->kb == "KB Pil") selected @endif>KB Pil</option>
                                            </select>
                                       </div>        
                                     </div>        
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="my-input">Pasangan Usia Subur</label>
                                            <br>
                                            <select name=pus id="" class="form-control @error('pus') is-invalid @enderror">
                                                <option disabled selected>Pilih</option>
                                                <option value="Tidak terdaftar" @if ($keluarga->pus == "Tidak terdaftar") selected @endif>Tidak terdaftar</option>
                                                <option value="PUS Hamil" @if ($keluarga->pus == "PUS Hamil") selected @endif>PUS Hamil</option>
                                                <option value="PUS IAS" @if ($keluarga->pus == "PUS IAS") selected @endif>PUS IAS</option>
                                                <option value="PUS IAT" @if ($keluarga->pus == "PUS IAT") selected @endif>PUS IAT</option>
                                                <option value="PUS TIAL" @if ($keluarga->pus == "PUS TIAL") selected @endif>PUS TIAL</option>
                                            </select>
                                       </div>        
                                    </div>        
                                    <div class="col-md-4">
                                        <div class="form-group">
                                            <label for="my-input">Keluarga Sejahtera</label>
                                            <br>
                                            <select name=ks id="" class="form-control @error('ks') is-invalid @enderror">
                                                <option value="Tidak terdaftar"  @if ($keluarga->KS == "Tidak terdaftar") selected @endif>Tidak terdaftar</option>
                                                <option value="KS BKB"  @if ($keluarga->ks == "KS BKB") selected @endif>KS BKB</option>
                                                <option value="KS BKR"  @if ($keluarga->ks == "KS BKR") selected @endif>KS BKR</option>
                                                <option value="KS BKL"  @if ($keluarga->ks == "KS BKL") selected @endif>KS BKL</option>
                                                <option value="KS UPPKS"  @if ($keluarga->ks == "KS UPPKS") selected @endif>KS UPPKS</option>
                                            </select>
                                       </div>        
                                    </div>        
                                  </div>
                            <div class="d-flex justify-content-between my-4">
                            <a href="{{route('admin.kependudukan.keluarga.detail',['id'=>$keluarga->id])}}" class="btn btn-secondary">Kembali</a>
                                <button type="submit" class="btn btn-primary float-right">Simpan data</button>
                            </div>
                            </div>
                        </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
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