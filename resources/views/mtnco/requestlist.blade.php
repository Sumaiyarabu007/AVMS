<!doctype html>
<html lang="en">
<head>
    <title>Jeep1 Info</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="css/style.css">

    @include("mtnco.mtncocss")

</head>
<body>
    
<div class="container-scroller" style="background-color:White">
    @include("mtnco.navbar")
    <section class="ftco-section">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-6 text-center mb-5" style="top:20px;">
                    <h2 class="heading-section" style="color:black;">REQUEST LIST</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="table-wrap">
                        <table class="table">
                            <thead class="thead-dark">
                                
                            <tr>
                                
                                <th>Date</th>
                                <th>Vehicle Type</th>
                                <th>V_ID</th>
                                <th>Driver's Name</th>
                                <th>2nd seater's Name</th>
                                <th>Authority</th>
                                <th>Destination</th>
                                <th>KM Reading</th>
                        
                                 <th>Start Time</th>
                                 <th>End Time</th>
                                 <th>Fuel</th>
                                <th>Last maint date</th>
                                <th>Comment</th>

                            </tr>
                            </thead>

                            
                            @foreach($data as $data)
                        <tr>
                            <td>{{$data->date}}</td>
                            <td>{{$data->vehicle_type}}</td>
                            <td>{{$data->v_id}}</td>
                            <td>{{$data->drivers_name}}</td>
                            <td>{{$data->second_seater_name}}</td>
                            <td>{{$data->authority}}</td>
                            <td>{{$data->destination}}</td>
                            <td>{{$data->km_reading}}</td>
                            <td>{{$data->start_time}}</td>
                            <td>{{$data->probable_end_time}}</td>
                            <td>{{$data->present_fuel}}</td>
                            <td>{{$data->last_maintenance_date}}</td>
                            <td>{{$data->comment}}</td>

                        </tr>
                        @endforeach



                        <tr>
                                
                                <td>01.10.22</td>
                                <td>Jeep</td>
                                <td>102932</td>
                                <td>Lcpl Momin Haque</td>
                                <td>Snk Ali Hossain</td>
                                <td>Training</td>
                                <td>Jessore</td>
                                <td>1530hr</td>
                                <td>25.10.22</td>
                                <td>Request</td>
                            </tr>


                            <tr>
                                
                                <td>06.10.22</td>
                                <td>3Ton</td>
                                <td>102932</td>
                                <td>Lcpl Momin Haque</td>
                                <td>Snk Ali Hossain</td>
                                <td>Training</td>
                                <td>Jessore</td>
                                <td>1530hr</td>
                                <td>25.10.22</td>
                                <td>Request</td>
                            </tr>



                            <tr>
                                
                                <td>09.10.22</td>
                                <td>Pickup</td>
                                <td>102932</td>
                                <td>Lcpl Momin Haque</td>
                                <td>Snk Ali Hossain</td>
                                <td>Training</td>
                                <td>Jessore</td>
                                <td>1530hr</td>
                                <td>25.10.22</td>
                                <td>Request</td>
                            </tr>



                            <tr>
                                
                                <td>23.10.22</td>
                                <td>Jeep</td>
                                <td>102932</td>
                                <td>Lcpl Momin Haque</td>
                                <td>Snk Ali Hossain</td>
                                <td>Training</td>
                                <td>Jessore</td>
                                <td>1530hr</td>
                                <td>25.10.22</td>
                                <td>Request</td>
                            </tr>

                            
                           






                        </table>
                    </div>
                </div>
            </div>

            <br>
            <br>
            
            <a href="{{url('/addrequest')}}">ADD REQUEST</a>
        </div>
    </section>

    
</div>

<script src="js/jquery.min.js"></script>
<script src="js/popper.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/main.js"></script>

@include("mtnco.mtncoscript")

</body>
</html>

