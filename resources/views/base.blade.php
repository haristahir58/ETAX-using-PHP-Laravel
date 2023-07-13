<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>
        EasyTax | Home
    </title>
    <!-- Bootstrap 5 -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <!-- Font-Awesome 6 -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css" rel="stylesheet">
    <!-- AOS animations -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <!-- External Stylesheet -->
    <link rel="stylesheet" href="/css/app.css">
</head>

<body>
    <header>
        <nav class="navbar bg-transparent position-absolute p-0 max-p">
            <div class="container-fluid pt-3 d-flex justify-content-between">
                <div class="logo-content ps-2 ps-md-4 ps-lg-5 pt-4">
                    <a class="fw-bold fs-1 text-white text-decoration-none logo-name" href="/">
                        E-Tax
                    </a>
                </div>
                <a class="" href="login">Login</a>
                <div class="nav-toggler">
                    <button class="navbar-toggler m-3 mt-md-0 me-md-0 fixed-top ms-auto text-white" id="menu-btn"
                        type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasTop"
                        aria-controls="offcanvasTop">
                        <i class="fa-solid fa-ellipsis-vertical fa-sm menu-icon"></i>
                        <i class="fa-solid fa-ellipsis-vertical fa-sm menu-icon"></i>
                        <i class="fa-solid fa-ellipsis-vertical fa-sm"></i>
                        <span class="d-none d-md-inline navbar-brand mb-0 h1">Menu</span>
                    </button>
                </div> 
            </div>
        </nav>
        <div class="offcanvas menu-body offcanvas-top h-100 text-white" tabindex="-1" id="offcanvasTop"
            aria-labelledby="offcanvasTopLabel">
            <div class="offcanvas-header">
                <div class="logo-content ps-2 ps-md-4 ps-lg-5 pt-4">
                    <a class="fw-bold fs-1 text-white text-decoration-none logo-name ms-5 ps-5" href="/">
                        E-Tax
                    </a>
                </div>
                <button type="button"
                    class="arrow-btn text-white bg-transparent border-secondary border rounded-circle mt-4 me-5"
                    data-bs-dismiss="offcanvas" aria-label="Close">
                    <i class="fa-solid fa-close fa-xs"></i>
                </button>
            </div>
            <div class="offcanvas-body d-flex justify-content-center">
                <div class="row container bg-transparent">
                    <div class="col-md-6 p-4">
                        <ul class="fs-2 lh-lg">
                            <li class="nav-option">
                                <a href="/whoarewe">
                                    Who are we?
                                </a>
                            </li>
                            <li class="nav-option">
                                <a href="/services">
                                    What can we do for you?
                                </a>
                            </li>
                            @guest
                            <li class="nav-option">
                                <a href="/registration/signup">
                                    Register Now
                                </a>
                            </li>
                            <li class="nav-option">
                                <a class="login text-white" href="/login">
                                    LogIn
                                </a>
                            </li>   
                            @endguest
                            <li class="nav-option">
                                <a href="/privacypolicy">
                                    Privacy Policy
                                </a>
                            </li>
                        </ul>
                    </div>
                    <div class="col-md-6 d-flex flex-column justify-content-start align-items-center pt-5">
                        @auth
                            <div class="fs-3 lh-sm mb-5">
                                Hello, {{ auth()->user()->name }}
                            </div>
                            <form action="/logout" method="post">
                                @csrf
                                <button class="btn btn-lg contact-btn text-white rounded-pill mt-5" type="submit">Logout</button>
                            </form>
                            <div class="btn btn-lg contact-btn text-white rounded-pill mt-5">
                                <a href="/profile">
                                    See Profile
                                </a>
                            </div>
                            @else
                            <div class="fs-3 lh-sm mb-5">
                                Hello, Guest
                            </div>
                            <div class="btn btn-lg contact-btn text-white rounded-pill mt-5">
                                <a href="/registration/signup">
                                    Make a profile!
                                </a>
                            </div>
                        @endauth
                    </div>
                </div>
            </div>
        </div>
    </header>
    <main>
        @yield('content')
    </main>
    <footer>
        <div class="container mb-5">
            <div class="text-center text-white" style="background-color: transparent">
                <div class="container">
                    <section class="mt-5">
                        <div class="row text-center d-flex justify-content-center pt-5">
                            <div class="col-md-2">
                                <h6 class="text-uppercase font-weight-bold">
                                    <a href="/whoarewe" class="text-white">Who Are we</a>
                                </h6>
                            </div>
                            <div class="col-md-2">
                                <h6 class="text-uppercase font-weight-bold">
                                    <a href="/services" class="text-white">What can we do for you</a>
                                </h6>
                            </div>
                            <div class="col-md-2">
                                <h6 class="text-uppercase font-weight-bold">
                                    <a href="/registration/signup" class="text-white">Register now</a>
                                </h6>
                            </div>
                           
                            <div class="col-md-2">
                                <h6 class="text-uppercase font-weight-bold">
                                    <a href="/privacypolicy" class="text-white">Privacy Policy</a>
                                </h6>
                            </div>
                        </div>
                    </section>
                    <hr class="my-5" />
                    <section class="mb-5">
                        <div class="row d-flex justify-content-center">
                            <div class="col-lg-8">
                                <p>
                                    E-Tax <br> Complete Support by Our Tax Expert support in Filing Your Tax Return.
                                    <br> And we've made the process extremely simple you're going to love it
                                </p>
                            </div>
                        </div>
                    </section>
                    <section class="text-center mb-5">
                        <a href="https://www.facebook.com/" class="text-white me-4">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a href="https://www.twitter.com/" class="text-white me-4">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a href="https://www.google.com/" class="text-white me-4">
                            <i class="fab fa-google"></i>
                        </a>
                        <a href="https://www.instagram.com/" class="text-white me-4">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a href="https://www.linkedin.com/" class="text-white me-4">
                            <i class="fab fa-linkedin"></i>
                        </a>
                        <a href="https://www.github.com/" class="text-white me-4">
                            <i class="fab fa-github"></i>
                        </a>
                    </section>
                </div>

                <div class="text-center p-3" style="background-color: transparent">
                    © 2022 Copyright:
                    <a class="text-white" href="#top">E-Tax.com</a>
                </div>
            </div>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous">
    </script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init({
            duration:1000,
        });
    </script>
    @yield('scripts')
</body>

</html>