<nav class="nav" id="navbar">
    <div class="container-nav">
      <a href="/" class="menu-link"><div class="logo">Purwokinanti</div></a>
      <ul class="menu nav-small-hide" id="menu">
        <a href="{{route('berita')}}" class="menu-link @if(request()->is('berita')) active @endif"><li>Berita</li></a>
        <a href="{{route('agenda')}}" class="menu-link @if(request()->is('agenda')) active @endif"><li>Agenda</li></a>
        <a href="{{route('kependudukan')}}" class="menu-link @if(request()->is('kependudukan')) active @endif"><li>Kependudukan</li></a>
        <a href="{{route('kb')}}" class="menu-link @if(request()->is('kb')) active @endif"><li>KB</li></a>
        <a href="{{route('ks')}}" class="menu-link @if(request()->is('ks')) active @endif"><li>KS</li></a>
        <a href="{{route('pus')}}" class="menu-link @if(request()->is('pus')) active @endif"><li>PUS</li></a>
      </ul>
      <div class="hamburger" onclick="navbar_responsive()">
        <div id="h-one"></div>
        <div id="h-two"></div>
        <div id="h-three"></div>
      </div>
    </div>
  </nav>