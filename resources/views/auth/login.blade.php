@extends('auth.base.base')

@section('content')
<div class="container-fluid p-h-0 p-v-20 bg full-height d-flex" style="background-image: url('assets/images/others/login-3.png')">
    <div class="d-flex flex-column justify-content-between w-100">
        <div class="container d-flex h-100">
            <div class="row align-items-center w-100">
                <div class="col-md-7 col-lg-5 m-h-auto">
                    <div class="card shadow-lg">
                        <div class="card-body">
                            <div class="d-flex align-items-center justify-content-between m-b-30">
                                <img class="img-fluid" alt="" src="assets/images/logo/removed.png">
                                <h2 class="m-b-0 text-center">Sign In</h2>
                            </div>


                            @if ($errors->any())
                            <div class="alert alert-danger mt-2">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                    <p>{{ $error }}</p>
                                    @endforeach
                                </ul>
                            </div>
                            @endif

                            <form method="POST" action={{route('login')}}>
                                @csrf
                                <div class="form-group">
                                    <label class="font-weight-semibold" for="username">Username:</label>
                                    <div class="input-affix">
                                        <i class="prefix-icon anticon anticon-user"></i>
                                        <input type="text" class="form-control" id="username" name="username" placeholder="username" required>
                                    </div>

                                </div>
                                <div class="form-group">
                                    <label class="font-weight-semibold" for="password">Password:</label>
                                    <div class="input-affix m-b-10">
                                        <i class="prefix-icon anticon anticon-lock"></i>
                                        <input type="password" class="form-control" id="password" name="password" placeholder="Password" required>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <button class="btn btn-primary">Sign In</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
