    
     <!-- Required vendors -->
     <script src="/new_template/vendor/global/global.min.js"></script>
     <script src="/new_template/vendor/bootstrap-select/dist/js/bootstrap-select.min.js"></script>
     <script src="/new_template/js/custom.min.js"></script>
        
     <!-- Datatable -->
    <script src="/new_template/vendor/datatables/js/jquery.dataTables.min.js"></script>
    <script src="/new_template/js/plugins-init/datatables.init.js"></script>
     <!-- Chart Morris plugin files -->
     <script src="/new_template/vendor/raphael/raphael.min.js"></script>
     <script src="/new_template/vendor/morris/morris.min.js"></script>
         
     
     <!-- Chart piety plugin files -->
     <script src="/new_template/vendor/peity/jquery.peity.min.js"></script>
     
         <!-- Demo scripts -->
     <script src="/new_template/js/dashboard/dashboard-2.js"></script>
     
     <!-- Svganimation scripts -->
     <script src="/new_template/vendor/svganimation/vivus.min.js"></script>
     <script src="/new_template/vendor/svganimation/svg.animation.js"></script>
     <script src="/new_template/js/styleSwitcher.js"></script>
 
         
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

