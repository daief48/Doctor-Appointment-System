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
    <link rel="stylesheet" type="text/css" href="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/css/jquery.dataTables.css">

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

    <div class="col-10 m-auto mt-4">
        <br>
        <div id="search" class="row m-4">
            <div class="col-md-6"></div>
            <div class="col-md-3">
                <input type="text" id="doctor_name" oninput="getinput()" class="form-control" placeholder="Search Doctor Name">
            </div>
            
            <div class="col-md-3">
                <select id="speciality" class="form-control">
                    <option value="">--Please choose Speciality--</option>
                    @foreach ($data as $doctor)
                    <option value="{{ $doctor->speciality }}">{{ $doctor->speciality }}</option>
                    @endforeach
                </select>
            </div>
            
        </div>

        <table class="table table-bordered text-center" id="table_id">

            <thead class="thead-dark">
                <tr>
                    <th>Doctor Name</th>
                    <th>Phone</th>
                    <th>Speciality</th>
                    <th>Room No</th>
                    <th>From - To</th>
                    <th>Image</th>
                    <th>Appoint</th>
                </tr>
            </thead>
            <tbody id="b-table">
                @foreach ($data as $doctor)
                <tr>
                    <td>{{ $doctor->name }}</td>
                    <td>{{ $doctor->phone }}</td>
                    <td>{{ $doctor->speciality }}</td>
                    <td>{{ $doctor->room }}</td>
                    <td>
                        @php
                        $timeSlots = unserialize($doctor->timeSlots);
                        @endphp

                        @foreach ($timeSlots as $slot)
                        <p class="mb-1">From: {{ $slot['from'] }} - To: {{ $slot['to'] }}</p>
                        @endforeach
                    </td>
                    <td>
                        <img height="150" width="150" src="{{ asset('doctorimage/' . $doctor->image) }}" alt="" class="img-thumbnail" style="height: 155px;width: 125px;">
                    </td>
                    <td>
                        <a href="{{ url('appoint', $doctor->id) }}" class="btn btn-outline-primary btn-sm" style="margin-top: 50px">Appoint</a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
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

    <script src="../assets/js/jquery-3.5.1.min.js"></script>

    <script src="../assets/js/bootstrap.bundle.min.js"></script>

    <script src="../assets/vendor/owl-carousel/js/owl.carousel.min.js"></script>

    <script src="../assets/vendor/wow/wow.min.js"></script>

    <script src="../assets/js/theme.js"></script>
    {{--
    <script type="text/javascript" charset="utf8" src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-1.8.2.min.js"></script>
    <script type="text/javascript" charset="utf8" src="http://ajax.aspnetcdn.com/ajax/jquery.dataTables/1.9.4/jquery.dataTables.min.js"></script> --}}
    <script>
        function  getinput()
        {
            var selectedSpeciality = $('#speciality').val();
    var doctor = $('#doctor_name').val();

    $.ajax({
        url: 'http://127.0.0.1:8000/api/getdoctortimeByNameAndSpeciality/',
        type: 'GET',
        data: {
            doctor: doctor,
            speciality: selectedSpeciality
        },
        success: function(data) {
            // Populate the table with the received data
            populateTable(data);
        },
        error: function(xhr, status, error) {
            console.error('Error:', error);
        }
    });        }
   $('#speciality').on('change', function() {
    var selectedSpeciality = $('#speciality').val();
    var doctor = $('#doctor_name').val();

    $.ajax({
        url: 'http://127.0.0.1:8000/api/getdoctortimeByNameAndSpeciality/',
        type: 'GET',
        data: {
            doctor: doctor,
            speciality: selectedSpeciality
        },
        success: function(data) {
            // Populate the table with the received data
            populateTable(data);
        },
        error: function(xhr, status, error) {
            console.error('Error:', error);
        }
    });
});




        // Function to populate the table with data
        function populateTable(data) {
            var tableBody = $('#b-table');
            $('#b-table').empty();

            // Iterate through each doctor in the data
            data.forEach(function(doctor) {
                var timeSlotsHtml = '';
                // console.log(doctor.timeSlots);
                // Iterate through time slots
                doctor.timeSlots.forEach(function(slot) {
                    timeSlotsHtml += '<p class="mb-1">From: ' + slot.from + ' - To: ' + slot.to + '</p>';
                });

                // Create a table row for the doctor
                var row = '<tr>' +
                    '<td>' + doctor.name + '</td>' +
                    '<td>' + doctor.phone + '</td>' +
                    '<td>' + doctor.speciality + '</td>' +
                    '<td>' + doctor.room + '</td>' +
                    '<td>' + timeSlotsHtml + '</td>' +
                    '<td><img height="150" width="150" src="doctorimage/' + doctor.image + '" alt="" class="img-thumbnail" style="height: 155px;width: 125px;"></td>' +
                    '<td><a href="appoint/' + doctor.id + '" class="btn btn-outline-primary btn-sm" style="margin-top: 50px">Appoint</a></td>' +
                    '</tr>';

                // Append the row to the table body
                tableBody.append(row);
            });
        }

        // function getSpeciality(select) {
        //     var selectedValue = select.value;
        //     $('#b-table').empty();

        //     var name = $('#doctor_name').val();
        //     $.ajax({
        //         url: 'http://127.0.0.1:8000/api/searchSpeciality/'
        //         , type: 'GET'
        //         , data: {
        //             speciality: selectedValue
        //         }
        //         , success: function(data) {
        //             // Populate the table with the received data
        //             populateTable(data);
        //         }
        //         , error: function(xhr, status, error) {
        //             console.error('Error:', error);
        //         }
        //     });
        // }

    </script>
</body>

</html>
