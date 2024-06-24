<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us</title>

    <link rel="stylesheet" href="../assets/css/maicons.css">

    <link rel="stylesheet" href="../assets/css/bootstrap.css">

    <link rel="stylesheet" href="../assets/vendor/owl-carousel/css/owl.carousel.css">

    <link rel="stylesheet" href="../assets/vendor/animate/animate.css">

    <link rel="stylesheet" href="../assets/css/theme.css">


    <!-- Font Awesome CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet">
    <style>
        .paddingTB60 {
            padding: 60px 0px 60px 0px;
        }

        .gray-bg {
            background: #F1F1F1 !important;
        }

        .about-title {}

        .about-title h1 {
            color: #535353;
            font-size: 45px;
            font-weight: 600;
        }

        .about-title span {
            color: #AF0808;
            font-size: 45px;
            font-weight: 700;
        }

        .about-title h3 {
            color: #535353;
            font-size: 23px;
            margin-bottom: 24px;
        }

        .about-title p {
            color: #7a7a7a;
            line-height: 1.8;
            margin: 0 0 15px;
        }

        .about-paddingB {
            padding-bottom: 12px;
        }

        .about-img {
            padding-left: 57px;
        }

        /* Social Icons */
        .about-icons {
            margin: 48px 0px 48px 0px;
        }

        .about-icons i {
            margin-right: 10px;
            padding: 0px;
            font-size: 35px;
            color: #323232;
            box-shadow: 0 0 3px rgba(0, 0, 0, .2);
        }

        .about-icons li {
            margin: 0px;
            padding: 0;
            display: inline-block;
        }

        #social-fb:hover {
            color: #3B5998;
            transition: all .001s;
        }

        #social-tw:hover {
            color: #4099FF;
            transition: all .001s;
        }

        #social-gp:hover {
            color: #d34836;
            transition: all .001s;
        }

        #social-em:hover {
            color: #f39c12;
            transition: all .001s;
        }
    </style>
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
                <a class="navbar-brand" href="#"><span class="text-primary">Doctor Appoinment </span>Booking System</a>

                {{-- <form action="#">
                    <div class="input-group input-navbar">
                        <div class="input-group-prepend">
                            <span class="input-group-text" id="icon-addon1"><span class="mai-search"></span></span>
                        </div>
                        <input type="text" class="form-control" placeholder="Enter keyword.." aria-label="Username" aria-describedby="icon-addon1">
                    </div>
                </form> --}}

                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupport" aria-controls="navbarSupport" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupport">
                    <ul class="navbar-nav ml-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href="/">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="{{url('showdoctorUser')}}">Doctors</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/about">About Us</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="/contact">Contact</a>
                        </li>

                        @if(Route::has('login'))
                        @auth

                        <li class="nav-item">
                            <a class="nav-link" href="{{url('myappoinment')}}">My Appoinment</a>
                        </li>

                        <div class="dropdown">
                            <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
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
                                            <a href="{{ route('logout') }}" onclick="event.preventDefault(); this.closest('form').submit();">
                                                Logout
                                            </a>
                                        </form>
                                    </li>

                                </ul>
                            </div>
                        </div>



                        @else
                        <li class="nav-item">
                            <a class="btn btn-primary ml-lg-3" href="{{route('login')}}">Login</a>
                        </li>

                        <li class="nav-item">
                            <a class="btn btn-primary ml-lg-3" href="{{route('register')}}">Register</a>
                        </li>

                        @endauth
                        @endif

                    </ul>
                </div> <!-- .navbar-collapse -->
            </div> <!-- .container -->
        </nav>
    </header>

    <!-- About Us Section -->
    <div class="about-section paddingTB60 gray-bg">
        <div class="container">
            <div class="row">
                <div class="col-md-7 col-sm-6">
                    <div class="about-title clearfix">
                        <h1>About <span>Doctor Appointment Booking System</span></h1>
                        <h3>Welcome to our platform</h3>
                        <p class="about-paddingB">
                            Welcome to our Doctor Appointment Booking System, where healthcare meets convenience. Our
                            platform is dedicated to revolutionizing the way you access medical services. Committed to
                            making healthcare accessible to all, we strive to connect patients with trusted healthcare
                            providers effortlessly. Our user-friendly interface, coupled with cutting-edge technology,
                            ensures a seamless experience for both patients and healthcare professionals. At Doctor
                            Appointment Booking System, we believe in the power of innovation to transform the
                            healthcare landscape, making quality medical care just a click away.
                        </p>
                        <div class="about-icons">
                            <ul>
                                <li><a href="#"><i class="fab fa-facebook-square fa-3x social"></i></a></li>
                                <li><a href="#"><i class="fab fa-twitter-square fa-3x social"></i></a></li>
                                <li><a href="#"><i class="fab fa-google-plus-square fa-3x social"></i></a></li>
                                <li><a href="#"><i class="fas fa-envelope-square fa-3x social"></i></a></li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-md-5 col-sm-6">
                    <div class="about-img">
                        <img src="https://img.freepik.com/free-psd/interior-modern-emergency-room-with-empty-nurses-station-generative-ai_587448-2137.jpg"
                            alt="Doctor Appointment Booking System">
                    </div>
                </div>
            </div>
        </div>
    </div>
    <footer class="page-footer">
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
