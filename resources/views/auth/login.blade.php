<!doctype html>
<html class="no-js" lang="">


<!-- Mirrored from affixtheme.com/html/xmee/demo/login-15.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 04 Oct 2020 11:41:37 GMT -->
<head>
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>SENTARUM | BWSK I Pontianak</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- Favicon -->
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('/login')}}/img/faviconpu.ico">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset('/login')}}/css/bootstrap.min.css">
    <!-- Fontawesome CSS -->
    <link rel="stylesheet" href="{{asset('/login')}}/css/fontawesome-all.min.css">
    <!-- Flaticon CSS -->
    <link rel="stylesheet" href="{{asset('/login')}}/font/flaticon.css">
    <!-- Google Web Fonts -->
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&amp;display=swap" rel="stylesheet">
    <!-- Custom CSS -->
    <link rel="stylesheet" href="{{asset('/login')}}/style.css">
</head>

<body>
    <!--[if lt IE 8]>
        <p class="browserupgrade">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
    <![endif]-->      
    <section class="fxt-template-animation fxt-template-layout15">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-6 col-12 fxt-bg-img" data-bg-image="{{asset('/login')}}/img/figure/sentarum.jpg">
                    <div class="fxt-intro">
                        <h1>Selamat Datang</h1>
                        <p>Sentarum merupakan sistem informasi yang dikembangkan untuk membantu management data TPM P3-TGAI yang terinspirasi dari 
                            nama danau rawa terluas di Asia Tenggara yang terletak di Kabupaten Kapuas Hulu Provinsi Kalimantan Barat. </p>
                        <!--<div class="fxt-page-switcher">
                            <a href="login-15.html" class="switcher-text1 active">Log In</a>
                            <a href="register-15.html" class="switcher-text1">Register</a>
                        </div>-->
                    </div>
                </div>
                <div class="col-md-6 col-12 fxt-bg-color">
                    <div class="fxt-content">                        
                        <div class="fxt-header">
                            <a href="#" class="fxt-logo"><img src="{{asset('/login')}}/img/logo-sentarum.png" alt="Logo"></a>                            
                        </div>
                        <div class="fxt-form">
                            <h2>Login</h2>     
                            <p>Silakan login untuk masuk ke aplikasi</p>
                            <form action="/postlogin" method="POST">
                                {{csrf_field()}}
                                <div class="form-group">                                                
                                    <div class="fxt-transformY-50 fxt-transition-delay-1">                                                
                                        <input type="email" class="form-control" name="email" placeholder="Email Address" required="required">
                                        <i class="flaticon-envelope"></i>
                                    </div>
                                </div>
                                <div class="form-group">                                                
                                    <div class="fxt-transformY-50 fxt-transition-delay-2">                                                
                                        <input type="password" class="form-control" name="password" placeholder="Password" required="required">
                                        <i class="flaticon-padlock"></i>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="fxt-transformY-50 fxt-transition-delay-3">
                                        <div class="fxt-content-between">
                                            <button type="submit" class="fxt-btn-fill">Masuk</button>
                                            <!--<a href="forgot-password-15.html" class="switcher-text2">Forgot Password</a>-->
                                        </div>
                                    </div>
                                </div>
                            </form>                            
                        </div> 
                        <div class="fxt-footer">
                            <ul class="fxt-socials">
                                <li class="fxt-facebook fxt-transformY-50 fxt-transition-delay-4">
                                    <a href="#" title="Facebook"><i class="fab fa-facebook-f"></i></a>
                                </li>
                                <li class="fxt-twitter fxt-transformY-50 fxt-transition-delay-5">
                                    <a href="#" title="twitter"><i class="fab fa-twitter"></i></a>
                                </li>
                                <li class="fxt-google fxt-transformY-50 fxt-transition-delay-6">
                                    <a href="#" title="google"><i class="fab fa-google-plus-g"></i></a>
                                </li>
                                <li class="fxt-linkedin fxt-transformY-50 fxt-transition-delay-7">
                                    <a href="#" title="linkedin"><i class="fab fa-linkedin-in"></i></a>
                                </li>
                                <li class="fxt-pinterest fxt-transformY-50 fxt-transition-delay-8">
                                    <a href="#" title="pinterest"><i class="fab fa-pinterest-p"></i></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>                
            </div>
        </div>
    </section>
    <!-- jquery-->
    <script src="{{asset('/login')}}/js/jquery-3.5.0.min.js"></script>
    <!-- Popper js -->
    <script src="{{asset('/login')}}/js/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="{{asset('/login')}}/js/bootstrap.min.js"></script>
    <!-- Imagesloaded js -->
    <script src="{{asset('/login')}}/js/imagesloaded.pkgd.min.js"></script>    
    <!-- Validator js -->
    <script src="{{asset('/login')}}/js/validator.min.js"></script>
    <!-- Custom Js -->
    <script src="{{asset('/login')}}/js/main.js"></script>

</body>


<!-- Mirrored from affixtheme.com/html/xmee/demo/login-15.html by HTTrack Website Copier/3.x [XR&CO'2014], Sun, 04 Oct 2020 11:41:37 GMT -->
</html>