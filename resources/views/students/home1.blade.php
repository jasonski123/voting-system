@extends('layouts.master')

@section('content')
       <!-- Content Wrapper START -->
  <form method="POST" action={{ route('submit.vote') }}>
    @csrf
    <div class="main-content">
        <h2 class="text-center"> <b>Cast your vote, make your voice heard - Election {{ now()->year }}</b></h2>
        <div class="row">
            <div class="col-sm-11 mx-auto">
                <h2> President </h2>
                <div class="row">
                    @foreach ($presidents as $president)
                    <div class="col-md-4">
                        <div class="card">
                            <img class="card-img-top" src="assets/images/others/img-6.jpg" alt="">
                            <div class="card-body">
                                <h4 class="m-t-10">{{ $president->student->full_name }}</h4>
                                <p class="m-b-20">{{ $president->platform }}</p>
                               
                            </div>
                            <div class="card-footer">
                                <div class="d-flex align-items-center m-t-5">
                                    <div class="m-l-10">
                                        <div class="d-flex align-items-center justify-content-between">
                                            <div    >
                                                <input 
                                                type="radio"
                                                name="president" 
                                                value="{{ $president->id }}">
                                                <label for="checkbox1">{{ $president->student->full_name   }}</label>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-11 mx-auto">
                <h2>Vice President </h2>
                <div class="row">
                  @foreach ($vicePresidents as $vp)
                  <div class="col-md-4">
                    <div class="card">
                        <img class="card-img-top" src="assets/images/others/img-6.jpg" alt="">
                        <div class="card-body">
                            <h4 class="m-t-10">{{ $vp->student->full_name }}</h4>
                            <p class="m-b-20">{{ $vp->platform }}</p>
                        </div>
                        <div class="card-footer">
                            <div class="d-flex align-items-center m-t-5">
                                <div class="m-l-10">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <div>
                                            <input 
                                            type="radio"
                                            name="vice_president" 
                                            value="{{ $vp->id }}">
                                            <label >{{ $vp->student->full_name   }}</label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                  @endforeach
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-11 mx-auto">
                <h2> Counselor </h2>
                <div class="row">
                   @foreach ($counselors as $counselor)
                   <div class="col-md-4">
                    <div class="card">
                        <img class="card-img-top" src="assets/images/others/img-6.jpg" alt="">
                        <div class="card-body">
                            <h4 class="m-t-10">{{ $counselor->student->full_name }}</h4>
                            <p class="m-b-20">{{ $counselor->platform }}</p>
                        </div>
                        <div class="card-footer">
                            <div class="d-flex align-items-center m-t-5">
                                <div class="m-l-10">
                                    <div class="d-flex align-items-center justify-content-between">
                                        <div class="checkbox-class">
                                            <label>
                                                <input type="checkbox" name="counselors[]" value="{{ $counselor->id }}" class="checkbox">
                                                {{ $counselor->student->full_name }}
                                            </label>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                   @endforeach
                </div>
            </div>
        </div>
      
</div>
<div class="fixed-bottom">
    <button type="submit"  style="font-size: 24px;" class="btn btn-primary float-right mr-lg-5 mb-lg-5">Submit Your Votes</button>
  </div>
  
  </form>
  <script>
    var limit = 6; // set the maximum number of checkboxes that can be selected
    var checkboxes = document.querySelectorAll('.checkbox'); // get all checkboxes

    checkboxes.forEach(function(checkbox) {
        checkbox.addEventListener('click', function() {
            var checkedCount = document.querySelectorAll('.checkbox:checked').length; // count the number of checkboxes that are currently checked

            if (checkedCount > limit) {
                this.checked = false; // uncheck the checkbox if the limit has been exceeded
            }
        });
    });
</script>
    <!-- Content Wrapper END -->
@endsection
           
    