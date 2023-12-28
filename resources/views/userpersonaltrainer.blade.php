@extends('layout')

@section('content')
    <h2 class="text-center mb-4">Personal Trainers</h2>

    @if(isset($trainers) && count($trainers) > 0)
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Name</th>
                    <th>Specialty</th>
                    <th>Certification</th>
                    <th>Contact</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($trainers as $trainer)
                    <tr>
                        <td>{{ $trainer['name'] ?? 'N/A' }}</td>
                        <td>{{ $trainer['specialty'] ?? 'N/A' }}</td>
                        <td>{{ $trainer['Certification'] ?? 'N/A' }}</td>
                        <td>
                            @if(isset($trainer['email']) && !empty($trainer['email']))
                                <a href="mailto:{{ $trainer['email'] }}" class="btn btn-primary">Contact</a>
                            @else
                                N/A
                            @endif
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    @else
        <div class="alert alert-info">No personal trainers available at the moment.</div>
    @endif
@endsection

