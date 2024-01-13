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

    </style>
    <br>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
            </div>
            <div class="col-md-4;"
                style="background-color:white; padding:10px 50px; border-radius:30px;
                font-family:Georgia;">
                <h1 style=" color:black;">Check In/Out</h1>
            </div>
        </div>
    </div>
    <br>
    @if(session('status'))
        <div class="alert alert-success">
            {{ session('status') }}
        </div>
    @endif

  <form method="post" action="{{ route('check-action') }}">
    @csrf
    <input type="hidden" name="action" value="check_in">
    <button type="submit" class="btn btn-success btn-lg ">Check In</button>
</form>

<br>
<br>

<form method="post" action="{{ route('check-action') }}">
    @csrf
    <input type="hidden" name="action" value="check_out">
    <button type="submit" class="btn btn-warning btn-lg ">Check Out</button>
</form>

@endsection
