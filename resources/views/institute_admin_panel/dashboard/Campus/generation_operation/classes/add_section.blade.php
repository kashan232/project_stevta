@include('institute_admin_panel.dashboard.include.header')

<!-- Preloader Start Here -->
<div id="preloader"></div>
<!-- Preloader End Here -->
<div id="wrapper" class="wrapper bg-ash">
    <!-- Header Menu Area Start Here -->
    @include('institute_admin_panel.dashboard.include.navbar')
    <!-- Header Menu Area End Here -->
    <!-- Page Area Start Here -->
    <div class="dashboard-page-one">
        <!-- Sidebar Area Start Here -->
        @include('institute_admin_panel.dashboard.include.sidebar')
        <!-- Sidebar Area End Here -->
        <div class="dashboard-content-one">
            <!-- Breadcubs Area Start Here -->
            <div class="breadcrumbs-area">
                <h3 class="text-center">"
                    {{ @session('campus_name') }}"
                </h3>
                <ul>
                    <li>
                        <a href="index.html">Home</a>
                    </li>
                    <li>Add Section</li>
                </ul>
            </div>

            <div class="row d-flex justify-content-end">
                <a href="{{ route('back-section') }}">
                    <button type="button" class="btn btn-warning text-white mr-4 mb-3" style="font-size: 14px">Back
                    </button>
                </a>
            </div>

            <!-- Breadcubs Area End Here -->
            <!-- Admit Form Area Start Here -->
            <div class="card height-auto">
                <div class="card-body">
                    @if (session()->has('success-message-section'))
                        <div class="alert alert-success">
                            {{ session('success-message-section') }}
                        </div>
                    @endif
                    @if ($errors->any())
                        <div class="alert alert-danger alert-dismissible fade show" role="alert">
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <div class="heading-layout1">
                        <div class="item-title Add-student m-auto justify-content-center">
                            <h3>Add Section</h3>
                        </div>

                    </div>
                    <form class="new-added-form" action="{{ route('store-section') }}" method="POST">
                        @csrf
                        <div class="row d-flex justify-content-center">

                            <input type="hidden" name="institute_id" value="{{ session('institute_id') }}">
                            <input type="hidden" name="campus_id" value="{{ session('campus_id') }}">



                            <div class="col-xl-6 col-lg-6 col-12 form-group">
                                <label>Select Class *</label>
                                <select name="class_name" required class="form-control" id="class_name">
                                    <option value="">Select a Class</option>
                                    @foreach ($classes as $class)
                                        <option value="{{ $class->class_name }}">{{ $class->class_name }}</option>
                                    @endforeach
                                </select>
                            </div>


                            <div class="col-xl-6 col-lg-6 col-12 form-group">
                                <label>Add Section *</label>
                                <input type="text" name="section_name" id="section_name" placeholder="Section Name"
                                    required class="form-control" />
                                <span class="text-danger error-message" id="error-section_name"></span>
                            </div>

                        </div>
                        <div class="row d-flex justify-content-center">
                            <div class="mt-4 form-group">
                                <button type="submit" class="btn-fill-lg btn-gradient-yellow btn-hover-bluedark">
                                    Add
                                </button>
                            </div>
                        </div>
                </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- Page Area End Here -->
</div>
@include('institute_admin_panel.dashboard.include.footer')
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
