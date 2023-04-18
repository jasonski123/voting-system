   <!-- Header START -->
   <div class="header">
       <div class="logo logo-dark">
           <a href="index.html">
            <h2>HTC Voting Portal </h2>
               {{-- <img src="assets/images/logo/logo.png" alt="Logo"> --}}
               {{-- <img class="logo-fold" src="assets/images/logo/logo-fold.png" alt="Logo"> --}}
           </a>
       </div>
       <div class="logo logo-white">
           <a href="index.html">
               <img src="{{ asset('assets/images/logo/logo-white.png') }}" alt="Logo">
               <img class="logo-fold" src="{{ asset('assets/images/logo/logo-fold-white.png') }}" alt="Logo">
           </a>
       </div>
       <div class="nav-wrap">
           <ul class="nav-left">
               <li class="desktop-toggle">
                   <a href="javascript:void(0);">
                       <i class="anticon"></i>
                   </a>
               </li>
               <li class="mobile-toggle">
                   <a href="javascript:void(0);">
                       <i class="anticon"></i>
                   </a>
               </li>
           </ul>
           <ul class="nav-right">
               <li class="dropdown dropdown-animated scale-left">

                   <div class="pointer" data-toggle="dropdown">
                       <div class="avatar avatar-image  m-h-10 m-r-15">
                           <img src="{{ asset('/assets/images/avatars/thumb-3.png') }}" alt="">
                       </div>
                   </div>
                   <div class="p-b-15 p-t-20 dropdown-menu pop-profile">
                       <div class="p-h-20 p-b-15 m-b-10 border-bottom">
                           <div class="d-flex m-r-50">
                               <div class="avatar avatar-lg avatar-image">
                                   <img src="{{ asset('assets/images/avatars/thumb-3.png') }}" alt="">
                               </div>
                               <div class="m-l-10">
                                   <p class="m-b-0 text-dark font-weight-semibold"> {{ Auth::user()->name }}</p>
                                   <p class="m-b-0 opacity-07">{{Auth::user()->username}}</p>
                               </div>
                           </div>
                       </div>
                       <a href="javascript:void(0);" class="dropdown-item d-block p-h-15 p-v-10">
                           {{-- <div class="d-flex align-items-center justify-content-between">
                        <div>ho
                                   <i class="anticon opacity-04 font-size-16 anticon-user"></i>
                                   <span class="m-l-10">Edit Profile</span>
                               </div>
                               <i class="anticon font-size-10 anticon-right"></i>
                           </div> --}}
                       </a>
                       <a href="javascript:void(0);" class="dropdown-item d-block p-h-15 p-v-10">
                           <div class="d-flex align-items-center justify-content-between">
                               <div>
                                   <i class="anticon opacity-04 font-size-16 anticon-logout"></i>

                                   <span class="m-l-10" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                       {{ __('Logout') }}
                                   </span>

                                   <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                       @csrf
                                   </form>
                               </div>
                           </div>

                       </a>
                   </div>
               </li>
           </ul>

       </div>
   </div>
   <!-- Header END -->
