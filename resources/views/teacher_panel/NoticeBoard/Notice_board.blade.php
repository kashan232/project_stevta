@include('teacher_panel.include.header')
<div id="preloader"></div>
<div id="wrapper" class="wrapper bg-ash">
    @include('teacher_panel.include.navbar')
    <div class="dashboard-page-one">
        <div class="dashboard-content-one">
            <div class="breadcrumbs-area">
                <div class="text-right w-100">
                    <a href="{{ route('add-Notice') }}" class="btn-fill-lg btn-gradient-yellow btn-hover-bluedark text-white">
                        Add Notice
                    </a>
                </div>
            </div>
            <div class="container-fluid card height-auto">
                <div class="card-body"> @if(session('Success'))
                    <div class="alert alert-success">
                        {{ session('Success') }}
                    </div>
                    @endif


                    <div class="heading-layout1">
                        <div class="item-title  mt-5 mb-5 text-center w-100">
                            <h3>Notice Board Details</h3>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table display data-table text-nowrap">
                            <thead>
                                <tr>
                                    <th>
                                        <label class="form-check-label">ID</label>
                                    </th>
                                    <th>Notice Title</th>
                                    <th>Notice Link</th>
                                    <th>Notice Class</th>
                                    <th>Notice Section</th>
                                    <th>Notice Publish Date</th>
                                    <th>Notice Description</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($all_notices as $all_notices)
                                <tr>
                                    <td>
                                        {{$all_notices->id}}
                                    </td>

                                    <td>{{$all_notices->Notice_title}}</td>
                                    <td><a href="{{$all_notices->Notice_Link}}" target="_blank">{{$all_notices->Notice_Link}}</a></td>   
                                    <td>{{$all_notices->Notice_class}}</td> 
                                    <td>{{$all_notices->Notice_section}}</td>
                                    <td>{{$all_notices->Notice_Publish_date}}</td>
                                    <td>{{$all_notices->Notice_Description}}</td>
                                    <td>
                                        <a href="{{ route('edit-notice' ,['id' => $all_notices->id ]) }}">
                                            <button class="btn btn-warning">Edit</button>
                                        </a>
                                        <a href="{{ route('delete-notice' ,['id' => $all_notices->id ]) }}">
                                            <button class="btn btn-danger">Delete</button>
                                        </a>
                                    </td>
                                </tr>
                                @endforeach

                            </tbody>
                        </table> 
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Page Area End Here -->
</div>

@include('teacher_panel.include.footer')