<!-- Side Nav START -->
<div class="side-nav">
    <div class="side-nav-inner">
        <ul class="side-nav-menu scrollable">


            @if (auth()->user()->student_id)
        
            <li class="nav-item dropdown open">
                <a class="dropdown-toggle" href="{{route('home')}}">
                    <span class="icon-holder">
                        <i class="anticon anticon-dashboard"></i>
                    </span>
                    <span class="title">Voting Section</span>
                </a>
            </li>
           
            @endif
            @if (auth()->user()->student_id === null)

            <li class="nav-item dropdown open">
                <a class="dropdown-toggle" href="{{route('home')}}">
                    <span class="icon-holder">
                        <i class="anticon anticon-dashboard"></i>
                    </span>
                    <span class="title">Dashboard</span>
                </a>
            </li>
            <li class="nav-item dropdown">
                <a class="dropdown-toggle" href="javascript:void(0);">
                    <span class="icon-holder">
                        <i class="anticon anticon-appstore"></i>
                    </span>
                    <span class="title">School Management</span>
                    <span class="arrow">
                        <i class="arrow-icon"></i>
                    </span>
                </a>
                <ul class="dropdown-menu">
                    <li>
                        <a href="{{route('users.index')}}">Admins</a>
                    </li>

                    <li>
                        <a href="{{route('students.index')}}">Students</a>
                    </li>

                    <li>
                        <a href="{{route('election.index')}}">Election</a>
                    </li>
                </ul>
            </li>
            @endif
            
       @if (auth()->user()->student_id ===null)
       <li class="nav-item dropdown">
        <a class="dropdown-toggle" href="javascript:void(0);">
            <span class="icon-holder">
                <i class="anticon anticon-hdd"></i>
            </span>
            <span class="title">Manage Candidates</span>
            <span class="arrow">
                <i class="arrow-icon"></i>
            </span>
        </a>
        <ul class="dropdown-menu">
            <li>
                <a href="{{route('candidate.president')}}">President</a>
            </li>
            <li>
                <a href="{{ route('candidate.vice-president') }}">Vice President</a>
            </li>
            <li>
                <a href="{{ route('candidate.counselor') }}">Counselor</a>
            </li>
        </ul>
    </li>
       @endif
        </ul>
    </div>
</div>
<!-- Side Nav END -->
