@extends('layouts.partials.app')

<style>
     span {
        display: block;
        text-align: center;
    }
    .centered {
        text-align: center;
    }
    #input-field {
        border: none;
        caret-color: transparent;
    }
</style>

@section('content')
<form method="POST" action="{{ route('submit-form') }}" id="my-form">
    @csrf
        @error('student_id')
        <span class="text-danger">{{ $message }}</span>
    @enderror
        <div class="centered">
          <h1> SCAN YOUR ID </h1>
        <div>
    <div class="centered">
    <input type="password" id="input-field" name="student_id">
    <div>
</form>

<script>
    var timer;

    var input = document.getElementById('input-field');
    input.focus();
    input.select();

    document.getElementById("input-field").addEventListener("input", function() {
        clearTimeout(timer);
        timer = setTimeout(function() {
            document.getElementById("my-form").submit();
        }, 2000);
    });
</script>



@endsection
