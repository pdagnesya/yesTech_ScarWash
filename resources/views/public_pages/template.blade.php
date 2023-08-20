<!DOCTYPE html>
<html lang="en">
    {{-- <head>
        <meta charset="utf-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
        <meta name="description" content="" />
        <meta name="author" content="" />
        <title>Clean Blog - Start Bootstrap Theme</title>
        <link rel="icon" type="image/x-icon" href="assets/favicon.ico" />
        <!-- Font Awesome icons (free version)-->
        <script src="https://use.fontawesome.com/releases/v6.3.0/js/all.js" crossorigin="anonymous"></script>
        <!-- Google fonts-->
        <link href="https://fonts.googleapis.com/css?family=Lora:400,700,400italic,700italic" rel="stylesheet" type="text/css" />
        <link href="https://fonts.googleapis.com/css?family=Open+Sans:300italic,400italic,600italic,700italic,800italic,400,300,600,700,800" rel="stylesheet" type="text/css" />
        <!-- Core theme CSS (includes Bootstrap)-->
        <link href="{{ asset('clean-blog.css') }}" rel="stylesheet" />
    </head> --}}
    <head>
        <link rel="stylesheet" href="{{ asset('style.css') }}" />
    
        <!-- GOOGLE FONT -->
        <link rel="preconnect" href="https://fonts.googleapis.com">
        <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
        <link href="https://fonts.googleapis.com/css2?family=Raleway:wght@400;500;600;700&display=swap" rel="stylesheet">
    
        <!-- BOOTSTRAP -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet"
            integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">
        <style>
            .debug {
                border: 2px solid red;
            }
        </style>
    </head>
    <body>
        <!-- Navigation-->
        <nav class="navbar navbar-expand-lg navbar-light" id="mainNav">
            <div class="container px-4 px-lg-5">
                <a class="navbar-brand" href="index.html"></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                    
                    <i class="fas fa-bars"></i>
                </button>
                <div class="collapse navbar-collapse" id="navbarResponsive">
                    <ul class="navbar-nav ms-auto py-4 py-lg-0">
                        <li class="nav-item"><a class="nav-link px-lg-3 py-3 py-lg-4" href="{{ route('homepage') }}"></a></li>
                    </ul>
                </div>
            </div>
        </nav>
        <!-- Page Header-->
        {{-- <header class="masthead" style="background-image: url('assets/img/home-bg.jpg')">
            <div class="container position-relative px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7">
                        <div class="site-heading">
                            <h1>{{ ENV('APP_NAME') }}</h1>
                            <span class="subheading">A Blog Theme by Start Bootstrap</span>
                        </div>
                    </div>
                </div>
            </div>
        </header> --}}
        <header class="position-fixed w-100 transition text-white">
            <div class="d-flex p-4 container align-items-center">
                <a href="/" class="d-flex text-decoration-none" >
                    <h3 class="my-auto text-white" ><img src="{{ asset('images/Logo_Scarwash.png') }}" style="width: 80px;border: solid; border-radius: 100%;}"></h3>
                </a>
    
                <!-- RIGHT MENU -->
                <div class="ms-auto d-lg-flex d-none gap-2">
                    <a href="/login" class="btn btn-dark">
                        Login/Register
                    </a>
                    <a href="location" class="btn btn-dark">
                        Location
                    </a>
                    <a href="/blog" class="btn btn-dark">
                        Blog
                    </a>
                    <a href="/pricelist" class="btn btn-dark">
                        Price List
                    </a>
                </div>
    
                <!-- RIGHT MOBILE MENU ICON -->
                <div class="d-lg-none d-flex ms-auto" onclick="showMenu()">
                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" fill="currentColor"
                        class="pointer bi bi-three-dots-vertical" viewBox="0 0 16 16">
                        <path
                            d="M9.5 13a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0zm0-5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z" />
                    </svg>
                </div>
            </div>
    
            <!-- MOBILE MENU -->
            <div id="menu" class="hide p-4 position-fixed left-0 top-0 w-100 h-100 bg-black d-flex flex-column">
                <div onclick="showMenu()" class="pointer ms-auto">
                    X
                </div>
    
                <!-- MENU -->
                <a href="/location" class="btn text-white">
                    Location
                    <hr />
                </a>
                <a href="/blog" class="btn text-white">
                    Blog
                    <hr />
                </a>
                <div>
                    <a href="/pricelist" class="btn btn-light w-100">PRICE LIST</a>
                </div>
            </div>
        </header>

        <!-- Main Content-->
        @yield('content')


        <!-- Footer-->
        {{-- <footer class="border-top">
            <div class="container px-4 px-lg-5">
                <div class="row gx-4 gx-lg-5 justify-content-center">
                    <div class="col-md-10 col-lg-8 col-xl-7">
                        <ul class="list-inline text-center">
                            <li class="list-inline-item">
                                <a href="#!">
                                    <span class="fa-stack fa-lg">
                                        <i class="fas fa-circle fa-stack-2x"></i>
                                        <i class="fab fa-twitter fa-stack-1x fa-inverse"></i>
                                    </span>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#!">
                                    <span class="fa-stack fa-lg">
                                        <i class="fas fa-circle fa-stack-2x"></i>
                                        <i class="fab fa-facebook-f fa-stack-1x fa-inverse"></i>
                                    </span>
                                </a>
                            </li>
                            <li class="list-inline-item">
                                <a href="#!">
                                    <span class="fa-stack fa-lg">
                                        <i class="fas fa-circle fa-stack-2x"></i>
                                        <i class="fab fa-github fa-stack-1x fa-inverse"></i>
                                    </span>
                                </a>
                            </li>
                        </ul>
                        <div class="small text-center text-muted fst-italic">Copyright &copy; Your Website 2023</div>
                    </div>
                </div>
            </div>
        </footer> --}}
        <footer class="py-5 container" style="background: black; color: white; max-width: 100%">
            {{-- <div class="row">
                <div class="col-lg-4">
                    <p>Kami merupakan jasa pencucian dan perawatan sepatu. Selain sepatu kai juga memberikan erawatan pada tas ataupun dompet.Tim kami sudah berpengalaman di bidang ini. Nikmati pelayanan perawatan sepatu dan tas terbaik hanya di SCARWASH. </p>
                    <b>Instagram:</b>
                    <p><a href="https://www.instagram.com/scar.wash">www.instagram.com/scar.wash</a></p>
                    <b>Contact</b>
                    <p>081259899595</p>
                </div> --}}

    
                <div class="col-lg-8" style="display: flex;  padding-left:150px ; width: 100%; padding-right:150px">
                    <div >
                        <p><img style="height:200px;"
                            src="{{ asset('images/logo_Scarwash.png') }}"></p>
                    </div>
                    <div style="padding-left: 100px">
                    <p>Kami merupakan jasa pencucian dan perawatan sepatu. Selain sepatu kai juga memberikan erawatan pada tas ataupun dompet.Tim kami sudah berpengalaman di bidang ini. Nikmati pelayanan perawatan sepatu dan tas terbaik hanya di SCARWASH. </p>
                    <b>Instagram:</b>
                    <p><a href="https://www.instagram.com/scar.wash">www.instagram.com/scar.wash</a></p>
                    <b>Contact</b>
                    <p><a href="wa.me/6281259899595">081259899595</a></p>
                    </div>
                
                    {{-- <b>Store 1</b>
                    <p>Jl. Manunggal Kebonsari No.05 Jambangan, Surabaya</p>
    
                    <b>Store 2</b>
                    <p>Jl. Dharmahusada Stand No. 14 Surabaya</p>

                    <b>Store 3</b>
                    <p>Jl. Raya Lidah Wetan no.05 Surabaya</p>

                    <b>Store 4</b>
                    <p>Ruko Northwest boulevard nv1 No 23 Citraland Utara Suarabay</p>
                    
                    <b>Store 5</b>
                    <p>Jl. Gebang Lor No.31 Sukolilo SUrabaya</p>

                    <b>Store 6</b>
                    <p>Jl. Pecantingan No.74 Sekardangan, Sidoarjo</p>
                    
                    <b>Store 7</b>
                    <p>Jl. Raya Wadung Asri No.26 Waru Sidoarjo</p> --}}
                </div> 
            </div>
            <hr />
            <div class="d-flex justify-content-between">
                <b></b>
                <b></b>
                <b><a href="/s">About us</a></b>
                <b>SCARWASH</b>
                <b><a href="https://heylink.me/scarwash/">Contact Us</a></b>
                <b></b>
                <b></b>
            </div>
            <hr />
            <div class="text-center" style="padding-top:20px;">
                Copyright by PLAN INDONESIA x Yes Tech x peduli digital: by agnesya
            </div>
        </footer>
        {{-- <!-- Bootstrap core JS-->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
        <!-- Core theme JS-->
        <script src="js/scripts.js"></script> --}}
        <script>
            /**
             * SCRIPT TO CHANGE HEADER BACKGROUND
             **/
            const header = document.querySelector('header');
    
            // Listen for the scroll event
            window.addEventListener('scroll', function () {
                // Check the scroll position
                const scrollPosition = window.scrollY;
    
                // Change the background color if scroll position is 100 or more
                if (scrollPosition >= 100) {
                    header.style.backgroundColor = 'black'; // Change the color to your desired value
                } else {
                    header.style.backgroundColor = 'transparent'; // Change the color to your desired value
                }
            });
    
            /**
             * SCRIPT TO SHOW MOBILE MENU
             **/
            const menu = document.getElementById('menu')
    
            function showMenu() {
                if (menu.classList.contains('show')) {
                    menu.classList.remove("show")
                    menu.classList.add("hide")
                } else {
                    menu.classList.remove("hide")
                    menu.classList.add("show")
                }
            }
    
        </script>
    </body>
</html>
