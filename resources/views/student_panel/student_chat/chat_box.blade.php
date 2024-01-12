@include('student_panel.include.header')

<div id="preloader"></div>
<div id="wrapper" class="wrapper bg-ash">
    @include('student_panel.include.navbar')

    <div class="dashboard-page-one">
        <div class="dashboard-content-one">

            <div class="breadcrumbs-area">
                <h3 class="text-center"> "{{$pagename}}" </h3>
                <!-- Current Date -->
               
                    <form id="myForm">
                    @csrf
                <div class="col-xl-4 col-lg-6 col-12 form-group">
                            <input type="hidden" name="current_time" id="current_time" class="form-control" readonly>
                        </div>

                        <!-- <div class="col-xl-4 col-lg-6 col-12 form-group">
                                <label>Teacher*</label>
                                <select class="form-control" name="teacher[Saturday]">
                                    <option>Select Teacher</option>
                                    @foreach($teacher as $t)
                                    <option value="{{ $t->first_name }}">{{ $t->first_name}}</option>
                                    @endforeach
                                </select>
                            </div> -->
                            <div class="container" >
                                <div class="row">
                                    <div class="col-md-12" style="
                                        display: flex;
                                        justify-content: center;
                                        align-items: center;
                                        gap:10px;
                                        margin: 0 auto;
                                    " >
                                    <div class="col-xl-4 col-lg-6 col-12 form-group form-group d-flex justify-content-center">
                                <label class="mt-3 px-4">Teacher* </label>
                                <select class="form-control" name="teacher" required>
                                    <option>Select Teacher</option>
                                    @foreach($teacher as $t)
                                    <option value="{{ $t->first_name }}" id="teacher">{{ $t->first_name}}</option>
                                    @endforeach
                                </select>
                                <span class="error-message"></span>
                            </div>
                                    </div>
                                </div>
                            </div>
                         

                        <!-- Current Time -->   
                        <div class="col-xl-4 col-lg-6 col-12 form-group">
                            <input type="hidden" name="current_date" id="current_date" class="form-control" readonly>
                        </div>

                        <div class="col-xl-4 col-lg-6 col-12 form-group">
                            <input type="hidden" name="student_class"  class="form-control" value=" {{ @session('student_class') }}" readonly>
                        </div> 

                        <div class="col-xl-4 col-lg-6 col-12 form-group">
                            <input type="hidden" name="student_section" value="{{ @session('student_section') }}" class="form-control" readonly>
                        </div> 

                        
                        <div class="col-xl-4 col-lg-6 col-12 form-group">
                            <input type="hidden" name="student_gr" value="{{ @session('student_gr') }}" class="form-control" readonly>
                        </div>

            </div>
            
            <div class="container card height-auto">
                <div class="card-body">
                    {{-- chat box --}}
                    <div id="frame">
                        <div class="content" style="padding-bottom: 30px;"> 
                            <div class="contact-profile">
                                <img src="http://emilcarlsson.se/assets/harveyspecter.png" alt="" />
                                <p>{{ @session('student_first_name') }}</p>
                            </div>

                             
                          
                            <div class="messages">
                            
                                <ul>
                                @foreach($get_all_sent_messages as $get_all_sent_messages)
                                   
                                    <li class="sent">
                                        <img src="http://emilcarlsson.se/assets/mikeross.png" alt="" />
                                        <p id="fetch-messages">{{$get_all_sent_messages->message}} <br><small>sent to : {{$get_all_sent_messages->teacher_name}}</small></p>
                                      
                                    </li>
                                   
                                    
                                    @endforeach
                                    </ul>
                                    <!-- <li class="replies">
                                        <img src="http://emilcarlsson.se/assets/harveyspecter.png" alt="" />
                                        <p>When you're backed against the wall, break the god damn thing down.</p>
                                    </li> -->
                                    <!-- <li class="replies">
                                        <img src="http://emilcarlsson.se/assets/harveyspecter.png" alt="" />
                                        <p>Excuses don't win championships.</p>
                                    </li> -->
                                    <!-- <li class="sent">
                                        <img src="http://emilcarlsson.se/assets/mikeross.png" alt="" />
                                        <p>Oh yeah, did Michael Jordan tell you that?</p>
                                    </li> -->
                                    <!-- <li class="replies">
                                        <img src="http://emilcarlsson.se/assets/harveyspecter.png" alt="" />
                                        <p>No, I told him that.</p>
                                    </li> -->
                                    <!-- <li class="replies">
                                        <img src="http://emilcarlsson.se/assets/harveyspecter.png" alt="" />
                                        <p id="fetch-messages">hello   .....</p>
                                    </li> -->
                                    <!-- <li class="sent">
                                        <img src="http://emilcarlsson.se/assets/mikeross.png" alt="" />
                                        <p>What are you talking about? You do what they say or they shoot you.</p>
                                    </li> -->
                                    <!-- <li class="replies">
                                        <img src="http://emilcarlsson.se/assets/harveyspecter.png" alt="" />
                                        <p>Wrong. You take the gun, or you pull out a bigger one. Or, you call their bluff. Or, you do any one of a hundred and forty six other things.</p>
                                    </li> -->
                                </ul>
                            </div>
                            <div class="message-input">
                                <div class="wrap pt-4"
                                style="display: flex; justify-content: center;align-items: center; gap: 10px; padding:10px 0px"
                                >
                                    
                                    <!-- <span id="error-message"></span> -->
                                    <input type="text" name="message" onkeypress="myFun(event)" id="messaged" style="border-radius:20px; width: 90%;padding: 20px 10px !important;" class="form-control input-lg py-4" placeholder="Enter New Message...">
                                    <!-- <i class="fa fa-paperclip attachment" aria-hidden="true" id="uploadButton"></i> -->
                                    <!-- <button class="submit" type="submit" id="btn_send"><i class="fa fa-paper-plane" aria-hidden="true"></i>Send </button> -->

                                    <button type="submit" style="border-radius:20px;font-size:15px;display: flex;justify-content: center;align-items: center; padding:20px 50px !important" id="btn_send" class="form-control btn-danger">Send</button>
                                    <!-- <input type="file" id="fileInput" class="hidden"> -->
                                </div>  
                                 
                            </div>
                           
                        </div>
                        <!-- </form> -->
                    </div>
                </div> 
                
            </div>



        </div>
    </div>
</div>
</form> 


<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
{{-- chat box script --}}
<script>
    $(".messages").animate({
        scrollTop: $(document).height()
    }, "fast");

    $("#profile-img").click(function() {
        $("#status-options").toggleClass("active");
    });

    $(".expand-button").click(function() {
        $("#profile").toggleClass("expanded");
        $("#contacts").toggleClass("expanded");
    });

    $("#status-options ul li").click(function() {
        $("#profile-img").removeClass();
        $("#status-online").removeClass("active");
        $("#status-away").removeClass("active");
        $("#status-busy").removeClass("active");
        $("#status-offline").removeClass("active");
        $(this).addClass("active");

        if ($("#status-online").hasClass("active")) {
            $("#profile-img").addClass("online");
        } else if ($("#status-away").hasClass("active")) {
            $("#profile-img").addClass("away");
        } else if ($("#status-busy").hasClass("active")) {
            $("#profile-img").addClass("busy");
        } else if ($("#status-offline").hasClass("active")) {
            $("#profile-img").addClass("offline");
        } else {
            $("#profile-img").removeClass();
        };

        $("#status-options").removeClass("active");
    });

    function newMessage() {
        message = $(".message-input input").val();
        if ($.trim(message) == '') {
            return false;
        }
        $('<li class="sent"><img src="http://emilcarlsson.se/assets/mikeross.png" alt="" /><p>' + message + '</p></li>').appendTo($('.messages ul'));
        $('.message-input input').val(null);
        $('.contact.active .preview').html('<span>You: </span>' + message);
        $(".messages").animate({
            scrollTop: $(document).height()
        }, "fast");
    };

    $('.submit').click(function() {
        newMessage();
    });

    $(window).on('keydown', function(e) {
        if (e.which == 13) {
            newMessage();
            return false;
        }
    });
    //# sourceURL=pen.js

    document.getElementById('uploadButton').addEventListener('click', function() {
        document.getElementById('fileInput').click();
    });

    document.getElementById('fileInput').addEventListener('change', function() {
        var selectedFile = document.getElementById('fileInput').files[0];
        console.log('File selected:', selectedFile);
        // You can perform further actions with the selected file here.
    });
</script>


<script>
$(document).ready(function() {
  var messageInput = $('#messaged');
  var teacherSelect = $('select[name="teacher"]');

  messageInput.prop('disabled', true); // Disable the message input initially

  teacherSelect.on('change', function() {
    if (teacherSelect.val() === 'Select Teacher') {
      messageInput.prop('disabled', true);
    } else {
      messageInput.prop('disabled', false);
    }  
  });

  // Add event listener for enter key press on message input
  messageInput.on('keydown', function(event) {
    if (event.keyCode === 13) {
      event.preventDefault(); // Prevent form submission
      $('#myForm').submit(); // Trigger form submission on enter key press
    }
  });

  $('#myForm').submit(function(e) {
        e.preventDefault();
        var formData = $(this).serialize();
        var message = $('#messaged').val();
        var selectedTeacher = $('select[name="teacher"]').val();
        var studentClass = $('input[name="student_class"]').val();

        $.ajax({
            url: "{{ route('StudentChat-send') }}",
            type: "POST",
            data: formData,
            success: function(response) {
                console.log(response); 
                // Create the new message HTML
                var newMessageHtml =
                    '<li class="sent">' +
                    '<img src="http://emilcarlsson.se/assets/mikeross.png" alt="" />' +
                    '<p>' + message + ' <br><small>sent to : ' + selectedTeacher + '</small></p>' +
                    '</li>';

                // Append the new message to the messages list
                $('.messages ul').append(newMessageHtml);

                // Clear the message input field
                $('#messaged').val('');
            },
            error: function(xhr, status, error) {
                console.error(error);  
            }
        });
    });  

});  

</script> 

@include('student_panel.include.footer')

