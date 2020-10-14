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
<div class="jumbotron">
<div class="wrapper">
  <div class="container">
  <h1>{{$jumbotron->title}}</h1>
    <p>
    {{$jumbotron->description}}
    </p>
  </div>
</div>
</div>

<!-- Contents -->
<div class="container">
<!-- Section tentang -->
<div class="my-4">
  <marquee behavior="scroll" >
    {{$runingText->description}}
  </marquee>
</div>
<div class="mt-5"></div>
<div style="position: relative">
  <div
    class="target"
    style="position: absolute; top: -150px"
    id="section-tentang"
  ></div>
  <div class="section-title">Tentang</div>
  <div class="line" style="width: 130px"></div>
  <div class="row">
    <div class="col-lg-6">
      <p>
      {{$about[0]}}
      </p>
    </div>
    <div class="col-lg-6">
      {{$about[1]}}
    </div>
  </div>
</div>
<!-- Section berita -->
<div class="mt-5"></div>
<div id="section-news">
  <div class="section-title">Berita Terbaru</div>
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
</div>
<!-- Section agenda -->
<div class="mt-5"></div>
<div id="section-agenda">
    <div class="section-title">Agenda Terbaru</div>
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
</div>
<!-- Section agenda -->
<div class="mt-5"></div>
<div id="section-kepengurusan">
  <div class="section-title">Kepengurusan</div>
  <div class="line" style="width: 130px"></div>
  <div class="row">
  @foreach($kepengurusan as $k)
    <div class="col-md-3 col-6">
      <div class="card-profile bg-light mb-3">
      <img src="{{Storage::url($k->avatar)}}" alt="{{$k->avatar}}" />
        <div class="nama mt-2">{{$k->name}}</div>
        <div class="jabatan">{{$k->position}}</div>
      </div>
    </div>
  @endforeach
  </div>
</div>
<div class="mb-5"></div>
</div>

@endsection