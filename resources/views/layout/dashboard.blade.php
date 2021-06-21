<!DOCTYPE html>
<html lang="en">
<meta http-equiv="content-type" content="text/html;charset=UTF-8" />
<head>
    <title>Dashboard | SIJELITA</title>    
    <!-- Meta -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=0, minimal-ui">
    <meta http-equiv="X-UA-Compatible" content="IE=edge"/>
    <meta name="description" content="#">
    <meta name="keywords" content="#">
    <meta name="author" content="#">

    <!-- Favicons -->
    <link rel="shortcut icon" href="{{asset('/dashboard')}}/assets/images/faviconpu.ico" type="image/x-icon" />
    
    <!-- Google font-->
    <link href="https://fonts.googleapis.com/css?family=Open+Sans:400,600,800" rel="stylesheet">
    <!-- Required Framework -->
    <link rel="stylesheet" type="text/css" href="{{asset('/dashboard')}}/bower_components/bootstrap/css/bootstrap.min.css">
    <!-- lightbox Fremwork -->
    <link rel="stylesheet" type="text/css" href="{{asset('/dashboard')}}/bower_components/lightbox2/css/lightbox.min.css">
    <!-- themify-icons line icon -->
    <link rel="stylesheet" type="text/css" href="{{asset('/dashboard')}}/assets/icon/themify-icons/themify-icons.css">
    <!-- ico font -->
    <link rel="stylesheet" type="text/css" href="{{asset('/dashboard')}}/assets/icon/icofont/css/icofont.css">
    <!-- feather Awesome -->
    <link rel="stylesheet" type="text/css" href="{{asset('/dashboard')}}/assets/icon/feather/css/feather.css">
    <!-- Data Table Css -->
    <link rel="stylesheet" type="text/css"
          href="{{asset('/dashboard')}}/bower_components/datatables.net-bs4/css/dataTables.bootstrap4.min.css">
    <link rel="stylesheet" type="text/css" href="{{asset('/dashboard')}}/assets/pages/data-table/css/buttons.dataTables.min.css">
    <link rel="stylesheet" type="text/css"
          href="{{asset('/dashboard')}}/bower_components/datatables.net-responsive-bs4/css/responsive.bootstrap4.min.css">
    <!-- Style.css -->
    <link rel="stylesheet" type="text/css" href="{{asset('/dashboard')}}/assets/css/style.css">
    <link rel="stylesheet" type="text/css" href="{{asset('/dashboard')}}/assets/css/jquery.mCustomScrollbar.css">  
    
</head>

<body>
    <!-- Pre-loader start -->
    <div class="theme-loader">
        <div class="ball-scale">
            <div class='contain'>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
                <div class="ring">
                    <div class="frame"></div>
                </div>
            </div>
        </div>
    </div>
    <!-- Pre-loader end -->
    <div id="pcoded" class="pcoded">
        <div class="pcoded-overlay-box"></div>
        <div class="pcoded-container navbar-wrapper">

            <nav class="navbar header-navbar pcoded-header">
                <div class="navbar-wrapper">

                    <div class="navbar-logo">
                        <a class="mobile-menu" id="mobile-collapse" href="#">
                            <i class="feather icon-menu"></i>
                        </a>
                        <a href="/dashboards">
                            <img class="img-fluid" src="{{asset('/dashboard')}}/assets/images/logo-sijelita.png" alt="App-Logo" />
                        </a>
                        <a class="mobile-options">
                            <i class="feather icon-more-horizontal"></i>
                        </a>
                    </div>

                    <div class="navbar-container container-fluid">
                        <ul class="nav-left">
                            <li class="header-search">
                                <div class="main-search morphsearch-search">
                                    <div class="input-group">
                                        <span class="input-group-addon search-close"><i class="feather icon-x"></i></span>
                                        <input type="text" class="form-control">
                                        <span class="input-group-addon search-btn"><i class="feather icon-search"></i></span>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <a href="#!" onclick="if (!window.__cfRLUnblockHandlers) return false; javascript:toggleFullScreen()" data-cf-modified-8c655ee7424b885f65f60eee-="">
                                    <i class="feather icon-maximize full-screen"></i>
                                </a>
                            </li>
                        </ul>
                        <ul class="nav-right">
                            <li class="user-profile header-notification">
                                <div class="dropdown-primary dropdown">
                                    <div class="dropdown-toggle" data-toggle="dropdown">
                                        <img src="{{auth()->user()->getAvatar()}}" class="img-radius" alt="User-Profile-Image">
                                        <span>{{auth()->user()->name}}</span>
                                        <i class="feather icon-chevron-down"></i>
                                    </div>
                                    <ul class="show-notification profile-notification dropdown-menu" data-dropdown-in="fadeIn" data-dropdown-out="fadeOut">
                                        @if(auth()->user()->role =='admin')
                                        <li>
                                            <a href="/user/{{auth()->user()->id}}/profil">
                                                <i class="feather icon-user"></i> Edit Profil
                                            </a>
                                        </li>
                                        @endif
                                        @if(auth()->user()->role =='atasan')
                                        <li>
                                            <a href="/atasan/{{auth()->user()->id}}/profil">
                                                <i class="feather icon-user"></i> Edit Profil
                                            </a>
                                        </li>
                                        @endif 
                                        @if(auth()->user()->role =='staf')
                                        <li>
                                            <a href="/staf/{{auth()->user()->id}}/profil">
                                                <i class="feather icon-user"></i> Edit Profil
                                            </a>
                                        </li>
                                        @endif  
                                        <li>
                                            <a href="/logout">
                                                <i class="feather icon-log-out"></i> Keluar
                                            </a>
                                        </li>
                                    </ul>

                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </nav>

            <!-- Sidebar menu-->
            <div class="pcoded-main-container">
                <div class="pcoded-wrapper">
                    <nav class="pcoded-navbar">
                        <div class="pcoded-inner-navbar main-menu">
                            <div class="pcoded-navigatio-lavel">Navigasi Menu</div>
                            <ul class="pcoded-item pcoded-left-item">
                                @if(auth()->user()->role =='admin')
                                <li class="active">
                                    <a href="/home">
                                        <span class="pcoded-micon"><i class="feather icon-home"></i></span>
                                        <span class="pcoded-mtext">Beranda</span>
                                    </a>                                    
                                </li>        
                                <!--<li class="">
                                    <a href="/user">
                                        <span class="pcoded-micon"><i class="feather icon-users"></i></span>
                                        <span class="pcoded-mtext">Manajemen User</span>
                                    </a>
                                </li> -->  
                                <li class="pcoded-hasmenu">
                                    <a href="javascript:void(0)">
                                        <span class="pcoded-micon"><i class="feather icon-users"></i></span>
                                        <span class="pcoded-mtext">Manajemen User</span>
                                    </a>
                                    <ul class="pcoded-submenu">
                                        <li class=" ">
                                            <a href="/user">
                                                <span class="pcoded-mtext">Admin</span>
                                            </a>
                                        </li>
                                        <!--<li class=" ">
                                            <a href="/atasan">
                                                <span class="pcoded-mtext">Atasan</span>
                                            </a>
                                        </li>  
                                        <li class=" ">
                                            <a href="/staf">
                                                <span class="pcoded-mtext">Staf</span>
                                            </a>
                                        </li>-->
                                        <li class=" ">
                                            <a href="/staf">
                                                <span class="pcoded-mtext">Karyawan</span>
                                            </a>
                                        </li>    

                                    </ul>
                                </li>                                
                                @endif 
                                @if(auth()->user()->role =='atasan') 
                                <li class="active">
                                    <a href="/home">
                                        <span class="pcoded-micon"><i class="feather icon-home"></i></span>
                                        <span class="pcoded-mtext">Beranda</span>
                                    </a>                                    
                                </li>  
                                <li class="">
                                    <a href="/at5">
                                        <span class="pcoded-micon"><i class="feather icon-list"></i></span>
                                        <span class="pcoded-mtext">Daftar Staf</span>
                                    </a>                                    
                                </li> 
                                <li class="">
                                    <a href="/st1">
                                        <span class="pcoded-micon"><i class="feather icon-edit"></i></span>
                                        <span class="pcoded-mtext">Rencana Kerja</span>
                                    </a>
                                </li> 
                                <li class="">
                                    <a href="/st2">
                                        <span class="pcoded-micon"><i class="feather icon-eye"></i></span>
                                        <span class="pcoded-mtext">Review Atasan</span>
                                    </a>
                                </li> 
                                <li class="">
                                    <a href="/st3">
                                        <span class="pcoded-micon"><i class="feather icon-check-circle"></i></span>
                                        <span class="pcoded-mtext">Realisasi Rencana Kerja</span>
                                    </a>
                                </li> 
                                <li class="">
                                    <a href="/st4">
                                        <span class="pcoded-micon"><i class="feather icon-clock"></i></span>
                                        <span class="pcoded-mtext">History Rencana Kerja</span>
                                    </a>
                                </li> 
                                <li class="pcoded-hasmenu">
                                    <a href="javascript:void(0)">
                                        <span class="pcoded-micon"><i class="feather icon-users"></i></span>
                                        <span class="pcoded-mtext" >Rencana Kerja Staf</span>
                                    </a>
                                    <ul class="pcoded-submenu">
                                        <li class=" ">
                                            <a href="/gr1">
                                                <span class="pcoded-mtext">Review</span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="/gr2">
                                                <span class="pcoded-mtext">Hasil Review</span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="/gr3">
                                                <span class="pcoded-mtext">Realisasi</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="">
                                    <a href="/at6">
                                        <span class="pcoded-micon"><i class="feather icon-shield"></i></span>
                                        <span class="pcoded-mtext">Izin Keluar Kantor Staf</span>
                                    </a>
                                </li>
                                <li class="">
                                    <a target="_blank" href="http://sijelita.bwskal1.or.id/panduan/Panduan SIJELITA Atasan.pdf">
                                        <span class="pcoded-micon"><i class="feather icon-book"></i></span>
                                        <span class="pcoded-mtext">Panduan</span>
                                    </a>                                     
                                </li>
                                
                                @endif 
                                @if(auth()->user()->role =='staf') 
                                <li class="active">
                                    <a href="/home">
                                        <span class="pcoded-micon"><i class="feather icon-home"></i></span>
                                        <span class="pcoded-mtext">Beranda</span>
                                    </a>                                    
                                </li>          
                                <li class="">
                                    <a href="/st1">
                                        <span class="pcoded-micon"><i class="feather icon-edit"></i></span>
                                        <span class="pcoded-mtext">Rencana Kerja</span>
                                    </a>
                                </li> 
                                <li class="">
                                    <a href="/st2">
                                        <span class="pcoded-micon"><i class="feather icon-eye"></i></span>
                                        <span class="pcoded-mtext">Review Atasan</span>
                                    </a>
                                </li> 
                                <li class="">
                                    <a href="/st3">
                                        <span class="pcoded-micon"><i class="feather icon-check-circle"></i></span>
                                        <span class="pcoded-mtext">Realisasi Rencana Kerja</span>
                                    </a>
                                </li> 
                                <li class="">
                                    <a href="/st4">
                                        <span class="pcoded-micon"><i class="feather icon-clock"></i></span>
                                        <span class="pcoded-mtext">History Rencana Kerja</span>
                                    </a>
                                </li> 
                                <li class="pcoded-hasmenu">
                                    <a href="javascript:void(0)">
                                        <span class="pcoded-micon"><i class="feather icon-shield"></i></span>
                                        <span class="pcoded-mtext">Izin Keluar Kantor</span>
                                    </a>
                                    <ul class="pcoded-submenu">
                                        <li class=" ">
                                            <a href="/st5">
                                                <span class="pcoded-mtext">Ajukan Izin</span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="/st5/selesai">
                                                <span class="pcoded-mtext">Selesai Izin</span>
                                            </a>
                                        </li>
                                        <li class=" ">
                                            <a href="/st5/history">
                                                <span class="pcoded-mtext">History Izin</span>
                                            </a>
                                        </li>
                                    </ul>
                                </li>
                                <li class="">
                                    <a target="_blank" href="http://sijelita.bwskal1.or.id/panduan/Panduan SIJELITA Staf.pdf">
                                        <span class="pcoded-micon"><i class="feather icon-book"></i></span>
                                        <span class="pcoded-mtext">Panduan</span>
                                    </a>
                                </li> 
                                @endif 
                                <li class="">
                                    <a href="/logout">
                                        <span class="pcoded-micon"><i class="feather icon-log-out"></i></span>
                                        <span class="pcoded-mtext">Keluar</span>
                                    </a>
                                </li>                         
                            </ul>                            
                        </div>
                    </nav>

                    @yield('content')

                </div>
            </div>
        </div>
    </div>

    <!-- Required Jquery -->
    <script type="7b56d2ac2e8073433004b9ef-text/javascript" src="{{asset('/dashboard')}}/bower_components/jquery/js/jquery.min.js"></script>
    <script type="7b56d2ac2e8073433004b9ef-text/javascript" src="{{asset('/dashboard')}}/bower_components/jquery-ui/js/jquery-ui.min.js"></script>
    <script type="7b56d2ac2e8073433004b9ef-text/javascript" src="{{asset('/dashboard')}}/bower_components/popper.js/js/popper.min.js"></script>
    <script type="7b56d2ac2e8073433004b9ef-text/javascript" src="{{asset('/dashboard')}}/bower_components/bootstrap/js/bootstrap.min.js"></script>
    <!-- jquery slimscroll js -->
    <script type="7b56d2ac2e8073433004b9ef-text/javascript" src="{{asset('/dashboard')}}/bower_components/jquery-slimscroll/js/jquery.slimscroll.js"></script>
    <!-- modernizr js -->
    <script type="7b56d2ac2e8073433004b9ef-text/javascript" src="{{asset('/dashboard')}}/bower_components/modernizr/js/modernizr.js"></script>
    <script type="7b56d2ac2e8073433004b9ef-text/javascript" src="{{asset('/dashboard')}}/bower_components/modernizr/js/css-scrollbars.js"></script>

    <script type="32d5b2d21e6e815e80363391-text/javascript" src="{{asset('/dashboard')}}/bower_components/lightbox2/js/lightbox.min.js"></script>
    <!-- data-table js -->
    <script src="{{asset('/dashboard')}}/bower_components/datatables.net/js/jquery.dataTables.min.js" type="7b56d2ac2e8073433004b9ef-text/javascript"></script>
    <script src="{{asset('/dashboard')}}/bower_components/datatables.net-buttons/js/dataTables.buttons.min.js" type="7b56d2ac2e8073433004b9ef-text/javascript"></script>
    <script src="{{asset('/dashboard')}}/assets/pages/data-table/js/jszip.min.js" type="7b56d2ac2e8073433004b9ef-text/javascript"></script>
    <script src="{{asset('/dashboard')}}/assets/pages/data-table/js/pdfmake.min.js" type="7b56d2ac2e8073433004b9ef-text/javascript"></script>
    <script src="{{asset('/dashboard')}}/assets/pages/data-table/js/vfs_fonts.js" type="7b56d2ac2e8073433004b9ef-text/javascript"></script>
    <script src="{{asset('/dashboard')}}/bower_components/datatables.net-buttons/js/buttons.print.min.js" type="7b56d2ac2e8073433004b9ef-text/javascript"></script>
    <script src="{{asset('/dashboard')}}/bower_components/datatables.net-buttons/js/buttons.html5.min.js" type="7b56d2ac2e8073433004b9ef-text/javascript"></script>
    <script src="{{asset('/dashboard')}}/bower_components/datatables.net-bs4/js/dataTables.bootstrap4.min.js" type="7b56d2ac2e8073433004b9ef-text/javascript"></script>
    <script src="{{asset('/dashboard')}}/bower_components/datatables.net-responsive/js/dataTables.responsive.min.js" type="7b56d2ac2e8073433004b9ef-text/javascript"></script>
    <script src="{{asset('/dashboard')}}/bower_components/datatables.net-responsive-bs4/js/responsive.bootstrap4.min.js" type="7b56d2ac2e8073433004b9ef-text/javascript"></script>
    
    <!-- i18next.min.js -->
    <script type="7b56d2ac2e8073433004b9ef-text/javascript" src="{{asset('/dashboard')}}/bower_components/i18next/js/i18next.min.js"></script>
    <script type="7b56d2ac2e8073433004b9ef-text/javascript" src="{{asset('/dashboard')}}/bower_components/i18next-xhr-backend/js/i18nextXHRBackend.min.js"></script>
    <script type="7b56d2ac2e8073433004b9ef-text/javascript" src="{{asset('/dashboard')}}/bower_components/i18next-browser-languagedetector/js/i18nextBrowserLanguageDetector.min.js"></script>
    <script type="7b56d2ac2e8073433004b9ef-text/javascript" src="{{asset('/dashboard')}}/bower_components/jquery-i18next/js/jquery-i18next.min.js"></script>
    <!-- Custom js -->
    <script src="{{asset('/dashboard')}}/assets/pages/data-table/js/data-table-custom.js" type="7b56d2ac2e8073433004b9ef-text/javascript"></script>
    
    <script src="{{asset('/dashboard')}}/assets/js/pcoded.min.js" type="7b56d2ac2e8073433004b9ef-text/javascript"></script>
    <script src="{{asset('/dashboard')}}/assets/js/vartical-layout.min.js" type="7b56d2ac2e8073433004b9ef-text/javascript"></script>
    <script src="{{asset('/dashboard')}}/assets/js/jquery.mCustomScrollbar.concat.min.js" type="7b56d2ac2e8073433004b9ef-text/javascript"></script>

    @yield('footer')
    
    <script type="32d5b2d21e6e815e80363391-text/javascript">
        lightbox.option({
            'resizeDuration': 200,
            'wrapAround': true
        })

    </script>

    <script type="7b56d2ac2e8073433004b9ef-text/javascript" src="{{asset('/dashboard')}}/assets/js/script.js"></script>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-23581568-13" type="7b56d2ac2e8073433004b9ef-text/javascript"></script>
    <script type="7b56d2ac2e8073433004b9ef-text/javascript">
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date());

    gtag('config', 'UA-23581568-13');
    </script>
    <script src="{{asset('/dashboard')}}/ajax.cloudflare.com/cdn-cgi/scripts/a2bd7673/cloudflare-static/rocket-loader.min.js" data-cf-settings="7b56d2ac2e8073433004b9ef-|49" defer=""></script></body>
    


</html>
