@extends('public.layouts.app')

@section('content')
    
<style>
  .jumbotron{
background: url("{{Storage::url($jumbotron->image)}}");
background-repeat: no-repeat;
background-position: center;
background-size: cover;
  }
</style>
<div class="jumbotron" id="page">
<div class="wrapper">
  <div class="container">
  <h1>{{$jumbotron->title}}</h1>
    <p>
    {{$jumbotron->description}}
    </p>
  </div>
</div>
</div>

<div class="container">

@isset($berita)
<!-- SECTION BERITA START -->
<div class="mt-5"></div>
<div id="section-news">
  <div class="section-title">Berita</div>
  <div class="line" style="width: 130px"></div>
  <div class="row mb-5">
    {{-- COL : IMAGE TITLE DATE --}}
    <div class="col-lg-6">
    <img src="{{Storage::url('public/News')."/".$berita->thumbnail}}" alt="{{$berita->thumbnail}}" class="w-100">
    <h1 class="my-2">{{$berita->title}}</h1>
    <div class="my-2">{{$berita->created_at->formatLocalized('%A, %d %B %Y')}}</div>
    </div>
    {{-- COL : BODY --}}
    <div class="col-lg-6">
        {!! nl2br($berita->body) !!}
    </div>
  </div>

</div>
{{-- SECTION BERITA END --}}
@endisset

@isset($agenda)
<!-- SECTION AGENDA START -->
<div class="mt-5"></div>
<div id="section-agenda">
    <div class="section-title">Agenda</div>
    <div class="line" style="width: 130px"></div>
    <div class="row mt-3 mb-5">
        <div class="col-lg-6 px-lg-4">
            <div class="border border-secondary p-3 rounded">
                <h1 class="mt-4">{{$agenda->title}}</h1>
                <p>{!! nl2br($agenda->description) !!}</p>
            </div>
        </div>    
        <div class="col-lg-6 px-lg-4 my-lg-0 my-3">
            <div class="border border-secondary p-3 rounded">
                <p class="text text-bold">Lokasi: {{$agenda->location}}</p>
                <p>Tanggal: {{$agenda->date->formatLocalized('%A, %d %B %Y')}}</p>
                <p>Waktu: {{$agenda->time}}</p>
            </div>
        </div>    
    </div>
    </div>
  </div>
</div>
<!-- SECTION AGENDA END -->
@endisset

@isset($keluarga)
<!-- SECTION KELUARGA START -->
<div class="mt-5"></div>
<div id="section-agenda">
    <div class="section-title">Detail Keluarga</div>
    <div class="line" style="width: 130px"></div>
    <div class="table-responsive mt-4">
        <h5>Informasi Keluarga :</h5>
        <table class="table">
            <thead class="bg-primary text-white">
                <tr>
                    <th>KB</th>
                    <th>KS</th>
                    <th>PUS</th>
                    <th>Kepala keluarga</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td>{{$keluarga->kb}}</td>
                    <td>{{$keluarga->ks}}</td>
                    <td>{{$keluarga->pus}}</td>
                    <td>{{$keluarga->kependudukan->name}}</td>
                </tr>
            </tbody>
        </table>
        <h5>Anggota Keluarga :</h5>
        <table class="table">
            <thead class="bg-secondary text-white">
                <tr>
                    <th>#</th>
                    <th>Nama</th>
                    <th>Status</th>
                    <th>Usia</th>
                    <th>Jenis Kelamin</th>
                    <th>Pekerjaan</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($keluarga->penduduk as $key => $pend)
                <tr>
                <td>{{++$key}}</td>
                    <td>{{$pend->name}}</td>
                    <td>{{$pend->status}}</td>
                     <td>{{$carbon->parse(date('d-m-Y', strtotime(Crypt::decryptString($pend->born))))->age}}</td>
                    <td>{{$pend->gender}}</td>
                    <td>{{$pend->job}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
            <div class="my-5">
        <a href="{{$back}}" class="btn btn-sm btn-outline-secondary">Kembali</a>
    </div>
    </div>
  </div>
</div>
<!-- SECTION KELUARGA END -->
@endisset

</div>

@endsection