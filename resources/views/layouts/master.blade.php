<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">



    <!-- Custom fonts for this template-->
    <link href="{{asset('vendor/fontawesome-free/css/all.min.css')}}" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="{{asset('css/sb-admin-2.min.css')}}" rel="stylesheet">

    <!-- Custom styles for this page -->
    <link href="{{asset('vendor/datatables/dataTables.bootstrap4.min.css')}}" rel="stylesheet">

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">


            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="index.html">
                <div class="sidebar-brand-icon rotate-n-15">
                    <i class="fas fa-laugh-wink"></i>
                </div>
                <div class="sidebar-brand-text mx-3">Master Data Suncons </div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">

            <!-- Nav Item - Dashboard -->
            <li class="nav-item {{ request()->is('home') ? 'active' : '' }}">
                <a class="nav-link" href="{{ url('home') }}">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading-->
            <div class="sidebar-heading">
                Daftar Pengalaman
            </div>
            <li class="nav-item {{ request()->is('perencanaan') ? 'active' : '' }}">
                <a class="nav-link" href="{{route('perencanaan.index')}}">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Perencanaan</span></a>
            </li>

            <li class="nav-item {{ request()->is('pengawasan') ? 'active' : '' }}">
                <a class="nav-link" href="{{route('pengawasan.index')}}">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Pengawasan</span></a>
            </li>

            <li class="nav-item {{ request()->is('masterplan') ? 'active' : '' }}">
                <a class="nav-link" href="{{route('masterplan.index')}}">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Masterplan</span></a>
            </li>

            <li class="nav-item {{ request()->is('study') ? 'active' : '' }}">
                <a class="nav-link" href="{{route('study.index')}}">
                    <i class="fas fa-fw fa-chart-area"></i>
                    <span>Studi</span></a>
            </li>

            {{-- Menu Drop Down
        
      <!-- Nav Item - Suncon -->
      <li class="nav-item {{(request ()->is('perencanaan')) || (request ()->is('pengawasan')) || (request ()->is('suncon-masterplan')) ? 'active' : '' }}">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
          <i class="fas fa-fw fa-book"></i>
          <span>SUN Cons.</span>
        </a>
        <div id="collapseTwo" class="collapse {{(request ()->is('suncon-perencanaan')) || (request ()->is('suncon-pengawasan')) || (request ()->is('suncon-masterplan')) ? 'show' : '' }}" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Components:</h6>
            <a class="collapse-item {{(request ()->is('suncon-perencanaan')) ? 'active' : '' }}" href="suncon-perencanaan">Perencanaan</a>
            <a class="collapse-item {{(request ()->is('suncon-pengawasan')) ? 'active' : '' }}" href="suncon-pengawasan">Pengawasan</a>
            <a class="collapse-item {{(request ()->is('suncon-masterplan')) ? 'active' : '' }}" href="suncon-masterplan">MasterPlan</a>
          </div>
        </div>
      </li>

      <!-- Nav Item - Mahameru -->
      <li class="nav-item {{(request ()->is('mahameru-perencanaan')) || (request ()->is('mahameru-pengawasan')) || (request ()->is('mahameru-masterplan')) ? 'active' : '' }}">
        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
          <i class="fas fa-fw fa-wrench"></i>
          <span>Mahameru</span>
        </a>
        <div id="collapseUtilities" class="collapse {{(request ()->is('mahameru-perencanaan')) || (request ()->is('mahameru-pengawasan')) || (request ()->is('mahameru-masterplan')) ? 'show' : '' }}" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
          <div class="bg-white py-2 collapse-inner rounded">
            <h6 class="collapse-header">Custom Utilities:</h6>
            <a class="collapse-item {{(request ()->is('mahameru-perencanaan')) ? 'active' : '' }}" href="mahameru-perencanaan">Perencanaan</a>
            <a class="collapse-item {{(request ()->is('mahameru-pengawasan')) ? 'active' : '' }}" href="mahameru-pengawasan">Pengawasan</a>
            <a class="collapse-item {{(request ()->is('mahameru-masterplan')) ? 'active' : '' }}" href="mahameru-masterplan">MasterPlan</a>
          </div>
        </div>
      </li> --}}

            <!-- Divider -->
            <hr class="sidebar-divider">
            <!-- Heading -->
            <div class="sidebar-heading">
                Dokumen
            </div>
            
            <li class="nav-item {{ request()->is('legal') ? 'active' : '' }}">
                <a class="nav-link" href="{{route('legal.index')}}">
                    <i class="fas fa-fw fas fa-file-alt"></i>
                    <span>Legal</span></a>
            </li>

            <li class="nav-item {{ request()->is('peralatan') ? 'active' : '' }}">
                <a class="nav-link" href="{{route('peralatan.index')}}">
                    <i class="fas fa-fw fas fa-hammer"></i>
                    <span>Peralatan</span></a>
            </li>


            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Kepegawaian & Tenaga Ahli
            </div>

            <!-- Nav Item - Pages Kepegawaian -->
            
            <li class="nav-item {{(request ()->is('tenaga_ahli')) || (request ()->is('keahlian')) || (request ()->is('pengalaman')) ? 'active' : '' }}">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseOne" aria-expanded="true" aria-controls="collapseTwo">
                <i class="fas fa-user-tie"></i>
                <span>Tenaga Ahli</span>
                </a>
                <div id="collapseOne" class="collapse {{(request ()->is('tenaga_ahli')) || (request ()->is('pengalaman')) || (request ()->is('keahlian')) ? 'show' : '' }}" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Components:</h6>
                    <a class="collapse-item {{(request ()->is('tenaga_ahli')) ? 'active' : '' }}" href="{{route('tenaga_ahli.index')}}">Biodata</a>
                    <a class="collapse-item {{(request ()->is('keahlian')) ? 'active' : '' }}" href="#">Sertifikat Keahlian</a>
                    <a class="collapse-item {{(request ()->is('pengalaman')) ? 'active' : '' }}" href="#">Pengalaman</a>
                </div>
                </div>
            </li>
            <li class="nav-item {{ request()->is('pegawai') ? 'active' : '' }}">
                <a class="nav-link" href="{{route('pegawai.index')}}">
                <i class="fas fa-people-carry"></i>
                    <span> Pegawai / Pendukung</span></a>
            </li>
            
            <!-- Heading -->
            <div class="sidebar-heading">
                Lain-Lain
            </div>
            <!-- History -->
            {{-- <li class="nav-item {{ request()->is('history') ? 'active' : '' }}">
                <a class="nav-link" href="history">
                    <i class="fas fa-fw fa-users"></i>
                    <span> History</span></a>
            </li> --}}

            <!-- Nomer Dokumen -->
            {{-- <li class="nav-item {{ request()->is('doc') ? 'active' : '' }}">
                <a class="nav-link" href="doc">
                    <i class="fas fa-fw fa-users"></i>
                    <span> Nomor Dokumen</span></a>
            </li> --}}

            
            <!-- Nav Item - Suncon -->
            <li class="nav-item {{(request ()->is('bangunan')) || (request ()->is('ska')) || (request ()->is('ska')) ? 'active' : '' }}">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                <i class="fas fa-radiation"></i>
                <span>Data Content Update</span>
                </a>
                <div id="collapseTwo" class="collapse {{(request ()->is('bangunan')) || (request ()->is('ska')) || (request ()->is('fase')) || (request ()->is('role'))|| (request ()->is('user'))? 'show' : '' }}" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                <div class="bg-white py-2 collapse-inner rounded">
                    <h6 class="collapse-header">Components:</h6>
                    <a class="collapse-item {{(request ()->is('bangunan')) ? 'active' : '' }}" href="{{route('bangunan.index')}}">Bangunan</a>
                    <a class="collapse-item {{(request ()->is('ska')) ? 'active' : '' }}" href="{{route('ska.index')}}">Sertifikat Keahlian</a>
                    <a class="collapse-item {{(request ()->is('fase')) ? 'active' : '' }}" href="{{route('fase.index')}}">Fase Lelang</a>
                    <a class="collapse-item {{(request ()->is('role')) ? 'active' : '' }}" href="{{route('role.index')}}">Jabatan</a>
                    <a class="collapse-item {{(request ()->is('user')) ? 'active' : '' }}" href="{{route('user.index')}}">User</a>
                </div>
                </div>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <!-- Sidebar Toggler (Sidebar) -->
            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>

        </ul>
        <!-- End of Sidebar -->

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Topbar -->
                <nav class="navbar navbar-expand navbar-light bg-white topbar mb-4 static-top shadow">

                    <!-- Sidebar Toggle (Topbar) -->
                    <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                        <i class="fa fa-bars"></i>
                    </button>

                    <!-- Topbar Search -->
                    <form
                        class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                        <div class="input-group">
                            <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..."
                                aria-label="Search" aria-describedby="basic-addon2">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="button">
                                    <i class="fas fa-search fa-sm"></i>
                                </button>
                            </div>
                        </div>
                    </form>

                    <!-- Topbar Navbar -->
                    <ul class="navbar-nav ml-auto">

                        <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                        <li class="nav-item dropdown no-arrow d-sm-none">
                            <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-search fa-fw"></i>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in"
                                aria-labelledby="searchDropdown">
                                <form class="form-inline mr-auto w-100 navbar-search">
                                    <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small"
                                            placeholder="Search for..." aria-label="Search"
                                            aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                                <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </li>

                        {{-- <!-- Nav Item - Alerts -->
                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-bell fa-fw"></i>
                                <!-- Counter - Alerts -->
                                <span class="badge badge-danger badge-counter">3+</span>
                            </a>
                            <!-- Dropdown - Alerts -->
                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="alertsDropdown">
                                <h6 class="dropdown-header">
                                    Alerts Center
                                </h6>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-primary">
                                            <i class="fas fa-file-alt text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 12, 2019</div>
                                        <span class="font-weight-bold">A new monthly report is ready to download!</span>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-success">
                                            <i class="fas fa-donate text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 7, 2019</div>
                                        $290.29 has been deposited into your account!
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="mr-3">
                                        <div class="icon-circle bg-warning">
                                            <i class="fas fa-exclamation-triangle text-white"></i>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="small text-gray-500">December 2, 2019</div>
                                        Spending Alert: We've noticed unusually high spending for your account.
                                    </div>
                                </a>
                                <a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
                            </div>
                        </li>

                        <!-- Nav Item - Messages -->
                        <li class="nav-item dropdown no-arrow mx-1">
                            <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <i class="fas fa-envelope fa-fw"></i>
                                <!-- Counter - Messages -->
                                <span class="badge badge-danger badge-counter">7</span>
                            </a>
                            <!-- Dropdown - Messages -->
                            <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="messagesDropdown">
                                <h6 class="dropdown-header">
                                    Message Center
                                </h6>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="https://source.unsplash.com/fn_BT9fwg_E/60x60"
                                            alt="">
                                        <div class="status-indicator bg-success"></div>
                                    </div>
                                    <div class="font-weight-bold">
                                        <div class="text-truncate">Hi there! I am wondering if you can help me with a
                                            problem I've been having.</div>
                                        <div class="small text-gray-500">Emily Fowler · 58m</div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="https://source.unsplash.com/AU4VPcFN4LE/60x60"
                                            alt="">
                                        <div class="status-indicator"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate">I have the photos that you ordered last month, how
                                            would you like them sent to you?</div>
                                        <div class="small text-gray-500">Jae Chun · 1d</div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="https://source.unsplash.com/CS2uCrpNzJY/60x60"
                                            alt="">
                                        <div class="status-indicator bg-warning"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate">Last month's report looks great, I am very happy with
                                            the progress so far, keep up the good work!</div>
                                        <div class="small text-gray-500">Morgan Alvarez · 2d</div>
                                    </div>
                                </a>
                                <a class="dropdown-item d-flex align-items-center" href="#">
                                    <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="https://source.unsplash.com/Mv9hjnEUHR4/60x60"
                                            alt="">
                                        <div class="status-indicator bg-success"></div>
                                    </div>
                                    <div>
                                        <div class="text-truncate">Am I a good boy? The reason I ask is because someone
                                            told me that people say this to all dogs, even if they aren't good...</div>
                                        <div class="small text-gray-500">Chicken the Dog · 2w</div>
                                    </div>
                                </a>
                                <a class="dropdown-item text-center small text-gray-500" href="#">Read More Messages</a>
                            </div>
                        </li> --}}

                        <div class="topbar-divider d-none d-sm-block"></div>

                        <!-- Nav Item - User Information -->
                        <li class="nav-item dropdown no-arrow">
                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button"
                                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                <span class="mr-2 d-none d-lg-inline text-gray-600 small"> {{ Auth::user()->name }}</span>
                                <img class="img-profile rounded-circle"
                                    src="https://source.unsplash.com/QAB-WJcbgJk/60x60">
                            </a>
                            <!-- Dropdown - User Information -->
                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in"
                                aria-labelledby="userDropdown">
                                {{-- <a class="dropdown-item" href="#">
                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Profile
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Settings
                                </a>
                                <a class="dropdown-item" href="#">
                                    <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Activity Log
                                </a> --}}
                                <div class="dropdown-divider"></div>
                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                    Logout
                                </a>
                            </div>
                        </li>

                    </ul>

                </nav>
                <!-- End of Topbar -->

                <!-- Begin Page Content -->
                
                @yield('content')
                
                <!-- End of Main Content -->

                <!-- Footer -->
                <footer class="sticky-footer bg-white">
                    <div class="container my-auto">
                        <div class="copyright text-center my-auto">
                            <span>Copyright &copy; <a href="http://lokalanz.com/">PT. Surya Unggul Nusa Cons.</a> 2021, Product Version
                                v1.2</span>
                        </div>
                    </div>
                </footer>
                <!-- End of Footer -->

            </div>
            <!-- End of Content Wrapper -->

        </div>
        <!-- End of Page Wrapper -->

        <!-- Scroll to Top Button-->
        <a class="scroll-to-top rounded" href="#page-top">
            <i class="fas fa-angle-up"></i>
        </a>

        <!-- Logout Modal-->
        <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
            aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">Yakin Ingin Mengakhiri Sesi Login?</div>
                    <div class="modal-footer">
                        {{-- <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                        <a class="btn btn-primary" href="login.html">Logout</a> --}}

                        <div>
                            <a class="dropdown-item" href="{{ route('logout') }}"
                               onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                                {{ __('Logout') }}
                            </a>

                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </div>

        <!-- Bootstrap core JavaScript-->
        <script src="{{asset('vendor/jquery/jquery.min.js')}}"></script>
        <script src="{{asset('vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>

        <!-- Core plugin JavaScript-->
        <script src="{{asset('vendor/jquery-easing/jquery.easing.min.js')}}"></script>

        <!-- Custom scripts for all pages-->
        <script src="{{asset('js/sb-admin-2.min.js')}}"></script>

        <!-- Page level plugins -->
        <script src="{{asset('vendor/chart.js/Chart.min.js')}}"></script>
        <script src="{{asset('vendor/datatables/jquery.dataTables.min.js')}}"></script>
        <script src="{{asset('vendor/datatables/dataTables.bootstrap4.min.js')}}"></script>


        <!-- Page level custom scripts -->
        <script src="{{asset('js/demo/chart-area-demo.js')}}"></script>
        <script src="{{asset('js/demo/chart-pie-demo.js')}}"></script>
        <script src="{{asset('js/demo/datatables-demo.js')}}"></script>

        <script>
            var loadFile = function(event) {
              var output = document.getElementById('output');
              output.src = URL.createObjectURL(event.target.files[0]);
              output.onload = function() {
                URL.revokeObjectURL(output.src)
              }
            };
        </script>
</body>

</html>
