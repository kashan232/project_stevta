<div class="dlabnav">
    <div class="dlabnav-scroll">
        <ul class="metismenu" id="menu">
            <li class="nav-label first">Main Menu</li>
            <li>
                <a class="ai-icon" href="{{ route('teacher-screen') }}" aria-expanded="false">
                    <i class="ti-home"></i>
                    <span class="nav-text">Dashboard</span>
                </a>
            </li>
            
            <li class="nav-label">Manage Attendance</li>
            <li>
                <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                    <i class="ti-bookmark-alt"></i>
                    <span class="nav-text">Student Attendance</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{ route('student-attendance') }}">Generate Attendance</a></li>
                </ul>
            </li>
            
            <li>
                <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                    <i class="ti-email"></i>
                    <span class="nav-text">Leave Approval</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{ route('all-leave') }}">Leaves</a></li>
                    <li><a href="{{ route('add-leave') }}">Create Leaves</a></li>
                </ul>
            </li>

            <li>
                <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                    <i class="ti-printer"></i>
                    <span class="nav-text">Attendance Records</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{ route('student-attendance-record') }}">Records</a></li>
                </ul>
            </li>

            

        </ul>
    </div>
</div>