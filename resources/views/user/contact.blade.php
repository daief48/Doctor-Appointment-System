<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us</title>

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.7.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="../assets/css/maicons.css">

    <link rel="stylesheet" href="../assets/css/bootstrap.css">

    <link rel="stylesheet" href="../assets/vendor/owl-carousel/css/owl.carousel.css">

    <link rel="stylesheet" href="../assets/vendor/animate/animate.css">

    <link rel="stylesheet" href="../assets/css/theme.css">

</head>
<body>

<!-- Navigation -->
<header>
    <div class="topbar">
        <div class="container">
            <div class="row">
                <div class="col-sm-8 text-sm">
                    <div class="site-info">
                        <a href="#"><span class="mai-call text-primary"></span> +00 123 4455 6666</a>
                        <span class="divider">|</span>
                        <a href="#"><span class="mai-mail text-primary"></span> mail@gmail.com</a>
                    </div>
                </div>
                <div class="col-sm-4 text-right text-sm">
                    <div class="social-mini-button">
                        <a href="#"><span class="mai-logo-facebook-f"></span></a>
                        <a href="#"><span class="mai-logo-twitter"></span></a>
                        <a href="#"><span class="mai-logo-dribbble"></span></a>
                        <a href="#"><span class="mai-logo-instagram"></span></a>
                    </div>
                </div>
            </div> <!-- .row -->
        </div> <!-- .container -->
    </div> <!-- .topbar -->

    <nav class="navbar navbar-expand-lg navbar-light shadow-sm">
        <div class="container">
            <a class="navbar-brand" href="#"><span class="text-primary">Doctor Appoinment </span>Booking
                System</a>

            {{-- <form action="#">
            <div class="input-group input-navbar">
                <div class="input-group-prepend">
                    <span class="input-group-text" id="icon-addon1"><span class="mai-search"></span></span>
                </div>
                <input type="text" class="form-control" placeholder="Enter keyword.." aria-label="Username" aria-describedby="icon-addon1">
            </div>
        </form> --}}

            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupport"
                aria-controls="navbarSupport" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupport">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="/">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ url('showdoctorUser') }}">Doctors</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/about">About Us</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="/contact">Contact</a>
                    </li>

                    @if (Route::has('login'))
                        @auth

                            <li class="nav-item">
                                <a class="nav-link" href="{{ url('myappoinment') }}">My Appoinment</a>
                            </li>

                            <div class="dropdown">
                                <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton"
                                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    {{ Auth::user()->name }}
                                </button>
                                <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                                    <ul style="list-style: none;">
                                        <li class="nav-item">
                                            <a href="{{ route('profile.show') }}">Profile</a>
                                        </li>

                                        <li class="nav-item mr-2">
                                            <form method="POST" action="{{ route('logout') }}">
                                                @csrf
                                                <a href="{{ route('logout') }}"
                                                    onclick="event.preventDefault(); this.closest('form').submit();">
                                                    Logout
                                                </a>
                                            </form>
                                        </li>

                                    </ul>
                                </div>
                            </div>
                        @else
                            <li class="nav-item">
                                <a class="btn btn-primary ml-lg-3" href="{{ route('login') }}">Login</a>
                            </li>

                            <li class="nav-item">
                                <a class="btn btn-primary ml-lg-3" href="{{ route('register') }}">Register</a>
                            </li>

                        @endauth
                    @endif

                </ul>
            </div> <!-- .navbar-collapse -->
        </div> <!-- .container -->
    </nav>
</header>
<!-- Contact Information Section -->
<div class="container mt-5">
    <div class="row">
        <div class="col-md-6">
            <h2 class="mb-4">For Support:</h2>
            <p><strong>Email:</strong> lamisatahsin020@gmail.com</p>
            <p><strong>Phone:</strong> 01970217197</p>
        </div>
        <div class="col-md-6">
            <h2 class="mb-4">General Inquiries:</h2>
            <p><strong>Email:</strong> af90946@gmail.com</p>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-md-12">
            <h2 class="mb-4">Address:</h2>
            <p>House 06 (Ground Floor), Road 30, Sector 07, Uttara Model Town, Dhaka-1230</p>
        </div>
    </div>
</div>



<footer class="page-footer " style="margin-top:6rem">
    <div class="container">
        <div class="row px-md-3">
            <div class="col-sm-6 col-lg-3 py-3">
                <h5>Company</h5>
                <ul class="footer-menu">
                    <li><a href="#">About Us</a></li>
                    <li><a href="#">Career</a></li>
                    <li><a href="#">Editorial Team</a></li>
                    <li><a href="#">Protection</a></li>
                </ul>
            </div>
            <div class="col-sm-6 col-lg-3 py-3">
                <h5>More</h5>
                <ul class="footer-menu">
                    <li><a href="#">Terms & Condition</a></li>
                    <li><a href="#">Privacy</a></li>
                    <li><a href="#">Advertise</a></li>
                    <li><a href="#">Join as Doctors</a></li>
                </ul>
            </div>
            <div class="col-sm-6 col-lg-3 py-3">
                <h5>Our partner</h5>
                <ul class="footer-menu">
                    <li><a href="#">Code Tree</a></li>
                    <li><a href="#">Popular</a></li>
                    <li><a href="#">Squre</a></li>
                    <li><a href="#">Lab Aid</a></li>
                </ul>
            </div>
            <div class="col-sm-6 col-lg-3 py-3">
                <h5>Contact</h5>
                <p class="footer-link mt-2">Sector 7 uttara, Dhaka</p>
                <a href="#" class="footer-link">01923343389</a>
                <a href="#" class="footer-link">healthcare@gmail.com</a>

                <h5 class="mt-3">Social Media</h5>
                <div class="footer-sosmed mt-3">
                    <a href="#" target="_blank"><span class="mai-logo-facebook-f"></span></a>
                    <a href="#" target="_blank"><span class="mai-logo-twitter"></span></a>
                    <a href="#" target="_blank"><span class="mai-logo-google-plus-g"></span></a>
                    <a href="#" target="_blank"><span class="mai-logo-instagram"></span></a>
                    <a href="#" target="_blank"><span class="mai-logo-linkedin"></span></a>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- Bootstrap JavaScript and Popper.js (Optional) -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.7.0/dist/js/bootstrap.bundle.min.js"></script>

</body>
</html>
