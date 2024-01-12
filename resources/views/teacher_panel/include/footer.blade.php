
    <!-- jquery-->
    <script src="/main_assets/js/jquery-3.3.1.min.js"></script>
    <!-- Plugins js -->
    <script src="/main_assets/js/plugins.js"></script>
    <!-- Popper js -->
    <script src="/main_assets/js/popper.min.js"></script>
    <!-- Bootstrap js -->
    <script src="/main_assets/js/bootstrap.min.js"></script>
    <!-- Counterup Js -->
    <script src="/main_assets/js/jquery.counterup.min.js"></script>
    <!-- Moment Js -->
    <script src="/main_assets/js/moment.min.js"></script>
    <!-- Waypoints Js -->
    <script src="/main_assets/js/jquery.waypoints.min.js"></script>
    <!-- Scroll Up Js -->
    <script src="/main_assets/js/jquery.scrollUp.min.js"></script>
    <!-- Full Calender Js -->
    <script src="/main_assets/js/fullcalendar.min.js"></script>
    <!-- Chart Js -->
    <script src="/main_assets/js/Chart.min.js"></script>

    <!--jquery.smoothscroll  -->
    <script src="/main_assets/js/jquery.smoothscroll.min.html"></script>
    <!-- query.dataTables -->
    <script src="/main_assets/js/jquery.dataTables.min.js"></script>
    <!-- /google-marker-map -->
    <script src="/main_assets/js/google-marker-map.js"></script>
    <!-- select2.min -->
    <script src="/main_assets/js/select2.min.js"></script>
    <!--datepicker.min  -->
    <script src="/main_assets/js/datepicker.min.js"></script>

    <!-- Custom Js -->
    <script src="/main_assets/js/main.js"></script>



    <script>
      $('#select_class').on('change', function() {
          var class_name = $(this).val();
  
          $.ajax({
              url: '/teacher-cls-wise-sectn',
              method: 'get',
              data: {
                  class_name: class_name,
                  _token: '{{csrf_token()}}'
              },
  
              success: function(response) {
                  $("#section_name_dropdown").empty();
                  $.each(response, function(index, sectionName) {
                      if ($("#section_name_dropdown option[value='" + sectionName + "']").length === 0) {
                          $("#section_name_dropdown").append('<option value="' + sectionName + '">' + sectionName + '</option>');
                      }
                  });
              },
  
              error: function(xhr, status) {
                  console.log("Error: ", xhr, status);
              }
          });
      });
  </script>
  
  
  <script>
      $('#section_name_dropdown').on('change', function() {
          var section_name = $(this).val();
          var class_name = $('#select_class').val(); 
  
          $.ajax({
              url: '/teacher-sectn-wise-subjct',
              method: 'GET',
              data: {
                  section_name: section_name,
                  class_name: class_name,
                  _token: '{{csrf_token()}}'
              },
              success: function(response) {
                  $('#subject_name_dropdown').empty(); 
                  $.each(response, function(index, subject) {
                      $('#subject_name_dropdown').append($('<option></option>').val(subject.subject).text(subject.subject));
                  });
  
              },
              error: function(xhr, status) {
                  console.log("Error: ", xhr, status);
              }
          });
      });
  </script>
 
<script>
    $('#section_name_dropdown').on('change', function() {
        var class_name = $('#select_class').val(); 
        var section_name = $(this).val();
        $.ajax({
            url: '/teacher-sectn-wise-student',
            method: 'GET',
            data: {
                section_name: section_name,
                class_name: class_name, 
                _token: '{{csrf_token()}}'
            },
            success: function(response) {
                $('#student_name_dropdown').empty(); 
                $.each(response, function(index, students) {
                    $('#student_name_dropdown').append($('<option></option>').val(students.first_name).text(students.first_name));

                    // $('#gr_number').append($('<option></option>').val(students.gr).text(students.gr));
                });

                 // Update GR number field with the selected student's GR number
            $('#student_name_dropdown').on('change', function() {
                var selectedStudentName = $(this).val();
                var selectedStudent = response.find(function(student) {
                    return student.first_name === selectedStudentName;
                });

                if (selectedStudent) {
                    $('#gr_number').val(selectedStudent.gr);
                } else {
                    $('#gr_number').val('');
                }
            });


            },
            error: function(xhr, status) {
                console.log("Error: ", xhr, status);
            }
        });
    });
</script>



<!-- script function for date and time  -->

<script>
    // Get the current date and time
    var currentDateTime = new Date();

    // Format the time
    var hours = currentDateTime.getHours();
    var minutes = currentDateTime.getMinutes();
    var ampm = hours >= 12 ? 'PM' : 'AM';
    hours = hours % 12;
    hours = hours ? hours : 12; // Handle midnight as 12
    var formattedTime = hours + ':' + (minutes < 10 ? '0' + minutes : minutes) + ' ' + ampm;

    // Format the date
    var year = currentDateTime.getFullYear();
    var month = ('0' + (currentDateTime.getMonth() + 1)).slice(-2); // Month is zero-based
    var day = ('0' + currentDateTime.getDate()).slice(-2);
    var formattedDate = year + '-' + month + '-' + day;

    // Set the input field values
    document.getElementById('current_time').value = formattedTime;
    document.getElementById('current_date').value = formattedDate;
</script>




<script>
    // Function to update the time
    function updateTime() {
        var currentDateTime = new Date();
        var hours = currentDateTime.getHours();
        var minutes = currentDateTime.getMinutes();
        var ampm = hours >= 12 ? 'PM' : 'AM';
        hours = hours % 12;
        hours = hours ? hours : 12;
        var formattedTime = hours + ':' + (minutes < 10 ? '0' + minutes : minutes) + ' ' + ampm;
        document.getElementById('current_time').value = formattedTime;
    }

    // Function to update the time every second
    function startUpdatingTime() {
        updateTime();
        setInterval(updateTime, 1000); // Update every second
    }

    // Call startUpdatingTime when the page finishes loading
    window.addEventListener('load', startUpdatingTime);
</script>





<script>
    $('#select_class').on('change', function() {
        var class_name = $(this).val();

        $.ajax({
            url: '/class-subjects',
            method: 'get',
            data: {
                class_name: class_name,
                _token: '{{csrf_token()}}'
            },

            success: function(response) {
                console.log(response); // Log the response data to the console

                $("#subject_name_dropdown").empty();
                $.each(response, function(index, subject) {
                    if ($("#subject_name_dropdown option[value='" + subject + "']").length === 0) {
                        $("#subject_name_dropdown").append('<option value="' + subject + '">' + subject + '</option>');
                    }
                });
            },

            error: function(xhr, status) {
                console.log("Error: ", xhr, status);
            }
        });  
    });
</script>





<script>
    $('#select_class').on('change', function() {
        var class_name = $(this).val();

        $.ajax({
            url: '/class-subjects',
            method: 'get',
            data: {
                class_name: class_name,
                _token: '{{csrf_token()}}'
            },

            success: function(response) {
                console.log(response); // Log the response data to the console

                $("#subject_name_dropdown").empty();
                $.each(response, function(index, subject) {
                    if ($("#subject_name_dropdown option[value='" + subject + "']").length === 0) {
                        $("#subject_name_dropdown").append('<option value="' + subject + '">' + subject + '</option>');
                    }
                });
            },

            error: function(xhr, status) {
                console.log("Error: ", xhr, status);
            }
        });  
    });
</script>
  </body>
</html>
