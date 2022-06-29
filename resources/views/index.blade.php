<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags-->
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="au theme template">
    <meta name="author" content="Hau Nguyen">
    <meta name="keywords" content="au theme template">

    <!-- Title Page-->
    <title>AYM Clinic @yield('title')</title>

    <!-- Fontfaces CSS-->
    <link href="{{asset('style/css/font-face.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('style/vendor/font-awesome-4.7/css/font-awesome.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('style/vendor/font-awesome-5/css/fontawesome-all.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('style/vendor/mdi-font/css/material-design-iconic-font.min.css')}}" rel="stylesheet" media="all">

    <!-- Bootstrap CSS-->
    <link href="{{asset('style/vendor/bootstrap-4.1/bootstrap.min.css')}}" rel="stylesheet" media="all">

    <!-- Vendor CSS-->
    <link href="{{asset('style/vendor/animsition/animsition.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('style/vendor/bootstrap-progressbar/bootstrap-progressbar-3.3.4.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('style/vendor/wow/animate.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('style/vendor/css-hamburgers/hamburgers.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('style/vendor/slick/slick.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('style/vendor/select2/select2.min.css')}}" rel="stylesheet" media="all">
    <link href="{{asset('style/vendor/perfect-scrollbar/perfect-scrollbar.css')}}" rel="stylesheet" media="all">
    
    <!-- Main CSS-->
    <link href="{{asset('style/css/theme.css')}}" rel="stylesheet" media="all">
    <link href="https://pngtree.com/so/classic">

    <!--Data Tables-->
    <link rel="stylesheet" href="https://code.jquery.com/jquery-3.5.1.js">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/js/jquery.dataTables.min.js">
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/js/dataTables.semanticui.min.js">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/semantic-ui/2.3.1/semantic.min.js"> 
    <link rel="stylesheet" href="https://cdn.datatables.net/1.11.3/css/dataTables.semanticui.min.css">
</head>

<body class="animsition">
    <div class="page-wrapper">
        <!-- HEADER MOBILE-->
        <header class="header-mobile d-block d-lg-none">
            <div class="header-mobile__bar">
                <div class="container-fluid">
                    <div class="header-mobile-inner">
                        <a class="navbar-brand">
                            <img src="clinic.png" style="width: 4rem" alt=".."/>
                        </a>
                        <a class="navbar-brand">
                            <h3>AYM Clinic</h3>
                        </a>
                        <button class="hamburger hamburger--slider" type="button">
                            <span class="hamburger-box">
                                <span class="hamburger-inner"></span>
                            </span>
                        </button>
                    </div>
                </div>
            </div>
            <nav class="navbar-mobile">
                <div class="container-fluid">
                    <ul class="navbar-mobile__list list-unstyled">
                        <li>
                            <a href="{{url('/')}}">
                                <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                        </li>
                        <li>
                            <a href="/clinic">
                                <i class="fas fa-hospital-o"></i>   Clinic</a>
                        </li>
                        <li>
                            <a href="/dokter">
                                <i class="fas fa-user-md"></i> Dokter</a>
                        </li>
                        <li>
                            <a href="/pasien">
                                <i class="fas fa-wheelchair"></i>Pasien</a>
                        </li>
                        <li>
                            <a href="/rekammedis">
                                <i class="fas fa-plus-square"></i> Rekam Medis</a>
                        </li>
                        <li>
                            <a href="/pemeriksaan">
                                <i class="fas fa-medkit"></i> Pemeriksaan</a>
                        </li>
                        <li>
                            <a href="/petugas">
                                <i class="fas fa-user"></i> Petugas</a>
                        </li>
                        </li>
                    </ul>
                </div>
            </nav>
        </header>
        <!-- END HEADER MOBILE-->

        <!-- MENU SIDEBAR-->
        <aside class="menu-sidebar d-none d-lg-block">
            <div class="logo">
                <a class="navbar-brand">
                    <img src="clinic.png" style="width: 4rem" alt=".."/>
                </a>
                <a class="navbar-brand">
                    <h3>AYM Clinic</h3>
                </a>
            </div>
            <div class="menu-sidebar__content js-scrollbar1">
                <nav class="navbar-sidebar">
                    <ul class="list-unstyled navbar__list">
                        <li>
                            <a href="{{url('/')}}">
                                <i class="fas fa-tachometer-alt"></i>Dashboard</a>
                        </li>
                        <li>
                            <a href="/clinic">
                                <i class="fas fa-hospital-o"></i>   Clinic</a>
                        </li>
                        <li>
                            <a href="/dokter">
                                <i class="fas fa-user-md"></i> Dokter</a>
                        </li>
                        <li>
                            <a href="/pasien">
                                <i class="fas fa-wheelchair"></i>Pasien</a>
                        </li>
                        <li>
                            <a href="/rekammedis">
                                <i class="fas fa-plus-square"></i> Rekam Medis</a>
                        </li>
                        <li>
                            <a href="/pemeriksaan">
                                <i class="fas fa-medkit"></i> Pemeriksaan</a>
                        </li>
                        <li>
                            <a href="/petugas">
                                <i class="fas fa-user"></i> Petugas</a>
                        </li>
                        </li>
                    </ul>
                </nav>
            </div>
        </aside>
        <!-- END MENU SIDEBAR-->

        <!-- PAGE CONTAINER-->
        <div class="page-container">
            <!-- HEADER DESKTOP-->
            <header class="header-desktop">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                      
                    </div>
                </div>
            
            <br>
            </header>
            <!-- HEADER DESKTOP-->

            <!-- MAIN CONTENT-->
            <div class="main-content">
                <div class="section__content section__content--p30">
                    <div class="container-fluid">
                        
                        <h1 class="title-6 text-dark">Hi
                            <span>Yandi</span>, Welcome back</h1>
                            <p>AYM Clinic</p>
                        <br>
                        <div class="row">
                            <div class="col-lg-6">
                            <div class="au-card recent-report">
                            <div class="au-card-inner">
                            <h3 class="title-2">recent reports</h3>
                            <div class="chart-info">
                            <div class="chart-info__left">
                            <div class="chart-note">
                            <span class="dot dot--blue"></span>
                            <span>products</span>
                            </div>
                            <div class="chart-note mr-0">
                            <span class="dot dot--green"></span>
                            <span>services</span>
                            </div>
                            </div>
                            <div class="chart-info__right">
                            <div class="chart-statis">
                            <span class="index incre">
                            <i class="zmdi zmdi-long-arrow-up"></i>25%</span>
                            <span class="label">products</span>
                            </div>
                            <div class="chart-statis mr-0">
                            <span class="index decre">
                            <i class="zmdi zmdi-long-arrow-down"></i>10%</span>
                            <span class="label">services</span>
                            </div>
                            </div>
                            </div>
                            <div class="recent-report__chart">
                            <canvas id="recent-rep-chart"></canvas>
                            </div>
                            </div>
                            </div>
                            </div>
                            <div class="col-md-4">
                                <aside class="profile-nav alt">
                                <section class="card">
                                <div class="card-header user-header alt bg-dark">
                                <div class="media">
                                <a href="#">
                                <img class="align-self-center rounded-circle mr-3" style="width:85px; height:85px;" alt="" src="clinic.png">
                                </a>
                                <div class="media-body">
                                <h2 class="text-light display-6">Yandi A.</h2>
                                <p>AYM Clinic</p>
                                </div>
                                </div>
                                </div>
                                <ul class="list-group list-group-flush">
                                <li class="list-group-item">
                                <a href="#">
                                 Mail Inbox
                                </a>
                                </li>
                                <li class="list-group-item">
                                 <a href="#">
                                 Recent Activity
                                </a>
                                </li>
                                <li class="list-group-item">
                                <a href="#">
                                 Notification
                                </a>
                                </li>
                                <li class="list-group-item">
                                <a href="#">
                                 Message
                                </a>
                                </li>
                                </ul>
                                </section>
                                </aside>
                                </div>
                                </div>
                            </div>
                        </div>
                        <br>
                        
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- END MAIN CONTENT-->
            <!-- END PAGE CONTAINER-->
        </div>

    </div>

    <!-- Jquery JS-->
    <script src="{{asset('style/vendor/jquery-3.2.1.min.js')}}"></script>
    <!-- Bootstrap JS-->
    <script src="{{asset('style/vendor/bootstrap-4.1/popper.min.js')}}"></script>
    <script src="{{asset('style/vendor/bootstrap-4.1/bootstrap.min.js')}}"></script>
    <!-- Vendor JS       -->
    <script src="{{asset('style/vendor/slick/slick.min.js')}}">
    </script>
    <script src="{{asset('style/vendor/wow/wow.min.js')}}"></script>
    <script src="{{asset('style/vendor/animsition/animsition.min.js')}}"></script>
    <script src="{{asset('style/vendor/bootstrap-progressbar/bootstrap-progressbar.min.js')}}">
    </script>
    <script src="{{asset('style/vendor/counter-up/jquery.waypoints.min.js')}}"></script>
    <script src="{{asset('style/vendor/counter-up/jquery.counterup.min.js')}}">
    </script>
    <script src="{{asset('style/vendor/circle-progress/circle-progress.min.js')}}"></script>
    <script src="{{asset('style/vendor/perfect-scrollbar/perfect-scrollbar.js')}}"></script>
    <script src="{{asset('style/vendor/chartjs/Chart.bundle.min.js')}}"></script>
    <script src="{{asset('style/vendor/select2/select2.min.js')}}">
    </script>

    <!-- Main JS-->
    <script src="{{asset('style/js/main.js')}}"></script>
    <script data-cfasync="false" src="/cdn-cgi/scripts/5c5dd728/cloudflare-static/email-decode.min.js"></script><script src="{{asset('style/vendor/jquery-3.2.1.min.js')}}"></script>
    <script defer src="https://static.cloudflareinsights.com/beacon.min.js" data-cf-beacon='{"rayId":"6949885e6e4c49d8","token":"cd0b4b3a733644fc843ef0b185f98241","version":"2021.8.1","si":10}'></script>
    
    <script type="text/javascript">
        $(document).ready(function() {
          $('#example').DataTable();
        } );
    </script>
</body>
</html>
<!-- end document-->