<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <meta name="copyright" content="MACode ID, https://macodeid.com/">

    <title>One Health - Medical Center HTML5 Template</title>

    <link rel="stylesheet" href="../assets/css/maicons.css">

    <link rel="stylesheet" href="../assets/css/bootstrap.css">

    <link rel="stylesheet" href="../assets/vendor/owl-carousel/css/owl.carousel.css">

    <link rel="stylesheet" href="../assets/vendor/animate/animate.css">

    <link rel="stylesheet" href="../assets/css/theme.css">

    <style>
        .btn-secondar{
            background:gray;
        }
    </style>
</head>

<body>

    <!-- Back to top button -->
    <div class="back-to-top"></div>

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


    @if(isset($appoint) && $appoint->count() > 0)
    <div align="center" style="padding: 70px;">
        <table class="table table-bordered table-dark text-center">
            <thead>
                <tr>
                    <th scope="col">Doctor Name</th>
                    <th scope="col">Message</th>
                    <th scope="col">Time Slot</th>
                    <th scope="col">Date</th>
                    <th scope="col">Status</th>
                    <th>Prescription</th>

                    <th scope="col">Cancel Appointment</th>
                </tr>
            </thead>
            <tbody>
                @foreach($appoint as $appointment)
                <tr>
                    <td>{{ $appointment->name }}</td>
                    <td>{{ $appointment->message }}</td>
                    <td>{{ $appointment->timeSlots }}</td>
                    <td>{{ $appointment->date }}</td>
                    
                    <td>{{ $appointment->status }}</td>
                    <td>
                        <a href="{{ url('presciption', $appointment['id']) }}" class="btn {{ strlen($appointment['prescription']) === 0 ? "btn-success" : "btn-primary" }}">
                            {{ strlen($appointment['prescription']) === 0 ? "Not Proccess Yet" : "View" }}
                        </a>
                    </td>
                    <td>
                        <a class="btn  {{ strlen($appointment['prescription']) === 0 ? "btn-danger" : "btn-secondar" }}" 
                            @if(strlen($appointment['prescription']) === 0) 
                                href="{{ url('cancel_appoint', $appointment->id) }}" 
                            @else 
                                href="{{ url('/myappoinment') }}" 
                            @endif
                        >
                            Cancel
                        </a>
                    </td>
                    
                </tr>
                @endforeach
            </tbody>
        </table>

    </div>
    @else
    <h1 class="text-center mt-4">No Appointments to show</h1>
    @endif



    <script src="../assets/js/jquery-3.5.1.min.js"></script>

    <script src="../assets/js/bootstrap.bundle.min.js"></script>

    <script src="../assets/vendor/owl-carousel/js/owl.carousel.min.js"></script>

    <script src="../assets/vendor/wow/wow.min.js"></script>

    <script src="../assets/js/theme.js"></script>

</body>

</html>
