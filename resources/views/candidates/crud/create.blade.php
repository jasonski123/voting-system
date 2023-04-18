@extends('layouts.master')
@section('content')

<div>
    <div class="main-content">
        <div class="card">
            <div class="card-body">
                @if(session('success'))
                    <div class="alert alert-success mt-2">
                        {{ session('success') }}
                    </div>
                @endif

                @if ($errors->any())
                <div class="alert alert-danger mt-2">
                    <ul>
                        @foreach ($errors->all() as $error)
                        <p>{{ $error }}</p>
                        @endforeach
                    </ul>
                </div>
                @endif
                <h2 class="mb-5"> Add Candidate: {{ $position }}</h2>

                <form method="POST" action={{ route('candidate.store') }}>
                    @csrf
                    <div class="form-row">

                        <div class="form-group col-md-6">
                            <label for="inputEmail4">Student ID Number</label>
                            <input type="text" name="student_id_number" class="form-control" id="inputEmail4" placeholder="Student ID Number" required>
                        </div>


                        <div class="form-group col-md-6">
                            <label for="inputEmail4">Position</label>
                            <input type="text" name="position" value ='{{ $position }}'class="form-control" id="position" placeholder="Position" disabled required>
                        </div>

                        <div class="form-group col-md-6">
                            <input type="hidden" name="position" value ='{{ $position }}'class="form-control" id="inputEmail4" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputAddress2">Platform</label>
                        <textarea type="text" name="platform" class="form-control" id="Platform" placeholder="Platform"> </textarea>
                    </div>

                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>

        <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
            <div class="modal-dialog" role="document">
                <div class="modal-content">
                    <div class="modal-header">
                        <h4 class="modal-title" id="myModalLabel">Please confirm your details</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                        <p>Position: <span id="position"></span></p>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-primary">Confirm</button>
                    </div>
                </div>
            </div>
        </div>
        
    </div>
</div>




@endsection
