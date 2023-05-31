   <!-- Left Panel -->
   <aside id="left-panel" class="left-panel">
        <nav class="navbar navbar-expand-sm navbar-default">
            <div id="main-menu" class="main-menu collapse navbar-collapse">
                <ul class="nav navbar-nav">
                    <li @if(Request::is('dashboard')) @class('active') @endif>
                        <a href="{{url('/dashboard')}}"><i class="menu-icon fa fa-laptop"></i>Dashboard </a>
                    </li> 

                    @if(auth()->user()->level != 'calon')
                    <li class="menu-item-has-children dropdown">
                        <a href="#" class="dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"> <i class="menu-icon fa fa-pencil"></i>Hasil Test</a>
                        <ul class="sub-menu children dropdown-menu">
                            <li><i class="fa fa-arrow-right"></i><a href="/hasil-test?filter=administrasi">Test Administrasi</a></li>
                            <li><i class="fa fa-arrow-right"></i><a href="/hasil-test?filter=pengetahuan">Test Pengetahuan</a></li>
                            <li><i class="fa fa-arrow-right"></i><a href="/hasil-test?filter=psikologi">Test Psikologi</a></li>
                            <li><i class="fa fa-arrow-right"></i><a href="/hasil-test?filter=wawancara">Test Wawancara</a></li>
                            <li><i class="fa fa-arrow-right"></i><a href="/hasil-test?filter=all">Semua test</a></li>
                        </ul>
                    </li>
                    @endif
                    @if(auth()->user()->level == 'sekretaris')
                    <li @if(Request::is('calon-perangkat')) @class('active') @endif>
                        <a href="{{url('/calon-perangkat')}}"><i class="menu-icon fa fa-users"></i>Calon Perangkat </a>
                    </li>
                    <li @if(Request::is('semua-dokumen')) @class('active') @endif>
                        <a href="{{url('/semua-dokumen')}}"><i class="menu-icon fa fa-file"></i>Semua Dokumen </a>
                    </li>
                    @elseif(auth()->user()->level == 'calon')
                    <li @if(Request::is('dokumen')) @class('active') @endif>
                        <a href="{{url('/dokumen')}}"><i class="menu-icon fa fa-file"></i>Dokumen </a>
                    </li>
                    @endif
                  
                </ul>
            </div><!-- /.navbar-collapse -->
        </nav>
    </aside>
    <!-- /#left-panel -->

        <!-- Right Panel -->
        <div id="right-panel" class="right-panel">
            <!-- Header-->
            <header id="header" class="header">
                <div class="top-left">
                    <div class="navbar-header">
                        <a class="navbar-brand" href="./">{{env('APP_NAME')}}</a>
                        <a class="navbar-brand hidden" href="./">{{env('APP_NAME')}}</a>
                        <a id="menuToggle" class="menutoggle"><i class="fa fa-bars"></i></a>
                    </div>
                </div>
                <div class="top-right">
                    <div class="header-menu">
                        <div class="header-left">
                           
    
    
                          
    
                        <div class="user-area dropdown float-right">
                            <a href="#" class="dropdown-toggle active" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <img class="user-avatar rounded-circle" src="https://ui-avatars.com/api/?background=0D8ABC&color=fff&name={{auth()->user()->name}}" alt="{{auth()->user()->name}}">
                            </a>
    
                            <div class="user-menu dropdown-menu">
                                <a class="nav-link" href="/profile"><i class="fa fa- user"></i>My Profile</a>
                               
                                <a class="nav-link" href="/logout"><i class="fa fa-power -off"></i>Logout</a>
                            </div>
                        </div>
    
                    </div>
                </div>
            </header>
            <!-- /#header -->