<div class="dlabnav">
    <div class="dlabnav-scroll">
        <ul class="metismenu" id="menu">
            <li class="nav-label first">Main Menu</li>
            <li>
                <a class="ai-icon" href="{{ route('campus-single-operation') }}" aria-expanded="false">
                    <i class="ti-home"></i>
                    <span class="nav-text">Dashboard</span>
                </a>
            </li>

            {{-- <li class="nav-label">Degree</li> --}}
            {{-- <li>
                <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                    <i class="la la-users"></i>
                    <span class="nav-text">Degree Creation</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{ route('list-degree-creation') }}">All Degrees</a></li>
                    <li><a href="{{ route('add-degree-creation') }}">Add Degree</a></li>
                </ul>
            </li> --}}

            {{-- <li>
                <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                    <i class="la la-users"></i>
                    <span class="nav-text">Program Management</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{ route('list-program-manage') }}">All Programs</a></li>
                    <li><a href="{{ route('add-program-manage') }}">Add Program</a></li>
                </ul>
            </li> --}}
            
            {{-- <li>
                <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                    <i class="la la-users"></i>
                    <span class="nav-text">Batch Creation</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{ route('list-batch-creation') }}">All Batches</a></li>
                    <li><a href="{{ route('add-batch-creation') }}">Add Batch</a></li>
                </ul>
            </li> --}}

            {{-- <li>
                <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                    <i class="la la-users"></i>
                    <span class="nav-text">Semester Configuration</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{ route('list-sem-config') }}">All Semester</a></li>
                    <li><a href="{{ route('add-sem-config') }}">Add Semester</a></li>
                </ul>
            </li> --}}

            {{-- <li>
                <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                    <i class="la la-users"></i>
                    <span class="nav-text">Subject Management</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{ route('list-sub-manage') }}">All Subjects</a></li>
                    <li><a href="{{ route('add-sub-manage') }}">Add Subject</a></li>
                </ul>
            </li> --}}
            
            <li class="nav-label">General Operations</li>
            <li>
                <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                    <i class="ti-bookmark-alt"></i>
                    <span class="nav-text">Batch</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{ route('campus-batches') }}">All Batches</a></li>
                    <li><a href="{{ route('add-batch') }}">Add Batch</a></li>
                </ul>
            </li>

            <li>
                <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                    <i class="ti-user"></i>
                    <span class="nav-text">Admissions</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{ route('admissions') }}">All Admissions</a></li>
                    <li><a href="{{ route('add-Student') }}">Add Admission</a></li>
                </ul>
            </li>
            
            <li>
                <a href="{{ route('view-attendance-institute') }}" aria-expanded="false">
                    <i class="ti-pie-chart"></i>
                    <span class="nav-text">Attendance</span>
                </a>
            </li>

            {{-- <li>
                <a href="#" aria-expanded="false">
                    <i class="la la-users"></i>
                    <span class="nav-text">Results</span>
                </a>
            </li>

            <li>
                <a href="{{ route('viewall-formers') }}" aria-expanded="false">
                    <i class="la la-users"></i>
                    <span class="nav-text">Former Students</span>
                </a>
            </li> --}}

            {{-- <li>
                <a href="#" aria-expanded="false">
                    <i class="la la-users"></i>
                    <span class="nav-text">Time Table</span>
                </a>
            </li>

            
            <li>
                <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                    <i class="la la-users"></i>
                    <span class="nav-text">Syllabus</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{ route('all-syllabus') }}">All Syllabus</a></li>
                    <li><a href="{{ route('add-syllabus') }}">Add Syllabus</a></li>
                </ul>
            </li> --}}

            <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">
                    <i class="ti-notepad"></i>
                    <span class="nav-text">Academic Structure</span>
                </a>
                <ul aria-expanded="false">
                    <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">Course</a>
                        <ul aria-expanded="false">
                            <li><a href="{{ route('all-courses') }}">All Course</a></li>
                            <li><a href="{{ route('add-class') }}">Add Course</a></li>
                        </ul>
                    </li>
                    <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">Departments</a>
                        <ul aria-expanded="false">
                            <li><a href="{{ route('all-sections') }}">All Departments</a></li>
                            <li><a href="{{ route('add-section') }}">Add Departments</a></li>
                        </ul>
                    </li>
                    <li><a class="has-arrow" href="javascript:void()" aria-expanded="false">Subjects</a>
                        <ul aria-expanded="false">
                            <li><a href="{{ route('all-subjects') }}">All Subjects</a></li>
                            <li><a href="{{ route('add-subject') }}">Add Subjects</a></li>
                        </ul>
                    </li>
                </ul>
            </li>

            {{-- <li>
                <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                    <i class="la la-users"></i>
                    <span class="nav-text">Manage Teachers</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{ route('manage-teachers') }}">Subjects Teachers</a></li>
                    <li><a href="{{ route('add-SubjectTeacher') }}">Add Subjects Teachers</a></li>
                </ul>
            </li> --}}

            {{-- <li class="nav-label">Accounts</li>
            <li>
                <a href="{{ route('list-salary') }}" aria-expanded="false">
                    <i class="la la-users"></i>
                    <span class="nav-text">Salary</span>
                </a>
            </li>

            <li>
                <a href="{{ route('all-deduction') }}" aria-expanded="false">
                    <i class="la la-users"></i>
                    <span class="nav-text">Deduction</span>
                </a>
            </li>
            
            <li>
                <a href="{{ route('all-bonus') }}" aria-expanded="false">
                    <i class="la la-users"></i>
                    <span class="nav-text">Bonus</span>
                </a>
            </li> --}}

            {{-- <li>
                <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                    <i class="la la-users"></i>
                    <span class="nav-text">Inventory</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="all-professors.html">All Inventory</a></li>
                    <li><a href="add-professor.html">Add Inventory</a></li>
                </ul>
            </li>

            <li>
                <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                    <i class="la la-users"></i>
                    <span class="nav-text">Billing</span>
                </a>
            </li>

            <li class="nav-label">Exams Management</li>
            <li>
                <a href="javascript:void()" aria-expanded="false">
                    <i class="la la-users"></i>
                    <span class="nav-text">Exams</span>
                </a>
            </li> --}}

            <li class="nav-label">HR</li>
            <li>
                <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                    <i class="la la-users"></i>
                    <span class="nav-text">Employee</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{ route('all-employees') }}">All Employee</a></li>
                    <li><a href="{{ route('add-employees') }}">Add Employee</a></li>
                </ul>
            </li>
            

            <li>
                <a href="{{ route('choose-month') }}" aria-expanded="false">
                    <i class="ti-marker"></i>
                    <span class="nav-text">Generate Attendance</span>
                </a>
            </li>


            <li>
                <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                    <i class="ti-printer"></i>
                    <span class="nav-text">Attendance Record</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{ route('choose-daily-att') }}">Daily Record</a></li>
                    <li><a href="{{ route('choose-month-employee') }}">Monthly Employee</a></li>
                </ul>
            </li>

            {{-- <li>
                <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                    <i class="la la-users"></i>
                    <span class="nav-text">Leaves</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="all-professors.html">All Leaves</a></li>
                    <li><a href="add-professor.html">Add Leaves</a></li>
                </ul>
            </li> --}}

            {{-- <li>
                <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                    <i class="la la-users"></i>
                    <span class="nav-text">Public Holiday</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="all-professors.html">All Public Holiday</a></li>
                    <li><a href="add-professor.html">Add Holiday</a></li>
                </ul>
            </li> --}}

            <li>
                <a class="has-arrow" href="javascript:void()" aria-expanded="false">
                    <i class="ti-package"></i>
                    <span class="nav-text">Department</span>
                </a>
                <ul aria-expanded="false">
                    <li><a href="{{ route('all-department') }}">All Department</a></li>
                    <li><a href="{{ route('add-department') }}">Add Department</a></li>
                </ul>
            </li>
        </ul>
    </div>
</div>