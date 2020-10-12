<!DOCTYPE html>
<html lang="id">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
     <title>{{$title->title ?? 'Portal Purwokinanti'}}</title>
    <!-- bootstrap style -->
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
      integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z"
      crossorigin="anonymous"
    />
    <link rel="shortcut icon" href="{{Storage::url($favicon->image)}}" type="image/x-icon">
    <!-- My own style -->
    <link rel="stylesheet" href="{{asset('css/app.css')}}" />
  </head>
  <body>

    {{-- Navbar Start --}}
    @include('public.layouts.navbar')
    {{-- Navbar End --}}

    {{-- Print Message START--}}
    {!!session()->get('message')!!}
    {{-- Print Message END --}}
    
    {{-- Content START--}}
    @yield('content')
    {{-- Content END--}}
  </body>

   {{-- Navbar Start --}}
   @include('public.layouts.footer')
   {{-- Navbar End --}}

   {{-- Script Start --}}
  <script
    src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
    crossorigin="anonymous"></script>
  <script
    src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js"
    integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN"
    crossorigin="anonymous"></script>
  <script
    src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"
    integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV"
    crossorigin="anonymous"></script>
  <!-- My own script -->
  <script src="{{asset('js/app.js')}}"></script>
  {{-- Script End --}}

</html>
