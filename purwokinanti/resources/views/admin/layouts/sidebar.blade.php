<aside class="left-sidebar mt-lg-5 mt-0">
    <!-- Sidebar scroll-->
    <div class="scroll-sidebar">
        <!-- Sidebar navigation-->
        <nav class="sidebar-nav">
            <ul id="sidebarnav">
                {{-- Dashboard --}}
                 <li> <a class="waves-effect waves-dark" href="{{route('admin.index')}}" aria-expanded="false"><i
                            class="fa fa-tachometer"></i><span class="hide-menu">Dashboard</span></a>
                </li>
                {{-- berita --}}
                  <li> <a class="waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i
                            class="fa fa-globe"></i> <span class="hide-menu">Berita</span></a>
                            <ul>
                                <li> <a class="waves-effect waves-dark" href="{{route('admin.berita')}}" aria-expanded="false"><i
                                    class="fa fa-list mr-1"></i><span class="hide-menu">Daftar berita</span></a>
                                </li>
                                <li> <a class="waves-effect waves-dark" href="{{route('admin.berita.add')}}" aria-expanded="false"><i
                                    class="fa fa-plus mr-1"></i><span class="hide-menu">Tambah berita</span></a>
                                </li>
                            </ul>
                </li>
                {{-- agenda --}}
            <li> <a class="waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i
                            class="fa fa-calendar"></i> <span class="hide-menu">Agenda</span></a>
                            <ul>
                                <li> <a class="waves-effect waves-dark" href="{{route('admin.agenda')}}" aria-expanded="false"><i
                                    class="fa fa-list mr-1"></i><span class="hide-menu">Daftar agenda</span></a>
                                </li>
                                <li> <a class="waves-effect waves-dark" href="{{route('admin.agenda.add')}}" aria-expanded="false"><i
                                    class="fa fa-plus mr-1"></i><span class="hide-menu">Tambah agenda</span></a>
                                </li>
                            </ul>
                </li>
                {{-- Kependudukan --}}
                <li> <a class="waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><i
                            class="fa fa-users"></i> <span class="hide-menu">Kependudukan</span></a>
                            <ul>
                            <li> <a class="waves-effect waves-dark" href="{{route('admin.kependudukan.keluarga')}}" aria-expanded="false"><i
                                    class="fa fa-list mr-1"></i><span class="hide-menu">Daftar keluarga</span></a>
                                </li>
                                <li> <a class="waves-effect waves-dark" href="{{route('admin.kependudukan.penduduk')}}" aria-expanded="false"><i
                                    class="fa fa-list mr-1"></i><span class="hide-menu">Daftar penduduk</span></a>
                                </li>
                                <li> <a class="waves-effect waves-dark" href="{{route('admin.kependudukan.keluarga.add')}}" aria-expanded="false"><i
                                    class="fa fa-plus mr-1"></i><span class="hide-menu">Tambah keluarga</span></a>
                                </li>
                            </ul>
                </li>
                {{-- Kepengurusan --}}
                <li> <a class="waves-effect waves-dark" href="{{route('admin.kepengurusan')}}" aria-expanded="false"><i
                            class="fa fa-user-tie"></i> <span class="hide-menu">Kepengurusan</span></a>
                            <ul>
                                <li> <a class="waves-effect waves-dark" href="{{route('admin.kepengurusan')}}" aria-expanded="false"><i
                                    class="fa fa-list mr-1"></i><span class="hide-menu">Daftar pengurus</span></a>
                                </li>
                                <li> <a class="waves-effect waves-dark" href="{{route('admin.kepengurusan.add')}}" aria-expanded="false"><i
                                    class="fa fa-plus mr-1"></i><span class="hide-menu">Tambah pengurus</span></a>
                                </li>
                            </ul>
                </li>
                {{--  --}}
                <li> <a class="waves-effect waves-dark" href="pages-blank.html" aria-expanded="false"><i
                            class="fa fa-pen"></i><span class="hide-menu">Edit halaman</span></a>
                            <ul>
                                   <li> <a class="waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><span class="hide-menu">Umum</span></a>
                                    <ul>
                                        <li> <a class="waves-effect waves-dark" href="{{route('admin.halaman.title')}}" aria-expanded="false"><span class="hide-menu">Judul Halaman</span></a>
                                        </li>
                                        <li> <a class="waves-effect waves-dark" href="{{route('admin.halaman.favicon')}}" aria-expanded="false"><span class="hide-menu">Logo Web</span></a>
                                        </li>
                                        <li> <a class="waves-effect waves-dark" href="{{route('admin.halaman.footer')}}" aria-expanded="false"><span class="hide-menu">Contact Web</span></a>
                                        </li>
                                        <li> <a class="waves-effect waves-dark" href="{{route('admin.halaman.runningText')}}" aria-expanded="false"><span class="hide-menu">Running Text</span></a>
                                        </li>
                                    </ul>
                                </li>
                                <li> <a class="waves-effect waves-dark" href="javascript:void(0)" aria-expanded="false"><span class="hide-menu">Beranda</span></a>
                                    <ul>
                                        <li> <a class="waves-effect waves-dark" href="{{route('admin.halaman.beranda.jumbotron')}}" aria-expanded="false"><span class="hide-menu">Section Jumbotron</span></a>
                                        </li>
                                        <li> <a class="waves-effect waves-dark" href="{{route('admin.halaman.beranda.tentang')}}" aria-expanded="false"><span class="hide-menu">Section Tentang</span></a>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
            </ul>
            <div class="mt-5"></div>
        </nav>
        <!-- End Sidebar navigation -->
    </div>
    <!-- End Sidebar scroll-->
</aside>