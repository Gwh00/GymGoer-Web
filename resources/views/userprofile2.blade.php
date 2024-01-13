@extends('layout2')

@section('content')
    <style>
        .profile-container {
            width: 80%;
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #e1e1e1;
            border-radius: 8px;
            box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
            background-color: white;
        }

        .profile-title {
            font-size: 1.5em;
            margin-bottom: 20px;
            color: #333;
            border-bottom: 1px solid #ddd;
            padding-bottom: 10px;
        }

        .profile-detail {
            font-size: 1.2em;
            margin: 5px 0;
            color: #555;
        }

        body {
            background: url(D.jpg);
            background-size: 100%;
        }
    </style>
    <br>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
            </div>
            <div class="col-md-4;"
                style="background-color:white; padding:10px 50px; border-radius:30px;
                font-family:Georgia;">
                <h1 style=" color:black;">User Information</h1>
            </div>
        </div>
    </div>
    <br>
    <div class="profile-container" style="background: linear-gradient(to left, grey 5%, black 40%);">
        <div class="profile-title" style="color:white;">User Profile</div>
        <div class="row">
            <div class="col-md-7">
                <div class="containerA" align="left">
                    @if ($user)
                        <div class="profile-detail" style="color:white;">Name: <strong>{{ $user->name }}</strong></div>
                        <div class="profile-detail" style="color:white;">Email: <strong>{{ $user->email }}</strong></div>
                        <div class="profile-detail" style="color:white;">Age: <strong>{{ $user->age }}</strong></div>
                        <div class="profile-detail" style="color:white;">Body Type: <strong>{{ $user->body_type }}</strong>
                        </div>
                        <!-- Add other fields... -->
                        <br>
                        <a href="{{ route('editprofile2', $user->id) }}">Edit Profile</a>
                    @else
                        <p>User not found.</p>
                    @endif
                </div>
            </div>
            <div class="col-md-5">
                
                {{$qrCode}}

            </div>
        </div>
    </div>
@endsection
