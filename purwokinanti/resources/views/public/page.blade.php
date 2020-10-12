<?php 
use Illuminate\Support\Carbon;
?>

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
  <div class="row">
  @foreach($berita as $b)
    <div class="col-md-4 mb-3">
      <a href="{{route('berita.single',['slug' => $b->slug])}}" class="text-decoration-none text-dark text-bold">
        <div class="card border-0">
          <div class="card-img">
            <img src="{{Storage::url('public/News')}}/{{$b->thumbnail}}" alt="{{$b->thumbnail}}" class="w-100" />
          </div>
          <div class="card-body">
            <h5 class="card-title">{{$b->title}}</h5>
            <p class="card-text">{{$b->created_at->diffForHumans()}}</p>
          </div>
        </div>
      </a>
    </div>
  @endforeach
</div>
    <div class="d-flex justify-content-center mb-5">
      {{$berita->links('vendor.pagination.bootstrap-4')}}
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
    <div class="row">
      @foreach($agenda as $a)
      <div class="col-md-4 mb-3">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">{{$a->title}}</h5>
                <p class="card-text">{{ $a->date->formatLocalized('%A, %d %B %Y')}}</p>
                <a href="{{route('agenda.single',['slug' => $a->slug])}}" class="btn btn-sm btn-outline-primary">Detail</a>
              </div>
            </div>
      </div>
      @endforeach
  </div>
  <div class="d-flex justify-content-center mb-5">
    {{$agenda->links('vendor.pagination.bootstrap-4')}}
  </div>
</div>
<!-- SECTION AGENDA END -->
@endisset

@isset($kependudukan)
<!-- SECTION KEPENDUDUKAN START -->
<div class="mt-5"></div>
<div id="section-kependudukan">
  <div class="d-flex justify-content-between align-items-center">
    <div class="section-title">Kependudukan</div>
    <form action="" class="form d-flex align-items-center">
        <input type="text" name="q" class="form-control mr-3 w-75" placeholder="Cari Nama Penduduk">
        <button type="submit" class="btn btn-sm btn-primary">Cari</button>
    </form>
    </div>
    <div class="line" style="width: 130px"></div>
    <div class="table-responsive">
      <table class="table table-light">
        <tbody>
          <tr>
            <td>No.</td>
            <td>Nama</td>
            <td>Usia</td>
            <td>Jenis Kelamin</td>
            <td>Pekerjaan</td>
          </tr>
        </tbody>
        @forelse($kependudukan as $key => $p)
        <tr>
          <td>{{$kependudukan->firstItem() + $key}}</td>
          <td>{{$p->name}}</td>
          <td>{{Carbon::parse(date('d-m-Y', strtotime(Crypt::decryptString($p->born))))->age}}</td>
          <td>{{$p->gender}}</td>
          <td>{{$p->job}}</td>
        </tr>
         @empty
        <tr>
          <td>Data kosong</td>
        </tr>
        @endforelse
      </table>
    </div>
  <div class="d-flex justify-content-center mb-5 mt-3">
    {{$kependudukan->appends(request()->except('page'))->links('vendor.pagination.bootstrap-4')}}
  </div>
</div>
<!-- SECTION KEPENDUDUKAN END -->
@endisset

@isset($kb)
<!-- SECTION KB START -->
<div class="mt-5"></div>
<div id="section-kependudukan">
  <div class="d-flex justify-content-between align-items-center">
    <div class="section-title">Keluarga Berencana</div>
    <form action="" class="form d-flex align-items-center">
        <input type="text" name="q" class="form-control mr-3 w-75" placeholder="Cari Nama Keluarga">
        <button type="submit" class="btn btn-sm btn-primary">Cari</button>
    </form>
    </div>
    <div class="line" style="width: 130px"></div>
    <div class="table-responsive">
      <table class="table table-light">
        <tbody>
          <tr>
            <td>No.</td>
            <td>Kepala keluarga</td>
            <td></td>
          </tr>
        </tbody>
        @forelse($kb as $key => $k)
        <tr>
          <td>{{$kb->firstItem() + $key}}</td>
          <td>{{$k->name}}</td>
          <td>
          <a href="{{route('keluarga.detail',['id' => $k->id,'from' => 'kb'])}}" class="btn btn-sm btn-outline-primary">Detail</a>
          </td>
        </tr>
        @empty
        <tr>
          <td>Data kosong</td>
        </tr>
        @endforelse
      </table>
    </div>
  <div class="d-flex justify-content-center mb-5 mt-3">
    {{$kb->appends(request()->except('page'))->links('vendor.pagination.bootstrap-4')}}
  </div>
</div>
<!-- SECTION KB END -->
@endisset

@isset($ks)
<!-- SECTION KS START -->
<div class="mt-5"></div>
<div id="section-kependudukan">
  <div class="d-flex justify-content-between align-items-center">
    <div class="section-title">Keluarga Sejahtera</div>
    <form action="" class="form d-flex align-items-center">
        <input type="text" name="q" class="form-control mr-3 w-75" placeholder="Cari Nama Keluarga">
        <button type="submit" class="btn btn-sm btn-primary">Cari</button>
    </form>
    </div>
    <div class="line" style="width: 130px"></div>
    <div class="table-responsive">
      <table class="table table-light">
        <tbody>
          <tr>
            <td>No.</td>
            <td>Kepala keluarga</td>
            <td></td>
          </tr>
        </tbody>
        @forelse($ks as $key => $k)
        <tr>
          <td>{{$ks->firstItem() + $key}}</td>
          <td>{{$k->name}}</td>
          <td>
          <a href="{{route('keluarga.detail',['id' => $k->id,'from' => 'ks'])}}" class="btn btn-sm btn-outline-primary">Detail</a>
          </td>
        </tr>
        @empty
        <tr>
          <td>Data kosong</td>
        </tr>
        @endforelse
      </table>
    </div>
  <div class="d-flex justify-content-center mb-5 mt-3">
    {{$ks->appends(request()->except('page'))->links('vendor.pagination.bootstrap-4')}}
  </div>
</div>
<!-- SECTION KS END -->
@endisset

@isset($pus)
<!-- SECTION PUS START -->
<div class="mt-5"></div>
<div id="section-kependudukan">
  <div class="d-flex justify-content-between align-items-center">
    <div class="section-title">PUS</div>
    <form action="" class="form d-flex align-items-center">
        <input type="text" name="q" class="form-control mr-3 w-75" placeholder="Cari Nama Keluarga">
        <button type="submit" class="btn btn-sm btn-primary">Cari</button>
    </form>
    </div>
    <div class="line" style="width: 170px"></div>
    <div class="table-responsive">
      <table class="table table-light">
        <tbody>
          <tr>
            <td>No.</td>
            <td>Kepala keluarga</td>
            <td></td>
          </tr>
        </tbody>
        @forelse($pus as $key => $k)
        <tr>
          <td>{{$pus->firstItem() + $key}}</td>
          <td>{{$k->name}}</td>
          <td>
          <a href="{{route('keluarga.detail',['id' => $k->id,'from' => 'pus'])}}" class="btn btn-sm btn-outline-primary">Detail</a>
          </td>
        </tr>
        @empty
        <tr>
          <td>Data kosong</td>
        </tr>
        @endforelse
      </table>
    </div>
  <div class="d-flex justify-content-center mb-5 mt-3">
    {{$pus->appends(request()->except('page'))->links('vendor.pagination.bootstrap-4')}}
  </div>
</div>
<!-- SECTION PUS END -->
@endisset

</div>

@endsection