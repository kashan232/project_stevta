@include('new_projects.include.header')
<div id="preloader"></div>
<div id="wrapper" class="wrapper bg-ash">
    @include('new_projects.include.navbar')
    <div class="dashboard-page-one">
        <div class="dashboard-content-one">
            <div class="breadcrumbs-area">
                <div class="text-right w-100">
                    <a href="" class="btn-fill-lg btn-gradient-yellow btn-hover-bluedark text-white">
                        Add Diary/Assignment
                    </a>
                </div>
            </div>
            <div class="container-fluid card height-auto">
                <div class="card-body">
                        {{-- @if(@session('delete-message-diary'))
                            <div class="alert alert-success">
                                <strong>Congratulations! </strong> {{ @session('delete-message-diary') }}
                            </div>
                        @endif --}}
                    <div class="heading-layout1">
                        <div class="item-title text-center w-100 mt-5 mb-5">
                            <h3>All Diary/Assignments</h3>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table display data-table text-nowrap">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>File Type</th>
                                    <th>Class</th>
                                    <th>Section</th>
                                    <th>Subject</th>
                                    <th>Title  </th>
                                    <th>Diary Note</th> 
                                    <th>Assignment File</th>
                                    <th>Start Date</th>
                                    <th>Due Date</th>
                                    <th>Total Marks</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td><img src="/teacher/pdf-file.png" alt=""></td>
                                        <td>2</td>
                                        <td>B</td>
                                        <td>English</td>
                                        <td>
                                           <a href="#">
                                            English Assignmnet
                                           </a>
                                        </td>
                                        <td>Do it </td>
                                        <td><a href="">
                                            Download Here</a></td>
                                        <td>17/09/2023</td>
                                        <td>23/09/2023</td>
                                        <td>20</td>
                                        <td>
                                            <a href="">
                                                <button class="btn btn-success">Edit</button>
                                            </a>
                                            <a href="">
                                                <button class="btn btn-danger">Delete</button>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td><img src="/teacher/pdf-file.png" alt=""></td>
                                        <td>2</td>
                                        <td>B</td>
                                        <td>urdu</td>
                                        <td>
                                           <a href="#">
                                            urdu Assignmnet
                                           </a>
                                        </td>
                                        <td>Do it </td>
                                        <td><a href="">
                                            Download Here</a></td>
                                        <td>17/09/2023</td>
                                        <td>23/09/2023</td>
                                        <td>20</td>
                                        <td>
                                            <a href="">
                                                <button class="btn btn-success">Edit</button>
                                            </a>
                                            <a href="">
                                                <button class="btn btn-danger">Delete</button>
                                            </a>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>1</td>
                                        <td><img src="/teacher/pdf-file.png" alt=""></td>
                                        <td>2</td>
                                        <td>B</td>
                                        <td>computer</td>
                                        <td>
                                           <a href="#">
                                            computer Assignmnet
                                           </a>
                                        </td>
                                        <td>Do it </td>
                                        <td><a href="">
                                            Download Here</a></td>
                                        <td>17/09/2023</td>
                                        <td>23/09/2023</td>
                                        <td>20</td>
                                        <td>
                                            <a href="">
                                                <button class="btn btn-success">Edit</button>
                                            </a>
                                            <a href="">
                                                <button class="btn btn-danger">Delete</button>
                                            </a>
                                        </td>
                                    </tr>
                               
                            </tbody>
                        </table>
                    </div>

                </div>
            </div>
        </div>

    </div>
    @include('new_projects.include.poweredby')

    <!-- Page Area End Here -->
</div>
@include('new_projects.include.footer')

