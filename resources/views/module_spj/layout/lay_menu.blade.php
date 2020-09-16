@php
$help = new App\Help;
@endphp
<div class="page-sidebar menu-compact" id="sidebar">
    <!-- Page Sidebar Header-->
    <div class="sidebar-header-wrapper">
        <input type="text" class="searchinput" />
        <i class="searchicon fa fa-search"></i>
        <div class="searchhelper">Search Reports, Charts, Emails or Notifications</div>
    </div>
    <!-- /Page Sidebar Header -->
    <!-- Sidebar Menu -->
    <ul class="nav sidebar-menu">
        <!--Dashboard-->
        @if(session('user')['role'] == "dinas")
        <li class="{{$help->set_active('dinas.dashboard')}}">
            <a href="{{route('dinas.dashboard')}}">
                <i class="menu-icon glyphicon glyphicon-home"></i>
                <span class="menu-text"> Beranda </span>
            </a>
        </li>
        <!--UI Elements-->
        <li class="{{$help->set_active2(['dinas.manajemen.rka,dinas.manajemen.pejabat'])}}">
            <a href="#" class="menu-dropdown">
                <i class="menu-icon fa fa-desktop"></i>
                <span class="menu-text"> Manajemen </span>

                <i class="menu-expand"></i>
            </a>

            <ul class="submenu">
                <li class="{{$help->set_active('dinas.manajemen.rka')}}">
                    <a href="{{route('dinas.manajemen.rka')}}">
                        <span class="menu-text">RKA</span>
                    </a>
                </li>
                <li class="{{$help->set_active('dinas.manajemen.pejabat')}}">
                    <a href="{{route('dinas.manajemen.pejabat')}}">
                        <span class="menu-text">Pejabat Dinas</span>
                    </a>
                </li>
            </ul>
        </li>
        @elseif(session('user')['role']=="admindinas")
        <li class="{{$help->set_active('admindinas.dashboard')}}">
            <a href="{{route('admindinas.dashboard')}}">
                <i class="menu-icon glyphicon glyphicon-home"></i>
                <span class="menu-text"> Beranda </span>
            </a>
        </li>
        @if (session('user')['status']==6)
        <li class="{{$help->set_active2(['dinas.manajemen.rka'])}}">
            <a href="#" class="menu-dropdown">
                <i class="menu-icon fa fa-desktop"></i>
                <span class="menu-text"> Penatausahaan </span>

                <i class="menu-expand"></i>
            </a>

            <ul class="submenu">
                <li class="{{$help->set_active('admindinas.penatausahaan')}}">
                    <a href="{{route('admindinas.penatausahaan')}}">
                        <span class="menu-text">SPJ</span>
                    </a>
                </li>
                <li class="">
                    <a href="#">
                        <span class="menu-text">Cetak</span>
                    </a>
                </li>
            </ul>
        </li>
        @endif
        @endif

    </ul>
    <!-- /Sidebar Menu -->
</div>