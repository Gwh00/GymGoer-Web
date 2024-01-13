@extends ('layout2')

@section('content')
    <style>
        body {
            background: url(B.jpg);
            background-size: 100%;
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
    <div class="ABC">
        <div class="row" style="width:100%;">
            <div class="col-md-3"></div>
            <div class="col-md-4"
                style="background-color:white; padding:10px 50px; border-radius:30px;
                font-family:Georgia; width:800px;">
                <h1 style=" color:black;">
                    <center>Personal Trainer Identity Information
                    </center>
                </h1>
            </div>
        </div>
    </div>
    <br>
    <div class="container">
        <br>

        <div class="row justify-content-center" style="width:100%;">
            <div class="col-md-1"></div>

            @foreach ($personaltrainer as $personaltrainerMember)
                <div class="col-md-5 middle-space" style="background: linear-gradient(to right, grey 5%, black 20%);">
                 <a href="{{ route('detail',['id' => $personaltrainerMember->id]) }}" style="text-decoration: none; color: inherit;"> 
                    <br>
                    <div class="card bg-dark text-light shadow">
                        <div class="card-body">
                            <h4 class="card-title">{{ $personaltrainerMember->name }}</h4>  
                            <br>
                            <br>
                        </div>
                    </div>
                </div>
                <div class="col-md-1"></div>
            @endforeach
        </div>

    </div>

    
    <br>
@endsection