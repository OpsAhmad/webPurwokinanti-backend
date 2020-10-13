<header class="topbar">
    <nav class="navbar top-navbar navbar-expand-md navbar-light">
        <!-- ============================================================== -->
        <!-- Logo -->
        <!-- ============================================================== -->
        <div class="navbar-header">
            <a class="navbar-brand p-lg-4" href="">
                <!-- Logo icon --><b>
                    <!--You can put here icon as well // <i class="wi wi-sunset"></i> //-->
                    <!-- Dark Logo icon -->
                    <img src="{{asset('vendor/admin-wrap')}}/images/logo-icon.png" alt="homepage" class="dark-logo w-100" />
                    <!-- Light Logo icon -->
                </b>
            </a>
        </div>
        <!-- ============================================================== -->
        <!-- End Logo -->
        <!-- ============================================================== -->
        <div class="navbar-collapse">
            <!-- ============================================================== -->
            <!-- toggle and nav items -->
            <!-- ============================================================== -->
            <ul class="navbar-nav mr-auto">
                <li class="nav-item"> <a class="nav-link nav-toggler hidden-md-up waves-effect waves-dark"
                        href="javascript:void(0)"><i class="fa fa-bars"></i></a> </li>
                <!-- ============================================================== -->
                <!-- Search -->
                <!-- ============================================================== -->
            </ul>
            <!-- ============================================================== -->
            <!-- User profile and search -->
            <!-- ============================================================== -->
            <ul class="navbar-nav my-lg-0">
                <!-- ============================================================== -->
                <!-- Profile -->
                <!-- ============================================================== -->
                <li class="nav-item u-pro">
                <a class="nav-link waves-effect waves-dark profile-pic" href="{{route('admin.profile',['username'=>Auth::user()->username])}}"><img
                src="{{Storage::url(Auth::user()->avatar)}}" alt="user" class="" /> <span
                            class="hidden-md-down">{{Auth::user()->username}} &nbsp;</span> </a>
                </li>
                <li class="nav-item">
                <a class="nav-link waves-effect waves-dark text-secondary text-small" href="{{route('admin.logout')}}"><span style="font-size: 14px;">Logout</span></a>
                </li>
            </ul>
        </div>
    </nav>
</header>   