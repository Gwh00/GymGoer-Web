@extends ('layout2')

@section('content')
<style>
        body {
            background: url('{{ asset('B.jpg') }}');
            background-size: 100%;    
        }
        section{

        }

        h1 {
            color: white;
        }

        .middle-space {
            margin-left: 10px;
            /* Adjust the value as needed */
            margin-right: 10px;
            /* Adjust the value as needed */
            margin-bottom: 10px;
        }

    
    </style>
<br>
@foreach ($personaltrainer as $personaltrainerMember)

<div class='container'>
<div class="col-md-5 middle-space" style="background: linear-gradient(to right, grey 5%, black 20%);">
<div class="card bg-dark text-light shadow ">
                        <div class="card-body ">
                            <h4 class="card-title">{{ $personaltrainerMember->name }}</h4>
                            <p class="card-text">Email: {{ $personaltrainerMember->email }}</p>
                            <p class="card-text">Certification: {{ $personaltrainerMember->certification }}</p>
                            <p class="card-text">phone:0{{ $personaltrainerMember->phone }}</p>

                            <br>
                            <br>
                        </div>
                    </div>
                </div>
    </div>
                <div class="col-md-1"></div>
                <br>

@endforeach

@endsection