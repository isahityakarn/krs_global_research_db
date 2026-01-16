<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>Krs Global Research</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{ asset('home/assets/img/pr.png') }}" rel="icon">
    <link href="{{ asset('home/assets/img/pr.png') }}" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

<!-- Google Fonts -->
<link href="https://fonts.googleapis.com/css2?family=Barlow:wght@600;700&family=Ubuntu:wght@400;500&display=swap"
rel="stylesheet">

<!-- Icon Font Stylesheet -->
<link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

{{-- {{ asset('home/ --}}
{{-- ') }} --}}

<!-- Libraries Stylesheet -->
<link href="{{ asset('home/lib/animate/animate.min.css') }}" rel="stylesheet">
<link href="{{ asset('home/lib/owlcarousel/assets/owl.carousel.min.css') }}" rel="stylesheet">
<link href="{{ asset('home/lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css') }}" rel="stylesheet" />

<!-- Customized Bootstrap Stylesheet -->
<link href="{{ asset('home/css/bootstrap.min.css') }}" rel="stylesheet">

<!-- Template Stylesheet -->
<link href="{{ asset('home/css/style.css') }}" rel="stylesheet">

</head>

<body>


    <main id="main">
    <div class="main-wrapper" style="margin-top: 250px; margin-bottom:250px">
        <div class="container mybox-style">
            <div class="row ">
                <div class="col-lg-12">
                    <h1 class="fw-bold">
                        Thank You!
                        Your survey has 
                        been <a href="/">
                            @if ($dublicate->status == 'complete')
                                <span class="text-success"> <u> Complete</u></span>
                            @elseif ($dublicate->status == 'quotafull')
                                <span class="text-warning"><u>Quotafull</u></span>
                            @else
                                <span class="text-danger "><u> Terminate</u></span>
                            @endif

                        </a>
                        is in Dublicate
                        <br>
                        <br>


                    </h1>

                </div>
            </div>
            <div class="row">
                <div class="col-lg-12" style="overflow-x:auto;">
                    <table class="table table-bordered">
                        <thead>
                            <tr style="background-color: cadetblue;">
                                <th>PID</th>
                                <th>UID</th>

                                <th>Status</th>
                                <th>IP Address</th>
                            </tr>
                        </thead>
                        <tbody>

                            <tr>
                                <td>{{ $dublicate->pid }}</td>
                                <td>{{ $dublicate->uid }}</td>
                                <td class="text-capitalize">
                                    @if ($dublicate->status == 'complete')
                                <span class="text-success"> <u> Complete</u></span>
                            @elseif ($dublicate->status == 'quotafull')
                                <span class="text-warning"><u>Quotafull</u></span>
                            @else
                                <span class="text-danger "><u> Terminate</u></span>
                            @endif
                                    
                                    </td>
                                <td>{{ $dublicate->ip }}</td>

                            </tr>


                        </tbody>
                    </table>
                </div>

            </div>
        </div>
    </div>




    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="{{ asset('home/lib/wow/wow.min.js')}}"></script>
    <script src="{{ asset('home/lib/easing/easing.min.js')}}"></script>
    <script src="{{ asset('home/lib/waypoints/waypoints.min.js')}}"></script>
    <script src="{{ asset('home/lib/counterup/counterup.min.js')}}"></script>
    <script src="{{ asset('home/lib/owlcarousel/owl.carousel.min.js')}}"></script>
    <script src="{{ asset('home/lib/tempusdominus/js/moment.min.js')}}"></script>
    <script src="{{ asset('home/lib/tempusdominus/js/moment-timezone.min.js')}}"></script>
    <script src="{{ asset('home/lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js')}}"></script>

    <!-- Template Javascript -->
    {{-- <script src="js/main.js"></script> --}}

</body>

</html>

