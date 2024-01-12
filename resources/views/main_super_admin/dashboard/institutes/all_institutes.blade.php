@include('main_super_admin.dashboard.include.header')
<!-- Preloader Start Here -->
<div id="preloader"></div>
<style>
    #lock_message {
    display: none;
    }
    #mail_send {
    display: none;
    }
</style>

<!-- Preloader End Here -->
<div id="wrapper" class="wrapper bg-ash">
    <!-- Header Menu Area Start Here -->

    @include('main_super_admin.dashboard.include.navbar')
    <div class="dashboard-page-one">
        <!-- Sidebar Area Start Here -->
        @include('main_super_admin.dashboard.include.side_bar')
        <!-- Sidebar Area End Here -->
        <div class="dashboard-content-one">

            <!-- Breadcubs Area Start Here -->
            <div class="breadcrumbs-area">
                <h3>Institute</h3>
                <ul>
                    <li>
                        <a href="index.html">Home</a>
                    </li>
                    <li>All Institute</li>
                </ul>
            </div>
            <!-- Breadcubs Area End Here -->
            <!-- Student Table Area Start Here -->
            <div class="card height-auto">
                <div class="card-body">
                    @if(session('lock-message-Institute'))
                        <div class="alert alert-success alert-dismissible fade show" role="alert">
                            <strong>Congratulations!</strong> {{ session('lock-message-Institute') }}.
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @endif
                    <div class="alert alert-success" id="lock_message"></div>
                    <div class="alert alert-success" id="mail_send"></div>
                    <div class="heading-layout1">
                        <div class="item-title">
                            <h3>All Institute</h3>
                        </div>
                    </div>
                    
                    <div class="table-responsive">
                        <table class="table display data-table text-nowrap">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Institute Name</th>
                                    <th>Institute City</th>
                                    <th>Institute Email</th>
                                    <th>Institute Contact</th>
                                    <th>Institute Ptcl</th>
                                    <th>Institute Lock</th>
                                    <th>Give Access</th>
                                    <th></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($registered_institutes as $registered_institute)
                                <tr>
                                    <td>
                                        <label class="form-check-label">#{{ $registered_institute->id }}</label>
                                    </td>
                                    <td>{{ $registered_institute->institute_name }}</td>
                                    <td>{{ $registered_institute->institute_city }}</td>
                                    <td>{{ $registered_institute->institute_email }}</td>
                                    <td>{{ $registered_institute->institute_contact }}</td>
                                    <td>{{ $registered_institute->institute_ptcl }}</td>
                                    <td>
                                        <input type="hidden" name="registered_institute_id[]" class="registered_institute_id" value="{{ $registered_institute->id }}">
                                        <div class="checkbox-apple">
                                            <input type="checkbox" class="yep lock_institute" data-registered-institute-id="{{ $registered_institute->id }}" id="lock_institute_{{ $registered_institute->id }}" @if($registered_institute->lock_status == "1") checked @endif>
                                            <label for="lock_institute_{{ $registered_institute->id }}"></label>
                                        </div>
                                    </td>
                                    <td>
                                        <button type="submit" class="fw-btn-fill btn-gradient-yellow emailButton"
                                                data-registered-institute-id="{{ $registered_institute->id }}"
                                                data-institute-email="{{ $registered_institute->institute_email }}"
                                                data-institute-username="{{ $registered_institute->Institute_username }}"
                                                data-institute-password="{{ $registered_institute->institute_password }}">
                                            Email
                                        </button>
                                    </td>
                                    <td>
                                        <div class="dropdown">
                                            <a href="#" class="dropdown-toggle" data-toggle="dropdown"
                                                aria-expanded="false">
                                                <span class="flaticon-more-button-of-three-dots"></span>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right">
                                                <a class="dropdown-item" href="{{ route('view-institute',['view' => $registered_institute->id ]) }}"><i
                                                    class="fas fa-redo-alt text-orange-peel"></i>View</a>
                                                    
                                                <a class="dropdown-item" href="{{ route('edit-institute',['edit' => $registered_institute->id ]) }}"><i
                                                    class="fas fa-cogs text-dark-pastel-green"></i>Edit</a>
                                                    {{-- {{ route('delete-institute',['delete' => $registered_institute->id ]) }} --}}
                                                    {{-- <a class="dropdown-item" href="#"><i
                                                    class="fas fa-times text-orange-red"></i>Delete</a> --}}
                                            </div> 
                                        </div>
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
@include('main_super_admin.dashboard.include.footer')

<script>
$(document).ready(function() {
    $('.emailButton').click(function(event) {
        event.preventDefault(); // Prevent the default form submission
        var registered_institute_id = $(this).data('registered-institute-id');
        var institute_email = $(this).data('institute-email');
        var institute_username = $(this).data('institute-username');
        var institute_password = $(this).data('institute-password');

        $.ajax({
            url: '{{ route('send-email-institute') }}',
            method: 'POST',
            data: {
                _token: '{{ csrf_token() }}',
                registered_institute_id: registered_institute_id,
                institute_email: institute_email,
                institute_username: institute_username,
                institute_password: institute_password
            },
            success: function(response) {
                if (response.success) {
                    $("#mail_send").html(response.message).show();
                } else {
                    alert(response.message);
                }
            },
            error: function(xhr, status, error) {
                alert('An error occurred while sending the email. Please try again later.');
            }
        });
    });
});



</script>

<script>
    $(document).ready(function() {
      $('.lock_institute').on('click', function() {
        var isChecked = $(this).is(':checked') ? 1 : 0; // Convert true/false to 1/0
        var registeredInstituteId = $(this).data('registered-institute-id');
        
        // Prepare the data to send in the AJAX request
        var data = {
          isChecked: isChecked,
          registered_institute_id: registeredInstituteId,
          _token: '{{ csrf_token() }}'
        };
  
        // Send the AJAX request
        $.ajax({
          url: 'lock-institute',
          method: 'GET',
          data: data,
          success: function(response) {
            // Assuming the server returns a JSON object with a 'message' property
            var message = response.message;
            
            // Update the HTML content of the element with the ID "lock_message"
            $("#lock_message").html(message).show();
            },
          error: function(xhr, status, error) {
            console.error(error);
          }
        });
      });
    });
  </script>
  