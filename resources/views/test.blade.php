<!DOCTYPE html>
<html lang="en">
<head>

    <title> كورسات اون لاين </title>
    <!--

    Known Template

    https://templatemo.com/tm-516-known

    -->
    <link rel="icon" href="{{asset('/favicon.ico')}}" type="image/x-icon">
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=Edge">
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="author" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <link rel="stylesheet" href="{{asset('css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/font-awesome.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/owl.carousel.css')}}">
    <link rel="stylesheet" href="{{asset('css/owl.theme.default.min.css')}}">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/sweetalert2@9.7.2/dist/sweetalert2.min.css">

    <!-- MAIN CSS -->
    <link rel="stylesheet" href="{{asset('css/templatemo-style.css')}}">
    <script src="{{asset('js/jquery.js')}}"></script>


</head>
<body id="top" data-spy="scroll" data-target=".navbar-collapse" data-offset="50">

<!-- PRE LOADER -->
<section class="preloader">
    <div class="spinner">

        <span class="spinner-rotate"></span>

    </div>
</section>


<!-- MENU -->
<section class="navbar custom-navbar navbar-fixed-top" role="navigation">
    <div class="container">

        <div class="navbar-header">
            <button class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                <span class="icon icon-bar"></span>
                <span class="icon icon-bar"></span>
                <span class="icon icon-bar"></span>
            </button>

            <!-- lOGO TEXT HERE -->
            <a href="{{route('home')}}" class="navbar-brand">Known</a>
        </div>

        <!-- MENU LINKS -->
        <div class="collapse navbar-collapse">
            <ul class="nav navbar-nav navbar-nav-first">
                <li><a href="{{route('home')}}" class="smoothScroll">الصفحة الرئيسية</a></li>
                <li><a href="#about" class="smoothScroll">حول</a></li>
                <li><a href="{{route('teacher')}}" class="smoothScroll">معلمونا</a></li>
                <li><a href="{{route('courses')}}" class="smoothScroll">الدورات</a></li>
                <li><a href="#testimonial" class="smoothScroll">المراجعات</a></li>
                <li><a href="#contact" class="smoothScroll">اتصل</a></li>
            </ul>

            <ul class="nav navbar-nav navbar-right">


                <li><a href="#"><i class="fa fa-phone"></i> +65 2244 1100</a></li>
                @Auth

                <li><a href="{{route('dashboard')}}"><i class="fa fa-phone"></i> Hello:{{Auth::user()->email}} </a></li>

                @else


                <li><a href="{{route('login')}}"><i class="fa fa-phone"></i>تسجيل دخول </a></li>


                    @endauth
            </ul>
        </div>

    </div>
</section>


<div class="mai-content">

    @yield ('page')


</div>

<!-- FOOTER -->
<footer id="footer">
    <div class="container">
        <div class="row">

            <div class="col-md-4 col-sm-6">
                <div class="footer-info">
                    <div class="section-title">
                        <h2>Headquarter</h2>
                    </div>
                    <address>
                        <p>1800 dapibus a tortor pretium,<br> Integer nisl dui, ABC 12000</p>
                    </address>

                    <ul class="social-icon">
                        <li><a href="#" class="fa fa-facebook-square" attr="facebook icon"></a></li>
                        <li><a href="#" class="fa fa-twitter"></a></li>
                        <li><a href="#" class="fa fa-instagram"></a></li>
                    </ul>

                    <div class="copyright-text">
                        <p>Copyright &copy; 2019 Company Name</p>

                        <p>Design: TemplateMo</p>
                    </div>
                </div>
            </div>

            <div class="col-md-4 col-sm-6">
                <div class="footer-info">
                    <div class="section-title">
                        <h2>Contact Info</h2>
                    </div>
                    <address>
                        <p>+65 2244 1100, +66 1800 1100</p>
                        <p><a href="mailto:youremail.co">hello@youremail.co</a></p>
                    </address>

                    <div class="footer_menu">
                        <h2>Quick Links</h2>
                        <ul>
                            <li><a href="#">Career</a></li>
                            <li><a href="#">Investor</a></li>
                            <li><a href="#">Terms & Conditions</a></li>
                            <li><a href="#">Refund Policy</a></li>
                        </ul>
                    </div>
                </div>
            </div>

            <div class="col-md-4 col-sm-12">
                <div class="footer-info newsletter-form">
                    <div class="section-title">
                        <h2>Newsletter Signup</h2>
                    </div>
                    <div>
                        <div class="form-group">
                            <form action="#" method="get">
                                <input type="email" class="form-control" placeholder="Enter your email" name="email" id="email" required="">
                                <input type="submit" class="form-control" name="submit" id="form-submit" value="Send me">
                            </form>
                            <span><sup>*</sup> Please note - we do not spam your email.</span>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</footer>


<!-- SCRIPTS -->


<script src="{{asset('js/jquery.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script src="{{asset('js/owl.carousel.min.js')}}"></script>
<script src="{{asset('js/smoothscroll.js')}}"></script>
<script src="{{asset('js/custom.js')}}"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9.7.2/dist/sweetalert2.min.js"></script>


</body>
</html>