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
                <h3 class="text-center">
                    "{{ $campusName }}"
                </h3>
                <ul>
                    <li>
                        <a href="index.php">Home</a>
                    </li>
                    <li>Fees</li>
                </ul>
            </div>
            <!-- Breadcubs Area End Here -->
            <!-- Admit Form Area Start Here -->
            <div class="card height-auto">
                <div class="card-body">

                    <div class="heading-layout1">
                        <div class="item-title">
                            <h3>{{ $pagename }}</h3>
                        </div>

                    </div>
                    <!-- alert  -->
                    <div id="messageContainer" class="alert alert-dismissible fade show" role="alert">
                        <span id="messageText"></span>
                    </div>

                    <!-- alert  -->

                    <form class="new-added-form" id="student-fee-form">
                        @csrf
                        <div class="row">
                            <div class="col-xl-4 col-lg-6 col-12 form-group">
                                <label>Class *</label>
                                <select name="class_name" class="form-control" id="select_class">
                                    <option value="">Select a Class</option>
                                    @foreach($classes as $class)
                                    <option value="{{ $class->class_name }}">{{ $class->class_name}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-xl-4 col-lg-6 col-12 form-group">
                                <label>Fees type *</label>
                                <input type="text" placeholder="Sports, Party, Event" name="Fee_type" required="required" class="form-control" />
                            </div>
                            <div class="col-xl-4 col-lg-6 col-12 form-group">
                                <label>Enter amount *</label>
                                <input type="text" placeholder="Enter amount" name="amount" required="required" class="form-control" />
                            </div>
                            <div class="col-12 d-flex justify-content-center mg-t-8">
                                <button type="button" class="btn-fill-lg btn-gradient-yellow btn-hover-bluedark" id="submit-form">
                                    Add
                                </button>
                            </div>
                            <div id="success-message" style="display: none;" class="alert alert-success">
                                Fee stored successfully.
                            </div>

                            <!-- Validation errors section -->
                            <div id="error-message" style="display: none;" class="alert alert-danger">
                                <!-- Errors will be dynamically added here via JavaScript -->
                            </div>
                        </div>
                    </form>


                    <!-- {{-- <form class="mg-b-20"> --}}
                    <div class="row d-flex justify-content-end gutters-8 my-5">
                        <div class="col-5-xxxl col-xl-3 col-lg-3 col-12 form-group">
                            <input type="text" placeholder="Search by..." class="form-control" />
                        </div>

                        <div class="col-1-xxxl col-xl-2 col-lg-3 col-12 form-group">
                            <button type="submit" class="fw-btn-fill btn-gradient-yellow">
                                Search
                            </button>
                        </div>
                    </div>
                    {{-- </form> --}} -->
                    <div class="table-responsive">
                        <div class="heading-layout1">
                            <div class="item-title">
                                <h3>Class Fees
                                </h3>
                            </div>


                        </div>

                        <!-- alert  -->
                        <div id="messageContainerDelete" class="alert alert-dismissible fade show" role="alert"> 
                        <span id="messageTextDelete"></span>
                    </div>
                        <!-- alert  -->

                        <table class="table display data-table text-nowrap" id="fee-table">
                            <thead>
                                <tr>
                                    <th>
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input checkAll" />
                                            <label class="form-check-label">ID</label>
                                        </div>
                                    </th>
                                    <th>Class</th>
                                    <th>Fees type</th>
                                    <th>Fees amount</th>
                                    <th>Extra fees</th>
                                    <th>More</th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- Table rows will be dynamically added here via JavaScript code here -->
                            </tbody>
                        </table>

                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Add Extra Fees</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <!-- alert  -->
                <div id="messageContainerextra" class="alert alert-dismissible fade show" role="alert">
                        <span id="messageTextextra"></span>
                    </div> 
                <!-- alert  -->
                <div class="modal-body">
                    <form id="extraFeeForm">
                        @csrf
                        <div class="row">
                            <div class="col-xl-12 col-lg-6 col-12 form-group">
                                <label>Class *</label>
                                <input type="hidden" name="classid" class="form-control classid" readonly>
                            </div>
                            <div class="col-xl-12 col-lg-6 col-12 form-group">
                                <label>Extra Fees type *</label>
                                <input type="text" placeholder="Sports, Party, Event" name="extra_fee" id="extra_fee" required="required" class="form-control" />
                            </div>
                            <div class="col-xl-12 col-lg-6 col-12 form-group">
                                <label>Extra Enter amount *</label>
                                <input type="text" placeholder="Enter amount" name="extra_amount" id="extra_amount" required="required" class="form-control" />
                            </div>
                            <div class="col-12 d-flex justify-content-center  mg-t-8">
                                <button type="button" class="btn btn-warning text-white py-3 px-5 text-13 font-medium" id="submitFormBtn">
                                    Add
                                </button>

                            </div> 
                        </div>
                    </form>

                    
                    <div class="row py-5 px-2">
                    <div id="messageContainerDeleteExtra" class="alert alert-dismissible fade show" role="alert">
                        <span id="messageTextDeleteExtra"></span>
                    </div>

                        <table class="table display text-nowrap" id="fee-table-body">
                            <thead>
                                <tr>
                                    <th>
                                        <div class="form-check">
                                            <input type="checkbox" class="form-check-input checkAll" />
                                            <label class="form-check-label">ID</label>
                                        </div>
                                    </th>
                                    <th>Class</th>
                                    <th>Fees type</th>
                                    <th>Fees amount</th>
                                    <th>More</th>
                                </tr>
                            </thead>
                            <tbody>
                                <!-- Fee data rows -->
                            </tbody>
                        </table>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger text-white" data-dismiss="modal">Close</button>
                    <button type="button" class="btn btn-primary text-white">Save changes</button>
                </div>
            </div>
        </div>
    </div>

    <!-- Page Area End Here -->
</div>
@include('institute_admin_panel.dashboard.include.footer')
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

<script>
    $(document).ready(function() {
        fetchStudentFees();
        // Handle form submission
        $('#submit-form').click(function(e) {
            // alert('hello');
            e.preventDefault(); // Prevent the default form submission

            var operation = $(this).data('operation');
            var url = operation === 'update' ? '{{ route("update-fee") }}' : '{{ route("store-fee") }}';

            var formData = $('#student-fee-form').serialize();
            var id = operation === 'update' ? $(this).data('id') : null;

            if (id) {
                formData += '&id=' + id;
            }

            $.ajax({
                url: url,
                type: 'POST',
                data: formData,
                success: function(response) {

                    var messageContainer = $('#messageContainer');
                    var messageText = $('#messageText');
                    messageText.text(response.message);
                    messageContainer.addClass('alert-success').addClass('show');
                    setTimeout(function() {
                        messageContainer.removeClass('show');
                    }, 5000);
                    // $('#messageContainer').text(response.message);

                    $('#student-fee-form')[0].reset();
                    // Display success message


                    // Change the button text back to 'Add' and remove the operation and ID data attributes
                    $('#submit-form').text('Add').removeData('operation').removeData('id');

                    fetchStudentFees();

                },
                error: function(xhr) {
                    // Handle any errors that occur during the Ajax request
                    console.log(xhr.responseText);

                }
            });  
        });



        // });


        function fetchStudentFees() {
            $.ajax({
                url: '{{ route("fetch-fee") }}',
                type: 'GET',
                success: function(response) {

                    $('#fee-table tbody').empty();


                    $.each(response.data, function(index, fee) {
                        var row = '<tr>' +
                            '<td>' +
                            '<div class="form-check">' +
                            '<input type="checkbox" class="form-check-input" data-fee-id="' + fee.id + '"/>' +
                            '<label class="form-check-label">#' + fee.id + '</label>' +
                            '</div>' +
                            '</td>' +
                            '<td>' + fee.class_name + '</td>' +
                            '<td>' + fee.Fee_type + '</td>' +
                            '<td>' + fee.amount + '</td>' +
                            '<td>' +
                            '<button type="button" class="btn btn-warning text-white py-3 px-3 text-13 font-medium" data-toggle="modal" data-target="#exampleModal" onclick="openExtraFeeModal(' + fee.id + ')" id="extra-btn">' +
                            '+ Extra fee' +
                            '</button>' +
                            '</td>' +
                            '<td>' +
                            // '<td>' +
                            '<a href="#" class="btn btn-danger text-white py-3 px-3 text-13 font-medium delete-btn">' +
                            'Delete' +
                            '</a>' +
                            '<a href="#" class="btn btn-primary text-white py-3 px-3 text-13 font-medium update-btn">' +
                            'Update' +
                            '</a>' +
                            '</td>' +
                            '</tr>';


                        $('#fee-table tbody').append(row);
                    });
                },
                error: function(xhr) {
                    console.log(xhr.responseText);
                }
            });
        } 

        // upper   
    });
</script>



<script>
    $(document).on('click', '.update-btn', function() {
        // Get the row containing the clicked update button
        var row = $(this).closest('tr');

        // Retrieve the data from the row
        var id = row.find('.form-check-label').text().replace('#', '');
        var className = row.find('td:eq(1)').text();
        var feeType = row.find('td:eq(2)').text();
        var amount = row.find('td:eq(3)').text();

        // Set the form values with the retrieved data
        $('#select_class').val(className);
        $('input[name="Fee_type"]').val(feeType);
        $('input[name="amount"]').val(amount);

        // Change the button text and data attribute to indicate an update operation
        $('#submit-form').text('Update').data('operation', 'update').data('id', id);
    });
</script>

<script>
    $(document).on('click', '.delete-btn', function(e) {
        e.preventDefault();

        var row = $(this).closest('tr');
        // var feeId = row.find('.form-check-input').val();
        var feeId = row.find('.form-check-input').data('fee-id');
        var csrfToken = "{{ csrf_token() }}";
        $.ajax({
            url: '{{ route("delete-fee") }}',
            type: 'POST',
            data: {
                id: feeId,
                _token: csrfToken
            }, // Include the CSRF token
            success: function(response) {
                // alert(response.message);
                var messageContainer = $('#messageContainerDelete');
                    var messageText = $('#messageTextDelete');
                    messageText.text(response.message);
                    messageContainer.addClass('alert-success').addClass('show');
                    setTimeout(function() {
                        messageContainer.removeClass('show');
                    }, 5000);
                row.remove(); 
            },
            error: function(xhr) {
                console.log(xhr.responseText);
            } 
        });
    });
</script>

<script>
    function openExtraFeeModal(feeId) {
        // Make an Ajax request to fetch the fee details
        $.ajax({
            url: '{{ route("fetch-fee-details") }}',
            type: 'GET',
            data: {
                id: feeId
            },
            success: function(response) {
                // Retrieve the class value from the response
                var className = response.data.class_name;

                // Set the value of the "Class" input field in the modal
                $('#exampleModal').find('input[name="classid"]').val(className);
            },
            error: function(xhr) {
                console.log(xhr.responseText);
            }
        });
    }
</script>




<script>
    // $(document).ready(function() {
    //     $('#submitFormBtn').click(function() {

    //         var formData = $('#extraFeeForm').serialize();
    //         var csrfToken = "{{ csrf_token() }}";

    //         $.ajax({ 
    //             url: '/store-extra-fee', 
    //             type: 'POST',
    //             data:{
    //                 formData,   
    //                 _token: csrfToken
    //             },
    //             success: function(response) {
    //                 console.log(response);  
    //             },
    //             error: function(xhr) {
    //                 console.log(xhr.responseText);  
    //             }     
    //         });
    //     });
    // });



    $(document).ready(function() {
        fetchExtraFees();
        // Handle form submission
        $('#submitFormBtn').click(function(e) {
            // alert('hello');
            e.preventDefault();

            var operation = $(this).data('operation');
            var formData = $('#extraFeeForm').serialize();
            $.ajax({
                url: '/store-extra-fee',
                type: 'POST', 
                data: formData,
                success: function(response) {

                    // console.log(response);
                    // alert 
                    var messageContainer = $('#messageContainerextra');
                    var messageText = $('#messageTextextra');
                    messageText.text(response.message);
                    messageContainer.addClass('alert-success').addClass('show');
                    setTimeout(function() {
                        messageContainer.removeClass('show');
                    }, 5000);
                    // alert 
                    // $('#extraFeeForm')[0].reset();
                    $('#extra_fee').val('');
                    $('#extra_amount').val('');
                    fetchExtraFees();


                },
                error: function(xhr) {
                    // Handle any errors that occur during the Ajax request
                    console.log(xhr.responseText);

                }
            });
        });


        // });   

        function fetchExtraFees() {
            $.ajax({
                url: '{{ route("fetch-extra-fees") }}',
                type: 'GET',
                success: function(response) {

                    $('#fee-table-body tbody').empty();


                    $.each(response.data, function(index, fee) {
                        var row = '<tr>' +
                            '<td>' +
                            '<div class="form-check">' +
                            '<input type="checkbox" class="form-check-input" data-fee-id="' + fee.id + '"/>' +
                            '<label class="form-check-label">#' + fee.id + '</label>' +
                            '</div>' +
                            '</td>' +
                            '<td>' + fee.class_name + '</td>' +
                            '<td>' + fee.extra_fee + '</td>' +
                            '<td>' + fee.extra_amount + '</td>' +
                            '<td>' +
                            // '<td>' +
                            '<a href="#" class="btn btn-danger text-white py-3 px-3 text-13 font-medium deleteextra-btn">' +
                            'Delete' +
                            '</a>' +
                            '</td>' +
                            '</tr>';


                        $('#fee-table-body tbody').append(row);
                    });


                },

                error: function(xhr) {
                    console.log(xhr.responseText);
                }
            });
        }

        // upper   
    });
</script>


<script>
    $(document).on('click', '.deleteextra-btn', function(e) {
        e.preventDefault();

        var row = $(this).closest('tr');
        // var feeId = row.find('.form-check-input').val();
        var feeId = row.find('.form-check-input').data('fee-id');
        var csrfToken = "{{ csrf_token() }}";
        $.ajax({
            url: '{{ route("deleteextra-fee") }}',
            type: 'POST',
            data: {
                id: feeId,
                _token: csrfToken
            }, // Include the CSRF token
            success: function(response) {
                // alert(response.message);
                var messageContainer = $('#messageContainerDeleteExtra');
                    var messageText = $('#messageTextDeleteExtra');
                    messageText.text(response.message);
                    messageContainer.addClass('alert-success').addClass('show');
                    setTimeout(function() {
                        messageContainer.removeClass('show');
                    }, 5000);
                row.remove();  
            },
            error: function(xhr) {
                console.log(xhr.responseText);
            }  
        });
    });
</script>