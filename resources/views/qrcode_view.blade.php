@extends('layout')

@section('content')
    <h2>Your QR Code</h2>
    
    @if(isset($qrCodeDataUri['path']))
        <img src="{{ asset($qrCodeDataUri['path']) }}" alt="QR Code" />
        
        <h3>User Details:</h3>
        <ul>
            <li>User ID: {{ $qrCodeDataUri['data']['user_id'] }}</li>
            <li>User Name: {{ $qrCodeDataUri['data']['user_name'] }}</li>
            <li>Birthdate: {{ $qrCodeDataUri['data']['birthdate'] }}</li>
            <li>Body Type: {{ $qrCodeDataUri['data']['body_type'] }}</li>
            <li>Check-in Time: {{ $qrCodeDataUri['data']['checkin_time'] }}</li>
            <li>Check-out Time: {{ $qrCodeDataUri['data']['checkout_time'] }}</li>
        </ul>
    @else
        <p>QR Code not found for this user.</p>
    @endif
@endsection

