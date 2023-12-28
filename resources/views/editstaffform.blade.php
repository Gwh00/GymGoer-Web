@extends ('layout')

@section('content')
<div class="container mt-5">
    <div class="row justify-content-center">
        <div class="col-md-6">
            <div class="card">
                <div class="card-header bg-primary text-white">Edit Staff Member</div>
                <div class="card-body">
                    <form action="{{ route('updatestaff', $staffMember->id) }}" method="post">
                        @csrf
                        @method('PUT')
                        
                        <div class="form-group">
                            <label for="name">Name:</label>
                            <input type="text" id="name" class="form-control" name="name" value="{{ $staffMember->name }}" required>
                        </div>

                        <div class="form-group">
                            <label for="email">Email:</label>
                            <input type="email" id="email" class="form-control" name="email" value="{{ $staffMember->email }}" required>
                        </div>

                        <div class="form-group">
                            <label for="position">Position:</label>
                            <input type="text" id="position" class="form-control" name="position" value="{{ $staffMember->position }}" required>
                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-success">Update</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

