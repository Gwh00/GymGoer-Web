@extends ('layout')

@section('content')
    <style>
        body {
            background: url('{{ asset('C.jpg') }}');
            background-size: 100%;
        }

        h1 {
            color: black;
        }

        .middle-space {
            margin-left: 10px;
            /* Adjust the value as needed /
            margin-right: 10px;
            / Adjust the value as needed */
            margin-bottom: 10px;
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
                <h1>Class Information</h1>
            </div>

        </div>
    </div>
    <br>
    <br>
<div class="container">
        <div class="row justify-content-center">
            <div class="col-md-1"></div>
            @foreach ($class as $ClassName)
                <div class="col-md-5 middle-space" style="background: linear-gradient(to right, grey 5%, black 20%);">
                    <br>
                    <div class="card bg-dark text-light shadow">
                        <div class="card-body">
                            <h4 class="card-title">{{ $ClassName->class_name }}</h4>
                            <p class="card-text">Class Code: {{ $ClassName->class_code }}</p>
                            <p class="card-text">Class Category: {{ $ClassName->class_description }}</p>
                            <div class="row">
                                <div class="col-md-4"></div>
                                <div class="col-md-2">
                                    <a href="{{ route('editclass', $ClassName->id) }}"
                                        class="btn btn-warning float-right">Edit</a>
                                </div>
                                <div class="col-md-2">
                                    <form action="{{ route('deleteclass', $ClassName->id) }}" method="POST">
                                        @csrf
                                        @method('DELETE')
                                        <button type="submit" class="btn btn-danger float-right ml-2">Delete</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div><br>
                </div>
                <div class="col-md-1"></div>
            @endforeach
        </div>
    </div>
<br>
    <div class="container">
        <div class="row justify-content-center mt-4">
            <div class="col-md-5"></div>
            <div class="col-md-2">
                <a href="{{ route('addClass') }}" class="btn btn-primary btn-block">Add Class</a>
            </div>
        </div>
    </div>
@endsection