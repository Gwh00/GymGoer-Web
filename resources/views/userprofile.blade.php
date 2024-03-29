@extends('layout')

@section('content')
    @if (session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif

    <style>
        .profile-container {
            padding: 20px;
            border-radius: 8px;
            margin: 20px;
        }

        .profile-title {
            font-size: 24px;
            font-weight: bold;
            margin-bottom: 20px;
        }

        table {
            width: 100%;
            border-collapse: collapse;
        }

        th,
        td {
            text-align: left;
            padding: 8px;
        }

        th {
            background-color: yellow;
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
    <center>
        <div class="profile-container" style="background: linear-gradient(to right, grey 5%, black 20%); width:1200px;">
            <div class="profile-title" style="color:white;">User Profile</div>
            <div class="container">
                <table>
                    <tr>
                        <th style="color:black;">Name</th>
                        <th style="color:black;">Email</th>
                        <th style="color:black;">Age</th>
                        <th style="color:black;">Body Type</th>
                    </tr>

                    @foreach ($user as $user)
                        <tr>
                            <td>{{ $user->name }}</td>
                            <td>{{ $user->email }}</td>
                            <td>{{ $user->age }}</td>
                            <td>{{ $user->body_type }}</td>
                        </tr>
                    @endforeach
                </table>
            </div>
        </div>
    </center>
    <br>

    <center>
        <div class="profile-container" style="background: linear-gradient(to right, grey 5%, black 20%); width:1200px;">
            <div class="profile-title" style="color:white;">Check In/Out Status</div>
            <div class="container">
                <table>
                    <tr>
                        <th style="color:black;">Check In/Out</th>
                    </tr>
                    <br>
                    <tr>
                        <td>{{ session('status') }}</td>
                    </tr>
                </table>
            </div>
        </div>
    </center>
@endsection
