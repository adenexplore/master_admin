<!DOCTYPE html>
<html lang="en">

<head>  
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Aplikasi Web |@yield('title')</title>

    <!-- Custom fonts for this template-->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <link href="{{ asset('assets2/vendor/fontawesome-free/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i" rel="stylesheet">
    {{-- <script src="https://cdn.tiny.cloud/1/i62phsrg4132j4da2r91942mcx3wfzykskhlfuoqa7khhqn5/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script> --}}
    <!-- Custom styles for this template-->
    <link href="{{ asset('assets2/css/sb-admin-2.min.css') }}" rel="stylesheet">
    <link href="{{ asset('assets2/vendor/datatables/dataTables.bootstrap4.min.css"') }}" rel="stylesheet">
    <link rel=icon href="data:image/png;base64,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">
    <style>
        
    </style>

</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <!-- Sidebar -->
        <ul class="navbar-nav bg-gradient-dark sidebar sidebar-dark accordion" id="accordionSidebar">

            <!-- Sidebar - Brand -->
            <a class="sidebar-brand d-flex align-items-center justify-content-center" href="/dashboard">
                {{-- <div class="sidebar-brand-icon rotate-n-10">
                    <img src="#" alt="icon" width="50px">
                </div> --}}
                <div class="sidebar-brand-text mx-3">Web Aplication</div>
            </a>

            <!-- Divider -->
            <hr class="sidebar-divider my-0">
            <!-- Nav Item - Dashboard -->
            <li class="{{ request()->is(strtolower(Auth::user()->role)) ? 'active' : '' }} nav-item">
                <a class="nav-link" href="/dashboard">
                    <i class="fas fa-fw fa-tachometer-alt"></i>
                    <span>Dashboard {{ Auth::user()->role }}</span></a>
            </li>

            <!-- Divider -->
            <hr class="sidebar-divider">

            <!-- Heading -->
            <div class="sidebar-heading">
                Main Navigation
            </div>
            <!-- Nav Item - Pages Collapse Menu -->
            @if(Auth::user()->role !='User')
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#userlist" aria-expanded="true" aria-controls="collapseone">
                    <i class="fa-solid fa-book"></i>
                    <span>User List </span>
                </a>
                <div id="userlist" class="collapse" aria-labelledby="headingone" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">User LIst</h6>
                        <a class="collapse-item" href="/userList">Lihat User</a>
                        {{-- <a class="collapse-item" href="/tamu">Tamu In-House</a> --}}
                    </div>
                </div>
            </li>
            @endif
            {{-- @if(Auth::user()->role !='Admin') --}}
            <li class="nav-item">
                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#tiket" aria-expanded="true" aria-controls="collapseone">
                    <i class="fa-solid fa-ticket"></i>
                    <span>Data Management </span>
                </a>
                <div id="tiket" class="collapse" aria-labelledby="headingone" data-parent="#accordionSidebar">
                    <div class="bg-white py-2 collapse-inner rounded">
                        <h6 class="collapse-header">Custom Data</h6>
                        <a class="collapse-item" href="#">Lihat Data Management</a>
                        @if(Auth::user()->role !='User')
                            <a class="collapse-item" href="/Management/Countries">Lihat Data Countries</a>
                            <a class="collapse-item" href="/Management/Province">Lihat Data Province</a>
                            <a class="collapse-item" href="/Management/City">Lihat Data City</a>
                        @endif
                        {{-- <a class="collapse-item" href="/tamu">Tamu In-House</a> --}}
                    </div>
                </div>
            </li>
            {{-- @endif --}}
            <li class="nav-item">
                <a class="nav-link" href="{{ route('logout') }}" data-toggle="modal" data-target="#logoutModal">
                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                    <span>Logout</span></a>
            </li>
            <!-- Divider -->
            <hr class="sidebar-divider d-none d-md-block">

            <div class="text-center d-none d-md-inline">
                <button class="rounded-circle border-0" id="sidebarToggle"></button>
            </div>
        </ul>

        

        <!-- Logout Modal-->
        <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">×</span>
                        </button>
                    </div>
                    <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                    <div class="modal-footer">
                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                        <a class="btn btn-primary" href="{{ route('logout') }}">Logout</a>
                    </div>
                </div>
            </div>
        </div>
        <!-- End of Sidebar -->

        

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">
                <br>
                <div class="container">
                    <section class="content">
                        @yield('content')
                    </section>
                </div>
            </div>
            <!-- End of Main Content -->
            <!-- Footer -->
            <footer class="sticky-footer bg-white">
                <div class="container my-auto">
                    <div class="copyright text-center my-auto">
                        <span>Copyright &copy; web 2023 </span>
                    </div>
                </div>
            </footer>
        </div>
    </div>


    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>

    <!-- Bootstrap core JavaScript-->
    <script src="{{ asset('assets2/vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ asset('assets2/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>

    <!-- Core plugin JavaScript-->
    <script src="{{ asset('assets2/vendor/jquery-easing/jquery.easing.min.js') }}"></script>

    <!-- Custom scripts for all pages-->
    <script src="{{ asset('assets2/js/sb-admin-2.min.js') }}"></script>
    <!-- Page level plugins -->
    <script src="{{ asset('assets2/vendor/chart.js/Chart.min.js') }}"></script>
    <!-- Datatables -->

    <!-- Page level custom scripts -->
    <script src="{{ asset('assets2/js/demo/chart-area-demo.js') }}"></script>
    <script src="{{ asset('assets2/js/demo/chart-pie-demo.js') }}"></script>
    <script src="{{ asset('assets2/js/demo/datatables-demo.js') }}"></script>

    {{-- ck editor --}}
    <script type="text/javascript" src="{{ asset('assets2/ckeditor/ckeditor.js') }}"></script>


    {{-- inputan --}}
    <script src="{{ asset('assets2/js/input.js') }}"></script>

    <!-- Custom styles for this page -->
    <script src="{{ asset('assets2/vendor/datatables/jquery.dataTables.min.js') }}"></script>
    <link href="{{ asset('assets2/vendor/datatables/dataTables.bootstrap4.min.css') }}" rel="stylesheet">

    <script src="https://code.jquery.com/jquery-3.5.1.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
    <script src="https://cdn.datatables.net/1.12.1/js/dataTables.bootstrap5.min.js"></script>
    <script>
        $(document).ready(function() {
            $('#dataTable').DataTable();
        });
    </script>
    @yield('cjs')

</body>

</html>
