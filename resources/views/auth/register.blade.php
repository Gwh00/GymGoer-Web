@extends('layout3')

@section('content')
    <br>
    <div class="container" style="width:40%;">
        <div class="row">
            <div class="col-md-4">
            </div>
            <div class="col-md-4;"
                style="background-color:white; padding:10px 50px; border-radius:30px;
                font-family:Georgia;">
                <h1 style=" color:black;">Register</h1>
            </div>
        </div>
    </div>
    <br>
    <div class="container" style="background: linear-gradient(to right, grey 5%, black 40%); width:40%;">
        <br>
        <br>
        <form method="POST" action="{{ route('register') }}">
            @csrf

            <div class="row mb-3">
                <label for="name" class="col-md-4 col-form-label text-md-end">{{ __('Name') }}</label>

                <div class="col-md-6">
                    <input id="name" type="text" class="form-control @error('name') is-invalid @enderror"
                        name="name" value="{{ old('name') }}" required autocomplete="name" autofocus>

                    @error('name')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <br>
<div class="row mb-3">
                <label for="email" class="col-md-4 col-form-label text-md-end">{{ ('Email Address') }}</label>

                <div class="col-md-6">
                    <input id="email" type="email" class="form-control @error('email') is-invalid @enderror"
                        name="email" value="{{ old('email') }}" required autocomplete="email">

                    @error('email')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <br>

            <div class="row mb-3">
                <label for="password" class="col-md-4 col-form-label text-md-end">{{ ('Password') }}</label>

                <div class="col-md-6">
                    <input id="password" type="password" class="form-control @error('password') is-invalid @enderror"
                        name="password" required autocomplete="new-password">

                    @error('password')
                        <span class="invalid-feedback" role="alert">
                            <strong>{{ $message }}</strong>
                        </span>
                    @enderror
                </div>
            </div>
            <br>

            <div class="row mb-3">
<label for="password-confirm"
                    class="col-md-4 col-form-label text-md-end">{{ ('Confirm Password') }}</label>

                <div class="col-md-6">
                    <input id="password-confirm" type="password" class="form-control" name="password_confirmation" required
                        autocomplete="new-password">
                </div>
            </div>
            <br>
            <div class="row mb-0">
                <div class="col-md-12 offset-md-4">
                    <button type="submit" class="btn btn-primary">
                        {{ ('Register') }}
                    </button>
                </div>
            </div>
        </form>
        <br>
        <br>
    </div>
@endsection