<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Propati Real Estates</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">

    <!-- Favicon -->
    <link href="{{ asset('img/favicon.ico') }}" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Heebo:wght@400;500;600&family=Inter:wght@700;800&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="{{ asset('lib/animate/animate.min.css') }}" rel="stylesheet">
    <link href="{{ asset('lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">

    <!-- Customized Bootstrap Stylesheet -->
    <link href="{{ asset('css/bootstrap.min.css') }}" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
</head>

<body>
    <!-- Navbar Start -->
    <div class="container-fluid nav-bar bg-transparent">
        <nav class="navbar navbar-expand-lg bg-white navbar-light py-0 px-4">
            <a href="/" class="navbar-brand d-flex align-items-center text-center">
                <div class="icon p-2 me-2">
                    <img class="img-fluid" src="img/icon-deal.png" alt="Icon" style="width: 30px; height: 30px;">
                </div>
                <h1 class="m-0 text-primary">Propati</h1>
            </a>
            <button type="button" class="navbar-toggler" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            @auth
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto align-items-center">
                    <a href="/" class="nav-item nav-link active">Home</a>
                    <a href="/about" class="nav-item nav-link">About</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Properties</a>
                        <div class="dropdown-menu rounded-0 m-0">
                            <a href="/properties?property_type=Apartment" class="dropdown-item">Apartment</a>
                            <a href="/properties?property_type=Office" class="dropdown-item">Office</a>
                            <a href="/properties?property_type=Shop" class="dropdown-item">Shop</a>
                            <a href="/properties?property_type=Land" class="dropdown-item">Land</a>
                        </div>
                    </div>
                    <a href="/contact" class="nav-item nav-link">Contact</a>
                    <li class="nav-item">
                        <form action="/logout" method="POST" class="d-flex align-items-center">
                            @csrf
                            <button type="submit" class="btn btn-link text-dark">
                                LOGOUT
                            </button>
                        </form>
                    </li>
                </div>
                <a href="/houses/manage" class="btn btn-primary px-3 d-none d-lg-flex"> MY PROPERTIES</a>
            </div>

            @else

            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav ms-auto">
                    <a href="/" class="nav-item nav-link active">Home</a>
                    <a href="/about" class="nav-item nav-link">About</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">Properties</a>
                        <div class="dropdown-menu rounded-0 m-0">
                            <a href="/properties?property_type=Apartment" class="dropdown-item">Apartment</a>
                            <a href="/properties?property_type=Office" class="dropdown-item">Office</a>
                            <a href="/properties?property_type=Shop" class="dropdown-item">Shop</a>
                            <a href="/properties?property_type=Land" class="dropdown-item">Land</a>
                        </div>
                    </div>
                    <a href="/contact" class="nav-item nav-link">Contact</a>
                    <a href="/login" class="nav-item nav-link">Login</a>
                </div>
                <a href="/register" class="btn btn-primary px-3 d-none d-lg-flex">Become an Agent</a>
            </div>
            @endauth
        </nav>
    </div>
    <!-- Navbar End -->