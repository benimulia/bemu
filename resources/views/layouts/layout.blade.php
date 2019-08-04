<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>BEM UKDW 2019 - BERSAMA KITA BISA</title>

    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link rel="icon" type="image/png" href="{{asset ('images/BEMU-icon.png') }}">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{asset ('css/bootstrap.min.css') }}">

    <!-- FontAwesome CSS -->
    <link rel="stylesheet" href="{{asset ('css/font-awesome.min.css') }}">

    <!-- ElegantFonts CSS -->
    <link rel="stylesheet" href="{{asset ('css/elegant-fonts.css') }}">

    <!-- themify-icons CSS -->
    <link rel="stylesheet" href="{{asset ('css/themify-icons.css') }}">

    <!-- Swiper CSS -->
    <link rel="stylesheet" href="{{asset ('css/swiper.min.css') }}">

    <!-- Styles -->
    <link rel="stylesheet" href="{{asset ('css/style.css') }}">
</head>
<body class="@yield('bodyclass')">
    <header class="site-header">
    <div class="top-header-bar">
            <div class="container">
                <div class="row flex-wrap justify-content-center justify-content-lg-between align-items-lg-center">
                    <div class="col-12 col-lg-8 d-none d-md-flex flex-wrap justify-content-center justify-content-lg-start mb-3 mb-lg-0">
                        <div class="header-bar-email">
                            MAIL: <a href="#">bemu@students.ukdw.ac.id</a>
                        </div><!-- .header-bar-email -->

                        <div class="header-bar-text">
                            <p>PHONE: <span>+62 882 1615 2324</span></p>
                        </div><!-- .header-bar-text -->
                    </div><!-- .col -->

                    <div class="col-12 col-lg-4 d-flex flex-wrap justify-content-center justify-content-lg-end align-items-center">
                        <div class="donate-btn">
                            <a href="#contact">Hubungi Kami!</a>
                        </div><!-- .donate-btn -->
                    </div><!-- .col -->
                </div><!-- .row -->
            </div><!-- .container -->
        </div><!-- .top-header-bar -->

        <div class="nav-bar">
            <div class="container">
                <div class="row">
                    <div class="col-12 d-flex flex-wrap justify-content-between align-items-center">
                        <div class="site-branding d-flex align-items-center">
                           <a class="d-block" href="/" rel="home"><img class="d-block" height="30px" src="images/BEMU.png" alt="logo"></a>
                        </div><!-- .site-branding -->

                        @yield('nav')

                        <div class="hamburger-menu d-lg-none">
                            <span></span>
                            <span></span>
                            <span></span>
                            <span></span>
                        </div><!-- .hamburger-menu -->
                    </div><!-- .col -->
                </div><!-- .row -->
            </div><!-- .container -->
        </div><!-- .nav-bar -->
    </header><!-- .site-header -->

    @yield('content')


    <footer class="site-footer">
        <div class="footer-widgets">
            <div class="container">
                <div class="row">
                    <div class="col-12 col-md-6 col-lg-3">
                        <div class="foot-about">
                            <h2><a class="foot-logo" href="#"><img src="images/BEMU.png" alt=""></a></h2>

                            <p>Ikuti terus akun media sosial resmi BEM UKDW untuk mendapatkan informasi-informasi menarik BEM UKDW terkini.</p>

                        </div><!-- .foot-about -->
                    </div><!-- .col -->

                    <div class="col-12 col-md-6 col-lg-3 mt-5 mt-md-0">
                        <h2>Useful Links</h2>

                        <ul>
                            <li><a href="#">Privacy Polticy</a></li>
                            <li><a href="#">Become  a Volunteer</a></li>
                            <li><a href="#">Donate</a></li>
                            <li><a href="#">Testimonials</a></li>
                            <li><a href="#">Causes</a></li>
                            <li><a href="#">Portfolio</a></li>
                            <li><a href="#">News</a></li>
                        </ul>
                    </div><!-- .col -->

                    <div class="col-12 col-md-6 col-lg-3 mt-5 mt-md-0">
                        <div class="foot-latest-news">
                            <h2>Latest News</h2>

                            <ul>
                                <li>
                                    <h3><a href="#">A new cause to help</a></h3>
                                    <div class="posted-date">MArch 12, 2018</div>
                                </li>

                                <li>
                                    <h3><a href="#">We love to help people</a></h3>
                                    <div class="posted-date">MArch 12, 2018</div>
                                </li>

                                <li>
                                    <h3><a href="#">The new ideas for helping</a></h3>
                                    <div class="posted-date">MArch 12, 2018</div>
                                </li>
                            </ul>
                        </div><!-- .foot-latest-news -->
                    </div><!-- .col -->

                    <div class="col-12 col-md-6 col-lg-3 mt-5 mt-md-0">
                        <div class="foot-contact" id="contact">
                            <h2>Contact</h2>

                            <ul>
                                <li><i class="fa fa-phone"></i><span>+62 882 1615 2324</span></li>
                                <li><i class="fa fa-envelope"></i><span>bemu@students.ukdw.ac.id</span></li>
                                <li><i class="fa fa-map-marker"></i><span>Ruang Bundar - UKDW (Jl. Dr. Wahidin Sudirohudo No.5-25)</span></li>
                                <li><i class="fa fa-instagram"></i><span>bem.ukdw</span></li>
                                <li><i class="fa fa-facebook"></i><span>BEM UKDW</span></li>
                                <li><i class="fa fa-wechat"></i><span>@bgy7965l</span></li>

                            </ul>
                        </div><!-- .foot-contact -->

                        <div class="subscribe-form">
                            <form class="d-flex flex-wrap align-items-center">
                                <input type="email" placeholder="Your email">
                                <input type="submit" value="send">
                            </form><!-- .flex -->
                        </div><!-- .search-widget -->
                    </div><!-- .col -->
                </div><!-- .row -->
            </div><!-- .container -->
        </div><!-- .footer-widgets -->

        <div class="footer-bar">
            <div class="container">
                <div class="row">
                    <div class="col-12">
                        <p class="m-0"><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
Copyright &copy;BEM UKDW <script>document.write(new Date().getFullYear());</script>
<!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. --></p>
                    </div><!-- .col-12 -->
                </div><!-- .row -->
            </div><!-- .container -->
        </div><!-- .footer-bar -->
    </footer><!-- .site-footer -->

    <script type='text/javascript' src="{{asset ('js/jquery.js')}}"></script>
    <script type='text/javascript' src="{{asset ('js/jquery.collapsible.min.js')}}"></script>
    <script type='text/javascript' src="{{asset ('js/swiper.min.js')}}"></script>
    <script type='text/javascript' src="{{asset ('js/jquery.countdown.min.js')}}"></script>
    <script type='text/javascript' src="{{asset ('js/circle-progress.min.js')}}"></script>
    <script type='text/javascript' src="{{asset ('js/jquery.countTo.min.js')}}"></script>
    <script type='text/javascript' src="{{asset ('js/jquery.barfiller.js')}}"></script>
    <script type='text/javascript' src="{{asset ('js/custom.js')}}"></script>

</body>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
    //Add smooth scrolling to all links
    $("a").on('click',function(event){
        //make sure this.hash has a value before everriding defaultbehavior
        if(this.hash !== ""){
            //Prevent default anchor click behavior
            event.preventDefault();

            //Store hash
            var hash = this.hash;

            //Using jQuery's animate() method to add page scroll
            //The oprional number (800) specifies the number of miliseconds it takes to scroll to specific area
            $('html, body').animate({
                scrollTop: $(hash).offset().top
            }, 800, function(){
                //Add hash (#) to URL when done scrolling
                window.location.hash = hash;
            });
        } // End if
    });
});
</script>
</html>