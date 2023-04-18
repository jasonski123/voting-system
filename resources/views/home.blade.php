@extends('layouts.master')

@section('content')
    <div >
        <div class="row">
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <p class="m-b-0 text-muted">President</p>
                            </div>
                            
                        </div>
                        <div class="m-t-40">
                            <div class="d-flex justify-content-between">
                                <div class="d-flex align-items-center">
                                    <span class="badge badge-primary badge-dot m-r-10"></span>
                                    <span class="text-gray font-weight-semibold font-size-13">Total Votes Counted:</span>
                                </div>
                                <span class="text-dark font-weight-semibold font-size-13"> 100 </span>
                            </div>
                            <div class="progress progress-sm w-100 m-b-0 m-t-10">
                                <div class="progress-bar bg-primary" style="width: 100%"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <p class="m-b-0 text-muted">Vice President</p>
                            </div>
                        </div>
                        <div class="m-t-40">
                            <div class="d-flex justify-content-between">
                                <div class="d-flex align-items-center">
                                    <span class="badge badge-success badge-dot m-r-10"></span>
                                    <span class="text-gray font-weight-semibold font-size-13">Total Votes Counted:</span>
                                </div>
                                <span class="text-dark font-weight-semibold font-size-13">99 </span>
                            </div>
                            <div class="progress progress-sm w-100 m-b-0 m-t-10">
                                <div class="progress-bar bg-success" style="width: 100%"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <p class="m-b-0 text-muted">Counselors</p>
                            </div>
                        </div>
                        <div class="m-t-40">
                            <div class="d-flex justify-content-between">
                                <div class="d-flex align-items-center">
                                    <span class="badge badge-warning badge-dot m-r-10"></span>
                                    <span class="text-gray font-weight-semibold font-size-13">Total Votes Counted:</span>
                                </div>
                                <span class="text-dark font-weight-semibold font-size-13">99 </span>
                            </div>
                            <div class="progress progress-sm w-100 m-b-0 m-t-10">
                                <div class="progress-bar bg-warning" style="width: 100%"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

     
    </div>
    <div>
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center">
                    <h5>Candidates</h5>
                    {{-- <div>
                        <a href="javascript:void(0);" class="btn btn-sm btn-default">View All</a>
                    </div> --}}
                </div>
                <div class="m-t-30">
                    <ul class="list-group list-group-flush">
                       @foreach ($results as $result)
                    
                       <li class="list-group-item p-h-0">
                        <div class="d-flex align-items-center justify-content-between">
                            <div class="d-flex">
                                <div class="avatar avatar-image m-r-15">
                                    <img src="assets/images/others/thumb-9.jpg" alt="">
                                </div>
                                <div>
                                    <h6 class="m-b-0">
                                        <a href="javascript:void(0);" class="text-dark">{{ $result->candidate->student->full_name }}</a>
                                    </h6>
                                    <span class="text-muted font-size-13"> Running for <b> {{ $result->candidate->position }}</b></span>
                                </div>
                            </div>
                            <span class="badge badge-pill badge-cyan font-size-12">
                                <h5 class="font-weight-semibold m-l-5">Total Vote Count: {{  $result->total_votes }} </h5>
                            </span>
                        </div>
                    </li>
                       @endforeach
                    </ul>
                </div>
            </div>
        </div>
    
    </div>
@endsection
