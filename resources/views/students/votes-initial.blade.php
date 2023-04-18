@extends('layouts.master')

@section('content')
<div class="card">
    <div class="card-body">
        @if ($vote->is_confirmed)
            <h4>List of candidates You Voted.</h4>
        @else
            <h4>Review Your Candidates</h4>
        @endif
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
                           @if (!is_null($president))
                           <td>{{ $president->student->full_name }}</td>
                           <td><b>{{ $president->position }} </b></td>
                           @endif
                        </tr>
                        <tr>
                           @if (! is_null($v_president))
                           <td>{{ $v_president->student->full_name }}</td>
                           <td> <b>{{ $v_president->position }} </b></td>
                           @endif
                        </tr>
                     @if (! is_null($counselors))
                     @foreach ($counselors as $counselor)

                     <tr>
                         <td>{{ $counselor->student->full_name }}</td>
                         <td> <b>{{ $counselor->position }} </b></td>
                     </tr>
                     @endforeach

                     @endif
                    </tbody>
                </table>
            </div>
        </div>
    </div>


    @if (! $vote->is_confirmed )
        <form method="POST" action="{{ route('confirm.vote', $vote->id) }}">
            @csrf
            @method('PUT')
            @if ($candidates)
                <button type="submit"  style="font-size: 12px;" class="btn btn-primary float-right mr-lg-5 mb-lg-5">Confirm Vote</button>
            @endif
        <a href="{{ route('reselect.vote',$vote->id) }}"  style="font-size: 12px;" class="btn btn-danger float-right mr-lg-5 mb-lg-5">Reselect Votes</a>
        </form>
    @endif
</div>
@endsection

