<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta name="description" content="">
    <meta name="keywords" content="">

    <!--Font family-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&family=Roboto:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">

    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com" rel="preconnect">
    <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Inter:wght@100;200;300;400;500;600;700;800;900&family=Nunito:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&display=swap"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">

    <!-- AOS -->
    <link href="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.css" rel="stylesheet">

    <!-- GLightbox -->
    <link href="https://cdn.jsdelivr.net/npm/glightbox@3.2.0/dist/css/glightbox.min.css" rel="stylesheet">

    <!-- Swiper -->
    <link href="https://cdn.jsdelivr.net/npm/swiper@9.4.1/swiper-bundle.min.css" rel="stylesheet">


    <!-- Main CSS File -->
    <link href="{{asset("css/style.css")}}" rel="stylesheet">

    <!-- =======================================================
  * Template Name: QuickStart
  * Template URL: https://bootstrapmade.com/quickstart-bootstrap-startup-website-template/
  * Updated: Aug 07 2024 with Bootstrap v5.3.3
  * Author: BootstrapMade.com
  * License: https://bootstrapmade.com/license/
  ======================================================== -->
</head>

<body class="index-page">

    <header id="header" class="header d-flex align-items-center fixed-top">
        <div class="container-fluid container-xl position-relative d-flex align-items-center">

            <a href="{{ url('/') }}" class="logo d-flex align-items-center me-auto">
                <img src="{{ asset("pictures/logo_armée.png") }}" class="img-fluid"
                    style="width: 300px; max-height: 300px;" alt="Logo">
            </a>

            <nav id="navmenu" class="navmenu">
                <ul id="navy">
                    <li><a href="{{url('/')}}" class="active text-light fs-5">Accueil</a></li>
                    <li><a class="active text-light fs-5" href="{{url('/')}}">Mon profile</a></li>
                    <li><a class="active text-light fs-5" href="{{url('/')}}">Se deconnecter</a></a></li>
                </ul>
                <i class="mobile-nav-toggle d-xl-none bi bi-list  text-light"></i>
            </nav>


        </div>
    </header>

    <main class="main">

        @yield('content')
    </main>



    <footer id="footer" class="footer position-relative light-background">

        <div class="container footer-top">
            <div class="row gy-4">
                <div class="col-lg-4 col-md-6 footer-about">
                    <img src="{{ asset("pictures/logo_armée.png") }}" class="img-fluid"
                        style="width: 400px; max-height: 400px;" alt="Logo">
                    <div class="footer-contact pt-3">
                        <p class="text-light fs-4">Cotonou</p>
                        <p class="mt-3 text-light fs-4"><strong>Phone:</strong> <span>+229</span></p>
                        <p class="text-light fs-4"><strong>Email:</strong> <span>mdn.contact@defense.bj</span></p>
                    </div>
                    <div class="social-links d-flex mt-4">
                        <a href="https://www.youtube.com/@defensenationalebenin3614" class="bg-light"><i
                                class="bi bi-youtube fs-4 text-danger"></i></a>
                        <a href="https://www.flickr.com/photos/defense_229" class="bg-light"> <img
                                src="{{ asset("pictures/flickr.png") }}" alt="Logo flickr"></a>
                    </div>
                </div>

            </div>
        </div>

        <div class="container copyright text-center mt-4">
            <p class="text-light fs-5">&copy;<span> 2025 - Ministère de la Défense Nationale du Bénin. Tous droits
                    réservés.</span></p>
            <div class="credits">
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you've purchased the pro version. -->
                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: [buy-url] -->
                Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
            </div>
        </div>

    </footer>

    <!-- Scroll Top -->
    <a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Preloader -->
    <div id="preloader"></div>

    <!-- Vendor JS Files -->
    <!-- Bootstrap -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>

    <!-- PHP Email Form Validation (pas de CDN officiel) -->
    <script src="assets/vendor/php-email-form/validate.js"></script>

    <!-- AOS -->
    <script src="https://cdn.jsdelivr.net/npm/aos@2.3.4/dist/aos.js"></script>

    <!-- GLightbox -->
    <script src="https://cdn.jsdelivr.net/npm/glightbox@3.2.0/dist/js/glightbox.min.js"></script>

    <!-- Swiper -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@9.4.1/swiper-bundle.min.js"></script>


    <!-- Main JS File -->
    <script src="{{asset("js/java.js")}}"></script>

</body>

</html>