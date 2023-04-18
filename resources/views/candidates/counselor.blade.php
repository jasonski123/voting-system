@extends('layouts.master')
@section('content')
<div>
    <div class="card">
        <div class="card-body">
            <div class="row m-b-30">
                <div class="col-lg-8">
                </div>
                <div class="col-lg-4 text-right">
                    <a href="{{ url('create-candidate/Counselor') }}" class="btn btn-primary">
                        <i class="anticon anticon-plus-circle m-r-5"></i>
                        <span>Add</span>
                    </a>
                </div>
            </div>
    <h2>Counselor Management </h2>
    <livewire:counselor/>
</div>
@endsection