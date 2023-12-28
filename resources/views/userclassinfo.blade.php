@extends('layout')

@section('content')
    <h2 class="text-center mb-4">Class Information</h2>
    
    <!-- Link to Profile -->
    <div class="mb-3 text-right">
        <a class="nav-link" href="{{ route('user.profile') }}">Profile</a>
    </div>

    @if(isset($classes) && count($classes) > 0)
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Class Name</th>
                    <th>Description</th>
                    <th>Price</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($classes as $class)
                    <tr>
                        <td>{{ $class['name'] }}</td>
                        <td>{{ $class['description'] }}</td>
                        <td>{{ $class['price'] }}</td>
                        <td><a href="{{ route('buy.class', $class['id']) }}" class="btn btn-success">Buy</a></td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <div class="alert alert-info">No classes available at the moment.</div>
    @endif
@endsection
