<div class="dlabnav">
    <div class="dlabnav-scroll">
        <ul class="metismenu" id="menu">
            <li class="nav-label first">Main Menu</li>
            <li>
                <a class="ai-icon" href="{{ route('institute_Dashboard') }}" aria-expanded="false">
                    <i class="ti-home"></i>
                    <span class="nav-text">Dashboard</span>
                </a>
            </li>
           
            <li class="nav-label">General Operations</li>

            <li>
                <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                    <i class="ti-bookmark-alt"></i>
                    <span class="nav-text">Campus</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{ route('all-Campuses') }}">All Campus</a></li>
                    <li><a href="{{ route('add-campus') }}">Add Campus</a></li>
                </ul>
            </li>

            <li>
                <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                    <i class="ti-notepad"></i>
                    <span class="nav-text">Campus Name</span>
                </a>
                <ul aria-expanded="false">
                    <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">Course</a>
                        <ul aria-expanded="false">
                            <li><a href="#">All Course</a></li>
                            <li><a href="#">Add Course</a></li>
                        </ul>
                    </li>
                    <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">Departments</a>
                        <ul aria-expanded="false">
                            <li><a href="#">All Departments</a></li>
                            <li><a href="#">Add Departments</a></li>
                        </ul>
                    </li>
                    <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">Subjects</a>
                        <ul aria-expanded="false">
                            <li><a href="#">All Subjects</a></li>
                            <li><a href="#">Add Subjects</a></li>
                        </ul>
                    </li>
                </ul>
            </li>

        </ul>
    </div>
</div>