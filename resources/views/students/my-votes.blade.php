@extends('layouts.master')

@section('content')
<div class="card">
    <div class="card-body">
        <h4>My Candidates</h4>
            <div class="m-t-25">
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th scope="col">Candidate</th>
                            <th scope="col">Position</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>{{ $president->student->full_name }}</td>
                            <td><b>{{ $president->position }} </b></td>
                        </tr>
                        <tr>
                            <td>{{ $v_president->student->full_name }}</td>
                            <td> <b>{{ $v_president->position }} </b></td>
                        </tr>
                        @foreach ($counselors as $counselor)

                        <tr>
                            <td>{{ $counselor->student->full_name }}</td>
                            <td> <b>{{ $counselor->position }} </b></td>
                        </tr>
                        @endforeach

                    </tbody>
                </table>
            </div>
        </div>
    </div>

</div>


@endsection

