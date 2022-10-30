<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>DASHBOARD | Admin</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{asset('lib/owlcarousel/assets/owl.carousel.min.css')}}" rel="stylesheet">
    <link href="{{asset('lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css')}}" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{asset('css/bootstrapAdmin.min.css')}}" rel="stylesheet">

    <!-- Stylesheet -->
    <link href="{{asset('css/styleAdmin.css')}}" rel="stylesheet">
</head>

<body>
    <div class="container-xxl position-relative bg-white d-flex p-0">
        <!-- Spinner Start -->
        
        <!-- Spinner End -->


        <!-- Sidebar Start -->
        <div class="sidebar pe-4 pb-3" >
            <nav class="navbar navbar-light">
                <!-- <a href="index.html" class="navbar-brand mx-4 mb-3"> -->
                <a class="navbar-brand" href="{{ route('landing.page') }}"><img src="{{asset('images/logo.png')}}" alt="TelusurTasik" class="rounded mx-auto d-block"></a>
                    <!-- <h3 class="text-primary"><i class="fa fa-hashtag me-2"><img src="images/logo.png" alt=""></h3> -->
                <!-- </a> -->
                <div class="d-flex align-items-center ms-4 mb-4" style="margin-top:20px;">
                    <div class="position-relative">
                        <img class="rounded-circle" src="/images/{{ Auth::user()->photo_user }}" alt="" style="width: 40px; height: 40px;">
                        <div class="bg-success rounded-circle border border-2 border-white position-absolute end-0 bottom-0 p-1"></div>
                    </div>
                    <div class="ms-3">
                        <h6 class="mb-0">Admin</h6>
                        
                    </div>
                </div>
                <div class="navbar-nav w-100" >
                    
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-table me-2"></i>Data User & Mitra</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="{{url('/DataUser')}}" class="dropdown-item">Data User</a>
                            <a href="{{url('/DataMitra')}}" class="dropdown-item">Data Mitra</a>
                        </div>
                    </div>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown"><i class="fa fa-file-alt me-2"></i>Data Wisata</a>
                        <div class="dropdown-menu bg-transparent border-0">
                            <a href="{{url('/DataWisata')}}" class="dropdown-item">Data Wisata</a>
                            <a href="{{url('/DataWisataPending')}}" class="dropdown-item">Data Wisata Pending</a>       
                        </div>
                    </div>
                    <a href="{{ url('/KelolaReview') }}" class="nav-item nav-link"><i class="bi bi-pencil-square me-2"></i>Kelola Ulasan</a>
                    <a href="{{ url('edit-about-us') }}" class="nav-item nav-link"><i class="bi bi-pie-chart me-2"></i>Edit About Us</a>
                    
                    
                    <a href="{{ url('/admin/home')}}" class="nav-item nav-link"><i class="fa fa-chart-bar me-2"></i>Dashboard</a>
                    <a href="{{ url('/Help') }}" class="nav-item nav-link"><i class="bi bi-question-diamond-fill me-2"></i>Help</a>
                </div>
            </nav>
        </div>
        <!-- Sidebar End -->


        <!-- Content Start -->
        <div class="content">
            <!-- Navbar Start -->
            <nav class="navbar navbar-expand bg-light navbar-light sticky-top px-4 py-0">
                <a href="#" class="sidebar-toggler flex-shrink-0">
                    <i class="fa fa-bars"></i>
                </a>
                <div class="navbar-nav align-items-center ms-auto">
                    
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">
                            <img class="rounded-circle me-lg-2" src="/images/{{ Auth::user()->photo_user }}" alt="" style="width: 40px; height: 40px;">
                            <span class="d-none d-lg-inline-flex">Admin</span>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end bg-light border-0 rounded-0 rounded-bottom m-0">
                            <a href="{{url('/showProfile/'.Auth::user()->id)}}" class="dropdown-item">My Profile</a>
                            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                @csrf
                            </form>
                        </div>
                    </div>
                </div>
            </nav>
            <!-- Navbar End -->

            @yield('content')

            <!-- Footer Start -->
            <!-- Footer End -->
        </div>
        <!-- Content End -->


        <!-- Back to Top -->
        <a href="#" class="btn btn-lg btn-primary btn-lg-square back-to-top"><i class="bi bi-arrow-up"></i></a>
    </div>

    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/chart/chart.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Javascript -->
    <script src="js/main.js"></script>
</body>

</html>