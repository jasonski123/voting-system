@extends('layouts.master')
@section('content')
<div>
    <h2>Update Election Date</h2>

    @if ($errors->any())
    <div class="alert alert-danger mt-2">
        <ul>
            @foreach ($errors->all() as $error)
            <p>{{ $error }}</p>
            @endforeach
        </ul>
    </div>
    @endif

    <div class="card">
        <div class="card-body">
            <div class="row m-b-30">
                <form method="POST" action="{{ route('election.update', $election->id) }}">
                    @csrf
                    @method('PUT')
                    <div class="form-group">
                        <label for="date">Election Start</label>
                        <input type="date" class="form-control" id="election_start" name="election_start" value="{{ date_format(date_create($election->election_start), 'Y-m-d') }}" >
                      </div>
                    <div class="form-group">
                      <label for="date">Date</label>
                      <input type="date" class="form-control" id="election_end" name="election_end" value="{{ date_format(date_create($election->election_end), 'Y-m-d') }}">
                    </div>
                    <div class="form-group">
                        <label for="is_election">Is Election?</label>
                        <select class="form-control" id="is_election" name="is_election">
                            <option value="1" {{ $election->is_election ? 'selected' : '' }}>Yes</option>
                            <option value="0" {{ !$election->is_election ? 'selected' : '' }}>No</option>
                        </select>
                    </div>
                    <button type="submit" class="btn btn-primary">Update</button>
                  </form>
            </div>
</div>
@endsection

