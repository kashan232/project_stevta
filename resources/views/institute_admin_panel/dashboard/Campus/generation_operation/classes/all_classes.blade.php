@include('institute_admin_panel.dashboard.include.header')
<!-- Preloader Start Here -->
<div id="preloader"></div>
<!-- Preloader End Here -->
<div id="wrapper" class="wrapper bg-ash">
    <!-- Header Menu Area Start Here -->
    @include('institute_admin_panel.dashboard.include.navbar')
    <div class="dashboard-page-one">
        <!-- Sidebar Area Start Here -->
        @include('institute_admin_panel.dashboard.include.sidebar')
        <!-- Sidebar Area End Here -->
        <div class="dashboard-content-one">
            <!-- Breadcubs Area Start Here -->
            <div class="breadcrumbs-area">
                <h3 class="text-center">"{{ @session('campus_name') }}"</h3>
                <ul>
                    <li>
                        <a href="{{ route('institute_Dashboard') }}">Home</a>
                    </li>
                </ul>
            </div>
            <!-- Breadcubs Area End Here -->
            <!-- Student Table Area Start Here -->
            <div class="card height-auto">
                <div class="card-body">
                    <div class="heading-layout1">
                        <div class="item-title mt-3 mb-3">
                            <h3>All Classes</h3>
                        </div>
                    </div>
                    <div class="table-responsive">
                        <table class="table display data-table text-nowrap">
                            <thead class="text-center">
                                <tr>
                                    <th>S.No</th>
                                    <th>Class Name</th>
                                    <th>Section</th>
                                    <th style="width:20%;">Students</th>
                                </tr>
                            </thead>
                            <tbody id="table-body" class="text-center">
                                @php
                                $serialNumber = 1;
                                @endphp
                                @foreach($all_classes as $class)
                                <tr>
                                    <td>
                                        {{ $serialNumber }}
                                    </td> 
                                    <td>{{ $class->class_name }}</td>
                                    <td>
                                        <a href="{{ route('institute-sections-view', ['class_id' => $class->id])  }}">
                                            <button type="button" class="btn btn-warning text-white mr-4 mb-3" style="font-size: 14px">Sections
                                            </button>
                                        </a>
                                    </td>   
                                    {{-- <td>{{ $studentCounts[$class->class_name] }}</td> --}}
                                    <td>
                                        <div style="display: flex;justify-content: center;align-content: center;align-self: center;">
                                            <p style="width:96%;background-color: #d0d0d0 !important;font-weight: bold;padding: 5px 0;">{{ $studentCounts[$class->class_name] }} students</p>
                                        </div>
                                        <div style="display: flex;justify-content: space-around;">
                                            <p style="width:45%;background-color: #d0d0d0 !important;font-size:18px;font-weight: bold;padding: 5px 0;"><span><img src="assets/general_operations/graduated.png" alt=""></span>&nbsp;{{ $genderCounts[$class->class_name]['male'] }}</p>
                                            <p style="width:45%;background-color: #d0d0d0 !important;font-size:18px;font-weight: bold;padding: 5px 0;"><span><img src="assets/general_operations/girl.png" alt=""></span>&nbsp;{{ $genderCounts[$class->class_name]['female'] }}</p>
                                        </div>
                                    </td>
                                </tr>
                                @php
                                $serialNumber++;
                                @endphp
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
@include('institute_admin_panel.dashboard.include.footer')
<script>
    document.addEventListener('DOMContentLoaded', function() {
        var tableBody = document.getElementById('table-body');
        var emptyRow = document.getElementById('empty-row');

        if (tableBody.rows.length === 0) {
            emptyRow.style.display = 'table-row';
        } else {
            emptyRow.style.display = 'none';
        }
    });
</script>  