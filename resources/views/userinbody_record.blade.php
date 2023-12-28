@extends('layout')  <!-- Assuming you have a layout file -->

@section('content')
    <h2 class="text-center mb-4">InBody Record for Jane Doe</h2>

    @if($record)
        <div>
            <h4>Body Composition Analysis:</h4>
            <ul>
                <li>Total Body Water: {{ $record->total_body_water ?? '37 liters' }}</li>
                <li>Protein: {{ $record->protein ?? '10 kilograms' }}</li>
                <li>Minerals: {{ $record->minerals ?? '3 kilograms' }}</li>
                <li>Body Fat Mass: {{ $record->body_fat_mass ?? '18 kilograms' }}</li>
            </ul>

            <h4>Muscle-Fat Analysis:</h4>
            <ul>
                <li>Weight: {{ $record->weight ?? '65 kilograms' }}</li>
                <li>Skeletal Muscle Mass: {{ $record->muscle_mass ?? '25 kilograms' }}</li>
                <li>Body Fat Mass: {{ $record->body_fat_mass ?? '18 kilograms' }}</li>
            </ul>

            <h4>Obesity Analysis:</h4>
            <ul>
                <li>BMI (Body Mass Index): {{ $record->bmi ?? '23.1' }}</li>
                <li>PBF (Percent Body Fat): {{ $record->pbf ?? '27.7%' }}</li>
            </ul>
        </div>
    @else
        <div class="alert alert-info">No InBody record available.</div>
    @endif
@endsection
