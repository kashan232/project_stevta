@include('student_panel.include.header')

<style>
    .progress-container {
        width: 100%;
        height: 10px;
        border-radius: 5px;
        border: 1px solid #ccc;
        background-color: #f3f3f3;
        position: relative;
        margin-top: 10px;
    }

    .progress-bar {
        height: 100%;
        background-color: #3498db;
        width: 0;
        transition: width 0.3s ease-in-out;
    }

    .percentage {
        text-align: center;
        margin-top: 4px;
        font-size: 14px;
        color: #333;
    }

    .delete-button {
        margin-top: 10px;
        display: none;
        background-color: rgb(255, 33, 33);
        color: white;
        border: none;
        padding: 5px 20px;
        border-radius: 5px;
        font-size: 13px;
        cursor: pointer;
    }

    .uploadBtn {
        background-color: #042954;
        color: white;
        border: none;
        padding: 5px 20px;
        border-radius: 5px;
        font-size: 13px;
        cursor: pointer;
    }
</style>

<div id="preloader"></div>
<div id="wrapper" class="wrapper bg-ash">
    @include('student_panel.include.navbar')

    <div class="dashboard-page-one">
        <div class="dashboard-content-one">

            <!-- Stock Modal -->
            <form class="new-added-form" action="{{ route('submit-assignment') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
                    aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                    <div class="modal-dialog modal-dialog-centered" role="document">
                        <div class="modal-content">
                            <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLongTitle">Submit Assignment</h5>
                                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                            {{-- <div class="modal-body">
                                <div class="alert alert-success" id="stock_message" style="display: none;"></div>
                                <span>Submit Here</span>
                                
                                <input type="hidden" name="title" id="submitted_title" required>
                                <input type="file" class="form-control" name="assignment_file" id="assignment_file"
                                    required>
                            </div> --}}



                            <!-- Add this element to the modal body where you want to display the ID -->



                            <!-- Add this element to the modal body where you want to display the ID -->
<div class="modal-body">
    <div class="alert alert-success" id="stock_message" style="display: none;"></div>
    <span>Submit Here</span>
    <p>Assignment ID: <span id="assignment_id"></span></p>
    <!-- Input field to store the title -->
    <input type="file" class="form-control" name="assignment_file" id="assignment_file" required>
</div>


                            <div class="modal-body">
                                <div class="alert alert-success" id="stock_message" style="display: none;"></div>
                                <span>Description</span>
                                <!-- Input field to store the description -->
                                <input type="text" class="form-control" name="description" id="submitted_description"
                                    required>
                            </div>

                            <div class="modal-footer">
                                <button type="submit" class="fw-btn-fill btn btn-success">Submit Now</button>

                                <button type="button" class="fw-btn-fill btn btn-danger"
                                    data-dismiss="modal">cancel</button>
                            </div>
                        </div>
                    </div>
                </div>
            </form>
            <!-- Stock Modal End Here-->
            <div class="breadcrumbs-area">
                <h3 class="text-center">{{ $subject_name }}</h3>
            </div>
            <div class="container-fluid">
            </div>
            <div class="container-fluid card height-auto">
                <div class="card-body ">
                    @if(session('assignment-submit'))
                    <div class="alert alert-success alert-dismissible fade show" role="alert">
                        <strong>Congratulations!</strong> {{ session('assignment-submit') }}.
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    @endif
                    <div class="heading-layout1 mt-5 mb-5">

                    </div>
                    <div class="table-responsive">
                        <table class="table display data-table text-nowrap">
                            <thead class="">
                                <tr>
                                    <th>Sr. No.</th>
                                    <th>Title</th>
                                    <th>Start date</th>
                                    <th>Due date</th>
                                    <th>Download Assignment</th>
                                    <th>Total Marks</th>
                                    <th>Submit</th>
                                </tr>  
                            </thead>
                            <tbody>
                                @foreach ($student_assignments as $student_assignment)
                                    <tr>
                                        <td>{{ $loop->iteration }}</td>
                                        <td>
                                            {{ $student_assignment->title }}
                                            <input type="hidden" class="submitted_title"
                                                value="{{ $student_assignment->title }}">
                                        </td>
                                        <td>{{ $student_assignment->start_date }}</td>
                                        <td>{{ $student_assignment->due_date }}</td>
                                        <td>
                                            <a
                                                href="teacher/dry_asgmets_duploaded_document/{{ $student_assignment->uploaded_document }}">
                                                {{ $student_assignment->uploaded_document }}
                                            </a>
                                        </td>
                                        <td>{{ $student_assignment->assignmnet_total_marks }}</td>

                                        {{-- <td>
                                            <a class="dropdown-item" href="#">
                                                <button type="button" class="fw-btn-fill btn btn-primary submit_asignt"
                                                    data-toggle="modal" data-target="#exampleModalCenter" data-id=""
                                                    data-stock="">
                                                    Submit
                                                </button>
                                            </a>
                                        </td> --}}


                                        {{-- old  --}}
                                        {{-- <td>
                                            @if ($student_assignment->is_submitted)
                                                <span>Submitted</span>
                                            @else
                                                <button type="button" class="fw-btn-fill btn btn-primary submit_asignt"
                                                    data-toggle="modal" data-target="#exampleModalCenter" data-id=""
                                                    data-stock="">
                                                    Submit
                                                </button>
                                            @endif
                                        </td> --}}

                                        {{-- old  --}}
                                        
                                        {{-- new  --}}

                                        {{-- <td>
                                            @if ($student_assignment->is_submitted)
                                                <span>Submitted</span>
                                            @elseif(session('assignment_submitted'))
                                                <span>Submitted</span>
                                            @else
                                                <button type="button" class="fw-btn-fill btn btn-primary submit_asignt"
                                                    data-toggle="modal" data-target="#exampleModalCenter" data-id=""
                                                    data-stock="">
                                                    Submit
                                                </button>
                                            @endif
                                        </td> --}}

                                        {{-- new  --}}

                                        {{-- <td>    
                                            @if ($student_assignment->is_submitted)
                                                <span>Submitted</span>
                                            @else
                                                <button type="button" class="fw-btn-fill btn btn-primary submit_asignt" 
                                                        data-toggle="modal" data-target="#exampleModalCenter"
                                                        data-id="{{ $student_assignment->id }}" 
                                                        data-stock="">
                                                    Submit
                                                </button>
                                            @endif
                                        </td> --}}  

                                        {{-- <td>
                                            <a href="{{ route('edit-diary' ,['id' => $student_assignment->id ]) }}">
                                                <button class="btn btn-success">Submit</button>
                                            </a>
                                        </td> --}} 
                                        <td>
                                            {{-- <a href="{{ route('submit-assignment', ['id' => $student_assignment->id ]) }}"> --}}
                                                <button class="btn btn-success submit_asignt" data-id="{{ $student_assignment->id }}">Submit</button>
                                                <button class="fw-btn-fill btn btn-success submitted-btn" style="display: none;">Submitted</button>
                                            {{-- </a> --}}
                                        </td>
                                        
                                        
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
            <div class="d-flex justify-content-center">

                {{-- @include('main_super_admin.dashboard.include.poweredby') --}}
            </div>
        </div>
    </div>
</div>
@include('student_panel.include.footer')


   
<script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-uYkhyo9aAKYuB33mz1z/Q8rjx9qZgNcGF1ev2+luAz8=" crossorigin="anonymous"></script>

<script>
    
    // $(document).ready(function() {
    //     $('.submit_asignt').click(function() {
    //         var title = $(this).closest('tr').find('.submitted_title').val();
    //         var description = $(this).closest('tr').find('.submitted_description').val();
    //         $('#submitted_title').val(title);
    //         $('#submitted_description').val(description);
    //     });
    // });
</script>
<script>




    $(document).ready(function() {
        $('.submit_asignt').click(function() {
            var assignmentId = $(this).data('id'); // Get the assignment ID from the data attribute
            var button = $(this); // Save the reference to the button

            // Your AJAX call to submit the form (Assuming you're using AJAX)
            // You can replace this with your form submission code
            $.ajax({
                url: '{{ route('submit-assignment') }}', // Replace with your form submission route
                type: 'POST',
                data: { assignment_id: assignmentId, _token: '{{ csrf_token() }}' },
                success: function(response) {
                    // Update the button text to 'Submitted' on successful form submission
                    button.text('Submitted');
                },
                error: function(error) {
                    // Handle the error if the form submission fails
                    console.log(error);
                }
            });
        });
    });

    
</script>





<script>
    $(document).ready(function() {
        $('.submit_asignt').click(function() {
            var title = $(this).closest('tr').find('.submitted_title').val();
            var description = $(this).closest('tr').find('.submitted_description').val();
            var assignmentId = $(this).data('id'); 

           
            $('#submitted_title').val(title);
            $('#submitted_description').val(description);
            $('#assignment_id').text(assignmentId);

           
            $('#exampleModalCenter').modal('show');
        });
    });
</script>



<!-- @if (session('assignment-submit'))  
    <script>
        // Disable the submit button if the form was successfully submitted
        $('.submit_asignt').prop('disabled', true);
        $('.submit_asignt').text('Submitted');
    </script>
@endif -->

<!-- 
@if (session('assignment-submit'))  
    <script>
        // Disable the submit button if the form was successfully submitted
        $('.submit_asignt').hide();
        $('.submitted-btn').show();

        $('.submit_asignt').text('Submitted');
    </script>
@endif -->

<script>
    window.onload = function() {
        if (sessionStorage.getItem('assignment-submit')) {
            // Disable the submit button if the form was successfully submitted
            $('.submit_asignt').hide();
            $('.submitted-btn').show();
            $('.submit_asignt').text('Submitted');
        }
    }
</script>





