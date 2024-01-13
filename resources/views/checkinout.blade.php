@extends('layout2')

@section('content')
    <style>
        /* Styles for your check-in/out form */
    </style>

    <br>
    <div class="container">
        <div class="row">
            <div class="col-md-4"></div>
            <div class="col-md-4" style="background-color:white; padding:10px 50px; border-radius:30px; font-family:Georgia;">
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
        <button type="submit" class="btn btn-success btn-lg">Check In</button>
    </form>

    <br>
    <br>

    <form method="post" action="{{ route('check-action') }}">
        @csrf
        <input type="hidden" name="action" value="check_out">
        <button type="submit" class="btn btn-warning btn-lg">Check Out</button>
    </form>

@endsection
