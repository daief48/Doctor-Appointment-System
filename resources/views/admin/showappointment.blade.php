<!DOCTYPE html>
<html lang="en">

<head>
    @include('admin.css')
</head>

<body>
   <div class="container-scroller">
    @include('admin.sidebar')
    <div class="container-fluid page-body-wrapper">
        @include('admin.navbar')
        <div class="main-panel">
            <div class="content-wrapper" style="background: #12122a">
                <div class="row">
                    <div class="col-md-12 grid-margin stretch-card">
                        <div class="card">
                            <div class="card-body">
                                <h4 class="card-title">Appointment Details</h4>
                                <div class="table-responsive">
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr class="bg-dark text-white">
                                                <th style="color: white;">Customer Name</th>
                                                <th style="color: white;">Email</th>
                                                <th style="color: white;">Phone</th>
                                                <th style="color: white;">Doctor Name</th>
                                                <th style="color: white;">Date</th>
                                                <th style="color: white;">Message</th>
                                                <th style="color: white;">Status</th>
                                                <th style="color: white;">Payment Status</th>
                                                <th style="color: white;">Actions</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($data as $appoint)
                                            <tr>
                                                <td style="color: white;">{{$appoint->name}}</td>
                                                <td style="color: white;">{{$appoint->email}}</td>
                                                <td style="color: white;">{{$appoint->phone}}</td>
                                                <td style="color: white;">{{$appoint->doctor}}</td>
                                                <td style="color: white;">{{$appoint->date}}</td>
                                                <td style="color: white;">{{$appoint->message}}</td>
                                                <td style="color: white;">{{$appoint->status}}</td>
                                                <td style="color: white;">
                                                    @if($appoint->paid == 'Paid')
                                                        <button type="button" class="btn btn-success">Paid</button>
                                                    @else
                                                        <button type="button" class="btn btn-danger">Not Paid</button>
                                                    @endif
                                                </td>
                                                <td style="color: white;">
                                                    <div class="btn-group">
                                                        <a href="{{url('approved',$appoint->id)}}" class="btn btn-success">Approve</a>
                                                        <a href="{{url('canceled',$appoint->id)}}" class="btn btn-danger">Cancel</a>
                                                    </div>
                                                </td>
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

    @include('admin.script')
</body>

</html>