<!--WARGA--->
@if(Auth::user()->access_id == 2)
<ul class="nav" id="side-menu">
    <li class="user-pro">
        <a href="javascript:void(0)" class="waves-effect"><img src="{{ asset('admin-css/plugins/images/users/varun.jpg') }}" alt="user-img" class="img-circle"> <span class="hide-menu"> {{ Auth::user()->name }}<span class="fa arrow"></span></span>
        </a>
        <ul class="nav nav-second-level collapse" aria-expanded="false" style="height: 0px;">
            <li><a href="{{ url('logout') }}"><i class="fa fa-power-off"></i> <span class="hide-menu">Logout</span></a></li>
        </ul>
    </li>
    <li> <a href="{{ route('warga.dashboard') }}" class="waves-effect active"><i class="mdi mdi-av-timer fa-fw" data-icon="v"></i>Dashboard </a></li>
    <li class="devider"></li>
    <li><a href="javascript:void(0)" class="waves-effect"><i class="mdi mdi-apps fa-fw"></i> <span class="hide-menu">Data Master<span class="fa arrow"></span></span></a>
        <ul class="nav nav-second-level">
            <li> <a href="{{ route('rekening-bank-user.index') }}" class="waves-effect"><i class="mdi mdi-calendar-check fa-fw"></i> <span class="hide-menu">Rekening Bank</span></a></li>
        </ul>
    </li>
    <li>
        <a href="{{ route('warga.iuran.index') }}" class="waves-effect"><i class="mdi mdi-apps fa-fw"></i> Iuran</a>
    </li>
    <li class="last-nav">
        <a href="{{ route('warga.surat-pengantar.index') }}" class="waves-effect"><i class="mdi mdi-account-card-details fa-fw"></i> Surat Pengantar</a>
    </li>
</ul>
@endif

<!--BENDAHARA--->
@if(Auth::user()->access_id == 3)
<ul class="nav" id="side-menu">
    <li class="user-pro">
        <a href="javascript:void(0)" class="waves-effect"><img src="{{ asset('admin-css/plugins/images/users/varun.jpg') }}" alt="user-img" class="img-circle"> <span class="hide-menu"> {{ Auth::user()->name }}<span class="fa arrow"></span></span>
        </a>
        <ul class="nav nav-second-level collapse" aria-expanded="false" style="height: 0px;">
            <li><a href="{{ url('logout') }}"><i class="fa fa-power-off"></i> <span class="hide-menu">Logout</span></a></li>
        </ul>
    </li>
    <li> <a href="{{ url('anggota') }}" class="waves-effect active"><i class="mdi mdi-av-timer fa-fw" data-icon="v"></i> <span class="hide-menu"> Dashboard <span class="fa arrow"></span> <span class="label label-rouded label-inverse pull-right">4</span></span></a>
    </li>
    <li class="last-nav"><a href="javascript:void(0)" class="waves-effect"><i class="mdi mdi-account-card-details fa-fw"></i> <span class="hide-menu">IURAN<span class="fa arrow"></span></span></a>
    </li>
</ul>
@endif

<!--RT--->
@if(Auth::user()->access_id == 4)
<ul class="nav" id="side-menu">
    <li class="user-pro">
        <a href="javascript:void(0)" class="waves-effect"><img src="{{ asset('admin-css/plugins/images/users/varun.jpg') }}" alt="user-img" class="img-circle"> <span class="hide-menu"> {{ Auth::user()->name }}<span class="fa arrow"></span></span>
        </a>
        <ul class="nav nav-second-level collapse" aria-expanded="false" style="height: 0px;">
            <li><a href="{{ url('logout') }}"><i class="fa fa-power-off"></i> <span class="hide-menu">Logout</span></a></li>
        </ul>
    </li>
    <li> 
        <a href="{{ route('rt.dashboard') }}" class="waves-effect active">
            <i class="mdi mdi-av-timer fa-fw" data-icon="v"></i> Dashboard </a></li>
    <li>
        <a href="{{ route('rt.warga.index') }}" class="waves-effect"><i class="mdi mdi-account fa-fw"></i> DATA WARGA</a>
    </li>
    <li>
        <a href="{{ route('rt.iuran.index') }}" class="waves-effect"><i class="mdi mdi-account-card-details fa-fw"></i> IURAN</a>
    </li>
    <li class="last-nav">
        <a href="{{ route('rt.surat-pengantar.index') }}" class="waves-effect"><i class="mdi mdi-account-card-details fa-fw"></i> SURAT PENGANTAR</a>
    </li>
</ul>
@endif