@extends ('layout2')

@section('content')
    <!DOCTYPE html>
    <html lang="en">

    <head>


        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

    </head>

    <style>
        /* Body remains untouched, so no style rule for body. */

        body {
            background-size: 100% auto;
            animation: changeImage 20s infinite;
            /* 5s duration, infinite loop */
        }

        @keyframes changeImage {
            0% {
                background: url(A.jpg) no-repeat center center;
                background-size: cover;
                background-position: center 10%;
                /* Adjust the percentage to lower the image */
            }

            25% {
                background: url(B.jpg) no-repeat center center;
                background-size: cover;
                background-position: center 10%;
            }

            50% {
                background: url(C.jpg) no-repeat center center;
                background-size: cover;
                background-position: center 10%;
            }

            75% {
                background: url(D.jpg) no-repeat center center;
                background-size: cover;
                background-position: center 10%;
            }

            100% {
                background: url(A.jpg) no-repeat center center;
                background-size: cover;
                background-position: center 10%;
            }
        }
    </style>

    <style>
        /* Body remains untouched, so no style rule for body. */

        .card {
            background-color: black;
        }

        .card-title,
        .card-text {
            color: white;
            font-family: Georgia;

        }

        .custom-btn.signin {
            background-color: #007bff;
            /* Blue */
            color: #ffffff;
        }

        .custom-btn.signin:hover {
            background-color: #0056b3;
            /* Darker blue on hover */
            color: #ffffff;
        }
    </style>

    <body>
        <br>

        <div class="container">
            <div class="row">
                <div class="col-md-3">
                </div>
                <div class="col-md-4;"
                    style="background-color:white; padding:10px 50px; border-radius:30px;
                font-family:Georgia; color:black;">
                    <h1>Welcome to the GB Fitness</h1>
                </div>

            </div>
        </div>
        <br>
        <div class="container">

            <!-- First Row: Column 1 & 2 -->
            <div class="row">

                <!-- Personal Trainer Column -->
                <div class="col-md-6">
                    <a href="/personaltrainer" class="text-decoration-none text-dark">
                        <div class="card h-100" style="background: linear-gradient(to right, grey 5%, black 60%);">
                            <div class="row no-gutters">
                                <!-- Image on the left -->
                                <div class="col-md-4">
                                    <br>
                                    <img src="F.jpg" class="card-img" alt="Personal Trainer Image"
                                        style="width:170px; margin-left:10px;" image-fluid>
                                </div>
                                <!-- Text on the right -->
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h2 class="card-title">Personal Trainer</h2>
                                        <p class="card-text" align="left">A personal trainer provides guidance, expertise,
                                            motivation,
                                            and personalized plans, ensuring safe and effective workouts tailored to your
                                            goals.</p>
                                    </div>
                                </div>
                            </div>
                            <br>

                        </div>
                    </a>
                </div>

                <!-- Class Column -->
                <div class="col-md-6">
                    <a href="/classes/create" class="text-decoration-none text-dark">
                        <div class="card h-100" style="background: linear-gradient(to right, grey 5%, black 60%);">
                            <div class="row no-gutters">
                                <!-- Image on the left -->
                                <div class="col-md-4">
                                    <br>

                                    <img src="G.jpg" class="card-img" alt="Class Image"
                                        style="width:170px; margin-left:10px;" image-fluid>
                                </div>
                                <!-- Text on the right -->
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h2 class="card-title">Class</h2>
                                        <p class="card-text" align="left">Joining a gym class offers structured workouts,
                                            motivation from
                                            group dynamics, and instruction from trained professionals, enhancing your
                                            exercise experience and results.</p>
                                    </div>
                                </div>
                            </div>
                            <br>

                        </div>
                    </a>
                    <br>

                </div>

            </div>
            <br>
            <br>

            <!-- Second Row: Column 3 & 4 -->
            <div class="row">
                <!-- Time Table Column -->
                <div class="col-md-6">
                    <a href="/usertimetable" class="text-decoration-none text-dark">
                        <div class="card h-100" style="background: linear-gradient(to right, grey 5%, black 60%);">
                            <div class="row no-gutters">
                                <!-- Image on the left -->
                                <div class="col-md-4">
                                    <br>

                                    <img src="H.jpg" class="card-img" alt="Timetable Image"
                                        style="width:170px; margin-left:10px;" image-fluid>
                                </div>
                                <!-- Text on the right -->
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h2 class="card-title">Time Table</h2>
                                        <p class="card-text" align="left">A gym timetable helps you plan your workouts
                                            around available
                                            classes and peak hours, ensuring a consistent routine and efficient use of your
                                            time.</p>
                                    </div>
                                </div>
                            </div>
                            <br>

                        </div>
                    </a>
                    <br>

                </div>

                <!-- Account Column -->
                <div class="col-md-6">
                    <a href="/account" class="text-decoration-none text-dark">
                        <div class="card h-100" style="background: linear-gradient(to right, grey 5%, black 60%);">
                            <div class="row no-gutters">
                                <!-- Image on the left -->
                                <div class="col-md-4">
                                    <br>

                                    <img src="I.jpg" class="card-img" alt="Account Image"
                                        style="width:170px; margin-left:10px;" image-fluid>
                                </div>
                                <!-- Text on the right -->
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h2 class="card-title">Account</h2>
                                        <p class="card-text">View your personal data.</p>
                                    </div>
                                </div>
                            </div>
                            <br>

                        </div>
                    </a>
                </div>
                <br>

            </div>




        </div>

        <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>

    </body>

    </html>
@endsection
