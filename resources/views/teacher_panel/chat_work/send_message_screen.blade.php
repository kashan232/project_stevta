@include('teacher_panel.include.header')
<!-- Preloader Start Here -->
<div id="preloader"></div>
<!-- Preloader End Here -->
<div id="wrapper" class="wrapper bg-ash">
    @include('teacher_panel.include.navbar')
    <div class="dashboard-page-one">
        <div class="dashboard-content-one">
            <div class="breadcrumbs-area">
            </div>
            <div class="container">
                <form id="myForm">
                    @csrf
                    <div class="row">
                        <!-- <div class="col-xl-4 col-lg-4 col-12 form-group">
                            <select name="class_name" class="form-control classid" id="select_class">
                                <option>Select Class</option>
                                @foreach ($classes as $class)
                                    <option value="{{ $class->class_name }}">{{ $class->class_name }}</option>
                                @endforeach
                            </select>
                            <span class="error-message"></span>
                        </div> -->

                        <div class="col-xl-6 col-lg-6 col-12 form-group">
                                <select name="class_name" class="form-control classid" id="select_class">
                                    <option>Select Course</option>
                                    @foreach($get_classes_subjects as $class_name)
                                    <option value="{{ $class_name }}">{{ $class_name }}</option>
                                    @endforeach
                                </select>
                            </div>


                        <div class="col-xl-4 col-lg-4 col-12 form-group">
                            <select name="section_name" id="section_name_dropdown" class="form-control classid">
                                <option value="">Section</option>
                            </select>
                        </div> 


                        <div class="col-xl-4 col-lg-6 col-12 form-group">
                            <select name="student_name" id="student_name_dropdown" class="form-control classid">
                                <option value="">Select a Student</option>
                            </select>
                        </div>
                        <!-- Current Date -->
                        <div class="col-xl-4 col-lg-6 col-12 form-group">
                            <input type="text" name="current_time" id="current_time" class="form-control" readonly>
                        </div>
                        <!-- Current Time -->
                        <div class="col-xl-4 col-lg-6 col-12 form-group">
                            <input type="text" name="current_date" id="current_date" class="form-control" readonly>
                        </div>
                        <div class="col-xl-4 col-lg-6 col-12 form-group">
                            <input type="text" name="gr_number" id="gr_number" class="form-control"
                                placeholder="GR Number" readonly>
                        </div>
                    </div>
                    <!-- </form> -->
            </div>
            <div class="container ">
                <div class="row justify-content-center">
                    <div style="position: fixed;bottom: 0;top: 33%; width: 100%;">
                        <div class="container div_messages bg-light"
                            style="height: 89%; overflow-y: scroll;border-radius: 15px 15px 0px 0px;">
                            <div class="row p- mt-2 mb-2" id="messages_box">
                                <!-- Messages here -->
                                <div id="messages-container">
                                    <table>
                                        @foreach ($get_all_messages as $message)
                                            <tr>
                                                <td>{{ $message->message }}
                                                    <pre style="color: red;">sent to : {{ $message->student_name }}</pre>
                                                </td>
                                            </tr>
                                        @endforeach
                                    </table>
                                </div>
                                <p id="fetch-messages"></p>
                            </div>
                        </div>

                        <div class="container bg-dark pt-2 pb-2" style="border-radius: 0px 0px 15px 15px ;">
                            <div class="row">
                                <div class="col-lg-10 col-8">
                                    <input type="text" name="message" onkeypress="myFun(event)" id="message"
                                        style="border-radius:17px;font-size:15px;" class="form-control input-lg pt-4 pb-4"
                                        placeholder="Enter New Message...">
                                    <pre id="error">
                                    @error('message')
                                        <span class="error-message">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="col-lg-2 col-4">
                                    <button type="submit" style="border-radius:17px;font-size:15px;" id="btn_send" class="form-control btn-danger">Send</button>
                                </div>
                            </div>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
            <br>
        </div>
    </div>
    <!-- Page Area End Here -->
</div>

<!-- Include other HTML and Blade code -->

<!-- <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>  -->
@include('teacher_panel.include.footer')

<script>
    $(document).ready(function() {
        $('#myForm').submit(function(e) {
            e.preventDefault();

            var formData = $(this).serialize();
            var message = $('#message').val();

            $.ajax({
                url: "{{ route('send-chat') }}",
                type: "POST",
                data: formData,
                success: function(response) {
                    console.log(response);
                    // $('#fetch-messages').append('<p>' + message + '</p>');
                    $('#message').val('');

                    $('#messages-container table').append('<tr><td>' + message + '<pre style="color: red;">sent to : ' + response.student_name + '</pre></td></tr>');
                },
                error: function(xhr, status, error) {
                    console.error(error);
                }
            });
        });     
    });
</script>


