@extends('layouts.master')

@section('content')
<div class="row">
    <div class="col-lg-5">
        <div class="row">
            <div class="col-md-6">
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
            <div class="col-md-6">
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
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <p class="m-b-0 text-muted">Secretary</p>
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
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <p class="m-b-0 text-muted">Treasurer</p>
                            </div>
                        </div>
                        <div class="m-t-40">
                            <div class="d-flex justify-content-between">
                                <div class="d-flex align-items-center">
                                    <span class="badge badge-secondary badge-dot m-r-10"></span>
                                    <span class="text-gray font-weight-semibold font-size-13">Total Votes Counted:</span>
                                </div>
                                <span class="text-dark font-weight-semibold font-size-13">50 </span>
                            </div>
                            <div class="progress progress-sm w-100 m-b-0 m-t-10">
                                <div class="progress-bar bg-secondary" style="width: 100%"></div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <p class="m-b-0 text-muted">Auditor</p>
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
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div class="d-flex justify-content-between align-items-center">
                            <div>
                                <p class="m-b-0 text-muted">Business Manager</p>
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
        </div>
    </div>
    <div class="col-lg-7">
        <div class="card">
            <div class="card-body">
                <div class="d-flex justify-content-between align-items-center">
                    <h5>Leading Candidates</h5>
                    <div>
                        <a href="javascript:void(0);" class="btn btn-sm btn-default">View All</a>
                    </div>
                </div>
                <div class="m-t-30">
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item p-h-0">
                            <div class="d-flex align-items-center justify-content-between">
                                <div class="d-flex">
                                    <div class="avatar avatar-image m-r-15">
                                        <img src="assets/images/others/thumb-9.jpg" alt="">
                                    </div>
                                    <div>
                                        <h6 class="m-b-0">
                                            <a href="javascript:void(0);" class="text-dark"> Gray Sofa (LAKAS TAMA Party List)</a>
                                        </h6>
                                        <span class="text-muted font-size-13"> Running for President - BSIT</span>
                                    </div>
                                </div>
                                <span class="badge badge-pill badge-cyan font-size-12">
                                    <span class="font-weight-semibold m-l-5">Vote: 100</span>
                                </span>
                            </div>
                        </li>
                        <li class="list-group-item p-h-0">
                            <div class="d-flex align-items-center justify-content-between">
                                <div class="d-flex">
                                    <div class="avatar avatar-image m-r-15">
                                        <img src="assets/images/others/thumb-10.jpg" alt="">
                                    </div>
                                    <div>
                                        <h6 class="m-b-0">
                                            <a href="javascript:void(0);" class="text-dark">Beat Headphone</a>
                                        </h6>
                                        <span class="text-muted font-size-13">Eletronic</span>
                                    </div>
                                </div>
                                <span class="badge badge-pill badge-cyan font-size-12">
                                    <span class="font-weight-semibold m-l-5">+12.7%</span>
                                </span>
                            </div>
                        </li>
                        <li class="list-group-item p-h-0">
                            <div class="d-flex align-items-center justify-content-between">
                                <div class="d-flex">
                                    <div class="avatar avatar-image m-r-15">
                                        <img src="assets/images/others/thumb-11.jpg" alt="">
                                    </div>
                                    <div>
                                        <h6 class="m-b-0">
                                            <a href="javascript:void(0);" class="text-dark">Wooden Rhino</a>
                                        </h6>
                                        <span class="text-muted font-size-13">Home Decoration</span>
                                    </div>
                                </div>
                                <span class="badge badge-pill badge-cyan font-size-12">
                                    <span class="font-weight-semibold m-l-5">+9.2%</span>
                                </span>
                            </div>
                        </li>
                        <li class="list-group-item p-h-0">
                            <div class="d-flex align-items-center justify-content-between">
                                <div class="d-flex">
                                    <div class="avatar avatar-image m-r-15">
                                        <img src="assets/images/others/thumb-12.jpg" alt="">
                                    </div>
                                    <div>
                                        <h6 class="m-b-0">
                                            <a href="javascript:void(0);" class="text-dark">Red Chair</a>
                                        </h6>
                                        <span class="text-muted font-size-13">Home Decoration</span>
                                    </div>
                                </div>
                                <span class="badge badge-pill badge-cyan font-size-12">
                                    <span class="font-weight-semibold m-l-5">+7.7%</span>
                                </span>
                            </div>
                        </li>
                        <li class="list-group-item p-h-0">
                            <div class="d-flex align-items-center justify-content-between">
                                <div class="d-flex">
                                    <div class="avatar avatar-image m-r-15">
                                        <img src="assets/images/others/thumb-13.jpg" alt="">
                                    </div>
                                    <div>
                                        <h6 class="m-b-0">
                                            <a href="javascript:void(0);" class="text-dark">Wristband</a>
                                        </h6>
                                        <span class="text-muted font-size-13">Eletronic</span>
                                    </div>
                                </div>
                                <span class="badge badge-pill badge-cyan font-size-12">
                                    <span class="font-weight-semibold m-l-5">+5.8%</span>
                                </span>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection
